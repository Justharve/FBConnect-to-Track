<?php

/**
 * @file
 * A single location to store configuration.
 */

// add your facebook credentials here
define('FACEBOOK_KEY', 'xxxxxxxxxxxxxxxxxxxxxx');
define('FACEBOOK_SECRET', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
define('FACEBOOK_FANPAGE_NAME', 'CASH Music');
define('FACEBOOK_FANPAGE_ID', '120327795611'); // click "edit this page" and see the id in the URL
define('FACEBOOK_FANPAGE_URL', 'http://www.facebook.com/cashmusic.org'); 

// the messages shown to the visitor
// no double-quotes please, escape single quotes with \'
define('WELCOME_MESSAGE', 'Just click the "Connect to Facebook" link below once you\'re a fan and you\'ll get a download link.');
define('ISAFAN_MESSAGE', 'Facebook says you\'re a fan, thanks! Just click below for your download:');
define('NOTAFAN_MESSAGE', 'Facebook reports that you\'re not listed as a fan. Please make sure you have \'fanned\' the <a href="'.FACEBOOK_FANPAGE_URL.'">'.FACEBOOK_FANPAGE_NAME.' page</a> and try again.');

// facebook share settings - this is what shows up when a user clicks to share
// no double-quotes please, escape single quotes with \'
define('FACEBOOK_SHARE_TITLE', 'CASH Music\'s FBConnect To A Track');
define('FACEBOOK_SHARE_IMAGE', 'http://fbconnect.cashmusic.org/assets/images/fb_share_image.jpg'); // absolute path 100x100
define('FACEBOOK_SHARE_DESCRIPTION', 'CASH Music is offering free code that enables artists to set up a site for sharing free downloads with Facebook fans. You can download it here.');

// set secure download to true (for S3 security) or false for straight http download
define('SECURE_DOWNLOAD', false);
// set amazon credentials if you are using a secure download
define('AMAZONS3_KEY', 'xxxxxxxxxxxxxxxxxxxxxx');
define('AMAZONS3_SECRET', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
define('AMAZONS3_BUCKET', 'bucketname');

// set your download title
// escape single quotes with \'
define('DOWNLOAD_TITLE', 'downloadTitle');
// URL or amazon URI (if amazon, do not include bucket)
define('DOWNLOAD_URI', 'downloadURL');

// add a string to randomize the session variable names. or don't. whatever.
define('RANDOMIZE_SESSION', 'abcdef');
?>