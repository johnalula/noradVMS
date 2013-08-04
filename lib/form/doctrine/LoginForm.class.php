<?php

/**
 * Category form.
 *
 * @package    egpms
 * @subpackage form
 * @author     Samson Yohannes Amare
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class LoginForm extends BaseForm
{
   public function configure()
  {
	  $this->widgetSchema['useraccount'] = new sfWidgetFormInputText(array(), array('class' => 'span3 roundBox', 'placeholder' => 'Username'));

		$this->widgetSchema['password'] = new sfWidgetFormInputPassword(array('always_render_empty' => false ), array('class' => 'span3 roundBox', 'placeholder' => 'Password'));
		
	 
	 
  }
  
  protected function updateChoices($choice_1)
  {
    $choices = array();
   
    return $choices;
  }
}
