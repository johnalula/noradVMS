<?php

/**
 * PaymentSetting form base class.
 *
 * @method PaymentSetting getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePaymentSettingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'token_id'        => new sfWidgetFormInputText(),
      'payment_mode_id' => new sfWidgetFormInputText(),
      'cost_amount'     => new sfWidgetFormInputText(),
      'currency_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Currency'), 'add_empty' => true)),
      'description'     => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'payment_mode_id' => new sfValidatorInteger(array('required' => false)),
      'cost_amount'     => new sfValidatorNumber(array('required' => false)),
      'currency_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Currency'), 'required' => false)),
      'description'     => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('payment_setting[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PaymentSetting';
  }

}
