<?php

/**
 * UserTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class UserTable extends PluginUserTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object UserTable
     */
    public static $USER_PERMISSION = 1;
    public static $GROUP_PERMISSION = 2; 
    
    public static $ALL_PERMISSION_ModeS = array (1 => 'User Permission', 2 => 'Group Permission');
    
    
    
    public static function findPermissionModeID ( $value ) {
        try {
            foreach( self::$ALL_PERMISSION_ModeS as $key=> $permission ){
                    if( strcmp($permission, $value) == 0 )
                        return $key; 
            }
            return null; 
        } catch ( Exception $e ) {
            return null; 
        }
	}
	
	public static function findPermissionModeValue ($_id ){
        try {
            foreach( self::$ALL_PERMISSION_ModeS as $key=> $permission ){
                    if( $key == $_id )
                        return $permission; 
            }
            return null;              
        } catch ( Exception $e ) {
            return null; 
        }
	}
	public static $BLUE_COLOR = 1;
	public static $RED_COLOR = 2; 
	public static $GREEN_COLOR = 3; 
	public static $GRAY_COLOR = 4; 

	public static $ALL_THEME_COLORS = array (1 => 'Blue', 2 => 'Red', 3 => 'Green', 4 => 'Gray');

	
	public static function findUIThemeID ( $value ) {
	  try {
			foreach( self::$ALL_THEME_COLORS as $key=> $color ){
					  if( strcmp($color, $value) == 0 )
							return $key; 
			}
			return null; 
	  } catch ( Exception $e ) {
			return null; 
	  }
	}
	
	public static function findUIThemeValue ($_id ){
        try {
            foreach( self::$ALL_THEME_COLORS as $key=> $color ){
                    if( $key == $_id )
                        return $color; 
            }
            return null;       
        } catch ( Exception $e ) {
            return null; 
        }
	}
 
	public static $TIGRIGNA = 1;
	public static $AMHARIC = 2; 
	public static $ENGLISH = 3; 

	public static $ALL_LANGUAGES = array (1 => 'Tigrigna', 2 => 'Amharic', 3 => 'English' );

	
	public static function findLanguageID ( $value ) {
	  try {
			foreach( self::$ALL_LANGUAGES as $key=> $langauge ){
					  if( strcmp($langauge, $value) == 0 )
							return $key; 
			}
			return null; 
	  } catch ( Exception $e ) {
			return null; 
	  }
	}
	
	public static function findLanguageValue ($_id ){
        try {
            foreach( self::$ALL_LANGUAGES as $key=> $langauge ){
                    if( $key == $_id )
                        return $langauge; 
            }
            return null;       
        } catch ( Exception $e ) {
            return null; 
        }
	}
	public static function processLogin($username, $password)
	{
		$pass = md5($password);
		$user_name = trim($username);
		$q= Doctrine_Query::create()
			->select("usr.*")
			->from("User usr")  
			->where('usr.username = ? AND usr.password = ?', array($user_name, $pass))
			->fetchOne ( );
		return ( ! $q ? null : $q ); 
	}
	
	public static function processSuperAdminObject ( $_id, $_token_id, $_username, $_password) 
	{
		$password = md5($_password);
		$username = md5($_username);
		$q= Doctrine_Query::create()
			->select("usr.*, usr.username as userName, usr.permission_mode as userPermissionMode, ((SELECT COUNT(grpper.id) FROM Permission grpper WHERE grpper.group_id = grp.id) > 0) AS hasPermission")
			->from("User usr") 
			->innerJoin("usr.userGroups grp on usr.group_id = grp.id")
			->where('usr.id = ? AND usr.token_id = ?', array($_id, $_token_id, $username, $password))
			->execute( ); 

		return ( count ( $q ) <= 0 ? null : $q ); 
	}
	
	public static function processObject ( $_id, $_token_id) 
	{
		$q= Doctrine_Query::create()
			->select("usr.*, usr.username as userName, usr.permission_mode as userPermissionMode, usr.is_active as isActive, usr.is_blocked as isBlocked, usr.ui_theme_color_setting as userThemeColor, usr.ui_language_setting as userLanguage, ((SELECT COUNT(grpper.id) FROM Permission grpper WHERE grpper.group_id = grp.id) > 0) AS hasPermission")
			->from("User usr") 
			->leftJoin("usr.participantUser prt on usr.particiapnt_id = prt.id")
			->innerJoin("usr.userGroups grp on usr.group_id = grp.id")
			->leftJoin("usr.userModulePermissions usrper on usrper.user_id = usr.id")
			->leftJoin("grp.groupModulePermissions per on per.group_id = grp.id")
			->offset($offset)
			->limit($limit)		
			->where('usr.id = ? AND usr.token_id = ?', array($_id, $_token_id))
			->execute( ); 

		return ( count ( $q ) <= 0 ? null : $q ); 
	}
 
	public static function processCreate($p_id, $username, $password, $g_id, $status_id, $is_active, $is_blocked, $permission_mode, $ui_theme, $ui_language)
	{
		$token = trim($username).trim($password).rand('11111', '99999');
		$pass = trim($password);
		$_nw = new User ();  
		$_nw->token_id = MD5($token); 
		$_nw->username = trim($username);
		$_nw->password = md5($pass);
		$_nw->group_id = $g_id; 
		$_nw->status = $status_id; 
		$_nw->is_active = $is_active; 
		$_nw->is_blocked = $is_blocked; 
		$_nw->permission_mode = $permission_mode; 
		$_nw->ui_theme_color_setting = $ui_theme; 
		$_nw->ui_language_setting = $ui_language; 
		$_nw->save(); 

		return true; 
	}
	
	public static function processUpdate($_id, $token_id, $p_id, $username, $password, $g_id, $status_id, $is_active, $is_blocked, $permission_mode, $ui_theme, $ui_language)
	{
		$pass = trim($password);
		$q = Doctrine_Query::create( )
			->update('User usr') 
			->set('usr.participant_id', '?', $p_id) 
			->set('usr.username', '?', trim($username)) 
			->set('usr.password', '?', md5($pass)) 
			->set('usr.group_id', '?', $g_id)  
			->set('usr.status', '?', $status_id)  
			->set('usr.is_active', '?', $is_active)  
			->set('usr.is_active', '?', $is_blocked)  
			->set('usr.permission_mode', '?', $permission_mode)  
			->set('usr.ui_theme_color_setting', '?', $ui_theme)  
			->set('usr.ui_language_setting', '?', $ui_language)  
			->where('usr.id = ? AND usr.token_id = ?', array($_id, $token_id))
			->execute();	
					
		return ( $q > 0 );   

	}

	public static function processSelection($username=null, $group_id=null, $status=null, $keyword=null, $offset=0, $limit=10) 
	{
	$q= Doctrine_Query::create()
		->select("usr.*, usr.username as userName, usr.permission_mode as userPermissionMode, grp.name as groupName, usr.is_active as isActive, usr.is_blocked as isBlocked, usr.ui_theme_color_setting as userThemeColor, usr.ui_language_setting as userLanguage, ((SELECT COUNT(grpper.id) FROM Permission grpper WHERE grpper.group_id = grp.id) > 0) AS hasPermission")
		->from("User usr") 
		->leftJoin("usr.Participant prt on usr.participant_id = prt.id")
		->innerJoin("usr.UserGroup grp on usr.group_id = grp.id")
		->leftJoin("usr.userModulePermissions usrper on usrper.user_id = usr.id")
		->leftJoin("grp.groupModulePermissions per on per.group_id = grp.id")
		->offset($offset)
		->limit($limit)
		->execute( ); 

	return ( count ( $q ) <= 0 ? null : $q ); 
	}
	
	
	
	public static function getInstance()
    {
        return Doctrine_Core::getTable('SystemLogFile');
    }
}
