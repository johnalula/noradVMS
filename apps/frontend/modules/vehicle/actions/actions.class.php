<?php

/**
 * vehicle actions.
 *
 * @package    noradVMS
 * @subpackage vehicle
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class vehicleActions extends sfActions
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
    $keyword = null;
    
    $this->log_files = UserGroupTable::processSelection($keyword, $offset, $limit);
  }
}
