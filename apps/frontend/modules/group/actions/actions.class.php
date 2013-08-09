<?php

/**
 * group actions.
 *
 * @package    noradVMS
 * @subpackage group
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class groupActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
	  $offset = 0;
	  $limit = 2;
	  $keyword = null;
	  
    $this->groups = UserGroupTable::processSelection($keyword, $offset, $limit) ;
    $this->totalData = UserGroupTable::processCount() ;
  }
  
  public function executeSelection(sfWebRequest $request)
  {
	  $offset = $request->getParameter('offset');
	  $limit = $request->getParameter('limit');
	  $keyword = $request->getParameter('keyword');
	  
    $groups = UserGroupTable::processSelection($keyword, $offset, $limit) ;
    
    return $this->renderPartial('list', array('groups' => $groups));
    
  }
  
  public function executePagination(sfWebRequest $request)
  {
	  $offset = $request->getParameter('offset');
	  $limit = $request->getParameter('limit');
	  $keyword = $request->getParameter('keyword');
	  
    $groups = UserGroupTable::processSelection($keyword, $offset, $limit) ;
    
    return $this->renderPartial('list', array('groups' => $groups));
    
  }
  
  public function executeDeleteGroup(sfWebRequest $request)
  {
		$group_id = $request->getParameter('group_id'); 
		$token_id = $request->getParameter('token_id'); 
	  
		$flag = UserGroupTable::processDelete($group_id, $token_id);
    
		return $flag;
    
  }
  public function executeView(sfWebRequest $request)
  {
	  $offset = 0;
	  $limit = 10;
	  $keyword = null;
	  
    $this->groups = UserGroupTable::processSelection($keyword, $offset, $limit) ;
  }
  
  public function executeCreateGroup(sfWebRequest $request)
  {
	  $name = $request->getParameter('name');
	  $is_active = $request->getParameter('is_active');
	  $is_blocked = $request->getParameter('is_blocked');
	  $group_type_id = $request->getParameter('group_type_id');
	  $language_id = $request->getParameter('language_id');
	  $theme_id = $request->getParameter('theme_id');
	  $read_data = explode(',', $request->getParameter('read_arr_data'));
	  $read_length = $request->getParameter('read_arr_length');
	  $create_data = explode(',', $request->getParameter('create_arr_data'));
	  $create_length = $request->getParameter('create_arr_length');
	  $update_data = explode(',', $request->getParameter('update_arr_data'));
	  $update_length = $request->getParameter('update_arr_length');
	  $delete_data = explode(',', $request->getParameter('delete_arr_data'));
	  $delete_length = $request->getParameter('delete_arr_length');
	  
    $flag = UserGroupTable::processCreate($name, $group_type_id,  $is_active, $is_blocked, $description, $language_id, $theme_id, $read_data, $read_length, $create_data, $create_length, $update_data, $update_length, $delete_data, $delete_length) ;
    
    return $flag;
  }

  
}


















