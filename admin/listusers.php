<?php
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (wishy@users.sf.net)
#Visit our homepage at: http://www.cmsmadesimple.org
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#$Id: listusers.php 10865 2016-10-28 12:25:56Z rolf1 $

$CMS_ADMIN_PAGE = 1;
require_once ('../lib/include.php');

check_login();
$userid = get_userid();

if (!check_permission($userid, 'Manage Users')) {
    die('Permission Denied');
    return;
}

/*--------------------
 * Variables
 ---------------------*/

$urlext       = '?' . CMS_SECURE_PARAM_NAME . '=' . $_SESSION[CMS_USER_KEY];
$gCms         = cmsms();
$db           = $gCms->GetDb();
$templateuser = cms_siteprefs::get('template_userid');
$page         = 1;
$limit        = 100;
$message      = '';
$error        = '';
$userops      = UserOperations::get_instance();

/*--------------------
 * Logic
 ---------------------*/

if (isset($_GET["toggleactive"])) {
    if ($_GET["toggleactive"] == 1) {
        $error .= "<li>" . lang('errorupdatinguser') . "</li>";
    } else {

        $thisuser = $userops->LoadUserByID($_GET["toggleactive"]);

        if ($thisuser) {

            // modify users, is this enough?
            $userid = get_userid();

            $result = false;
            $thisuser->active == 1 ? $thisuser->active = 0 : $thisuser->active = 1;
            Events::SendEvent('Core', 'EditUserPre', array('user' => $thisuser));
            $result = $thisuser->save();

            if ($result) {
                // put mention into the admin log
                audit($userid, 'Admin Username: ' . $thisuser->username, 'Edited');
                Events::SendEvent('Core', 'EditUserPost', array('user' => $thisuser));
            } else {
                $error .= "<li>" . lang('errorupdatinguser') . "</li>";
            }
        }
    }
} else if (isset($_POST['bulk']) && isset($_POST['bulkaction']) && isset($_POST['multiselect']) && is_array($_POST['multiselect']) && count($_POST['multiselect'])) {
    switch( $_POST['bulkaction'] ) {
        case 'delete' :
            $ndeleted = 0;
            foreach ($_POST['multiselect'] as $uid) {
                $uid = (int)$uid;
                if ($uid <= 1)
                    continue; // can't delete the magic user...

                if ($uid == get_userid())
                    continue; // can't delete self.

                $oneuser = $userops->LoadUserById($uid);
                if (!is_object($oneuser))
                    continue; // invalid user

                $ownercount = $userops->CountPageOwnershipById($uid);
                if ($ownercount > 0)
                    continue; // can't delete user who owns pages.

                // ready to delete.
                Events::SendEvent('Core', 'DeleteUserPre', array('user' => &$oneuser));
                $oneuser->Delete();
                Events::SendEvent('Core', 'DeleteUserPost', array('user' => &$oneuser));
                audit($uid, 'Admin Username: ' . $oneuser->username, 'Deleted');
                $ndeleted++;
            }
            if ($ndeleted > 0) {
                $message = lang('msg_userdeleted', $ndeleted);
            }
            break;

        case 'clearoptions' :
            $nusers = 0;
            foreach ($_POST['multiselect'] as $uid) {
                $uid = (int)$uid;
                if ($uid <= 1)
                    continue; // can't edit the magic user...

                $oneuser = $userops->LoadUserById($uid);
                if (!is_object($oneuser))
                    continue; // invalid user

                Events::SendEvent('Core', 'EditUserPre', array('user' => $oneuser));
                cms_userprefs::remove_for_user($uid);
                Events::SendEvent('Core', 'EditUserPost', array('user' => $oneuser));
                audit($uid, 'Admin Username: ' . $oneuser->username, 'Settings cleared');
                $nusers++;
            }
            if ($nusers > 0) {
                $message = lang('msg_usersedited', $nusers);
            }
            break;

        case 'copyoptions' :
            $nusers = 0;
            if (isset($_POST['userlist'])) {
                $fromuser = (int)$_POST['userlist'];
                if ($fromuser > 0) {
                    $prefs = cms_userprefs::get_all_for_user($fromuser);
                    if (is_array($prefs) && count($prefs)) {
                        foreach ($_POST['multiselect'] as $uid) {
                            $uid = (int)$uid;
                            if ($uid <= 1)
                                continue; // can't edit the magic user...

                            if ($uid == $fromuser)
                                continue; // can't overwrite the same users prefs.

                            $oneuser = $userops->LoadUserById($uid);
                            if (!is_object($oneuser))
                                continue; // invalid user

                            Events::SendEvent('Core', 'EditUserPre', array('user' => $oneuser));
                            cms_userprefs::remove_for_user($uid);
                            foreach ($prefs as $k => $v) {
                                cms_userprefs::set_for_user($uid, $k, $v);
                            }
                            Events::SendEvent('Core', 'EditUserPost', array('user' => $oneuser));
                            audit($uid, 'Admin Username: ' . $oneuser->username, 'Settings cleared');
                            $nusers++;
                        }
                    }
                }
            }
            if ($nusers > 0) {
                $message = lang('msg_usersedited', $nusers);
            }
            break;

        case 'disable' :
            $nusers = 0;
            foreach ($_POST['multiselect'] as $uid) {
                $uid = (int)$uid;
                if ($uid <= 1)
                    continue; // can't disable the magic user...

                if ($uid == get_userid())
                    continue; // can't disable self.

                $oneuser = $userops->LoadUserById($uid);
                if (!is_object($oneuser))
                    continue; // invalid user

                if ($oneuser->active) {
                    Events::SendEvent('Core', 'EditUserPre', array('user' => $oneuser));
                    $oneuser->active = 0;
                    $oneuser->save();
                    Events::SendEvent('Core', 'EditUserPost', array('user' => $oneuser));
                    audit($uid, 'Admin Username: ' . $oneuser->username, 'Disabled');
                    $nusers++;
                }
            }
            if ($nusers > 0) {
                $message = lang('msg_usersedited', $nusers);
            }
            break;

        case 'enable' :
            $nusers = 0;
            foreach ($_POST['multiselect'] as $uid) {
                $uid = (int)$uid;
                if ($uid <= 1)
                    continue; // can't disable the magic user...

                if ($uid == get_userid())
                    continue; // can't disable self.

                $oneuser = $userops->LoadUserById($uid);
                if (!is_object($oneuser))
                    continue; // invalid user

                if (!$oneuser->active) {
                    Events::SendEvent('Core', 'EditUserPre', array('user' => $oneuser));
                    $oneuser->active = 1;
                    $oneuser->save();
                    Events::SendEvent('Core', 'EditUserPost', array('user' => $oneuser));
                    audit($uid, 'Admin Username: ' . $oneuser->username, 'Enabled');
                    $nusers++;
                }
            }
            if ($nusers > 0) {
                $message = lang('msg_usersedited', $nusers);
            }
            break;
    }
}

/*--------------------
 * Display view
 ---------------------*/

include_once ('header.php');

if (false == empty($error)) {
    echo $themeObject->ShowErrors('<ul class="error">' . $error . '</ul>');
}
if (isset($_GET["message"])) {
    $message = preg_replace('/\</', '', $_GET['message']);
}
if (false == empty($message)) {
    echo '<div class="pagemcontainer"><p class="pagemessage">' . $message . '</p></div>';
}

$out      = array();
$offset   = ((int)$page - 1) * $limit;
$userlist = $userops->LoadUsers($limit, $offset);

foreach ($userlist as $one) {
    $out[$one->id] = $one->username;
}

foreach ($userlist as &$oneuser) {
    $oneuser->access_to_user = 1;

    if ($userops->UserInGroup($oneuser->id, 1) && !$userops->UserInGroup($userid, 1)) {
        $oneuser->access_to_user = 0;
    }

    $oneuser->pagecount = $userops->CountPageOwnershipById($oneuser->id);
}

$smarty->assign('users', $userlist);
$smarty->assign('my_userid', get_userid());
$smarty->assign('urlext', $urlext);
$smarty->assign('userlist', $out);

$smarty->display('listusers.tpl');

include_once ('footer.php');

?>