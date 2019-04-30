<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News default templates
 */

if (!defined('e107_INIT'))  exit;

global $sc_style;

###### Default list item (temporary) - TODO rewrite news ######
//$NEWS_MENU_TEMPLATE['list']['start']       = '<ul class="nav nav-list news-menu-months">';
//$NEWS_MENU_TEMPLATE['list']['end']         = '</ul>';

$NEWS_MENU_TEMPLATE['list']['start']       = '<div class="thumbnails">';
$NEWS_MENU_TEMPLATE['list']['end']         = '</div>';


// XXX The ListStyle template offers a listed summary of items with a minimum of 10 items per page. 
// As displayed by news.php?cat.1 OR news.php?all 
// {NEWSBODY} should not appear in the LISTSTYLE as it is NOT the same as what would appear on news.php (no query) 

// Template/CSS to be reviewed for best bootstrap implementation 
$NEWS_TEMPLATE['list']['caption']	= '{NEWSCATEGORY}';
$NEWS_TEMPLATE['list']['start']	= '';
$NEWS_TEMPLATE['list']['end']	= '';
$NEWS_TEMPLATE['list']['item']	= '
<div class="row">
  <div class="news-list-item">
    <div class="col-md-6">
      {SETIMAGE: w=900&h=675&crop=1}
      <div class="news-list-image">
        {NEWSIMAGE: item=1}
        <div class="news-list-info">
          <ul>
            <li class="news-category-{NEWS_CATEGORY_ID}">
              <div class="news-info-top">'.LAN_THEME_9.'</div>
              <div class="news-info-bottom">{NEWS_CATEGORY_NAME: link=1}</div>
            </li>
            <li class="news-category-{NEWS_CATEGORY_ID}">
              <div class="news-info-top">'.LAN_THEME_4.'</div>
              <div class="news-info-bottom">{NEWS_AUTHOR}</div>
            </li>
            <li class="news-category-{NEWS_CATEGORY_ID}">
              <div class="news-info-top">{GLYPH=fa-bar-chart}</div>
              <div class="news-info-bottom">{HITS_UNIQUE}</div>
            </li>
            <li class="news-category-{NEWS_CATEGORY_ID}">
              <div class="news-info-top">{GLYPH=fa-comments-o}</div>
              <div class="news-info-bottom">{NEWS_COMMENT_COUNT}</div>
            </li>
            <li class="news-category-{NEWS_CATEGORY_ID}">
              <div class="news-info-top">{NEWS_DATE=dd}</div>
              <div class="news-info-bottom">{NEWS_DATE=M, yyyy}</div>
            </li>
          </ul> 
        </div>
      </div>
	  </div>
	  <div class="col-md-6">
      <h3 class="news-list-title">{NEWS_TITLE: link=1}</h3>
      <div class="news-list-summary">{NEWS_SUMMARY: limit=250}</div>
      <div class="news-list-more">
        <a href="{NEWSURL}">'.LAN_READ_MORE.'{GLYPH=fa-long-arrow-right}</a>
      </div>
    </div> 
 	</div>
</div>
<hr />';



/* FOR NEWS ITEM ON NEWS.PHP ***********************************************************************/

// $NEWS_WRAPPER['default']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left col-xs-12 col-sm-6 col-md-6">{---}</span>'; 


$NEWS_TEMPLATE['default']['start'] = '';

$NEWS_TEMPLATE['default']['item'] = '
<div class="default-item">
  <div class="news-title"><h2>{NEWS_TITLE: link=1}</h2></div>
  <div class="news-images-main">
    {SETIMAGE: w=900&h=675&crop=1}
    {NEWSIMAGE: item=1}
    <div class="news-info">
      <ul>
        <li class="news-category-{NEWS_CATEGORY_ID}">
          <div class="news-info-top">'.LAN_THEME_9.'</div>
          <div class="news-info-bottom">{NEWS_CATEGORY_NAME: link=1}</div>
        </li>
        <li class="news-category-{NEWS_CATEGORY_ID}">
          <div class="news-info-top">'.LAN_THEME_4.'</div>
          <div class="news-info-bottom">{NEWS_AUTHOR}</div>
        </li>
        <li class="news-category-{NEWS_CATEGORY_ID}">
          <div class="news-info-top">{GLYPH=fa-bar-chart}</div>
          <div class="news-info-bottom">{HITS_UNIQUE}</div>
        </li>
        <li class="news-category-{NEWS_CATEGORY_ID}">
          <div class="news-info-top">{GLYPH=fa-comments-o}</div>
          <div class="news-info-bottom">{NEWS_COMMENT_COUNT}</div>
        </li>
        <li class="news-category-{NEWS_CATEGORY_ID}">
          <div class="news-info-top">{NEWS_DATE=dd}</div>
          <div class="news-info-bottom">{NEWS_DATE=M, yyyy}</div>
        </li>
      </ul> 
    </div>  
  </div>
  <div class="news-content">
    <div class="row news-content-top">
      <div class="col-md-6 tags"><small>{GLYPH=tags} &nbsp;{NEWSTAGS}</small></div>
      <div class="clo-md-6 btn-group hidden-print">{PRINTICON: class=btn btn-default}{ADMINOPTIONS: class=btn btn-default}{SOCIALSHARE: type=basic}</div> 
    </div>
    <div class="lead">{NEWS_SUMMARY}</div>
    {NEWSVIDEO: item=1}
    <div class="news-body">{NEWS_BODY}</div>
    <div class="news-extended text-center">{EXTENDED}</div>
  </div>
</div>
<hr />';

$NEWS_TEMPLATE['default']['end'] = ''; 



/* FOR NEWS ITEM ON CATEGORY'S PAGE **************************************************************************/
$NEWS_TEMPLATE['category']['start'] = '
<div class="newscatitems">
  <div class="newscatitems-header news-cat-{NEWS_CATEGORY_ID}"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
';

$NEWS_TEMPLATE['category']['item'] = '
  {SETIMAGE: w=900&h=675&crop=1}
  <div class="newscatitem"> 
    <div class="newscatitem-title"><h2>{NEWS_TITLE: link=1}</h2></div>
    <div class="newscatitem-info">
      <span>'.LAN_THEME_4.'&nbsp;{NEWS_AUTHOR}</span>
      <span>{GLYPH=fa-th}&nbsp;{NEWSCATEGORY}</span>
      <span>{GLYPH=fa-comments-o}&nbsp;{NEWS_COMMENT_COUNT}</span>
      <span>{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</span>
    </div>
    <div class="newscatitem-images-main">{NEWSIMAGE: item=1}</div>
    <div class="newscatitem-date news-category-{NEWS_CATEGORY_ID}">
      <span class="newscatitem-date-day">{NEWS_DATE=dd}</span>
      <span class="newscatitem-date-month">{NEWS_DATE=M yyyy}</span>
    </div>
    <div class="newscatitem-date-line"></div>    
    <div class="newscatitem-content">
      <div class="lead">{NEWS_SUMMARY}</div>
      {NEWSVIDEO: item=1}
      <div class="newscatitem-body">{NEWS_BODY}</div>
      <div class="newscatitem-extended text-center">{EXTENDED}</div>
      <div class="row newscatitem-bottom">
        <div class="col-md-6 tags"><small>{GLYPH=tags} &nbsp;{NEWSTAGS}</small></div>
        <div class="clo-md-6 btn-group hidden-print">{PRINTICON: class=btn btn-default}{ADMINOPTIONS: class=btn btn-default}{SOCIALSHARE: type=basic}</div> 
      </div>      
    </div>
    <hr>
  </div>'; 
  
$NEWS_TEMPLATE['category']['end'] = '
</div>
';





/* FOR EXTEND NEWS ITEM ***************************************************************************/

// $NEWS_WRAPPER['view']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left col-xs-12 col-sm-6 col-md-6">{---}</span>';

$NEWS_TEMPLATE['view']['item'] = ' 
{SETIMAGE: w=900&h=675&crop=1} 
<div class="view-item">
  <div class="news-title"><h2>{NEWS_TITLE}</h2></div>
  <div class="news-images-main">
    {NEWSIMAGE: item=1}
  </div>
  <div class="news-info">
    <ul>
      <li class="news-category-{NEWS_CATEGORY_ID}">
        <div class="news-info-top">'.LAN_THEME_9.'</div>
        <div class="news-info-bottom">{NEWS_CATEGORY_NAME: link=1}</div>
      </li>
      <li class="news-category-{NEWS_CATEGORY_ID}">
        <div class="news-info-top">'.LAN_THEME_4.'</div>
        <div class="news-info-bottom">{NEWS_AUTHOR}</div>
      </li>
      <li class="news-category-{NEWS_CATEGORY_ID}">
        <div class="news-info-top">{GLYPH=fa-bar-chart}</div>
        <div class="news-info-bottom">{HITS_UNIQUE}</div>
      </li>
      <li class="news-category-{NEWS_CATEGORY_ID}">
        <div class="news-info-top">{GLYPH=fa-comments-o}</div>
        <div class="news-info-bottom">{NEWS_COMMENT_COUNT}</div>
      </li>
      <li class="news-category-{NEWS_CATEGORY_ID}">
        <div class="news-info-top">{NEWS_DATE=dd}</div>
        <div class="news-info-bottom">{NEWS_DATE=M, yyyy}</div>
      </li>
    </ul> 
  </div>
  <div class="news-share">
    {SOCIALSHARE: type=facebook-share,twitter}
    <div class="moreshare-on">{GLYPH=fa-plus}</div> 
    <div class="more-share">        
		  <div class="btn-group">{SOCIALSHARE: type=facebook-like,google-plus1,email}{PRINTICON: class=btn btn-default}{ADMINOPTIONS: class=btn btn-default}</div>
      <div class="moreshare-off">{GLYPH=fa-minus}</div>      
    </div>      
	</div>  
  <div class="news-content"> 
    <div class="news-body">{NEWS_BODY=body}</div>
    <div class="row news-videos-1">
			<div class="col-md-4">{NEWSVIDEO: item=1}</div>
		 	<div class="col-md-4">{NEWSVIDEO: item=2}</div>
		 	<div class="col-md-4">{NEWSVIDEO: item=3}</div>
		</div>
    {SETIMAGE: w=400&h=400}			
		<div class="row news-images-1">
      <div class="col-md-6">{NEWSIMAGE: item=2}</div>
      <div class="col-md-6">{NEWSIMAGE: item=3}</div>
    </div>
    <div class="row news-images-2">
      <div class="col-md-6">{NEWSIMAGE: item=4}</div>
      <div class="col-md-6">{NEWSIMAGE: item=5}</div>
    </div>
    <div class="news-body-extended">
			{NEWS_BODY=extended}
		</div>
    <div class="row news-videos-2">
      <div class="col-md-6">{NEWSVIDEO: item=4}</div>
			<div class="col-md-6">{NEWSVIDEO: item=5}</div>
    </div>
    <div class="news-tags"><span>'.LAN_THEME_60.'</span>&nbsp;{NEWSTAGS: separator=&nbsp;}</div>    
  </div>
</div>
<div class="row post-by-author">
  <h3 class="about-author">'.LAN_THEME_70.'</h3>    
  <div class="col-md-12 post-by-author-inner">
    <div class="col-md-2">
	    <div class="post-by-author-avatar">
        {SETIMAGE: w=90&h=90&crop=1}
        {NEWS_AUTHOR_AVATAR: shape=circle}
      </div>
    </div> 
    <div class="col-md-10">                 
	    <div class="post-by-author-body">
	      <h4>{NEWS_AUTHOR}</h4>
	      <div class="post-by-author-signature">{NEWS_AUTHOR_SIGNATURE}</div>
	      <a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">'.LAN_THEME_71.'</a>
	    </div>
    </div>          
  </div>
</div>    
{NEWSRELATED: limit=4&types=news}
{NEWSNAVLINK}
';


/*
 * 	<hr />
	<h3>About the Author</h3>
	<div class="media">
			<div class="media-left">{SETIMAGE: w=80&h=80&crop=1}{NEWS_AUTHOR_AVATAR: shape=circle}</div>
			<div class="media-body">
				<h4>{NEWS_AUTHOR}</h4>
					{NEWS_AUTHOR_SIGNATURE}
					<a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">My Articles</a>
			</div>
	</div>
 */


//$NEWS_MENU_TEMPLATE['view']['separator']   = '<br />';


### Related 'start' - Options: Core 'single' shortcodes including {SETIMAGE}
### Related 'item' - Options: {RELATED_URL} {RELATED_IMAGE} {RELATED_TITLE} {RELATED_SUMMARY}
### Related 'end' - Options:  Options: Core 'single' shortcodes including {SETIMAGE}
/*
$NEWS_TEMPLATE['related']['start'] = "<hr><h4>".defset('LAN_RELATED', 'Related')."</h4><ul class='e-related'>";
$NEWS_TEMPLATE['related']['item'] = "<li><a href='{RELATED_URL}'>{RELATED_TITLE}</a></li>";
$NEWS_TEMPLATE['related']['end'] = "</ul>";*/

$NEWS_TEMPLATE['related']['start'] = '
{SETIMAGE: w=900&h=675&crop=1}
<div class="related-news-title"><h2>'.LAN_RELATED.'</h2></div>
<div class="row">';

$NEWS_TEMPLATE['related']['item'] = '
  <div class="col-md-3">
    <div class="related-news-image">
      <a href="{RELATED_URL}">{RELATED_IMAGE}</a>
    </div> 
    <div class="related-news-header">
      <h4 class="related-news-caption"><a href="{RELATED_URL}">{RELATED_TITLE}</a></h4>
      <div class="related-news-summary">{RELATED_SUMMARY}</div> 
    </div>
  </div>';
  
$NEWS_TEMPLATE['related']['end'] = '
</div>';