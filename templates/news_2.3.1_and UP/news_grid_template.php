<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */


	$NEWS_GRID_TEMPLATE['col-md-6']['start'] = '
  <div class="row news-grid-default news-menu-grid">';

	$NEWS_GRID_TEMPLATE['col-md-6']['featured'] = '
    <div class="row featured">
		  <div class="col-sm-12">
			  <div class="item col-sm-6" >
					{SETIMAGE: w=600&h=400&crop=1}
					{NEWSTHUMBNAIL=placeholder}
				</div>
			  <div class="item col-sm-6">
		      <h3>{NEWSTITLE}</h3>
		      <p>{NEWSMETADIZ: limit=100}</p>
		      <p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">{LAN=READ_MORE}</a></p>
	      </div>
	    </div>
	  </div>';

	$NEWS_GRID_TEMPLATE['col-md-6']['item'] = '
    <div class="item col-md-6">
			{SETIMAGE: w=400&h=400&crop=1}
			{NEWSTHUMBNAIL=placeholder}
      <h3>{NEWS_TITLE}</h3>
      <p>{NEWS_SUMMARY}</p>
      <p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">{LAN=READ_MORE}</a></p>
    </div>';

	$NEWS_GRID_TEMPLATE['col-md-6']['end'] = '
  </div>';




	$NEWS_GRID_TEMPLATE['col-md-4']['start'] = $NEWS_GRID_TEMPLATE['col-md-6']['start'];
  
	$NEWS_GRID_TEMPLATE['col-md-4']['featured'] = $NEWS_GRID_TEMPLATE['col-md-6']['featured'];
  
  $NEWS_GRID_TEMPLATE['col-md-4']['item'] = '
    <div class="item col-md-4">
			{SETIMAGE: w=400&h=400&crop=1}
			{NEWSTHUMBNAIL=placeholder}
	    <h3>{NEWS_TITLE}</h3>
	    <p>{NEWS_SUMMARY}</p>
	    <p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">{LAN=READ_MORE}</a></p>
    </div>';
    
	$NEWS_GRID_TEMPLATE['col-md-4']['end'] = $NEWS_GRID_TEMPLATE['col-md-6']['end'];




	$NEWS_GRID_TEMPLATE['col-md-3']['start']    = $NEWS_GRID_TEMPLATE['col-md-6']['start'];
  
	$NEWS_GRID_TEMPLATE['col-md-3']['featured'] = $NEWS_GRID_TEMPLATE['col-md-6']['featured'];
  
  $NEWS_GRID_TEMPLATE['col-md-3']['item']     = '
    <div class="item col-md-3">
			{SETIMAGE: w=400&h=400&crop=1}
			{NEWSTHUMBNAIL=placeholder}
	    <h3>{NEWS_TITLE}</h3>
	    <p>{NEWS_SUMMARY}</p>
	    <p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">{LAN=READ_MORE}</a></p>
    </div>';
    
	$NEWS_GRID_TEMPLATE['col-md-3']['end']      = $NEWS_GRID_TEMPLATE['col-md-6']['end'];




	//@todo find a better name than 'other'
	$NEWS_GRID_TEMPLATE['other']['start'] = '
  <div class="row news-grid-other">';

	$NEWS_GRID_TEMPLATE['other']['featured'] = '
    <div class="featured item col-sm-6" >
			{SETIMAGE: w=600&h=400&crop=1}
			{NEWSTHUMBNAIL=placeholder}
			<h3><a href="{NEWS_URL}">{NEWS_TITLE}</a></h3>
			<p>{NEWS_SUMMARY: limit=60}</p>
		</div>';

	$NEWS_GRID_TEMPLATE['other']['item'] = '
    <div class="item col-sm-6">
			{SETIMAGE: w=120&h=120&crop=1}
			<ul class="media-list">
				<li class="media">
					<div class="media-left media-top">
						<a href="{NEWS_URL}">{NEWS_IMAGE: class=media-object img-rounded&placeholder=1}</a>
					</div>
					<div class="media-body">
						<h4 class="media-heading"><a href="{NEWS_URL}">{NEWS_TITLE}</a></h4>
						<p>{NEWS_SUMMARY: limit=60}</p>
					</div>
				</li>
			</ul>
    </div>';

	$NEWS_GRID_TEMPLATE['other']['end'] = '</div>';
  
  
  
  
/***********************************************************************************************************************************/
   
  //  fizi - This News Grid for featuered news - 5 items on top OK
	$NEWS_GRID_TEMPLATE['featured-news']['start'] = '
    <div class="col-md-12">';

	$NEWS_GRID_TEMPLATE['featured-news']['featured'] = '
      <div class="col-md-6 featured-item">
			  {SETIMAGE: w=800&h=600&crop=1}        
        <div class="news-image">
          {NEWS_IMAGE}
          <div class="news-category news-category-{NEWS_CATEGORY_ID}">{NEWS_CATEGORY_NAME: link=1}</div>
          <div class="news-header">
            <h3>{NEWS_TITLE: link=1}</h3>
            <div class="news-info">{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}<span class="news-readmore pull-right"><a href="{NEWSURL}">{LAN=READ_MORE} &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a></span></div> 
          </div> 
        </div>                             
      </div>  
      <div class="col-md-6 items">
        <div class="row">';

	$NEWS_GRID_TEMPLATE['featured-news']['item'] = '
          <div class="col-md-6 item">
			      {SETIMAGE: w=400&h=300&crop=1}
            <div class="news-image">
              {NEWS_IMAGE}
              <div class="news-category news-category-{NEWS_CATEGORY_ID}">{NEWS_CATEGORY_NAME: link=1}</div>
              <div class="news-header">
                <h4>{NEWS_TITLE: link=1}</h4>
                <div class="news-info">{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}<span class="news-readmore pull-right"><a href="{NEWSURL}">{LAN=READ_MORE} &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a></span></div>  
              </div>
            </div>                      
          </div>';

	$NEWS_GRID_TEMPLATE['featured-news']['end'] = '
        </div>
      </div>
    </div>';
  
  
  //  fizi - This News Grid for 2. category's news id=2 (example: politics in test site) OK
	$NEWS_GRID_TEMPLATE['news-grid-1']['start'] = '
    <div class="news-grig-1-header news-cat-{NEWS_CATEGORY_ID}"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
    <div class="row news-grid-1">';

	$NEWS_GRID_TEMPLATE['news-grid-1']['featured'] = '
      <div class="col-sm-6 featured-item"> 
			  {SETIMAGE: w=800&h=600&crop=1}
        <div class="news-image">
          {NEWS_IMAGE}
          <div class="news-header">
            <div class="news-date">{NEWS_DATE=M dd, yyyy}</div>
            <h3>{NEWS_TITLE: link=1&limit=46}</h3>
            <div class="news-info">{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}<span class="news-readmore pull-right"><a href="{NEWSURL}">{LAN=READ_MORE} &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a></span></div> 
          </div>
        </div>
      </div>';

	$NEWS_GRID_TEMPLATE['news-grid-1']['item'] = '
      <div class="col-sm-6 item">
			  {SETIMAGE: w=120&h=120&crop=1} 
				<div class="media">
					<a class="pull-left news-image" href="{NEWSURL}">{NEWS_IMAGE: type=tag&class=media-object}</a>
					<div class="media-body">
            <div class="news-date">{NEWS_DATE=M dd, yyyy}</div>
						<h4 class="media-heading">{NEWS_TITLE: link=1}</h4>
						<div class="news-body">{NEWSSUMMARY: limit=80}</div>
            <div class="news-info">{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}<span class="news-readmore readmore-{NEWS_CATEGORY_ID} pull-right"><a href="{NEWSURL}">{LAN=READ_MORE} &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a></span></div>
					</div>
        </div>
      </div>';

	$NEWS_GRID_TEMPLATE['news-grid-1']['end'] = '
    </div>';
    
    
  //  fizi - This News Grid for category's news id=3 (example: culture in test site) OK
	$NEWS_GRID_TEMPLATE['news-grid-2']['start'] = '
    <div class="news-grig-2-header news-cat-{NEWS_CATEGORY_ID}"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
    <div class="row news-grid-2">';

	$NEWS_GRID_TEMPLATE['news-grid-2']['featured'] = '
      <div class="col-sm-12">
        <div class="featured-item">
				  {SETIMAGE: w=800&h=600&crop=1}
          <div class="news-image col-sm-5">{NEWS_IMAGE}</div>
			    <div class="col-sm-7">
            <div class="news-date">{NEWS_DATE=M dd, yyyy}</div>
				    <h3 class="news-title">{NEWS_TITLE: link=1}</h3>
				    <div class="news-body">{NEWSSUMMARY: limit=200}</div>
            <div class="news-info">{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}<span class="news-readmore readmore-{NEWS_CATEGORY_ID} pull-right"><a href="{NEWSURL}">{LAN=READ_MORE} &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a></span></div>
          </div>
        </div>
	    </div>';

	$NEWS_GRID_TEMPLATE['news-grid-2']['item'] = '
      <div class="col-sm-6">
        <div class="item">
			    {SETIMAGE: w=120&h=120&crop=1} 
				  <div class="media">
					  <a class="pull-left news-image" href="{NEWSURL}">{NEWS_IMAGE: type=tag&class=media-object}</a>
					  <div class="media-body">
              <div class="news-date">{NEWS_DATE=M dd, yyyy}</div>
						  <h4 class="media-heading">{NEWS_TITLE: link=1}</h4>
						  <div class="news-body">{NEWSSUMMARY: limit=80}</div>
              <div class="news-info">{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}<span class="news-readmore readmore-{NEWS_CATEGORY_ID} pull-right"><a href="{NEWSURL}">{LAN=READ_MORE} &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a></span></div>
					  </div>
				  </div>
        </div>
      </div>';

	$NEWS_GRID_TEMPLATE['news-grid-2']['end'] = '
    </div>';
    
    
  //  fizi - This News Grid for category's news id=6 and id=9 (example: music and movie in test site) OK
	$NEWS_GRID_TEMPLATE['news-grid-3']['start'] = '
    <div class="news-grig-3-header news-cat-{NEWS_CATEGORY_ID}"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
    <div class="news-grid-3">';

	$NEWS_GRID_TEMPLATE['news-grid-3']['featured'] = '
      <div class="featured-item">
				{SETIMAGE: w=800&h=600&crop=1}
        <div class="news-image">{NEWS_IMAGE}</div>
        <div class="news-date">{NEWS_DATE=M dd, yyyy}</div>
				<h3 class="news-title">{NEWS_TITLE: link=1}</h3>
				<div class="news-body">{NEWSSUMMARY: limit=200}</div>
        <div class="news-info">{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}<span class="news-readmore readmore-{NEWS_CATEGORY_ID} pull-right"><a href="{NEWSURL}">{LAN=READ_MORE} &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a></span></div>
      </div>';

	$NEWS_GRID_TEMPLATE['news-grid-3']['item'] = '
      <div class="item">
			  {SETIMAGE: w=120&h=120&crop=1} 
				<div class="media">
					<a class="pull-left news-image" href="{NEWSURL}">{NEWS_IMAGE: type=tag&class=media-object}</a>
					<div class="media-body">
            <div class="news-date">{NEWS_DATE=M dd, yyyy}</div>
						<h4 class="media-heading">{NEWS_TITLE: link=1}</h4>
						<div class="news-body">{NEWSSUMMARY: limit=80}</div>
            <div class="news-info">{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}<span class="news-readmore readmore-{NEWS_CATEGORY_ID} pull-right"><a href="{NEWSURL}">{LAN=READ_MORE} &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a></span></div>
					</div>
				</div>
      </div>';

	$NEWS_GRID_TEMPLATE['news-grid-3']['end'] = '
    </div>';
    
    
  //  fizi - This News Grid for XX. category's news (example: XXX in test site)
	$NEWS_GRID_TEMPLATE['news-grid-4']['start'] = '
    <div class="col-sm-6">
      <div class="news-grig-4-header"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
      <div class="news-grid-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="items">';

  // $NEWS_GRID_TEMPLATE['news-grid-4']['featured'] = '';

	$NEWS_GRID_TEMPLATE['news-grid-4']['item'] = '
              <div class="item">
			          {SETIMAGE: w=800&h=600&crop=1}
                <div class="news-image">{NEWS_IMAGE}</div>
				        <h4 class="news-title">{NEWS_TITLE: link=1}</h4>
                <div class="news-date">{GLYPH=fa-calendar-o}&nbsp;{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>
				        <div class="news-body">{NEWSSUMMARY: limit=200}</div>
              </div>';

	$NEWS_GRID_TEMPLATE['news-grid-4']['end'] = '
            </div>
          </div>
        </div>
      </div>
    </div>';
    
    
  //  fizi - This News Grid for category's news id=4 (example: economy in test site) OK
	$NEWS_GRID_TEMPLATE['news-grid-5']['start'] = '
    <div class="news-grig-5-header news-cat-{NEWS_CATEGORY_ID}"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
    <div class="news-grid-5">';

	// $NEWS_GRID_TEMPLATE['news-grid-5']['featured'] = '';

	$NEWS_GRID_TEMPLATE['news-grid-5']['item'] = '
      <div class="col-sm-3 item"> 
			  {SETIMAGE: w=800&h=600&crop=1}
        <div class="news-image">{NEWS_IMAGE}</div>
				<div class="news-date">{NEWS_DATE=M dd, yyyy}</div>
				<h4 class="news-title">{NEWS_TITLE: link=1}</h4>
				<div class="news-body">{NEWSSUMMARY: limit=200}</div>
        <div class="news-info">{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}<span class="news-readmore readmore-{NEWS_CATEGORY_ID} pull-right"><a href="{NEWSURL}">{LAN=READ_MORE} &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a></span></div>
      </div>';

	$NEWS_GRID_TEMPLATE['news-grid-5']['end'] = '
    </div>';


  //  fizi - This News Grid for category's news id=7 (exaple: game test site) OK
	$NEWS_GRID_TEMPLATE['news-grid-6']['start'] = '
    <div class="news-grig-6-header news-cat-{NEWS_CATEGORY_ID}"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
    <div class="news-grid-6">';

	// $NEWS_GRID_TEMPLATE['news-grid-6']['featured'] = '';

	$NEWS_GRID_TEMPLATE['news-grid-6']['item'] = '
      <div class="col-sm-4 item">
			  {SETIMAGE: w=800&h=600&crop=1}
				<div class="news-image">
          {NEWS_IMAGE}
          <div class="news-header">
				    <div class="news-date">{NEWS_DATE=M dd, yyyy}</div>
				    <h4 class="news-title">{NEWS_TITLE: link=1}</h4>
            <div class="news-info">{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}<span class="news-readmore pull-right"><a href="{NEWSURL}">{LAN=READ_MORE} &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a></span></div>
          </div>
        </div>
      </div>';

	$NEWS_GRID_TEMPLATE['news-grid-6']['end'] = '
    </div>';
    
    
  //  fizi - This News Grid category's news id=8 (exaple: travel in test site) OK
	$NEWS_GRID_TEMPLATE['news-grid-7']['start'] = '
    <div class="news-grig-7-header news-cat-{NEWS_CATEGORY_ID}"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
    <div class="news-grid-7">
      <div class="items">';

	// $NEWS_GRID_TEMPLATE['news-grid-7']['featured'] = '';

	$NEWS_GRID_TEMPLATE['news-grid-7']['item'] = '
        <div class="col-sm-6">
          <div class="item">
			      {SETIMAGE: w=800&h=600&crop=1} 
				    <div class="news-image">
              {NEWS_IMAGE}
              <div class="news-header">
                <div class="news-date">{NEWS_DATE=M dd, yyyy}</div>
                <h4>{NEWS_TITLE: link=1}</h4>
                <div class="news-info">{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}<span class="news-readmore pull-right"><a href="{NEWSURL}">{LAN=READ_MORE} &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a></span></div> 
              </div>
            </div>
          </div>
        </div>';

	$NEWS_GRID_TEMPLATE['news-grid-7']['end'] = '
      </div>
    </div>';
    
    
  //  fizi - This News Grid for category's news id=1 (exaple: misc in test site)
	$NEWS_GRID_TEMPLATE['news-grid-8']['start'] = '
    <div class="news-grig-8-header"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
    <div class="news-grid-8">
      <div class="panel panel-default">
        <div class="panel-body">';

	$NEWS_GRID_TEMPLATE['news-grid-8']['featured'] = '
          <div class="featured-item" >
			      {SETIMAGE: w=800&h=600&crop=1}
            <div class="news-image">
				      {NEWS_IMAGE}
            </div>
				    <h3 class="news-title">{NEWS_TITLE: link=1}</h3>
            <div class="news-date">{GLYPH=fa-calendar-o}&nbsp;{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>
				    <div class="news-body">{NEWSSUMMARY: limit=200}</div>
            <div class="text-center"><a class="btn btn-primary btn-xs" href="{NEWSURL}">{LAN=READ_MORE}</a></div>
			    </div>
          <div class="items">';

	$NEWS_GRID_TEMPLATE['news-grid-8']['item'] = '
            <div class="item">
			        {SETIMAGE: w=100&h=100&crop=1}
				      <div class="media">
						    <div class="media-body">
							    <h4 class="media-heading">{NEWS_TITLE: link=1&limit=50}</h4>
                  <div class="news-date">{GLYPH=fa-calendar-o}&nbsp;{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>
						    </div>
				      </div>
            </div>';

	$NEWS_GRID_TEMPLATE['news-grid-8']['end'] = '
          </div>
        </div>
      </div>
    </div>';
 
   
  //  fizi - This News Grid 10 category's news id=5 (example: sport in test site) OK
	$NEWS_GRID_TEMPLATE['news-grid-10']['start'] = '
    <div class="news-grig-10-header news-cat-{NEWS_CATEGORY_ID}"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
    <div class="row news-grid-10">';

	// $NEWS_GRID_TEMPLATE['news-grid-10']['featured'] = '';

	$NEWS_GRID_TEMPLATE['news-grid-10']['item'] = '            
      <div class="col-sm-3">
        <div class="item">
			    {SETIMAGE: w=800&h=600&crop=1} 
				  <div class="news-image">{NEWS_IMAGE}</div>
          <div class="news-date">{NEWS_DATE=M dd, yyyy}</div>
					<h4 class="news-title">{NEWS_TITLE: link=1}</h4>
					<div class="news-body">{NEWSSUMMARY: limit=100}</div>
          <div class="news-info pull">{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}<span class="news-readmore readmore-{NEWS_CATEGORY_ID} pull-right"><a href="{NEWSURL}">{LAN=READ_MORE} &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a></span></div>
				</div>
      </div>';

	$NEWS_GRID_TEMPLATE['news-grid-10']['end'] = '
    </div>';
 