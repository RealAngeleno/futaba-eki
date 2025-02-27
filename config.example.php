<?php

const LOCKDOWN = false;				//Set to true to disable page viewing for users (not for managers)

// General settings
const TITLE = 'Futaba image board';	//Name of this imageboard
const SHOWTITLETXT = 1;				//Show TITLE at top (1: yes, 0: no)
const SHOWTITLEIMG = 0;				//Show image at top (0: no, 1: single, 2: rotating)
const BANNERS = array('title1.png', 'title2.png');	// Banners for SHOWTITLEIMG=2
const TITLEIMG = 'title.png';			//Title image for SHOWTITLEIMG=1
const LANGUAGE = 'en';				//Language. (en or ja?)
const FOOTTEXT = '';				//Extra footer text, for disclaimers and such. Can be left empty.
const POSTNOTES = '';				//Added as <li>Item1</li><li>Item2</li>. Can be left empty.
const SITEURL = 'CHANGEME';	//URL path that the board is running on. Ex. world2ch.net/imgboard/
const SECURESALT = 'CHANGEME';			//Salt for Secure tripcodes (not yet enabled) and IP address hashing.

// Database settings
const POSTTABLE = 'posts';			//Post table (NOT DATABASE)
const BANTABLE = 'bans';			//Bans table (NOT DATABASE)
const MANATABLE = 'managers';			//Manager (admin, mod, janitor) table
const SQLHOST = 'localhost';			//MySQL server address, usually localhost
const SQLUSER = 'CHANGEME';			//MySQL user (must be changed)
const SQLPASS = 'CHANGEME';			//MySQL user's password (must be changed)
const SQLDB = 'CHANGEME';			//Database used by image board
const HASHIPS = false;			//Do not store user IPs and instead a unique hash.

// File-related settings
const IMG_DIR = 'src/';				//Image directory (needs to be 777)
const THUMB_DIR = 'thumb/';			//Thumbnail directory (needs to be 777)
const HOME = '../';				//Site home directory (up one level by default
const MAX_KB = 5000;				//Maximum upload size in KB
const MAX_W = 250;				//Images exceeding this width will be thumbnailed
const MAX_H = 250;				//Images exceeding this height will be thumbnailed
const SWF_ENABLED = false;			//Whether or not upload of Flash files is allowed
const WEBM_ENABLED = true;			//Whether or not upload of WebM files is allowed
const OEKAKI_ENABLED = false;			//Whether or not oekaki is enabled
const FORCEIMAGE = false;			//Whether or not threads must start with an image
const USE_THUMB = true;				//Use thumbnails
const PHP_SELF = 'imgboard.php';		//Name of main script file (if ECHOALL, you probably want 'index.php')
const PHP_SELF2 = 'index.html';			//Name of main html file (point to PHP_SELF if ECHOALL)
const PHP_EXT = '.html';			//Extension used for board pages after first
const THUMBBACK = array(255,255,238);		//Thumbnail background for transp. images. Usually the background of your body element.

// Look and behavior
const ECHOALL = false;				//Do not write index to file, but echo directly (not very stable, not recommended)
const PAGE_DEF = 15;				//Threads per page
const THREADLIMIT = 150;			//Maxium number of entries
const BUMPLIMIT = 300;				//Maximum topic bumps
const COLLAPSENUM = 5;				//Number of replies to show in the index
const TRIPKEY = '!';				//this character is displayed before tripcodes
const CUSHIONURL = '';				//URL for a referral cushion. e.g. '//jump.x0.to/' Disabled if empty.
const IMGOPS_ENABLED = true;		//Enables Imgops Link for images.

// Spam/flood protection
const RENZOKU = 5;				//Seconds between posts (floodcheck)
const RENZOKU2 = 10;				//Seconds between image posts (floodcheck)
const BR_CHECK = 50;				//Max lines per post (0 = no limit)
const PROXY_CHECK = false;			//Enable proxy check
const DISP_ID = false;				//Display user IDs
const FORCED_ANON = false;			//Enable forced anonymity (except for managers)
const BANMOBILE = false;			//Bans mobile users from posting/replying.
const BADSTRING = array();			//Posts containing any of these strings will be discarded (can be a nuisance, use with care)
const BADFILE = array();			//Files to be discarded (md5 hashes)

// Captcha. Make sure only one mode is enabled.
const RECAPTCHA_ENABLED = false;		//Enable Google's reCAPTCHA.
const RECAPTCHASITEKEY = "";			//Your site key for reCAPTCHA. MUST be set if reCAPTCHA is enabled.
const RECAPTCHASECRETKEY = "";			//Your secret key for reCAPTCHA. MUST be set if reCAPTCHA is enabled.
const KAPTCHA_ENABLED = false;			//Must be set to false. Not functional. For KolymaNET's Kaptcha.
const KAPTCHAKEY = "";				//Your Kaptcha key. MUST be set if Kaptcha is enabled.
const TRIVCAPTCHA_ENABLED = false;		//Enables a trivia captcha. This is usually the best way to stop untargeted spam. Requires users to answer a question to post.      
const TRIVCAPTCHAQUESTIONS = array(		//Questions for Trivcaptcha. Entered as ["question" => "answer", "question 2"...]. Answers are case-insensitive.
	"What does /b/ stand for on 4chan?" => "Random",
	"What is Anon short for?" => "Anonymous");


// CSS
const CSSNAME = 'futaba';			//Name of the css file (excluding .css) you want in /css

const FILTERS = array(				// Wordfilters, in the format of IN => OUT
	"soy"		=>	'onions'
);
