<?php
//print_r($_POST); die;
/**
 * cases_UsersReassign.php
 *
 * ProcessMaker Open Source Edition
 * Copyright (C) 2004 - 2008 Colosa Inc.23
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
 */

try {
    global $RBAC;
    switch ($RBAC->userCanAccess( 'PM_REASSIGNCASE' )) {
        case - 2:
            G::SendTemporalMessage( 'ID_USER_HAVENT_RIGHTS_SYSTEM', 'error', 'labels' );
            G::header( 'location: ../login/login' );
            die();
            break;
        case - 1:
            G::SendTemporalMessage( 'ID_USER_HAVENT_RIGHTS_PAGE', 'error', 'labels' );
            G::header( 'location: ../login/login' );
            die();
            break;
    }
    G::LoadClass( 'case' );
    $oCase = new Cases();
    $aCases = array ();
    $aUsers = array ();
    $c = 0;
    if (isset( $_POST['USERS'] )) {
        if (is_array( $_POST['USERS'] )) {
            foreach ($_POST['USERS'] as $sKey => $sUser) {
                if ($sUser != '') {
                    $c ++;
                    $oCase->reassignCase( $_POST['APPLICATIONS'][$sKey], $_POST['INDEXES'][$sKey], $_POST['USR_UID'], $sUser );
                    $aCases[] = $_POST['APPLICATIONS'][$sKey];
                    $aUsers[] = $sUser;
                }
            }
        }
    }
    G::LoadClass( 'case' );
    $oCase = new Cases();
    require_once 'classes/model/Users.php';
    $oUser = new Users();
    $sText = '';
    foreach ($aCases as $sKey => $sCase) {
        $aCase = $oCase->loadCase( $sCase );
        $aUser = $oUser->load( $aUsers[$sKey] );
        $sText .= $aCase['TITLE'] . ' => ' . $aUser['USR_FIRSTNAME'] . ' ' . $aUser['USR_LASTNAME'] . ' (' . $aUser['USR_USERNAME'] . ')' . '<br />';
    }

    $G_MAIN_MENU = 'processmaker';
    $G_SUB_MENU = 'users';
    $G_ID_MENU_SELECTED = 'USERS';
    $G_ID_SUB_MENU_SELECTED = 'USERS';
    $G_PUBLISH = new Publisher();

    $aMessage['USR_UID'] = $_POST['USR_UID'];

    $aMessage['MESSAGE'] = $sText;
    if ($_POST['CONT'] != $c)
        $aMessage['EVA'] = G::LoadTranslation( 'ID_CASESREASSIGN' ); //
    else
        $aMessage['EVA'] = '';

    $G_PUBLISH->AddContent( 'xmlform', 'xmlform', 'users/users_ReassignShowInfo', '', $aMessage );
    G::RenderPage( 'publish' );
} catch (Exception $oException) {
    $token = strtotime("now");
    PMException::registerErrorLog($oException, $token);
    G::outRes( G::LoadTranslation("ID_EXCEPTION_LOG_INTERFAZ", array($token)) );
    die;
}

