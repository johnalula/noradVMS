<?php

class myUser extends sfBasicSecurityUser
{
	
	public function signIn(User $user)
   {
		$this->setAuthenticated(true);

		$this->setAttribute('uid', $user->id);
		$this->setAttribute('pID', $user->participantID);
		$this->setAttribute('username', $user->username);
		$this->setAttribute('logindate', date('Y/m/d H:i:s', time()));


		//$this->setAttribute('groupID',$user->usergroup_id);
	
	 /* if($user->usergroup_id ==1)
		{
			 $this->addCredential('Admin');
			
		}*/
		 

   }
 
}
