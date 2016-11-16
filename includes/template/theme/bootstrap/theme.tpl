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
    {include file="required_header.tpl"}
    <!-- Required meta tags always come first-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="A minimalist theme with an interactive interface">
    <meta name="author" content="">
    
    <title>minilalist core</title>

		<!--Pull in jquery -->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    
    <script>
    /*global jQuery */
      window.jQuery = window.$ = jQuery;
    </script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--To install time drop down menu -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.js"></script> 
    <script src="js/combodate.js"></script>
    
    <!-- Good for seeing bins
    <script type="text/javascript">
    $(document).ready(function(){ 
      $("div").css("border", "3px solid red");
      
    });
    </script>
    -->

    
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

    
    <!-- Custom styles for this template -->
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
      
    #login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
    }
    #login-dp .help-block{
        font-size:12px    
    }
    #login-dp .bottom{
        background-color:rgba(255,255,255,.8);
        border-top:1px solid #ddd;
        clear:both;
        padding:14px;
    }
    #login-dp .form-group {
        margin-bottom: 10px;
        background-color: inherit;
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

    
    </style>


  </head>

  <body>
    <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
      <div class="container">
        <a class="nav-brand" href="#">Fusion Ticket</a>
        <ul class="nav navbar-nav">
        <li class="nav-item">
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"></i>Join<b class="caret"></b></a>
            <div class="dropdown-menu pull-left" style="padding: 15px; padding-bottom: 3px;">
            <div class="row" id="login-dp">
							<div class="col-md-12">
  								 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
  										<div class="form-group">
  											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
  											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
  										</div>
  										<div class="form-group">
  											 <label class="sr-only" for="exampleInputPassword2">Password</label>
  											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
  										</div>
  										<div class="form-group">
  											 <label class="sr-only" for="exampleInputPassword2">Confirm Password</label>
  											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password" required>
  										</div>
  										<div class="form-group">
  											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
  										</div>
  										<div class="checkbox">
  											 <label>
  											 <input type="checkbox"> keep me logged-in
  											 </label>
  										</div>
  								 </form>
							</div>
							<div class="bottom text-center">
								Already a member? <a href="#"><b>Log in</b></a>
							</div>
					  </div>
					  </div>
          </li>
          </li>
          <li class="nav-item">
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"></i><i class="fa fa-shopping-cart" aria-hidden="true"></i><b class="caret"></b></a>
            <div class="dropdown-menu pull-left" style="padding: 15px; padding-bottom: 3px;">
            <div class="row" id="login-dp">
							<div class="col-md-12">
							  <p>You have no reserved tickets</p>
							</div>
							<div class="bottom text-center">
								Already a member? <a href="#"><b>Log in</b></a> or
								<a href="#"><b>Join</b></a>
							</div>
					  </div>
					  </div>
          </li>
          </li>
          </ul>
    </nav><!-- /.navbar -->
    <br></br>
    <div class="container">

      <form class="form-signin">
        
        <div class="row">
          <div class="col-xs-6 col-lg-4">
          <h2 class="form-signin-heading">Howdy.</h2>
          </div>
        </div>
        
        <div class="row row-login row-login-top">
          <div class="col-xs-6 col-lg-4">
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputPassword" classs="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </div>
      </div>
      </form>
      <br></br>

    </div> <!-- /container -->
      
    </div>
    
    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="float-xs-right hidden-sm-up">

            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Welcome to menupop Fusion Ticket Theme!</h1>
            <p>This is an example to show the potential to use a theme with Bootstrap within Fusion Ticket. 
            The grey box is the media window, where we show images and media. The booking of seats
            will also appear here.</p>
   
            
          </div>
          <div class="row">
            <div class="col-xs-12 col-lg-12">
              <h2>Upcoming Event 1</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
          <div class="col-xs-12 col-lg-12">
              <h2>Upcoming Event 2</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!--/span-->
          </div><!--/row-->
          <div class="row">
            <div class="col-xs-12 col-lg-12">
              <h2>Calendar Heading 1</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
          <div class="col-xs-12 col-lg-12">
              <h2>Calendar Heading 2</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active"><h2>Find.</h2></a>
            <a href="#" class="list-group-item">Check-in</a>
            <a href="#" class="list-group-item">Status</a>
            <a href="#" class="list-group-item">
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
            <a href="#" class="list-group-item">
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
        <p>&copy; Company 2014</p>
        
      </footer>

    </div><!--/.container-->
    
    <script type="text/javascript">

    
    $(document).ready(function () {
      
      
      
      
      $('[data-toggle="offcanvas"]').click(function () {
        $('.row-offcanvas').toggleClass('active');
      });
      
    
    $('#time').combodate({
        firstItem: 'name', //show 'hour' and 'minute' string at first item of dropdown
        minuteStep: 1
    });  
      
      
    });
    
    </script>
    
    <div id="art-main">
    <div class="cleared reset-box"></div>
    <div class="art-header">
        <div class="art-header-position">
            <div class="art-header-wrapper">
                <div class="cleared reset-box"></div>
                <div class="art-header-inner">
                <div class="art-headerobject"></div>
                <div class="art-logo">
              {if $shop_sitename}
                <h1 class="art-logo-name"><a href="./index.html">{$shop_sitename}</a></h1>
              {/if}
              {if $shop_slogan}
                <h2 class="art-logo-text">{$shop_slogan}</h2>
              {/if}
                                </div>
                </div>
            </div>
        </div>

    </div>

    <div class="cleared reset-box"></div>
<div class="art-bar art-nav">
<div class="art-nav-outer">
<div class="art-nav-wrapper">
<div class="art-nav-inner">
              {if $topmenu}
                 {call name=menu data=$topmenu class="art-hmenu"}
              {else}
                <ul class='art-menu'>
                  <li>
                    welkom to the world
                  </li>
                 </ul>
              {/if}
</div>
</div>
</div>
</div>


<div class="cleared reset-box"></div>
<div class="art-box art-sheet">
        <div class="art-box-body art-sheet-body">
            <div class="art-layout-wrapper">
                {include file="Progressbar.tpl" name=$name}

                <DIV style="MARGIN-TOP: 0.35em;MARGIN-Bottom: 0.35em; DISPLAY: none" id=error-message class="ui-state-error ui-corner-all" title="Order Error Message">
                <P><SPAN style="FLOAT: left; MARGIN-RIGHT: 0.3em" class="ui-icon ui-icon-alert"></SPAN><div id=error-text>ffff<br>tttttcv ttt </div> </P></DIV>
                <DIV style="MARGIN-TOP: 0.35em; MARGIN-Bottom: 0.35em; DISPLAY: none" id=notice-message class="ui-state-highlight ui-corner-all" title="Order Notice Message">
                <P><SPAN style="FLOAT: left; MARGIN-RIGHT: 0.3em" class="ui-icon ui-icon-info"></SPAN><div id=notice-text>fff</div> </P></DIV>

                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1">
                {include file='user_login_block.tpl'}
                {if $vermenu}
<div class="art-box art-vmenublock">
    <div class="art-box-body art-vmenublock-body">
                <div class="art-bar art-vmenublockheader">
                        <h3 class="t">{!vertical_menu!}</h3>
                </div>
                <div class="art-box art-vmenublockcontent">
                    <div class="art-box-body art-vmenublockcontent-body">
                          {call name=menu data=$vermenu class="art-vmenu"}
                                		<div class="cleared"></div>
                    </div>
                </div>
            		<div class="cleared"></div>
              </div>
            </div>
         {/if}
             {include file='cart_view_block.tpl'}
                          <div class="cleared"></div>
                        </div>

{* content start here *}
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
                      </div>
                    </div>

                    <div class="cleared"></div>
                  </div>
                </div>
                <div class="cleared"></div>
               <div class="art-footer">
                <div class="art-footer-body">
              {* <a href="#" class="art-rss-tag-icon" title="RSS"></a> *}
                            <div class="art-footer-text">
              <p>
            		<!-- To comply with our GPL please keep the following link in the footer of your site -->
                <!-- Failure to abide by these rules may result in the loss of all support and/or site status. -->
                Copyright &copy; 2012. All Rights Reserved.<br>
                Powered By <a href="http://www.fusionticket.org"> Fusion Ticket</a> - Free Open Source Online Box Office
              </p>
            </div>
            <div class="cleared"></div>
          </div>
        </div>
    		<div class="cleared"></div>
      </div>
    </div>
    <div class="cleared"></div>
    <p class="art-page-footer"></p>
    <div class="cleared"></div>
  </div>
  <div style="display:none" id='showdialog'></div>
    

  </body>
</html>
