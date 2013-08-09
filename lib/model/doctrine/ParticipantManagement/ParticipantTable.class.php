<?php

/**
 * ParticipantTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ParticipantTable extends PluginParticipantTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object ParticipantTable
     */
     
	
	
	public static function getInstance()
	{
		return Doctrine_Core::getTable('Participant');
	}
	
	public static function processCustomerSelection( $status=null, $keyword=null, $offset=0, $limit=10)
	{
		$q = Doctrine_Query::create()
				->select("prt.*, prt.full_name as fullName")
				->from("Participant prt") 
				//->leftJoin("usr.userGroups grp on usr.group_id = grp.id")
				//->leftJoin("usr.userModulePermissions usrper on usrper.user_id = usr.id")
				//->leftJoin("grp.groupModulePermissions per on per.group_id = grp.id")
				->offset($offset)
				->limit($limit)
				//->where('prt.id  != ?', $customer_id)
				->execute( ); 

		return ( count ( $q ) <= 0 ? null : $q ); 
		
	}
}
