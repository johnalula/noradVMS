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

}
