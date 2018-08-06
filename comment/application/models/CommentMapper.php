<?php

class Application_Model_CommentMapper
{
    
    protected $_dbTable;
	

    public function setDbTable($dbTable)
	{				
		if (is_string($dbTable)){
			$dbTable = new $dbTable();
		}
		if (!$dbTable instanceof Zend_Db_Table_Abstract){

			throw new Exception('Invalid table data gateway provided');			
		}		
		$this->_dbTable = new Application_Model_DbTable_Comment();		
		return  $this;
	}

        
    public function getDbTable()
    {        
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_Comment');        
        }
        return $this->_dbTable;
    }

    
    
      
    public function find($id, Application_Model_Comment $model) {

        $result = $this->getDbTable()->find($id);

    
        if (0 == count($result)) {
            return;
        }
     
        $row = $result->current();
 
        $model->setId($row->id)
              ->setParentId($row->parentId)
              ->setComment($row->comment)
              ->setName($row->name)
              ->setCreated($row->created);
    }
    
    
    public function save(Application_Model_Comment $model)
    {
        if($model->getName() == null || $model->getComment()==null)
            return false;
    
        $data = array(
                'name'=>$model->getName(),
                'parentId'=>$model->getParentId(),
                'comment'=>$model->getComment(),
        );
 
        if (null === ($id = $model->getId())) {
            unset($data['id']);
            $model->setId($this->getDbTable()->insert($data ));
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }
        
        return true;
    }    
    
    
    
    public function findAll(){
        $db = $this->getDbTable();
        $select = $db->select()->order('created');
      
        $result = $this->getDbTable()->fetchAll($select);

        if (0 == count($result)) {  return;  }         
                 $models   = array();
                 foreach ($result as $row) {
                            $model = new Application_Model_Comment();
                            $model->setId($row->id)
                                   ->setParentId($row->parentId)
                                   ->setComment($row->comment)
                                   ->setName($row->name)
                                   ->setCreated($row->created);
                             $models[] = $model;
                         }

                         return $models;
                 }
                 
    
        public function findMainComments(){
        $db = $this->getDbTable();
        $select = $db->select()->where('parentId in (?)', [0,null])->order('created');
      
        $result = $this->getDbTable()->fetchAll($select);

        if (0 == count($result)) {  return;  }         
                 $models   = array();
                 foreach ($result as $row) {
                            $model = new Application_Model_Comment();
                            $model->setId($row->id)
                                   ->setParentId($row->parentId)
                                   ->setComment($row->comment)
                                   ->setName($row->name)
                                   ->setCreated($row->created);
                             $models[] = $model;
                         }

                         return $models;
                 }
                 
                     
                 
    public function findAllChildrens($parentId){
        $db = $this->getDbTable();
        $select = $db->select();
        $select = $select->where('parentId = ?', $parentId)->order('created');
            
        $result = $this->getDbTable()->fetchAll($select);

        if (0 == count($result)) {  return;  }         
                 $models   = array();
                 foreach ($result as $row) {
                            $model = new Application_Model_Comment();
                            $model->setId($row->id)
                                   ->setParentId($row->parentId)
                                   ->setComment($row->comment)
                                   ->setName($row->name)
                                   ->setCreated($row->created);
                             $models[] = $model;
                         }

                         return $models;
                 }
                 
                 
}

