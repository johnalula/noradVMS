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
	  $limit = 10;
	  
	  $this->categorys = CategoryTable::processSelection ( $offset, $limit );
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
	  $offset = 0;
	  $limit = 10;
	  
	  $this->categorys = CategoryTable::processSelection ( $offset, $limit );
	  $this->categorys = CategoryTable::processSelection ( $offset, $limit );
		
		return $this->renderPartial('list', array('categorys' => $this->categorys));
  }
  
  public function executeCreateCategory(sfWebRequest $request)
  {
	  $offset = 0;
	  $limit = 10;
	  
	  $name = $request->getParameter('name');
	  $description = $request->getParameter('description');
	  
		$flags = CategoryTable::processCreate ( $name, $description );
		
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
