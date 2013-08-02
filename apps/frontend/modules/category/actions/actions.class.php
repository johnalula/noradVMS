<?php

/**
 * category actions.
 *
 * @package    noradVMS
 * @subpackage category
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoryActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
	  $offset = 0;
	  $limit = 2;
	  $group_id = null;
	  $class_id = null;
	  $keyword = null;
	  
	  $this->groups = CategoryTable::processGroupSelection();
	  $this->classs = CategoryTable::processClassSelection();
	  
	  $this->totalData = CategoryTable::processCount ( );
	  $this->categorys = CategoryTable::processSelection ( $offset, $limit, $keyword, $group_id, $class_id );
  }
  
  public function executeSelection(sfWebRequest $request)
  {
	  $offset = 0;
	  $limit = 10;
	  
	  $this->categorys = CategoryTable::processSelection ( $offset, $limit );
	  $this->categorys = CategoryTable::processSelection ( $offset, $limit );
		
		return $this->renderPartial('list', array('categorys' => $this->categorys));
  }
  
  public function executePagination(sfWebRequest $request)
  {
		$offset = $request->getParameter('offset');
		$limit = $request->getParameter('limit');
		$class_id = intval($request->getParameter('class_id'));
		$group_id = intval($request->getParameter('group_id'));
		$keyword = $request->getParameter('keyword');
		$keyword = '%'.$keyword.'%';

		if(!$offset )
			$offset = 0;
			
		if(!$limit )
			$limit = 10;
			
		if(!$class_id )
			$class_id = null;
			
		if(!$group_id )
			$group_id = null;
			
		if(!$keyword )
			$keyword = null;
		 
		
		$this->categorys = CategoryTable::processSelection ( $offset, $limit, $keyword, $group_id, $class_id );

		return $this->renderPartial('list', array('categorys' => $this->categorys));
  }
  
  public function executeCreateCategory(sfWebRequest $request)
  {
	  $offset = 0;
	  $limit = 10;
	  
	  $name = $request->getParameter('name');
	  $class_id = $request->getParameter('class_id');
	  $group_id = $request->getParameter('group_id');
	  $description = $request->getParameter('description');
	  
		$flags = CategoryTable::processCreate ($name, $group_id, $class_id, $description );
		
		//if($flag)
		return $flags;
  }
  
  public function executeUpdateCategory (sfWebRequest $request)
  {
	  $_id = $request->getParameter('category_id');
	   $name = $request->getParameter('name');
	  $description = $request->getParameter('description');
	  
	  $flag = CategoryTable::processUpdate ( $_id, $name, $description );
  }
  
  public function executeDeleteCategory (sfWebRequest $request)
  {
	  $_id = $request->getParameter('category_id');
	  
	  $flags = CategoryTable::processDelete ( $_id );
	  
	  return $flags;
  }
}
