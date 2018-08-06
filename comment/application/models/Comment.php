<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Application_Model_Comment extends Trlib_Model
{
       
    protected $_id=null;
    protected $_parentId=null;
    protected $_comment=null;
    protected $_name=null;
    protected $_created=null;
    protected $_parentLevel=null;

        
    public function __construct(array $options = null)
    {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }  
    
    
        
    public function setId($id){        	$this->_id = (int) $id; return $this;}
    public function getId(){        		return $this->_id;}  
    
    
    public function setParentId($parentId){    	$this->_parentId = (int) $parentId; return $this;}
    public function getParentId(){              return $this->_parentId;} 
    
    public function setComment($comment){    	$this->_comment = $comment; return $this;}
    public function getComment(){              return $this->_comment;} 
    
    public function setName($name){    	$this->_name = $name; return $this;}
    public function getName(){              return $this->_name;}
    
    public function setCreated($created) {       $this->_created = $created; return $this;}
    public function getCreated(){        		return $this->_created;    } 
    
}