<?php

/**
 * PaymentSetting filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePaymentSettingFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'        => new sfWidgetFormFilterInput(),
      'payment_mode_id' => new sfWidgetFormFilterInput(),
      'cost_amount'     => new sfWidgetFormFilterInput(),
      'currency_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Currency'), 'add_empty' => true)),
      'description'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'token_id'        => new sfValidatorPass(array('required' => false)),
      'payment_mode_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cost_amount'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'currency_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Currency'), 'column' => 'id')),
      'description'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('payment_setting_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PaymentSetting';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'token_id'        => 'Text',
      'payment_mode_id' => 'Number',
      'cost_amount'     => 'Number',
      'currency_id'     => 'ForeignKey',
      'description'     => 'Text',
    );
  }
}
