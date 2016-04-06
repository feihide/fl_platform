<?php
namespace Platform\Dao;

use CL\Dao\BaseDao;
use Zend\Db\Sql\Sql;
class  Category extends BaseDao
{
	public function getListByParent($id,$offset,$limit){
	    return $this->api('GET', '/dict/list',array('parent_id'=>$id,'offset'=>$offset,'limit'=>$limit));
	}
	
	public function getCat($id){
	    return $this->api('GET', '/dict/detail',array('id'=>$id));
	}
	
	public function createCat($data){
	    return $this->api('POST','/dict/create',$data);
	}
	
	public function updateCat($data,$id){
	    return $this->api('POST','/dict/update',array_merge(array('id'=>$id),$data));
	}
	
	public function deleteCat($id){
	    return $this->api('POST','/dict/delete',array('id'=>$id));
	}
	
}
