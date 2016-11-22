{*                  %%%copyright%%%
 *
 * FusionTicket - ticket reservation system
 *  Copyright (C) 2007-2013 FusionTicket Solution Limited . All rights reserved.
 *
 * Original Design:
 *	phpMyTicket - ticket reservation system
 * 	Copyright (C) 2004-2005 Anna Putrino, Stanislav Chachkov. All rights reserved.
 *
 * This file is part of FusionTicket.
 *
 * This file may be distributed and/or modified under the terms of the
 * "GNU General Public License" version 3 as published by the Free
 * Software Foundation and appearing in the file LICENSE included in
 * the packaging of this file.
 *
 * This file is provided AS IS with NO WARRANTY OF ANY KIND, INCLUDING
 * THE WARRANTY OF DESIGN, MERCHANTABILITY AND FITNESS FOR A PARTICULAR
 * PURPOSE.
 *
 * Any links or references to Fusion Ticket must be left in under our licensing agreement.
 *
 * By USING this file you are agreeing to the above terms of use. REMOVING this licence does NOT
 * remove your obligation to the terms of use.
 *
 * The "GNU General Public License" (GPL) is available at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * Contact help@fusionticket.com if any conditions of this licencing isn't
 * clear to you.
 *}
<!DOCTYPE html>
{function name=menu class='' level=0 data=[]}
  <ul class="{$class} level{$level}">
  {foreach $data as $entry}
    <li><a href={$entry.href}>{$entry.title}</a></li>
    {if is_array($entry.menu)}
       {call name=menu data=$entry.menu level=$level+1}
    {/if}
  {/foreach}
  </ul>
{/function}

<html lang="en">
  <head>

    <!-- Required meta tags always come first-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="A minimalist theme with an interactive interface">
    <meta name="author" content="">
    
    <title>minilalist core</title>

		<!--Pull in jquery-->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
          /*global jQuery */
      window.jQuery = window.$ = jQuery;
      $(document).ready(function () {
        $('[data-toggle="offcanvas"]').click(function () {
          $('.row-offcanvas').toggleClass('active')
        });
      });
      
    </script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--To install time drop down menu-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.js"></script> 
    <script src="js/combodate.js"></script>

    <!-- Good for seeing bins
    <script type="text/javascript">
    $(document).ready(function(){ 
      $("div").css("border", "3px solid red");
      
    });
    </script>-->
    

    
    <!--Tether -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

		<!--Bootstrap CSS 4 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    <!--Normalize CSS: keeps the resets in a page-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"></script>
    
    <!--Font Awesome -->
    <script src="https://use.fontawesome.com/10795c302c.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link rel='stylesheet' href='style.php' type='text/css' />
    {include file="required_header.tpl"}
    
    <style type="text/css">
          
          /*
       * Style tweaks
       * --------------------------------------------------
       */
      html,
      body {
        overflow-x: hidden; /* Prevent scroll on narrow devices */

      }
      body {
        padding-top: 70px;
      }
      footer {
        padding: 30px 0;
      }
      
      ul {
        list-style-type: none;
      }
      
      /*
       * Off Canvas
       * --------------------------------------------------
       */
      @media screen and (max-width: 767px) {
        .row-offcanvas {
          position: relative;
          -webkit-transition: all .25s ease-out;
               -o-transition: all .25s ease-out;
                  transition: all .25s ease-out;
        }
        
        .row-login{
          position: relative;
          -webkit-transition: all .25s ease-out;
               -o-transition: all .25s ease-out;
                  transition: all .25s ease-out;
          
        }
      
        .row-offcanvas-right {
          right: 0;
        }
      
        .row-offcanvas-left {
          left: 0;
        }
      
        .row-offcanvas-right
        .sidebar-offcanvas {
          right: -50%; /* 6 columns */
        }
      
        .row-offcanvas-left
        .sidebar-offcanvas {
          left: -50%; /* 6 columns */
        }
      
        .row-offcanvas-right.active {
          right: 70%; /* 6 columns */
        }
      
        .row-offcanvas-left.active {
          left: 50%; /* 6 columns */
        }
      
        .sidebar-offcanvas {
          position: absolute;
          top: 0;
          width: 50%; /* 6 columns */
        }
      }
      

      

    .radio-select{
      padding:3px;
    }

    @media(max-width:768px){
        #login-dp{
            background-color: inherit;
            color: rgba(0, 0, 0, 0.5);;
        }
        #login-dp .bottom{
            background-color: inherit;
            border-top:0 none;
            color: rgba(0, 0, 0, 0.5);;
        }
        
        
    }
    
    .row {
    border-radius: 15px;
    }
    


    
    </style>
    
    <script type="text/javascript">
  	jQuery(document).ready(function(){
      //var msg = ' errors';
      showErrorMsg(emsg);
      showNoticeMsg(nmsg);
      if (navigator.cookieEnabled == false) { $.modal("<div>{!cookie_disabled!}</div>"); }
      {gui->getJQuery}
      $('label.required').append('&nbsp;<strong>*&nbsp;</strong>');

    });
    var showErrorMsg = function(msg){
      if(msg) {
        jQuery("#error-text").html(msg);
        jQuery("#error-message").show();
        setTimeout(function(){ jQuery("#error-message").hide(); }, 10000);
      }
    }
    var showNoticeMsg = function(msg){
      if(msg) {
        jQuery("#notice-text").html(msg);
        jQuery("#notice-message").show();
        setTimeout(function(){ jQuery("#notice-message").hide(); }, 7000);
      }
    }
    var ajaxQManager = $.manageAjax.create('ajaxQMan',{
    	queue:true,
    	abortOld:true,
    	maxRequests: 1,
    	cacheResponse: false
    });
  </script>

  </head>

  <body>
    
    <!--contatiner BS:Navigation -->
    <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
      <div class="container" id="nav-bar">
        <a class="navbar-brand" href="index.php">Fusion Ticket</a>
        <ul class="nav navbar-nav">
          <li class="nav-item"><a class="nav-link" href="calendar.php">Calendar</a></li>
          <li class="nav-item"><a class="nav-link" href="programm.php">Program</a></li>
        </ul>
      </div><!-- /.container -->
    </nav>

    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="float-xs-right hidden-sm-up">

            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Search Events</button>
          </p>
            <p>
            <div id="fullBox" class="row-fluid">
              <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><!--BS:Login Width-->
                {include file='user_login_block.tpl'}
                </div><!--/BS:Login Width-->
              </div>
            </div>
            <p>
          
          <div class="row">
            <div class="col-xs-12 col-lg-12">
                {include file="Progressbar.tpl" name=$name}
  
               {include file='cart_view_block.tpl'}
            
            </div><!--/span-->
          <div class="col-xs-12 col-lg-12">
                        <div class="art-layout-cell art-content">
                          <div class="art-box art-post">
                            <div class="art-box-body art-post-body">
                              <div class="art-post-inner art-article">
                                <h2 class="art-postheader">{$pagetitle}</h2>
                                {if $headerNote}
                                  <div class="art-postcontent">
                                    <div class="art-content-layout">
                                      <div class="art-content-layout-row">
                                        <div class="art-layout-cell layout-item-0" style="width: 100%;">
                                          <p>{$headerNote}</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                {/if}
                                <div class="art-postcontent">
                                   {$WebContent}
                                </div>
                                {if !$footNote}
                                  <div class="art-postcontent">
                                    <div class="art-content-layout">
                                      <div class="art-content-layout-row">
                                        <div class="art-layout-cell layout-item-0" style="width: 100%;">
                                          <p>{$footNote}</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                {/if}
                              </div>
                            </div>
                          </div>
                        </div>
          </div><!--/span-->
          </div><!--/row-->
          
        </div><!--/span of menupop area (container shifted to left)-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a class="list-group-item active"><h2>Find.</h2></a>
            <a class="list-group-item">Check-in</a>
            <a class="list-group-item">Status</a>
            <a class="list-group-item">
              <div class="row">
                <form>
                  <span class="radio-select">
                  <label class="radio-inline">
                    <input type="radio" name="optradio">Round-Trip
                  </label>
                  </span>
                  <span  class="radio-select">
                  <label class="radio-inline">
                    <input type="radio" name="optradio">One-Way
                  </label>
                  </span>
                </form>
              </div>
            </a>
            <a class="list-group-item">
              <div class="row">
                <form class="form" role="form" method="post" action="book-trip" accept-charset="UTF-8" id="trip-nav">
  										<div class="form-group">
  											 <label class="sr-only" for="start-loc">From</label>
  											 <input type="start-loc" class="form-control" id="start-loc" placeholder="From" required>
  										</div>
  										<div class="form-group">
  											 <label class="sr-only" for="end-loc">To</label>
  											 <input type="end-loc" class="form-control" id="end-loc" placeholder="To" required>
  										</div>
  										<div class="form-group">
  											 <label class="sr-only" for="depart-date">Depart Date</label>
  											 <input type="date" class="form-control" id="depart-date" placeholder="Depart Date" required>
  										</div>
  										<!--
  										<div class="form-group">
  										<input type="text" id="time" data-format="HH:mm" data-template="HH : mm" name="datetime">
                      </div>
                      -->
                      
                      <div class="form-group">
  											 <label class="sr-only" for="return-date">Return Date</label>
  											 <input type="date" class="form-control" id="return-date" placeholder="Return Date" required>
  										</div>
  										<!--
  										<div class="form-group">
  										<input type="text" id="time2" data-format="HH:mm" data-template="HH : mm" name="datetime">
  										</div>
  										-->

  										<div class="form-group">
  										  <button type="submit" class="btn btn-default">Submit</button>
  										</div>
  								 </form>
              </div>
              
            </a>
            
            <!--ADDING MORE ITEMS
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            -->
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p> {* <a href="#" class="art-rss-tag-icon" title="RSS"></a> *}
              <div class="art-footer-text">
              <p>
            		<!-- To comply with our GPL please keep the following link in the footer of your site -->
                <!-- Failure to abide by these rules may result in the loss of all support and/or site status. -->
                Copyright &copy; 2012. All Rights Reserved.<br>
                Powered By <a href="http://www.fusionticket.org"> Fusion Ticket</a> - Free Open Source Online Box Office
              </p>
        </p>
        
      </footer>

    </div><!--/.container-->
  <script>
    var emsg = '{printMsg|escape:'quotes' key='__Warning__' addspan=false}';
    var nmsg = '{printMsg|escape:'quotes' key='__Notice__' addspan=false}';
  </script>

  </body>
</html>
