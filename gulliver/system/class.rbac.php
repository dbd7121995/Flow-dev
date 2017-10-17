<?php

/**
 * class.rbac.php
 *
 * @package gulliver.system
 *
 * ProcessMaker Open Source Edition
 * Copyright (C) 2004 - 2011 Colosa Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 * For more information, contact Colosa Inc, 2566 Le Jeune Rd.,
 * Coral Gables, FL, 33134, USA, or email info@colosa.com.
 *
 */
/**
 * File: $Id$
 *
 * RBAC class definition
 *
 * @package gulliver.system
 * @copyright (C) 2002 by Colosa Development Team.
 * @link http://www.colosa.com
 * @link http://manuals.colosa.com/gulliver/rbac.html
 * @author Fernando Ontiveros
 */

/**
 * Clase Wrapper
 *
 * @package gulliver.system
 * @author Fernando Ontiveros
 */

class RBAC
{
    const SETUPERMISSIONUID= '00000000000000000000000000000002';
    /**
     *
     * @access private
     * @var $userObj
     */
    public $userObj;
    public $usersPermissionsObj;
    public $usersRolesObj;
    public $systemObj;
    public $rolesObj;
    public $permissionsObj;
    public $userloggedobj;
    public $currentSystemobj;
    public $rolesPermissionsObj;
    public $authSourcesObj;

    public $aUserInfo = array ();
    public $aRbacPlugins = array ();
    public $sSystem = '';

    public $singleSignOn = false;

    private static $instance = null;
    public $authorizedActions = array();

    public function __construct ()
    {
        $this->authorizedActions = array(
            'users_Ajax.php' => array(
                'availableUsers' => array('PM_FACTORY'),
                'assign' => array('PM_FACTORY'),
                'changeView' => array(),
                'ofToAssign' => array('PM_FACTORY'),
                'usersGroup' => array('PM_FACTORY'),
                'canDeleteUser' => array('PM_USERS'),
                'deleteUser' => array('PM_USERS'),
                'changeUserStatus' => array('PM_USERS'),
                'availableGroups' => array('PM_USERS'),
                'assignedGroups' => array('PM_USERS'),
                'assignGroupsToUserMultiple' => array('PM_USERS'),
                'deleteGroupsToUserMultiple' => array('PM_USERS'),
                'authSources' => array('PM_USERS'),
                'loadAuthSourceByUID' => array('PM_USERS'),
                'updateAuthServices' => array('PM_USERS'),
                'usersList' => array('PM_USERS'),
                'updatePageSize' => array(),
                'summaryUserData' => array('PM_USERS'),
                'verifyIfUserAssignedAsSupervisor' => array('PM_USERS')
            ),
            'skin_Ajax.php' => array(
                'updatePageSize' => array(),
                'skinList' => array('PM_SETUP_SKIN'),
                'newSkin' => array('PM_SETUP_SKIN'),
                'importSkin' => array('PM_SETUP_SKIN'),
                'exportSkin' => array('PM_SETUP_SKIN'),
                'deleteSkin' => array('PM_SETUP_SKIN'),
                'streamSkin' => array('PM_SETUP_SKIN'),
                'addTarFolder' => array('PM_SETUP_SKIN'),
                'copy_skin_folder' => array('PM_SETUP_SKIN')
            ),
            'processes_DownloadFile.php' => array(
                'downloadFileHash' => array('PM_FACTORY')
            ),
            'processProxy.php' => array(
                'categoriesList' => array(),
                'getCategoriesList' => array(),
                'saveProcess' => array('PM_FACTORY'),
                'changeStatus' => array(),
                'changeDebugMode' => array(),
                'getUsers' => array(),
                'getGroups' => array(),
                'assignActorsTask' => array(),
                'removeActorsTask' => array(),
                'getActorsTask' => array(),
                'getProcessDetail' => array(),
                'getProperties' => array(),
                'saveProperties' => array(),
                'getCaledarList' => array(),
                'getPMVariables' => array(),
                'generateBpmn' => array()
            )

        );
    }

    /**
     * to get singleton instance
     *
     * @access public
     * @return object
     */
    public function &getSingleton ()
    {
        if (self::$instance == null) {
            self::$instance = new RBAC();
        }
        return self::$instance;
    }

    /**
     * to get start with some classess
     *
     * @access public
     * @return object
     */
    public function initRBAC ()
    {
        if (is_null( $this->userObj )) {
            require_once ("classes/model/RbacUsers.php");
            $this->userObj = new RbacUsers();
        }

        if (is_null( $this->systemObj )) {
            require_once ("classes/model/Systems.php");
            $this->systemObj = new Systems();
        }

        if (is_null( $this->usersRolesObj )) {
            require_once ("classes/model/UsersRoles.php");
            $this->usersRolesObj = new UsersRoles();
        }

        if (is_null( $this->rolesObj )) {
            require_once ("classes/model/Roles.php");
            $this->rolesObj = new Roles();
        }

        if (is_null( $this->permissionsObj )) {
            require_once ("classes/model/Permissions.php");
            $this->permissionsObj = new Permissions();
        }

        if (is_null( $this->rolesPermissionsObj )) {
            require_once ("classes/model/RolesPermissions.php");
            $this->rolesPermissionsObj = new RolesPermissions();
        }

        if (is_null( $this->authSourcesObj )) {
            require_once 'classes/model/AuthenticationSource.php';
            $this->authSourcesObj = new AuthenticationSource();
        }
        //hook for RBAC plugins
        $pathPlugins = PATH_RBAC . 'plugins';
        if (is_dir( $pathPlugins )) {
            if ($handle = opendir( $pathPlugins )) {
                while (false !== ($file = readdir( $handle ))) {
                    if (strpos( $file, '.php', 1 ) && is_file( $pathPlugins . PATH_SEP . $file ) && substr( $file, 0, 6 ) == 'class.' && substr( $file, - 4 ) == '.php') {

                        $sClassName = substr( $file, 6, strlen( $file ) - 10 );
                        require_once ($pathPlugins . PATH_SEP . $file);
                        $this->aRbacPlugins[] = $sClassName;

                    }
                }
            }
        }
        if (!in_array('ldapAdvanced', $this->aRbacPlugins)) {
            G::LoadClass('ldapAdvanced');
            if (class_exists('ldapAdvanced')) {
                $this->aRbacPlugins[] = 'ldapAdvanced';
            }
        }
    }

    /**
     * gets the Role and their permissions for Administrator Processmaker
     *
     * @access public
     * @return $this->permissionsAdmin[ $permissionsAdmin ]
     */
    public function loadPermissionAdmin()
    {
        $permissionsAdmin = array(array("PER_UID" => "00000000000000000000000000000001", "PER_CODE" => "PM_LOGIN",
            "PER_NAME" => "Login"
        ), array("PER_UID" => "00000000000000000000000000000002", "PER_CODE" => "PM_SETUP", "PER_NAME" => "Setup"
        ), array("PER_UID" => "00000000000000000000000000000003", "PER_CODE" => "PM_USERS", "PER_NAME" => "Users"
        ), array("PER_UID" => "00000000000000000000000000000004", "PER_CODE" => "PM_FACTORY", "PER_NAME" => "Design
        Process"
        ), array("PER_UID" => "00000000000000000000000000000005", "PER_CODE" => "PM_CASES", "PER_NAME" => "Create Users"
        ), array("PER_UID" => "00000000000000000000000000000006", "PER_CODE" => "PM_ALLCASES", "PER_NAME" => "All Cases"
        ), array("PER_UID" => "00000000000000000000000000000007", "PER_CODE" => "PM_REASSIGNCASE", "PER_NAME" =>
            "Reassign case"
        ), array("PER_UID" => "00000000000000000000000000000008", "PER_CODE" => "PM_REPORTS", "PER_NAME" => "PM reports"
        ), array("PER_UID" => "00000000000000000000000000000009", "PER_CODE" => "PM_SUPERVISOR", "PER_NAME" =>
            "Supervisor"
        ), array("PER_UID" => "00000000000000000000000000000010", "PER_CODE" => "PM_SETUP_ADVANCE", "PER_NAME" =>
            "Setup Advanced"
        ), array("PER_UID" => "00000000000000000000000000000011", "PER_CODE" => "PM_DASHBOARD", "PER_NAME" => "Dashboard"
        ), array("PER_UID" => "00000000000000000000000000000012", "PER_CODE" => "PM_WEBDAV", "PER_NAME" => "WebDav"
        ), array("PER_UID" => "00000000000000000000000000000013", "PER_CODE" => "PM_DELETECASE", "PER_NAME" => "Cancel
         cases"
        ), array("PER_UID" => "00000000000000000000000000000014", "PER_CODE" => "PM_EDITPERSONALINFO", "PER_NAME" =>
            "Edit Personal Info"
        ), array("PER_UID" => "00000000000000000000000000000015", "PER_CODE" => "PM_FOLDERS_VIEW", "PER_NAME" => "View
         Folders"
        ), array("PER_UID" => "00000000000000000000000000000016", "PER_CODE" => "PM_FOLDERS_ADD_FOLDER", "PER_NAME" =>
            "Delete folders"
        ), array("PER_UID" => "00000000000000000000000000000017", "PER_CODE" => "PM_FOLDERS_ADD_FILE", "PER_NAME" =>
            "Delete folders"
        ), array("PER_UID" => "00000000000000000000000000000018", "PER_CODE" => "PM_CANCELCASE", "PER_NAME" => "Cancel
         cases"
        ), array("PER_UID" => "00000000000000000000000000000019", "PER_CODE" => "PM_FOLDER_DELETE", "PER_NAME" =>
            "Cancel cases"
        ), array("PER_UID" => "00000000000000000000000000000020", "PER_CODE" => "PM_SETUP_LOGO", "PER_NAME" => "Setup
        Logo"
        ), array("PER_UID" => "00000000000000000000000000000021", "PER_CODE" => "PM_SETUP_EMAIL", "PER_NAME" => "Setup
         Email"
        ), array("PER_UID" => "00000000000000000000000000000022", "PER_CODE" => "PM_SETUP_CALENDAR", "PER_NAME" =>
            "Setup Calendar"
        ), array("PER_UID" => "00000000000000000000000000000023", "PER_CODE" => "PM_SETUP_PROCESS_CATEGORIES",
            "PER_NAME" => "Setup Process Categories"
        ), array("PER_UID" => "00000000000000000000000000000024", "PER_CODE" => "PM_SETUP_CLEAR_CACHE", "PER_NAME" =>
            "Setup Clear Cache"
        ), array("PER_UID" => "00000000000000000000000000000025", "PER_CODE" => "PM_SETUP_HEART_BEAT", "PER_NAME" =>
            "Setup Heart Beat"
        ), array("PER_UID" => "00000000000000000000000000000026", "PER_CODE" => "PM_SETUP_ENVIRONMENT", "PER_NAME" =>
            "Setup Environment"
        ), array("PER_UID" => "00000000000000000000000000000027", "PER_CODE" => "PM_SETUP_PM_TABLES", "PER_NAME" =>
            "Setup PM Tables"
        ), array("PER_UID" => "00000000000000000000000000000028", "PER_CODE" => "PM_SETUP_LOGIN", "PER_NAME" => "Setup
         Login"
        ), array("PER_UID" => "00000000000000000000000000000029", "PER_CODE" => "PM_SETUP_DASHBOARDS", "PER_NAME" =>
            "Setup Dashboards"
        ), array("PER_UID" => "00000000000000000000000000000030", "PER_CODE" => "PM_SETUP_LANGUAGE", "PER_NAME" =>
            "Setup Language"
        ), array("PER_UID" => "00000000000000000000000000000031", "PER_CODE" => "PM_SETUP_SKIN", "PER_NAME" => "Setup
        Skin"
        ), array("PER_UID" => "00000000000000000000000000000032", "PER_CODE" => "PM_SETUP_CASES_LIST_CACHE_BUILDER",
            "PER_NAME" => "Setup Case List Cache Builder"
        ), array("PER_UID" => "00000000000000000000000000000033", "PER_CODE" => "PM_SETUP_PLUGINS", "PER_NAME" =>
            "Setup Plugins"
        ), array("PER_UID" => "00000000000000000000000000000034", "PER_CODE" =>
            "PM_SETUP_USERS_AUTHENTICATION_SOURCES", "PER_NAME" => "Setup User Authentication Sources"
        ), array("PER_UID" => "00000000000000000000000000000035", "PER_CODE" => "PM_SETUP_LOGS", "PER_NAME" => "Setup
        Logs"
        ), array("PER_UID" => "00000000000000000000000000000036", "PER_CODE" => "PM_DELETE_PROCESS_CASES", "PER_NAME" =>
            "Delete process cases"
        ), array("PER_UID" => "00000000000000000000000000000037", "PER_CODE" => "PM_EDITPERSONALINFO_CALENDAR",
            "PER_NAME" => "Edit personal info Calendar"
        ), array("PER_UID" => "00000000000000000000000000000038", "PER_CODE" => "PM_UNCANCELCASE",
            "PER_NAME" => "Undo cancel case"
        ), array("PER_UID" => "00000000000000000000000000000039", "PER_CODE" => "PM_REST_API_APPLICATIONS",
            "PER_NAME" => "Create rest API Aplications"
        ), array("PER_UID" => "00000000000000000000000000000040", "PER_CODE" => "PM_EDIT_USER_PROFILE_FIRST_NAME",
            "PER_NAME" => "Edit User profile First Name"
        ), array("PER_UID" => "00000000000000000000000000000041", "PER_CODE" => "PM_EDIT_USER_PROFILE_LAST_NAME",
            "PER_NAME" => "Edit User profile Last Name"
        ), array("PER_UID" => "00000000000000000000000000000042", "PER_CODE" => "PM_EDIT_USER_PROFILE_USERNAME",
            "PER_NAME" => "Edit User profile Username"
        ), array("PER_UID" => "00000000000000000000000000000043", "PER_CODE" => "PM_EDIT_USER_PROFILE_EMAIL",
            "PER_NAME" => "Edit User profile Email"
        ), array("PER_UID" => "00000000000000000000000000000044", "PER_CODE" => "PM_EDIT_USER_PROFILE_ADDRESS",
            "PER_NAME" => "Edit User profile Address"
        ), array("PER_UID" => "00000000000000000000000000000045", "PER_CODE" => "PM_EDIT_USER_PROFILE_ZIP_CODE",
            "PER_NAME" => "Edit User profile Zip Code"
        ), array("PER_UID" => "00000000000000000000000000000046", "PER_CODE" => "PM_EDIT_USER_PROFILE_COUNTRY",
            "PER_NAME" => "Edit User profile Country"
        ), array("PER_UID" => "00000000000000000000000000000047", "PER_CODE" => "PM_EDIT_USER_PROFILE_STATE_OR_REGION",
            "PER_NAME" => "Edit User profile State or Region"
        ), array("PER_UID" => "00000000000000000000000000000048", "PER_CODE" => "PM_EDIT_USER_PROFILE_LOCATION",
            "PER_NAME" => "Edit User profile Location"
        ), array("PER_UID" => "00000000000000000000000000000049", "PER_CODE" => "PM_EDIT_USER_PROFILE_PHONE",
            "PER_NAME" => "Edit User profile Phone"
        ), array("PER_UID" => "00000000000000000000000000000050", "PER_CODE" => "PM_EDIT_USER_PROFILE_POSITION",
            "PER_NAME" => "Edit User profile Position"
        ), array("PER_UID" => "00000000000000000000000000000051", "PER_CODE" => "PM_EDIT_USER_PROFILE_REPLACED_BY",
            "PER_NAME" => "Edit User profile Replaced By"
        ), array("PER_UID" => "00000000000000000000000000000052", "PER_CODE" => "PM_EDIT_USER_PROFILE_EXPIRATION_DATE",
            "PER_NAME" => "Edit User profile Expiration Date"
        ), array("PER_UID" => "00000000000000000000000000000053", "PER_CODE" => "PM_EDIT_USER_PROFILE_CALENDAR",
            "PER_NAME" => "Edit User profile Calendar"
        ), array("PER_UID" => "00000000000000000000000000000054", "PER_CODE" => "PM_EDIT_USER_PROFILE_STATUS",
            "PER_NAME" => "Edit User profile Status"
        ), array("PER_UID" => "00000000000000000000000000000055", "PER_CODE" => "PM_EDIT_USER_PROFILE_ROLE",
            "PER_NAME" => "Edit User profile Role"
        ), array("PER_UID" => "00000000000000000000000000000056", "PER_CODE" => "PM_EDIT_USER_PROFILE_TIME_ZONE",
            "PER_NAME" => "Edit User profile Time Zone"
        ), array("PER_UID" => "00000000000000000000000000000057", "PER_CODE" => "PM_EDIT_USER_PROFILE_DEFAULT_LANGUAGE",
            "PER_NAME" => "Edit User profile Default Language"
        ), array("PER_UID" => "00000000000000000000000000000058", "PER_CODE" => "PM_EDIT_USER_PROFILE_COSTS",
            "PER_NAME" => "Edit User profile Costs"
        ), array("PER_UID" => "00000000000000000000000000000059", "PER_CODE" => "PM_EDIT_USER_PROFILE_PASSWORD",
            "PER_NAME" => "Edit User profile Password"
        ), array("PER_UID" => "00000000000000000000000000000060", "PER_CODE" => "PM_EDIT_USER_PROFILE_USER_MUST_CHANGE_PASSWORD_AT_NEXT_LOGON",
            "PER_NAME" => "Edit User profile Must Change Password at next Logon"
        ), array("PER_UID" => "00000000000000000000000000000061", "PER_CODE" => "PM_EDIT_USER_PROFILE_PHOTO",
            "PER_NAME" => "Edit User profile Photo"
        ), array("PER_UID" => "00000000000000000000000000000062", "PER_CODE" => "PM_EDIT_USER_PROFILE_DEFAULT_MAIN_MENU_OPTIONS",
            "PER_NAME" => "Edit User profile Default Main Menu Options"
        ), array("PER_UID" => "00000000000000000000000000000063", "PER_CODE" => "PM_EDIT_USER_PROFILE_DEFAULT_CASES_MENU_OPTIONS",
            "PER_NAME" => "Edit User profile Default Cases Menu Options"
        ), array("PER_UID" => "00000000000000000000000000000064", "PER_CODE" => "PM_REASSIGNCASE_SUPERVISOR",
            "PER_NAME" => "Reassign case supervisor"
        )
        );
        return $permissionsAdmin;
    }

    /**
     * Gets the roles and permission for one RBAC_user
     *
     * gets the Role and their permissions for one User
     *
     * @author Fernando Ontiveros Lira <fernando@colosa.com>
     * @access public
     *
     * @param string $sSystem the system
     * @param string $sUser the user
     * @return $this->aUserInfo[ $sSystem ]
     */
    public function loadUserRolePermission ($sSystem, $sUser)
    {
        //in previous versions  we provided a path data and session we will cache the session Info for this user
        //now this is deprecated, and all the aUserInfo is in the memcache
        $this->sSystem = $sSystem;
        $fieldsSystem = $this->systemObj->loadByCode( $sSystem );
        $fieldsRoles = $this->usersRolesObj->getRolesBySystem( $fieldsSystem['SYS_UID'], $sUser );
        $fieldsPermissions = $this->usersRolesObj->getAllPermissions( $fieldsRoles['ROL_UID'], $sUser );
        $this->aUserInfo['USER_INFO'] = $this->userObj->load( $sUser );
        $this->aUserInfo[$sSystem]['SYS_UID'] = $fieldsSystem['SYS_UID'];
        $this->aUserInfo[$sSystem]['ROLE'] = $fieldsRoles;
        $this->aUserInfo[$sSystem]['PERMISSIONS'] = $fieldsPermissions;
    }

    /**
     * verification the register automatic
     *
     *
     * @access public
     * @param string $strUser the system
     * @param string $strPass the password
     * @return $res
     */
    public function checkAutomaticRegister ($strUser, $strPass)
    {
        $result = - 1; //default return value,

        foreach ($this->aRbacPlugins as $sClassName) {
            $plugin = new $sClassName();
            if (method_exists( $plugin, 'automaticRegister' )) {
                $oCriteria = new Criteria( 'rbac' );
                $oCriteria->add( AuthenticationSourcePeer::AUTH_SOURCE_PROVIDER, $sClassName );
                $oCriteria->addAscendingOrderByColumn( AuthenticationSourcePeer::AUTH_SOURCE_NAME );
                $oDataset = AuthenticationSourcePeer::doSelectRS( $oCriteria, Propel::getDbConnection('rbac_ro') );
                $oDataset->setFetchmode( ResultSet::FETCHMODE_ASSOC );
                $oDataset->next();
                $aRow = $oDataset->getRow();
                while (is_array( $aRow )) {
                    $aRow = array_merge( $aRow, unserialize( $aRow['AUTH_SOURCE_DATA'] ) );
                    //Check if this authsource is enabled for AutoRegister, if not skip this
                    if ($aRow['AUTH_SOURCE_AUTO_REGISTER'] == 1) {
                        $plugin->sAuthSource = $aRow['AUTH_SOURCE_UID'];
                        $plugin->sSystem = $this->sSystem;
                        //search the usersRolesObj
                        //create the users in ProcessMaker
                        $res = $plugin->automaticRegister( $aRow, $strUser, $strPass );
                        if ($res == 1) {
                            return $res;
                        }
                    }
                    $oDataset->next();
                    $aRow = $oDataset->getRow();
                }
            }
        }

    }

    /**
     * this function is checking the register automatic without authentication
     *
     *
     * @access public
     * @param string $sAuthType
     * @param string $sAuthSource
     * @param string $aUserFields
     * @param string $sAuthUserDn
     * @param string $strPass
     * @return number -2: wrong password
     * -3: inactive user
     * -4: due date
     * -5: invalid authentication source
     */
    public function VerifyWithOtherAuthenticationSource ($sAuthType, $aUserFields, $strPass)
    {
        if ($sAuthType == '' || $sAuthType == 'MYSQL') {
            //check if the user is active
            if ($aUserFields['USR_STATUS'] != 1) {
                return - 3; //inactive user
            }

            //check if the user's due date is valid
            if ($aUserFields['USR_DUE_DATE'] < date( 'Y-m-d' )) {
                return - 4; //due date
            }
        }

        foreach ($this->aRbacPlugins as $sClassName) {
            if (strtolower( $sClassName ) == strtolower( $sAuthType )) {
                $plugin = new $sClassName();
                $plugin->sAuthSource = $aUserFields["UID_AUTH_SOURCE"];
                $plugin->sSystem = $this->sSystem;

                $bValidUser = false;
                $bValidUser = $plugin->VerifyLogin( $aUserFields["USR_AUTH_USER_DN"], $strPass );
                if ($bValidUser === true) {
                    return ($aUserFields['USR_UID']);
                } else {
                    return - 2; //wrong password
                }
            }
        }
        return - 5; //invalid authentication source
    }

    /**
     * authentication of an user through of class RBAC_user
     *
     * checking that an user has right to start an applicaton
     *
     * @author Fernando Ontiveros Lira <fernando@colosa.com>
     * @access public
     *
     * @param string $strUser UserId (login) an user
     * @param string $strPass Password
     * @return -1: no user
     * -2: wrong password
     * -3: inactive usuario
     * -4: due date
     * -5: invalid authentication source ( **new )
     * n : uid of user
     */
    public function VerifyLogin ($strUser, $strPass)
    {
        /*----------------------------------********---------------------------------*/

        if (strlen( $strPass ) == 0) {
            return - 2;
        }
        //check if the user exists in the table RB_WORKFLOW.USERS
        $this->initRBAC();
        //if the user exists, the VerifyUser function will return the user properties
        if ($this->userObj->verifyUser( $strUser ) == 0) {
            //here we are checking if the automatic user Register is enabled, ioc return -1
            $res = $this->checkAutomaticRegister( $strUser, $strPass );
            if ($res == 1) {
                $this->userObj->verifyUser( $strUser );
            } else {
                return $res;
            }
        }

        //default values
        $sAuthType = 'mysql';
        if (isset( $this->userObj->fields['USR_AUTH_TYPE'] )) {
            $sAuthType = strtolower( $this->userObj->fields['USR_AUTH_TYPE'] );
        }
        //Hook for RBAC plugins
        if ($sAuthType != "mysql" && $sAuthType != "") {
            $res = $this->VerifyWithOtherAuthenticationSource( $sAuthType, $this->userObj->fields, $strPass );
            return $res;
        } else {
            $this->userObj->reuseUserFields = true;
            $res = $this->userObj->VerifyLogin( $strUser, $strPass );
            return $res;
        }
    }

    /**
     * Verify if the user exist or not exists, the argument is the UserName
     *
     * @author Everth S. Berrios
     * @access public
     * @param string $strUser
     * @return $res
     */
    public function verifyUser ($strUser)
    {
        $res = $this->userObj->verifyUser( $strUser );
        return $res;
    }

    /**
     * Verify if the user exist or not exists, the argument is the UserUID
     *
     * @author Everth S. Berrios
     * @access public
     * @param string $strUserId
     * @return $res
     */
    public function verifyUserId ($strUserId)
    {
        $res = $this->userObj->verifyUserId( $strUserId );
        return $res;
    }

    /**
     * Verify if the user has a right over the permission
     *
     * @author Fernando Ontiveros
     * @access public
     *
     * @param string $uid id of user
     * @param string $system Code of System
     * @param string $perm id of Permissions
     * @return int 1: If it is ok
     * -1: System doesn't exists
     * -2: The User has not a Role
     * -3: The User has not this Permission.
     */
    public function userCanAccess ($perm)
    {
        if (isset( $this->aUserInfo[$this->sSystem]['PERMISSIONS'] )) {
            $res = - 3;
            //if ( !isset ( $this->aUserInfo[ $this->sSystem ]['ROLE'. 'x'] ) ) $res = -2;
            foreach ($this->aUserInfo[$this->sSystem]['PERMISSIONS'] as $key => $val) {
                if ($perm == $val['PER_CODE']) {
                    $res = 1;
                }
            }
        } else {
            $res = - 1;
        }

        return $res;
    }

    /**
     * to create an user
     *
     * @access public
     * @param array $aData
     * @param string $sRolCode
     * @return $sUserUID
     */
    public function createUser ($aData = array(), $sRolCode = '')
    {
        if ($aData["USR_STATUS"] . "" == "1") {
            $aData["USR_STATUS"] = "ACTIVE";
        }

        if ($aData["USR_STATUS"] . "" == "0") {
            $aData["USR_STATUS"] = "INACTIVE";
        }

        if ($aData['USR_STATUS'] == 'ACTIVE') {
            $aData['USR_STATUS'] = 1;
        }
        if ($aData['USR_STATUS'] == 'INACTIVE') {
            $aData['USR_STATUS'] = 0;
        }

        $sUserUID = $this->userObj->create( $aData );

        if ($sRolCode != '') {
            $this->assignRoleToUser( $sUserUID, $sRolCode );
        }
        return $sUserUID;
    }

    /**
     * updated an user
     *
     * @access public
     * @param array $aData
     * @param string $sRolCode
     * @return void
     */
    public function updateUser ($aData = array(), $sRolCode = '')
    {
        if (isset( $aData['USR_STATUS'] )) {
            if ($aData['USR_STATUS'] == 'ACTIVE') {
                $aData['USR_STATUS'] = 1;
            }
        }
        $this->userObj->update( $aData );
        if ($sRolCode != '') {
            $this->removeRolesFromUser( $aData['USR_UID'] );
            $this->assignRoleToUser( $aData['USR_UID'], $sRolCode );
        }
    }

    /**
     * to put role an user
     *
     * @access public
     * @param string $sUserUID
     * @param string $sRolCode
     * @return void
     */
    public function assignRoleToUser ($sUserUID = '', $sRolCode = '')
    {
        $aRol = $this->rolesObj->loadByCode( $sRolCode );
        $this->usersRolesObj->create( $sUserUID, $aRol['ROL_UID'] );
    }

    /**
     * remove a role from an user
     *
     * @access public
     * @param array $sUserUID
     * @return void
     */
    public function removeRolesFromUser ($sUserUID = '')
    {
        $oCriteria = new Criteria( 'rbac' );
        $oCriteria->add( UsersRolesPeer::USR_UID, $sUserUID );
        UsersRolesPeer::doDelete( $oCriteria );
    }

    /**
     * change status of an user
     *
     * @access public
     * @param array $sUserUID
     * @return void
     */
    public function changeUserStatus ($sUserUID = '', $sStatus = 'ACTIVE')
    {
        if ($sStatus === 'ACTIVE') {
            $sStatus = 1;
        }

        $aFields = $this->userObj->load( $sUserUID );
        $aFields['USR_STATUS'] = $sStatus;
        $this->userObj->update( $aFields );
    }

    /**
     * remove an user
     *
     * @access public
     * @param array $sUserUID
     * @return void
     */
    public function removeUser ($sUserUID = '')
    {
        $this->userObj->remove( $sUserUID );
        $this->removeRolesFromUser( $sUserUID );
    }
    //


    /**
     * getting user's basic information (rbac)
     *
     * getting datas that is saved in rbac
     *
     * @author Fernando Ontiveros Lira <fernando@colosa.com>
     * @access public
     *
     * @param string $uid id user
     * @return array with info of an user
     */
    public function load ($uid)
    {
        $this->initRBAC();
        $this->userObj->Fields = $this->userObj->load( $uid );

        $fieldsSystem = $this->systemObj->loadByCode( $this->sSystem );
        $fieldsRoles = $this->usersRolesObj->getRolesBySystem( $fieldsSystem['SYS_UID'], $uid );
        $this->userObj->Fields['USR_ROLE'] = $fieldsRoles['ROL_CODE'];
        return $this->userObj->Fields;
    }

    /**
     * loading permission by code
     *
     *
     * @access public
     *
     * @param string $sCode
     * @return void
     */
    //  function loadPermissionByCode($sCode) {
    //    return $this->permissionsObj->loadByCode($sCode);
    //  }


    /**
     * create permission
     *
     *
     * @access public
     *
     * @param string $sCode
     * @return void
     */
    public function createPermision ($sCode)
    {
        return $this->permissionsObj->create( array ('PER_CODE' => $sCode) );
    }

    /**
     * loading role by code
     *
     *
     * @access public
     *
     * @param string $sCode
     * @return void
     */
    //  function loadRoleByCode($sCode) {
    //    return $this->rolesObj->loadByCode($sCode);
    //  }


    /**
     * list all roles
     *
     *
     * @access public
     *
     * @param string $systemCode
     * @return $this->rolesObj
     */

    public function listAllRoles ($systemCode = 'PROCESSMAKER')
    {
        return $this->rolesObj->listAllRoles( $systemCode );
    }

    /**
     * getting all roles
     *
     *
     * @access public
     *
     * @param string $systemCode
     * @return $this->rolesObj->getAllRoles
     */
    public function getAllRoles ($systemCode = 'PROCESSMAKER')
    {
        return $this->rolesObj->getAllRoles( $systemCode );
    }

    /**
     * getting all roles by filter
     *
     *
     * @access public
     * @param string $filter
     * @return $this->rolesObj->getAllRolesFilter
     */
    public function getAllRolesFilter ($start, $limit, $filter)
    {
        return $this->rolesObj->getAllRolesFilter( $start, $limit, $filter );
    }

    /**
     * list all permission
     *
     *
     * @access public
     *
     * @param string $systemCode
     * @return $this->rolesObj->listAllPermissions
     */
    public function listAllPermissions ($systemCode = 'PROCESSMAKER')
    {
        return $this->rolesObj->listAllPermissions( $systemCode );
    }

    /**
     * this function creates a role
     *
     *
     * @access public
     *
     * @param array $aData
     * @return $this->rolesObj->createRole
     */
    public function createRole ($aData)
    {
        return $this->rolesObj->createRole( $aData );
    }

    /**
     * this function removes a role
     *
     *
     * @access public
     *
     * @param string $ROL_UID
     * $@return $this->rolesObj->removeRole
     */
    public function removeRole ($ROL_UID)
    {
        return $this->rolesObj->removeRole( $ROL_UID );
    }

    /**
     * this function checks a new role
     *
     *
     * @access public
     *
     * @param string $code
     * @return $this->rolesObj->verifyNewRole
     */
    public function verifyNewRole ($code)
    {
        return $this->rolesObj->verifyNewRole( $code );
    }

    /**
     * this function updates a role
     *
     *
     * @access public
     *
     * @param string $fields
     * @return $this->rolesObj->updateRole
     */
    public function updateRole ($fields)
    {
        return $this->rolesObj->updateRole( $fields );
    }

    /**
     * this function loads by ID
     *
     *
     * @access public
     *
     * @param string $ROL_UID
     * @return $this->rolesObj->loadById
     */
    public function loadById ($ROL_UID)
    {
        return $this->rolesObj->loadById( $ROL_UID );
    }

    /**
     * this function gets the user's roles
     *
     *
     * @access public
     *
     * @param string $ROL_UID
     * @return $this->rolesObj->getRoleUsers
     */
    public function getRoleUsers ($ROL_UID, $filter = '')
    {
        throw new Exception(__METHOD__ . ': The method is deprecated');
    }

    /**
     * this function gets the number of users by roles
     *
     *
     * @access public
     * @author : Enrique Ponce de Leon <enrique@colosa.com>
     *
     * @return $this->rolesObj->getAllUsersByRole
     */
    public function getAllUsersByRole ()
    {
        return $this->rolesObj->getAllUsersByRole();
    }

    /**
     * this function gets the number of users by department
     *
     *
     * @access public
     * @author : Enrique Ponce de Leon <enrique@colosa.com>
     *
     * @return $this->rolesObj->getAllUsersByRole
     */
    public function getAllUsersByDepartment ()
    {
        return $this->rolesObj->getAllUsersByDepartment();
    }

    /**
     * this function gets roles code
     *
     *
     * @access public
     *
     * @param string $ROL_UID
     * @return $this->rolesObj->getRoleCode
     */
    public function getRoleCode ($ROL_UID)
    {
        return $this->rolesObj->getRoleCode( $ROL_UID );
    }

    /**
     * this function removes role from an user
     *
     *
     * @access public
     *
     * @param string $ROL_UID
     * @param string $USR_UID
     * @return $this->rolesObj->deleteUserRole
     */
    public function deleteUserRole ($ROL_UID, $USR_UID)
    {
        return $this->rolesObj->deleteUserRole( $ROL_UID, $USR_UID );
    }

    /**
     * this function gets all user
     *
     *
     * @access public
     *
     * @param string $ROL_UID
     * @return $this->rolesObj->getAllUsers
     */
    public function getAllUsers ($ROL_UID, $filter = '')
    {
        throw new Exception(__METHOD__ . ': The method is deprecated');
    }

    /**
     * this function assigns role an user
     *
     *
     * @access public
     *
     * @param array $aData
     * @return $this->rolesObj->assignUserToRole
     */
    public function assignUserToRole ($aData)
    {
        return $this->rolesObj->assignUserToRole( $aData );
    }

    /**
     * this function gets role permission
     *
     *
     * @access public
     *
     * @param string $ROL_UID
     * @return $this->rolesObj->getRolePermissionsByPerUid
     */
    public function getRolePermissionsByPerUid($ROL_UID)
    {
        return $this->rolesObj->getRolePermissionsByPerUid($ROL_UID);
    }

    /**
     * this function is Assigne role permission
     *
     *
     * @access public
     *
     * @param string $ROL_UID
     * @return $this->rolesObj->isAssigneRolePermission
     */
    public function getPermissionAssignedRole($ROL_UID, $PER_UID)
    {
        return $this->rolesObj->getPermissionAssignedRole($ROL_UID, $PER_UID);
    }

    /**
     * this function gets role permission
     *
     *
     * @access public
     *
     * @param string $ROL_UID
     * @return $this->rolesObj->getRolePermissions
     */
    public function getRolePermissions ($ROL_UID, $filter = '', $status = null)
    {
        return $this->rolesObj->getRolePermissions( $ROL_UID, $filter, $status );
    }

    /**
     * this function gets all permissions
     *
     *
     * @access public
     *
     * @param string $ROL_UID
     * @param string $PER_SYSTEM
     * @return $this->rolesObj->getAllPermissions
     */
    public function getAllPermissions ($ROL_UID, $PER_SYSTEM = "", $filter = '', $status = null)
    {
        return $this->rolesObj->getAllPermissions( $ROL_UID, $PER_SYSTEM, $filter, $status );
    }

    /**
     * this function assigns permissions and role
     *
     *
     * @access public
     *
     * @param array $aData
     * @return $this->rolesObj->assignPermissionRole
     */
    public function assignPermissionRole ($sData)
    {
        return $this->rolesObj->assignPermissionRole( $sData );
    }

    /**
     * this function assigns permissions to a role
     *
     *
     * @access public
     *
     * @param string $sRoleUID
     * @param string $sPermissionUID
     * @return $this->rolesPermissionsObj->create
     */
    public function assignPermissionToRole ($sRoleUID, $sPermissionUID)
    {
        return $this->rolesPermissionsObj->create( array ('ROL_UID' => $sRoleUID,'PER_UID' => $sPermissionUID ) );
    }

    /**
     * this function removes permission to role
     *
     *
     * @access public
     *
     * @param string $ROL_UID
     * @param string $PER_UID
     * @return $this->rolesObj->deletePermissionRole
     */
    public function deletePermissionRole ($ROL_UID, $PER_UID)
    {
        return $this->rolesObj->deletePermissionRole( $ROL_UID, $PER_UID );
    }

    /**
     * this function counts number of user without role
     *
     *
     * @access public
     *
     * @param string $ROL_UID
     * @return $this->rolesObj->numUsersWithRole
     */
    public function numUsersWithRole ($ROL_UID)
    {
        return $this->rolesObj->numUsersWithRole( $ROL_UID );
    }

    /**
     * this function creates system code
     *
     *
     * @access public
     *
     * @param string $sCode
     * @return $this->systemObj->create
     */
    public function createSystem ($sCode)
    {
        return $this->systemObj->create( array ('SYS_CODE' => $sCode
        ) );
    }

    /**
     * this function checks by code
     *
     *
     * @access public
     *
     * @param string $sCode
     * @return $this->rolesObj->verifyByCode
     */
    public function verifyByCode ($sCode)
    {
        return $this->rolesObj->verifyByCode( $sCode );
    }

    /**
     * this function gets all authentication source
     * Authentication Sources
     *
     * @access public
     *
     * @param void
     * @return $this->authSourcesObj->getAllAuthSources()
     */

    public function getAllAuthSources ()
    {
        return $this->authSourcesObj->getAllAuthSources();
    }

    /**
     * this function gets all authentication source
     * Authentication Sources By User
     *
     * @access public
     * @author Enrique Ponce de Leon <enrique@colosa.com>
     * @param void
     * @return $this->authSourcesObj->getAllAuthSources()
     */

    public function getAllAuthSourcesByUser ()
    {
        return $this->authSourcesObj->getAllAuthSourcesByUser();
    }

    /**
     * this function gets all authentication source
     * Authentication Sources based at parameters
     *
     * @access public
     * @author Enrique Ponce de Leon <enrique@colosa.com>
     * @param int $start offset value to paging grid
     * @param int $limit limit value to paging grid
     * @param string $filter value to search or filter select
     * @return $this->authSourcesObj->getAuthenticationSources()
     */

    public function getAuthenticationSources ($start, $limit, $filter = '')
    {
        return $this->authSourcesObj->getAuthenticationSources( $start, $limit, $filter );
    }

    /**
     * this function gets all authentication source
     * Authentication Sources
     *
     * @access public
     *
     * @param string $sUID
     * @return $this->authSourcesObj->load
     */
    public function getAuthSource ($sUID)
    {
        $data = $this->authSourcesObj->load( $sUID );
        $pass = explode( "_", $data['AUTH_SOURCE_PASSWORD'] );
        foreach ($pass as $index => $value) {
            if ($value == '2NnV3ujj3w') {
                $data['AUTH_SOURCE_PASSWORD'] = G::decrypt( $pass[0], $data['AUTH_SOURCE_SERVER_NAME'] );
            }
        }
        $this->authSourcesObj->Fields = $data;
        return $this->authSourcesObj->Fields;
    }

    /**
     * this function creates an authentication source
     * Authentication Sources
     *
     * @access public
     *
     * @param array $aData
     * @return $this->authSourcesObj->create
     */
    public function createAuthSource ($aData)
    {
        $aData['AUTH_SOURCE_PASSWORD'] = G::encrypt( $aData['AUTH_SOURCE_PASSWORD'], $aData['AUTH_SOURCE_SERVER_NAME'] ) . "_2NnV3ujj3w";
        $this->authSourcesObj->create( $aData );
    }

    /**
     * this function updates an authentication source
     * Authentication Sources
     *
     * @access public
     *
     * @param array $aData
     * @return $this->authSourcesObj->create
     */
    public function updateAuthSource ($aData)
    {
        $aData['AUTH_SOURCE_PASSWORD'] = G::encrypt( $aData['AUTH_SOURCE_PASSWORD'], $aData['AUTH_SOURCE_SERVER_NAME'] ) . "_2NnV3ujj3w";
        $this->authSourcesObj->update( $aData );
    }

    /**
     * this function removes an authentication source
     * Authentication Sources
     *
     * @access public
     *
     * @param string $sUID
     * @return $this->authSourcesObj->remove
     */
    public function removeAuthSource ($sUID)
    {
        $this->authSourcesObj->remove( $sUID );
    }

    /**
     * this function gets all users by authentication source
     *
     * @access public
     *
     * @param void
     * @return $this->userObj->getAllUsersByAuthSource()
     */

    public function getAllUsersByAuthSource ()
    {
        return $this->userObj->getAllUsersByAuthSource();
    }

    /**
     * this function gets all users by authentication source
     *
     * @access public
     *
     * @param void
     * @return $this->userObj->getAllUsersByAuthSource()
     */

    public function getListUsersByAuthSource ($aSource)
    {
        return $this->userObj->getListUsersByAuthSource( $aSource );
    }

    /**
     * this function searchs users
     *
     *
     * @access public
     *
     * @param string $sUID
     * @param string $sKeyword
     * @return array
     */
    public function searchUsers ($sUID, $sKeyword)
    {
        $aAuthSource = $this->getAuthSource( $sUID );
        $sAuthType = strtolower( $aAuthSource['AUTH_SOURCE_PROVIDER'] );
        foreach ($this->aRbacPlugins as $sClassName) {
            if (strtolower( $sClassName ) == $sAuthType) {
                $plugin = new $sClassName();
                $plugin->sAuthSource = $sUID;
                $plugin->sSystem = $this->sSystem;
                return $plugin->searchUsers( $sKeyword );
            }
        }
        return array ();
    }

    public function requirePermissions ($permissions)
    {
        $numPerms = func_num_args();
        $permissions = func_get_args();

        $access = - 1;

        if ($numPerms == 1) {
            $access = $this->userCanAccess( $permissions[0] );
        } elseif ($numPerms > 0) {
            foreach ($permissions as $perm) {
                $access = $this->userCanAccess( $perm );
                if ($access == 1) {
                    $access = 1;
                    break;
                }
            }
        } else {
            throw new Exception( 'function requirePermissions() ->ERROR: Parameters missing!' );
        }

        if ($access == 1) {
            return true;
        } else {
            switch ($access) {
                case - 2:
                    G::SendTemporalMessage( 'ID_USER_HAVENT_RIGHTS_SYSTEM', 'error', 'labels' );
                    G::header( 'location: ../login/login' );
                    break;
                case - 1:
                default:
                    G::SendTemporalMessage( 'ID_USER_HAVENT_RIGHTS_PAGE', 'error', 'labels' );
                    G::header( 'location: ../login/login' );
                    break;
            }
            exit( 0 );
        }
    }

    private function getAllFiles ($directory, $recursive = true)
    {
        $result = array ();
        if (is_dir( $directory )) {
            $handle = opendir( $directory );
            while ($datei = readdir( $handle )) {
                if (($datei != '.') && ($datei != '..')) {
                    $file = $directory . $datei;
                    if (is_dir( $file )) {
                        if ($recursive) {
                            $result = array_merge( $result, getAllFiles( $file . '/' ) );
                        }
                    } else {
                        $result[] = $file;
                    }
                }
            }
            closedir( $handle );
        }
        return $result;
    }

    private function getFilesTimestamp ($directory, $recursive = true)
    {
        $allFiles = self::getAllFiles( $directory, $recursive );
        $fileArray = array ();
        foreach ($allFiles as $val) {
            $timeResult['file'] = $val;
            $timeResult['timestamp'] = filemtime( $val );
            $fileArray[] = $timeResult;
        }
        return $fileArray;
    }

    public function cleanSessionFiles ($hours = 72)
    {
        $currentTime = strtotime( "now" );
        $timeDifference = $hours * 60 * 60;
        $limitTime = $currentTime - $timeDifference;
        $sessionsPath = PATH_DATA . 'session' . PATH_SEP;
        $filesResult = self::getFilesTimestamp( $sessionsPath );
        $count = 0;
        foreach ($filesResult as $file) {
            if ($file['timestamp'] < $limitTime) {
                unlink( $file['file'] );
                $count ++;
            }
        }
    }
    /**
     * this function permissions
     *
     *
     * @access public
     *
     */
    public function verifyPermissions()
    {
        $message = array();
        $listPermissions = $this->loadPermissionAdmin();
        $criteria = new Criteria('rbac');
        $dataset = PermissionsPeer::doSelectRS($criteria);
        $dataset->setFetchmode(ResultSet::FETCHMODE_ASSOC);
        $dataset->next();
        $aRow = $dataset->getRow();
        while (is_array($aRow)) {
            foreach ($listPermissions as $key => $item) {
                if ($aRow['PER_UID'] == $item['PER_UID']) {
                    unset($listPermissions[$key]);
                    break;
                }
            }
            $dataset->next();
            $aRow = $dataset->getRow();
        }
        foreach ($listPermissions as $key => $item) {
            //Adding new permissions
            $data = array();
            $data['PER_UID'] = $item['PER_UID'];
            $data['PER_CODE'] = $item['PER_CODE'];
            $data['PER_CREATE_DATE'] = date('Y-m-d H:i:s');
            $data['PER_UPDATE_DATE'] = $data['PER_CREATE_DATE'];
            $data['PER_STATUS'] = 1;
            $permission = new Permissions();
            $permission->fromArray($data, BasePeer::TYPE_FIELDNAME);
            $permission->save();
            $message[] = 'Add permission missing ' . $item['PER_CODE'];
            //Adding new labels for new permissions
            $o = new RolesPermissions();
            $o->setPerUid($item['PER_UID']);
            $o->setPermissionName($item['PER_NAME']);
            //assigning new permissions
            $this->assigningNewPermissionsPmSetup($item);
            $this->assigningNewPermissionsPmEditProfile($item);
        }
        return $message;
    }

    /**
     * Permissions for tab ADMIN
     * @param array $item
     */
    public function assigningNewPermissionsPmSetup($item = array())
    {
        if (strpos($item['PER_CODE'], 'PM_SETUP_') !== false) {
            $rolesWithPermissionSetup = $this->getRolePermissionsByPerUid(self::SETUPERMISSIONUID);
            $rolesWithPermissionSetup->next();
            while ($aRow = $rolesWithPermissionSetup->getRow()) {
                $isAssignedNewpermissions = $this->getPermissionAssignedRole($aRow['ROL_UID'], $item['PER_UID']);
                if (!$isAssignedNewpermissions) {
                    $dataPermissions = array();
                    $dataPermissions['ROL_UID'] = $aRow['ROL_UID'];
                    $dataPermissions['PER_UID'] = $item['PER_UID'];
                    $this->assignPermissionRole($dataPermissions);
                }
                $rolesWithPermissionSetup->next();
            }
        }
    }

    /**
     * Permissions for Edit Profile User
     * @param array $item
     */
    public function assigningNewPermissionsPmEditProfile($item = array())
    {
        if (strpos($item['PER_CODE'], 'PM_EDIT_USER_PROFILE_') !== false) {
            $allRolesRolUid = $this->getAllRoles('PROCESSMAKER');
            $perCodePM = array('PROCESSMAKER_ADMIN', 'PROCESSMAKER_OPERATOR', 'PROCESSMAKER_MANAGER');
            $permissionsForOperator = array(
                'PM_EDIT_USER_PROFILE_POSITION',
                'PM_EDIT_USER_PROFILE_REPLACED_BY',
                'PM_EDIT_USER_PROFILE_EXPIRATION_DATE',
                'PM_EDIT_USER_PROFILE_STATUS',
                'PM_EDIT_USER_PROFILE_ROLE',
                'PM_EDIT_USER_PROFILE_COSTS',
                'PM_EDIT_USER_PROFILE_USER_MUST_CHANGE_PASSWORD_AT_NEXT_LOGON',
                'PM_EDIT_USER_PROFILE_DEFAULT_MAIN_MENU_OPTIONS',
                'PM_EDIT_USER_PROFILE_DEFAULT_CASES_MENU_OPTIONS'
            );
            foreach ($allRolesRolUid as $index => $aRow) {
                $isAssignedNewpermissions = $this->getPermissionAssignedRole($aRow['ROL_UID'], $item['PER_UID']);
                $assignPermissions = true;
                if (!$isAssignedNewpermissions) {
                    if ($aRow['ROL_CODE'] == 'PROCESSMAKER_OPERATOR' && in_array($item['PER_CODE'], $permissionsForOperator)) {
                        $assignPermissions = false;
                    }
                    if (!in_array($aRow['ROL_CODE'], $perCodePM)) {
                        $assignPermissions = false;
                        $checkPermisionEdit = $this->getPermissionAssignedRole($aRow['ROL_UID'], '00000000000000000000000000000014');
                        if ($checkPermisionEdit && !in_array($item['PER_CODE'], $permissionsForOperator)) {
                            $assignPermissions = true;
                        }
                    }
                    if ($assignPermissions) {
                        $dataPermissions = array();
                        $dataPermissions['ROL_UID'] = $aRow['ROL_UID'];
                        $dataPermissions['PER_UID'] = $item['PER_UID'];
                        $this->assignPermissionRole($dataPermissions);
                    }
                }
            }
        }
    }
    /**
     * This function verify if the user allows to the file with a specific action
     * If the action is not defined in the authorizedActions we give the allow
     * @param string $file
     * @param string $action
     *
     * @return void
     */
    public function allows($file, $action)
    {
        $access = false;
        if (isset($this->authorizedActions[$file][$action])) {
            $permissions = $this->authorizedActions[$file][$action];
            $totalPermissions = count($permissions);
            $countAccess = 0;
            foreach ($permissions as $key => $value) {
                if ($this->userCanAccess($value) == 1) {
                    $countAccess++;
                }
            }
            //Check if the user has all permissions that needed
            if ($countAccess == $totalPermissions) {
                $access = true;
            }
        }

        if (!$access) {
            G::header('Location: /errors/error403.php');
            die();
        }
    }
}

