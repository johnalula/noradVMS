<?php

/**
 * payment actions.
 *
 * @package    noradVMS
 * @subpackage payment
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class paymentActions extends sfActions
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
		$payment_mode = null;
		
		$this->modes = PaymentSettingTable::processSelection ( $offset, $limit, $payment_mode );
	}
	
	public function executeView(sfWebRequest $request)
	{
		$_id = $request->getParameter('payment_mode_id');
		$token_id = $request->getParameter('token_id');
		$payment_mode = $request->getParameter('payment_mode');
		
		$this->modeObj = PaymentSettingTable::processObject ( $_id, $token_id );
		
	}
	
	public function executeCreateMode(sfWebRequest $request)
	{
		$cost = $request->getParameter('cost_value');
		$payment_mode = $request->getParameter('payment_mode_id');
		$currency_id = $request->getParameter('currency_id');
		$description = $request->getParameter('description');
		
			$module = $request->getParameter('module');	  
			$user_id = $this->getUser()->getAttribute('uid');
			
		$flag = PaymentSettingTable::processCreate ($cost, $currency_id, $payment_mode, $description, $module, $user_id) ;
		
		return $flag;
	}
	public function executeUpdateMode(sfWebRequest $request)
	{
		$_id = $request->getParameter('mode_id');
		$token_id = $request->getParameter('token_id');
		$cost = $request->getParameter('cost_value');
		$currency_id = $request->getParameter('currency_id');
		$payment_mode = $request->getParameter('payment_mode_id');
		$description = $request->getParameter('description');
		
		$flag = PaymentSettingTable::processUpdate ($_id, $token_id, $cost, $currency_id, $payment_mode, $description );
		  
		$flag = PaymentSettingTable::processCreate ($cost, $currency_id, $payment_mode, $description, $module, $user_id) ;
		 
		return $flag;
	}
	
	public function executeDeleteMode(sfWebRequest $request)
	{
			$_id = $request->getParameter('payment_mode_id'); 
			$token_id = $request->getParameter('token_id'); 
			
			$flag = PaymentSettingTable::processDelete ($_id, $token_id );
			
			$flag = PaymentSettingTable::processCreate ($cost, $currency_id, $payment_mode, $description, $module, $user_id) ;
		
		return $flag;
	}
	
	public function executePagination(sfWebRequest $request)
	{
		$ofset = $request->getParameter('offset');
		$limit = $request->getParameter('limit');
		$payment_mode = $request->getParameter('payment_mode');
		
		$this->modes = PaymentSettingTable::processSelection ( $offset, $limit, $payment_mode );
		
		return $this->renderPartial('list', array('modes' => $this->modes));		
	}
}
