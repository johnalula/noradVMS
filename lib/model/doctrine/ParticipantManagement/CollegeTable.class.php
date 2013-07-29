<?php

/**
 * CollegeTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CollegeTable extends PluginCollegeTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object CollegeTable
     */
	public static function processObject ()
	{}

	public static function processSelection ()
	{}

	public static function getCandidateParents()
	{}

 
	public static function processCreate ($parent_id, $leader_id, $name, $dean_name, $status, $project_no, $vat_number, $description, $street_no, $house_no, $pobox_no, $mobile_no, $phone_no, $fax_no, $email, $website)
	{
		$token = trim($name).trim($project_no).rand('11111', '99999');
		$_nw = new College(); //
		$_nw->token_id = MD5($token);
		$_nw->participant_type_id = ParticipantTable::$COLLEGE;
		$_nw->leader_participant_id = $leader_id;
		$_nw->name = trim($name); 
		$_nw->dean_name = trim($dean_name); 
		$_nw->status_id = $status; 
		$_nw->project_no = trim($project_no);
		$_nw->vat_number = trim($vat_number);
		$_nw->description = trim($description);
		$_nw->parent_id= $parent_id;
		$_nw->save(); 
		$_nw_id = $_nw->id;
		
			$contact = ParticipantContactTable::processCreate($_nw_id, $street_no, $house_no, $pobox_no, $mobile_no, $phone_no, $fax_no, $email, $website);
		return true; 
	}

	public static function processUpdate ($_id, $token_id, $parent_id, $leader_id, $name, $dean_name, $status, $project_no, $vat_number, $description, $street_no, $house_no, $pobox_no, $mobile_no, $phone_no, $fax_no, $email, $website)
	{
		$q = Doctrine_Query::create( )
			->update('College prt')
			->set('prt.participant_type_id', '?', ParticipantTable::$COLLEGE )
			->set('prt.name', '?', trim($name))
			->set('prt.leader_participant_id', '?',  $leader_id )
			->set('prt.dean_name', '?', trim($dean_name)) 
			->set('prt.status_id', '?', trim($status)) 
			->set('prt.project_no', '?', trim($project_no)) 
			->set('prt.vat_number', '?', trim($vat_number)) 
			->set('prt.description', '?', trim($description)) 
			->set('prt.parent_id', '?', $parent_id ) 
			->where('prt.id = ? AND prt.token_id = ?', array($_id, $token_id))
			->execute();	
			
			$contact = ParticipantContactTable::processUpdate($_id, $street_no, $house_no, $pobox_no, $mobile_no, $phone_no, $fax_no, $email, $website);
			
		return ( $q > 0 );   
	}

	public static function processDelete ()
	{}

	public static function addKeywordQuery()
	{}

	public static function addStatusQuery()
	{}

	public static function addExclusionQuery()
	{}

	public static function addUmbrellaQuery()
	{}

	public static function processStatusSelection ()
	{}

	public static function processTypeSelection ()
	{}
	public static function getInstance()
	{
	return Doctrine_Core::getTable('College');
	}
}
