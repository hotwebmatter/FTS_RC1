<!DOCTYPE html>
<html lang="en">
  <head>
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
        <ul class="nav navbar-nav navbar-right">
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
          
          <!--
          
          <li class ="dropdown">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown">Join <strong class="caret"></strong></a>
            <div class="dropdown-menu pull-left" style="padding: 15px; padding-bottom: 3px;">

              <form action="[YOUR ACTION]" method="post" accept-charset="UTF-8">
                <input id="user_username" style="margin-bottom: 15px;" type="text" name="user[username]" size="30" />
                <input id="user_password" style="margin-bottom: 15px;" type="password" name="user[password]" size="30" />
                <input id="user_remember_me" style="float: left; margin-right: 10px;" type="checkbox" name="user[remember_me]" value="1" />
                <label class="string optional" for="user_remember_me"> Remember me</label>
                 
                <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
              </form>
            </div>
            
          </li>
          -->
          
          
        </ul>

      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    
    <div class="container">
      
      <form class="form-signin">
        
        <div class="row">
          <div class="col-xs-6 col-lg-4">
          <h2 class="form-signin-heading">Hello.</h2>
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
            The grey box is the media window, where we show images and media. The booking should also appear here.</p>
   
            
          </div>
          <div class="row">
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
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
    });
    
    </script>

  </body>
</html>
