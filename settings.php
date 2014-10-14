<?php 

define('PLUGIN_ROOT_PAGE' , 'inbox');

define('CLASSES_DIR' , 'classes');
define('NO_ACCESS_MESSAGE' , 'You do not have sufficient permissions to access this page.');

define('GROUPS_DB_TABLE' , 'mentorz_groups');
define('USER_GROUPS_DB_TABLE' , 'mentorz_user_groups');

require_once( CLASSES_DIR . '/' . 'Functions.php');
require_once( CLASSES_DIR . '/' . 'Mentorz.php');
require_once( CLASSES_DIR . '/' . 'Pages.php');
require_once( CLASSES_DIR . '/' . 'Generator.php');