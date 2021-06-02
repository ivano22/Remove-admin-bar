<?php
/*
Plugin Name: Admin-bar Remover
Plugin URI: http://techhub.com
description: a plugin that removes admin bar when you view website from dashboard.
Version: 1.2
Author: Ivan
Author URI: http://techhub.com
*/
//Remove the admin bar from the front end
add_filter('show_admin_bar', '_return_false');