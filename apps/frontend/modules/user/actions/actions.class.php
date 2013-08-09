<?php

/**
 * user actions.
 *
 * @package    noradVMS
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		
		$username = null;
		$group_id = null;
		$status = null;
		$keyword = null;
		$offset = 0; 
		$limit = 10;
		$this->users = UserTable::processSelection($username, $group_id, $status, $keyword, $offset, $limit) ;
	}
	public function executeView(sfWebRequest $request)
	{
		
		$username = null;
		$group_id = null;
		$status = null;
		$keyword = null;
		$offset = 0; 
		$limit = 10;
		$this->users = UserTable::processSelection($username, $group_id, $status, $keyword, $offset, $limit) ;
	}
	
	public function executeCreatePermission(sfWebRequest $request)
	{
		$pers = $request->getParameter('arr_list');
		$len = $request->getParameter('arr_length');
		
		$arr = explode(',', $pers);
		$user_id = $this->getUser()->getAttribute('uid');
		for($i = 0; $i < $len; $i++)
		{
			$_per = new Permission();
			$_per->user_id = $user_id;
			$_per->module_id = $arr[$i];
			$_per->view_action = true;
			$_per->save();
		
		}
		return true;
		 
	}

}
