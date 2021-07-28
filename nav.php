<?php

use Tsugi\UI\Menu;

$OUTPUT->bodyStart();
$R = $CFG->apphome . '/';
$T = $CFG->wwwroot . '/';
$adminmenu = isset($_COOKIE['adminmenu']) && $_COOKIE['adminmenu'] == "true";
$loggedin = isset($_SESSION['id']);

// Make the menus
$set = new \Tsugi\UI\MenuSet();
$set->setHome($CFG->servicename, $CFG->apphome);
if ( isset($CFG->lessons) ) {
    $set->addLeft('Lessons', $R.'lessons');
}
if ( isset($CFG->topics) ) {
    $set->addLeft('Topics', $R.'topics');
}
if ( $loggedin ) {
	$set->addLeft('Assignments', $R.'assignments');

    if ( isset($CFG->badge_encrypt_password) && $CFG->badge_encrypt_password ) {
        $set->addLeft('Badges', $R.'badges');
    }

    if ( isset($_SESSION["admin"])) {
        $set->addLeft('Badge Admin', $R.'badgeadmin');
    }
} else {
    $set->addLeft('Assignments', 'javascript:void(0);', false, false, true, 'Log in to access the Assignments page');

    if ( isset($CFG->badge_encrypt_password) && $CFG->badge_encrypt_password ) {
        $set->addLeft('Badges', 'javascript:void(0);', false, false, true, 'Log in to access the Badges page');
    }
}

if ( $loggedin ) {
    $submenu = new Menu();
    $submenu->addLink('Profile', $R.'profile');
    if ( isset($CFG->google_map_api_key) && $CFG->google_map_api_key ) {
        $submenu->addLink('Map', $R.'map');
    }
    if ( $CFG->providekeys ) {
        $submenu->addLink('LMS Integration', $T . 'settings');
    }
    if ( isset($CFG->google_classroom_secret) ) {
        $submenu->addLink('Google Classroom', $T.'gclass/login');
    }
    if ( isset($_COOKIE['adminmenu']) && $_COOKIE['adminmenu'] == "true" ) {
        $submenu->addLink('Administer', $T . 'admin/');
    }
    $submenu->addLink('Logout', $R.'logout');
    if ( isset($_SESSION['avatar']) ) {
        $set->addRight('<img src="'.$_SESSION['avatar'].'" alt="'.htmlentities($_SESSION['displayname']).'" class="img-circle"/>', $submenu);
        // htmlentities($_SESSION['displayname']), $submenu);
    } else {
        $set->addRight(htmlentities($_SESSION['displayname']), $submenu);
    }
} else {
    $set->addRight('Login', $T.'login.php');
}

$set->addRight('Isidore <span class="fas fa-external-link-alt" aria-hidden="true"></span>', 'https://isidore.udayton.edu/portal');

$elearningMenu = new Menu();
$elearningMenu->addLink('Keep Teaching <span class="fas fa-external-link-alt" aria-hidden="true"></span>', 'http://go.udayton.edu/keepteaching');
$elearningMenu->addLink('Blog <span class="fas fa-external-link-alt" aria-hidden="true"></span>', 'https://udayton.edu/blogs/onlinelearning/index.php');
$elearningMenu->addLink('Contact Us', $R.'contact');

$set->addRight('Online Learning Resources', $elearningMenu);

// Set the topNav for the session
$OUTPUT->topNavSession($set);

$OUTPUT->topNav();
$OUTPUT->flashMessages();
