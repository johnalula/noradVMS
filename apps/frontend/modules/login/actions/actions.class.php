<?php

/**
 * login actions.
 *
 * @package    noradVMS
 * @subpackage login
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
	public function precall()
	{
		$this->setLayout('login'); 
	}
	/**
	* Executes index action
	*
	* @param sfRequest $request A request object
	*/
	public function executeIndex(sfWebRequest $request)
	{
		$this->setLayout('login'); 
		//$this->form= new LoginForm();
	}
	
	public function executeLogin(sfWebRequest $request)
	{
		$this->setLayout('login');
		$this->getUser()->setAuthenticated(false);
		$this->getUser()->clearCredentials();
		$this->setLayout('login');
	}

	public function executeSignin(sfWebRequest $request)
	{
		//$this->setLayout('login'); 
		$useraccount = $request->getParameter('user_account');
		$userpassword = $request->getParameter('password'); 

		$user = UserTable::processLogin ( $useraccount, $userpassword );
		//$user = UserTable::processUserAccount ( $login_user, $useraccount, $userpassword );

		if($user)
		{	
			/*if (!$user->is_active ) 
			{
				$this->getUser()->setAuthenticated(false);
				$this->getUser()->setFlash('login_failure.activation', true);
				$this->forward('login', 'index');
			}

			if ($user->is_locked ) 
			{
				$this->getUser()->setAuthenticated(false);
				$this->getUser()->setFlash('login_failure.locked', true);
				$this->forward('login', 'index');
			}*/
			
			$this->getUser()->signIn($user);
			$action = SystemLogFileTable::$LOGIN;
			$date = date('Y/m/d H:i:s', time());
			$ip =  gethostbyname($_SERVER['HTTP_HOST']) ; 
			$time = date('h:i:s A');
			$module  = 'Dashboard'; 
			$user_id = $user->id;

			$flag = SystemLogFileTable::processCreate($user_id, $module, $action, $time, $date, null,  null, null, null, $ip );
			//if ($this->getUser()->hasCredential('Admin'))
			$this->redirect('dashboard/index');
			 
			//else 
			//$this->redirect('dashboard/index');
		}
		else 
		{
			$this->getUser()->setAuthenticated(false);
			$this->getUser()->setFlash('login_failure', true);
			 
			$this->forward('login', 'index');
		}	
	}	  

	public function executeSignout(sfWebRequest $request)
	{
			$action = SystemLogFileTable::$LOGOUT;
			$date = date('Y/m/d H:i:s', time());
			$ip =  gethostbyname($_SERVER['HTTP_HOST']) ; 
			$time = date('h:i:s A');
			$module  = 'Dashboard'; 
			$user_id = $this->getUser()->getAttribute('uid');
			
		$this->setLayout('login');
		$this->getUser()->setAuthenticated(false);
		$this->getUser()->clearCredentials();
		$this->getResponse()->setCookie('autologin', 0, 0);
		$this->getUser()->setFlash('notice', 'Have a nice day!');
		$this->getUser()->getAttributeHolder()->remove('uid');
		$this->getUser()->getAttributeHolder()->remove('username');
		$this->getUser()->getAttributeHolder()->remove('displayname');
		$this->getUser()->getAttributeHolder()->remove('lastdate');
		$flag = SystemLogFileTable::processCreate($user_id, $module, $action, $time, $date, null,  null, null, null, $ip );
		$this->forward('login', 'index');

	}
  
}
