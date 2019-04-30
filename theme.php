<?php

/**
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * @file
 * Magazine Theme for e107 v2.x.
 */

if(!defined('e107_INIT')) { exit; }

// [multilanguage]
e107::lan('theme'); // loads e107_themes/CURRENT_THEME/languages/English.php (when English is selected)

define("BOOTSTRAP", 3);
define("FONTAWESOME", 4);
define('VIEWPORT', "width=device-width, initial-scale=1.0");

e107::library('load', 'bootstrap');
e107::library('load', 'fontawesome');

// CDN provider for Bootswatch.
$cndPref = e107::pref('theme', 'cdn', 'cdnjs');

switch($cndPref) {

	case "jsdelivr":
	//	e107::css('url', 'https://cdn.jsdelivr.net/bootstrap/3.3.7/css/bootstrap.min.css');
	//	e107::css('url',    'https://cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css');
	//	e107::js("footer", "https://cdn.jsdelivr.net/bootstrap/3.3.6/js/bootstrap.min.js", 'jquery');
	break;			
	
	case "cdnjs":
	default:
	//	e107::css('url', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css');
	//	e107::css('url', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	//	e107::js("footer", "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js", 'jquery', 2);

}

/* @example prefetch  */
//e107::link(array('rel'=>'prefetch', 'href'=>THEME.'images/browsers.png'));

e107::js("theme", 			"js/jquery.lettering.js");  // 0.7.0   
e107::js("theme", 			"js/jquery.newsTicker.js");
e107::js("theme", 			"js/jquery.matchHeight.js");  
e107::js("theme", 			"js/custom.js");
                 

e107::js("footer-inline", 	"$('.e-tip').tooltip({container: 'body'})"); // activate bootstrap tooltips. 

// Legacy Stuff.
define('OTHERNEWS_COLS',false); // no tables, only divs. 
define('OTHERNEWS_LIMIT', 3); // Limit to 3. 
define('OTHERNEWS2_COLS',false); // no tables, only divs. 
define('OTHERNEWS2_LIMIT', 3); // Limit to 3.

// Theme disclaimer is displayed in your site disclaimer appended to the site disclaimer text.
// Uncomment the line below to set a theme disclaimer (remove the // ).
define('THEME_DISCLAIMER', "<br />".LAN_THEME_6.""); 

// applied before every layout.
// $LAYOUT['_header_'] = "";

// applied after every layout. 
// $LAYOUT['_footer_'] = "";

$LAYOUT = array();

// Default Header layout for ALL layouts
$LAYOUT['_header_'] = "
<div id='header' class='header'>
  <div class='container'>
    <div class='row'>
      <div class='header-navigation'>                                        
        <div class='navbar navbar-default navbar-fixed-top'>
          <div class='logo'>
            {SETIMAGE: h=38}
            <a href='".e_HTTP."index.php' title='{SITENAME}'>{LOGO}</a>
          </div>
          <div class='navbar-header'> 
            <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-navbar-collapse-1'>
              <span class='sr-only'>Toggle navigation</span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
            </button>
          </div>
          <div id='bs-navbar-collapse-1' class='collapse navbar-collapse'>                 
            {NAVIGATION=main}
            {BOOTSTRAP_USERNAV: placement=top} 
          </div> 
        </div>                      
      </div>
    </div>
  </div>
</div>
<div id='header-bottom' class='header-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='navbar navbar-default'>
        <div class='navbar-header'> 
          <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-navbar-collapse-2'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
        </div>
        <div id='bs-navbar-collapse-2' class='collapse navbar-collapse'>
          <ul class='nav navbar-nav'>                 
            {BOOTSTRAP_NEWS_CATEGORIES}
          </ul> 
          <div class='nav navbar-nav navbar-right'>
            {SEARCH}
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
{ALERTS}
";

// Default Footer layout for ALL layouts
$LAYOUT['_footer_'] = "
<div id='footer-upper' class='footer-upper'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-3 footer-upper-item'>
        <ul class='nav nav-pills nav-stacked'>
          <li class='bottom-nav-header'><h2>".LAN_THEME_9."</h2></li>                 
          {BOOTSTRAP_NEWS_CATEGORIES}
        </ul>
        {SETSTYLE=bottomside}
        {MENU=10}        
      </div>
      <div class='col-md-3 footer-upper-item'>
        {SETSTYLE=bottomside}
        {MENU=11}        
      </div>
      <div class='col-md-3 footer-upper-item'>
        {SETSTYLE=bottomside}
        {MENU=12}        
      </div>    
      <div class='col-md-3 footer-upper-item'>
        {SETSTYLE=bottomside}
        {MENU=13}        
      </div>              
    </div>
  </div>
</div>
<div id='footer-lower' class='footer-lower'>
  <div class='container'>
    <div class='row'>
      <div class='site-info'>
        <div class='col-md-6'>
          {SITEDISCLAIMER}
          {THEME_DISCLAIMER}
        </div>
        <div class='text-right col-md-4'>
          {XURL_ICONS: size=2x}
        </div>
        <div class='col-md-2'>
          <div class='text-right move-to-top'>
            <a href='#' class='top'><i class='fa fa-angle-double-up'></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>		
";


// Default layout 
$LAYOUT['magazine_two_columns'] =  "
<div id='page-content'>
  <div id='page-content-top'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-3'>
          <div class='sitename'><a href='".e_HTTP."index.php' title='{SITENAME}'>{SITENAME}</a></div>
          <div class='sitetag'>{SITETAG}</div>
        </div>
        <div class='col-md-6'>
          <div class='top-banner'>
            {SETIMAGE: w=560&h=70&crop=1}
            {BANNER=e107promo}
          </div>
        </div>
        <div class='col-md-3 text-right'>
          <div class='siteclock'>
            {BOOTSTRAP_DATE}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id='main-content'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-9'>
          <div class='centerside'>
            {SETSTYLE=centerside}
{---}  
          </div>
        </div>
        <div class='col-md-3'>
          <div class='social-connected'>
            {XURL_ICONS: type=facebook} 
            {XURL_ICONS: type=twitter}
            {XURL_ICONS: type=google-plus}
          </div>
          <div class='tabs-wrapper'> 
            <ul class='nav nav-tabs'>
              <li class='active'><a class='tab-1' href='#tab-1' data-toggle='tab'>".LAN_THEME_300."</a></li>
              <li><a class='tab-2' href='#tab-2' data-toggle='tab'>".LAN_THEME_301."</a></li>
              <li><a class='tab-3' href='#tab-3' data-toggle='tab'>".LAN_THEME_302."</a></li>
            </ul>
            <div class='tab-content'>
              <div id='tab-1' class='tab-pane fade in active'>
                {SETSTYLE=tabbedmenu}
                {MENU=20} 
              </div>
              <div id='tab-2' class='tab-pane fade'>
                {SETSTYLE=tabbedmenu}
                {MENU=21}  
              </div>
              <div id='tab-3' class='tab-pane fade'>
                {SETSTYLE=tabbedmenu}
                {MENU=22} 
              </div>
            </div>
          </div>    
          {SETSTYLE=rightside}
          {MENU=1}
          {MENU=2} 
        </div>        
      </div>
    </div>
  </div> 
</div>
";


// Layout for HOME -FRONTPAGE
$LAYOUT['magazine_home'] =  "
<div id='page-content'>
  <div id='page-content-top'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-3'>
          <div class='sitename'><a href='".e_HTTP."index.php' title='{SITENAME}'>{SITENAME}</a></div>
          <div class='sitetag'>{SITETAG}</div>
        </div>
        <div class='col-md-6'>
          <div class='top-banner'>
            {SETIMAGE: w=560&h=70&crop=1}
            {BANNER=e107promo}
          </div>
        </div>
        <div class='col-md-3 text-right'>
          <div class='siteclock'>
            {BOOTSTRAP_DATE}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id='featured-news'>
    <div class='container'>  
      <div class='row'>
        <div class='page-top-news'>
          {BOOTSTRAP_GRID_NEWS_FEATURES_TOP}         
        </div>
      </div>
    </div>
  </div>
  <div id='breaking-news'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-12'>
          <div class='breaking-news-inner'>
            <div class='pull-left breaking-news-latest'>".LAN_THEME_100."</div>
            <ul class='newsticker'>
              {BOOTSTRAP_NEWSTICKER}
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id='main-content'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-9'>
          <div id='news-container-1' class='news-container-1'>
            {BOOTSTRAP_GRID_NEWS_CAT_2}
          </div>
          <div id='news-container-2' class='news-container-2'>
            {BOOTSTRAP_GRID_NEWS_CAT_3}
          </div>
          <div id='banner-container-1' class='banner-container-1'>
            {SETIMAGE: w=720&h=90&crop=1}
            {BANNER=fizithemes_ad}
          </div>
          <div id='news-container-3' class='news-container-3'>
            {BOOTSTRAP_GRID_NEWS_CAT_5}
          </div>
          <div id='news-container-4' class='news-container-4'>
            <div class='row'>
              <div class='col-sm-6'>
                {BOOTSTRAP_GRID_NEWS_CAT_6}
              </div>
              <div class='col-sm-6'>
                {BOOTSTRAP_GRID_NEWS_CAT_9}
              </div>
            </div>            
          </div>
          <div id='news-container-5' class='news-container-5'>
            {BOOTSTRAP_GRID_NEWS_CAT_8}
          </div>
          <div id='news-container-6' class='news-container-6'>
            {BOOTSTRAP_GRID_NEWS_CAT_4}
          </div>
          <div id='news-container-7' class='news-container-7'>
            {BOOTSTRAP_GRID_NEWS_CAT_7}
          </div>
          <div class='row'>
            <div class='col-md-12'>
              <div class='page-bottom-news'>     
                {SETSTYLE=centerside}
                {MENU=3}
              </div>         
            </div>
          </div>
{---}          
        </div>
        <div class='col-md-3'>
          <div class='social-connected'>
            {XURL_ICONS: type=facebook} 
            {XURL_ICONS: type=twitter}
            {XURL_ICONS: type=google-plus}
          </div>
          <div class='tabs-wrapper'> 
            <ul class='nav nav-tabs'>
              <li class='active'><a class='tab-1' href='#tab-1' data-toggle='tab'>".LAN_THEME_300."</a></li>
              <li><a class='tab-2' href='#tab-2' data-toggle='tab'>".LAN_THEME_301."</a></li>
              <li><a class='tab-3' href='#tab-3' data-toggle='tab'>".LAN_THEME_302."</a></li>
            </ul>
            <div class='tab-content'>
              <div id='tab-1' class='tab-pane fade in active'>
                {SETSTYLE=tabbedmenu}
                {MENU=20} 
              </div>
              <div id='tab-2' class='tab-pane fade'>
                {SETSTYLE=tabbedmenu}
                {MENU=21}  
              </div>
              <div id='tab-3' class='tab-pane fade'>
                {SETSTYLE=tabbedmenu}
                {MENU=22} 
              </div>
            </div>
          </div>    
          {SETSTYLE=rightside}
          {MENU=1}
          {MENU=2} 
        </div>        
      </div>
    </div>  
  </div>
</div>
";


// Layout for FORUM 
$LAYOUT['magazine_full_width'] = "
<div id='page-content'>
  <div id='page-content-top'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-3'>
          <div class='sitename'><a href='".e_HTTP."index.php' title='{SITENAME}'>{SITENAME}</a></div>
          <div class='sitetag'>{SITETAG}</div>
        </div>
        <div class='col-md-6'>
          <div class='top-banner'>
            {SETIMAGE: w=560&h=70&crop=1}
            {BANNER=e107promo}
          </div>
        </div>
        <div class='col-md-3 text-right'>
          <div class='siteclock'>
            {BOOTSTRAP_DATE}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id='main-content'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-12'>
          <div class='centerside'>
            {SETSTYLE=centerside}
{---}  
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>
";


// Layout for EXTEND NEWS 
$LAYOUT['magazine_extend_news'] =  "
<div id='page-content'>
  <div id='page-content-top'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-3'>
          <div class='sitename'><a href='".e_HTTP."index.php' title='{SITENAME}'>{SITENAME}</a></div>
          <div class='sitetag'>{SITETAG}</div>
        </div>
        <div class='col-md-6'>
          <div class='top-banner'>
            {SETIMAGE: w=560&h=70&crop=1}
            {BANNER=e107promo}
          </div>
        </div>
        <div class='col-md-3 text-right'>
          <div class='siteclock'>
            {BOOTSTRAP_DATE}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id='main-content'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-9'>
          <div class='centerside'>
            {SETSTYLE=centerside}
{---}  
          </div>
        </div>
        <div class='col-md-3'>
          <div class='social-connected'>
            {XURL_ICONS: type=facebook} 
            {XURL_ICONS: type=twitter}
            {XURL_ICONS: type=google-plus}
          </div>
          <div class='tabs-wrapper'> 
            <ul class='nav nav-tabs'>
              <li class='active'><a class='tab-1' href='#tab-1' data-toggle='tab'>".LAN_THEME_300."</a></li>
              <li><a class='tab-2' href='#tab-2' data-toggle='tab'>".LAN_THEME_301."</a></li>
              <li><a class='tab-3' href='#tab-3' data-toggle='tab'>".LAN_THEME_302."</a></li>
            </ul>
            <div class='tab-content'>
              <div id='tab-1' class='tab-pane fade in active'>
                {SETSTYLE=tabbedmenu}
                {MENU=20} 
              </div>
              <div id='tab-2' class='tab-pane fade'>
                {SETSTYLE=tabbedmenu}
                {MENU=21}  
              </div>
              <div id='tab-3' class='tab-pane fade'>
                {SETSTYLE=tabbedmenu}
                {MENU=22} 
              </div>
            </div>
          </div>    
          {SETSTYLE=rightside}
          {MENU=1}
          {MENU=2}  
        </div>        
      </div>
    </div>
  </div> 
</div>
";


function rand_tag(){
        $tags = file(e_BASE."files/taglines.txt");
        return stripslashes(htmlspecialchars($tags[rand(0, count($tags))]));
}


//        [newsstyle]
/* NEWSSTYLE IS UNUSED FOR NOW */
/* NEWSSTYLE IS IN THEME FOLDER/TEMPLATES/NEWS/news_template.php */

      

//  [list of news category]
/* NEWSLISTSTYLE IS UNUSED FOR NOW */
/* NEWSLISTSTYLE IS IN THEME FOLDER/TEMPLATES/NEWS/news_template.php */


// define('ICONPRINTPDF', 'pdf.png');
// define('ICONMAIL', 'email.png');
// define('ICONPRINT', 'printer.png');
// define('ICONSTYLE', 'float: left; border:0');
define('COMMENTLINK', 	e107::getParser()->toGlyph('fa-comment'));
define('COMMENTOFFSTRING', LAN_THEME_2);
define('PRE_EXTENDEDSTRING', '');
define('EXTENDEDSTRING', LAN_THEME_3);
define('POST_EXTENDEDSTRING', '');
define('TRACKBACKSTRING', LAN_THEME_7);
define('TRACKBACKBEFORESTRING', '&nbsp;|&nbsp;');


// linkstyle
/* LINKSTYLE IS UNUSED FOR NOW */
/* LINKSTYLE IS IN THEME FOLDER/TEMPLATES/navigation_template.php */


/**
 * @param string $caption
 * @param string $text
 * @param string $id : id of the current render
 * @param array $info : current style and other menu data. 
 */ 


function tablestyle($caption, $text, $id='', $info=array()){

//	global $style; // no longer needed.

  $style = $info['setStyle'];
  
  echo "<!-- tablestyle: style=".$style." id=".$id." -->\n\n";
	
	$type = $style;

	//@todo a switch will be faster than all these elseif statements. 
	
	switch($style){
  
		case "banner":
      echo "<div class='banner-menu'>{$text}</div>";
    break;
    
    case "centerside":
      echo "<div class='center-menu'>
              <div class='center-menu-header'>
                <h2>{$caption}</h2>
              </div>         		                                                      
              <div class='center-menu-body'>{$text}</div> 
            </div>";
    break;

		case "rightside":
      echo "<div class='right-menu'>
              <div class='right-menu-header'>
                <h2>{$caption}</h2>
              </div>
              <div class='right-menu-body'>{$text}</div> 
            </div>";
    break;

		case "bottomside": 
      echo "<div class='bottom-menu'>
              <div class='bottom-menu-title'>          		                                                      
                <h2>{$caption}</h2>
              </div>
              <div class='bottom-menu-body'>{$text}</div> 
            </div>";
    break;
    
    case "tabbedmenu": 
      echo "<div class='tabbed-menu'>
              <div class='tabbed-menu-body'>{$text}</div> 
            </div>";
    break;

    default: 
      echo "<div class='other-menu'>
		          <div class='other-menu-header'>
                <h2>{$caption}</h2>
              </div>	                                 
              <div class='other-menu-body'>{$text}</div>                       
            </div>";
	}
}


// chatbox post style
// $CHATBOXSTYLE in THEME FOLDER/templates/chatbox_menu/chat_template.php    


// Image Version Example
// $SEARCH_SHORTCODE in THEME FOLDER/search_template.php


?>