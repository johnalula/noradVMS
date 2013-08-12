<?php

/**
 * dashboard actions.
 *
 * @package    noradVMS
 * @subpackage dashboard
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class dashboardActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
		$offset = 0;
		$limit = 10;
		$this->activitys = SystemLogFileTable::processSelection($offset, $limit);
		$this->totalData = SystemLogFileTable::processAllLogFiles();
  }
  
  public function executePagination(sfWebRequest $request)
  {
		$offset = $request->getParameter('offset');
		$limit = $request->getParameter('limit');

		if(!$offset )
			$offset = 0;
			
		if(!$limit )
			$limit = 10;
			 
		$this->activitys = SystemLogFileTable::processSelection($offset, $limit);

		return $this->renderPartial('activityList', array('activitys' => $this->activitys));
  }
  
}
