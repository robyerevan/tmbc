<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $commentMapper = new Application_Model_CommentMapper();
        $comment = new Application_Model_Comment();
        
        $comments = $commentMapper->findAll();
        
        /* Count Total number of parents pro-parents 
         * This function can be used to prevent nested replies after level 3
         * This founction could be a part of model or it could be helper instead of part of controller
         *           */
         function countParents(Application_Model_Comment $comment){
             $index = 0;
             while($comment->getParentId()!=0) {
                $commentMapper = new Application_Model_CommentMapper();

                $parentComment = new Application_Model_Comment();
                $commentMapper->find($comment->getParentId(),$parentComment);
                $index++;
                $comment = $parentComment;
            
             }
             
             return $index;
        }
        
        
        foreach($comments as $comment)
        {
            $commentArray[] = ['id'=>$comment->getId(), 
                               'parent' =>$comment->getParentId(), 
                               'name'=>$comment->getName(),
                               'comment'=>$comment->getComment(),
                               'parrentCount'=>(countParents($comment))
                                ];
        }
        
        $this->view->comments = $commentArray;
        
        
       
    }

    public function addAction()
    {
        // action body
        $name =  htmlentities(trim($this->getRequest()->getPost('name')));
        $text =  htmlentities(trim($this->getRequest()->getPost('comment')));
        
        $parentId = (int) trim($this->getRequest()->getPost('parentId'));
        
        
        $comment = new Application_Model_Comment();
        $comment->setComment($text);
        $comment->setName($name);
        $comment->setParentId($parentId);
        
        
        $commentMapper = new Application_Model_CommentMapper();
        $commentMapper->save($comment);
        
        
        $this->_helper->redirector('index');
    }

    public function ajaxAction()
    {
        // action body
        
        $name =  htmlentities(trim($this->getRequest()->getPost('name')));
        $text =  htmlentities(trim($this->getRequest()->getPost('comment')));
        
        $parentId = (int) trim($this->getRequest()->getPost('parentId'));
        
        
        $comment = new Application_Model_Comment();
        $comment->setComment($text);
        $comment->setName($name);
        $comment->setParentId($parentId);
        
        
        $commentMapper = new Application_Model_CommentMapper();
        if($commentMapper->save($comment))
            echo 'done';
        exit;
    }


}





