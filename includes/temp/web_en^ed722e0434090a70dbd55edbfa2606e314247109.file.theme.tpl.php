<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-09 16:08:52
         compiled from "/home/ubuntu/workspace/includes/template/theme/bootstrap/theme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102073545858236b60ed97a9-85338929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed722e0434090a70dbd55edbfa2606e314247109' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/theme/bootstrap/theme.tpl',
      1 => 1478725726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102073545858236b60ed97a9-85338929',
  'function' => 
  array (
    'menu' => 
    array (
      'parameter' => 
      array (
        'class' => '',
        'level' => 0,
        'data' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58236b611efb08_19789303',
  'variables' => 
  array (
    'class' => 0,
    'level' => 0,
    'data' => 0,
    'entry' => 0,
    'shop_sitename' => 0,
    'shop_slogan' => 0,
    'topmenu' => 0,
    'name' => 0,
    'vermenu' => 0,
    'pagetitle' => 0,
    'headerNote' => 0,
    'WebContent' => 0,
    'footNote' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58236b611efb08_19789303')) {function content_58236b611efb08_19789303($_smarty_tpl) {?>

<!DOCTYPE html>
<html lang="en">
  
<?php if (!function_exists('smarty_template_function_menu')) {
    function smarty_template_function_menu($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['menu']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
  <ul class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 level<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
">
  <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
    <li><a href=<?php echo $_smarty_tpl->tpl_vars['entry']->value['href'];?>
><?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
</a></li>
    <?php if (is_array($_smarty_tpl->tpl_vars['entry']->value['menu'])){?>
       <?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['entry']->value['menu'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

    <?php }?>
  <?php } ?>
  </ul>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    
    <!-- Required meta tags always come first-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link rel='stylesheet' href='style.php' type='text/css' />
		
		
		<!--Bootstrap CSS 4 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    <!--Normalize CSS: keeps the resets in a page-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"></script>
    
    
    <!--Font Awesome -->
    <script src="https://use.fontawesome.com/10795c302c.js"></script>
		
		
	  <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    
    <title>Off Canvas Template for Bootstrap</title>
    
    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">

		<!-- Must be included in all templates -->
    <!--[if IE 6]><link rel="stylesheet" href="style.php?T=style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.php?T=style.ie7.css" type="text/css" media="screen" /><![endif]-->
		<?php echo $_smarty_tpl->getSubTemplate ("required_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<link rel='stylesheet' href='style.php?T=style.ext.css' type='text/css' />
    <script type="text/javascript" src="style.php?T=script.js"></script>
   <style type="text/css">
   .ie7 .art-post .art-layout-cell { border:none !important; padding:0 !important; }
   .ie6 .art-post .art-layout-cell { border:none !important; padding:0 !important; }

   .art-post .layout-item-0 { border-top-width:1px;border-top-style:solid;
                              border-top-color:#f8f8f8;margin-top: 10px;margin-bottom: 10px; }
   .art-post .layout-item-1 { color: #151C23; background:repeat #fbfbfb; }
   .art-post .layout-item-2 {
     border-top-style:solid;    border-right-style:dotted; border-bottom-style:solid; border-left-style:solid;
     border-top-width:0px;      border-right-width:1px;    border-bottom-width:0px;   border-left-width:0px;
     border-top-color:#3E81A8;  border-right-color:#3E81A8; border-bottom-color:#3E81A8; border-left-color:#3E81A8;
     color: #151C23;
     padding-right: 10px;
     padding-left: 10px; }

   .art-post .layout-item-3 { color: #151C23; padding-right: 10px;padding-left: 10px; }
   .art-post .layout-item-4 { padding-right: 10px;padding-left: 10px; }
   .art-post .layout-item-5 { margin-bottom: 10px; }
   .art-post .layout-item-6 { color: #152B38; border-spacing: 10px 0px; border-collapse: separate; }
   .art-post .layout-item-7 { border-top-style:solid;    border-right-style:solid;   border-bottom-style:solid;   border-left-style:solid;
                              border-top-width:1px;      border-right-width:1px;     border-bottom-width:1px;     border-left-width:1px;
                              border-top-color:#3E81A8;  border-right-color:#3E81A8; border-bottom-color:#3E81A8; border-left-color:#3E81A8;
                              color: #152B38; padding-right: 10px; padding-left: 10px; }
   </style>
  <script type="text/javascript">
  	jQuery(document).ready(function(){
      //var msg = ' errors';
      showErrorMsg(emsg);
      showNoticeMsg(nmsg);
      if (navigator.cookieEnabled == false) { $.modal("<div><?php echo con("cookie_disabled");?>
</div>"); }
      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->getJQuery(array(),$_smarty_tpl);?>

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
  
  <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
      <div class="container">
        <a class="navbar-brand" href="#">Project name</a>
        <ul class="nav navbar-nav">
          <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="float-xs-right hidden-sm-up">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Hello, world!</h1>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
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

  
  
  
  <p>hello wonder</p>
  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>
      window.jQuery; //|| document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="offcanvas.js"></script>
    <!--example at
    http://v4-alpha.getbootstrap.com/examples/offcanvas/#
    -->
    
  
<div id="art-main">
    <div class="cleared reset-box"></div>
    <div class="art-header">
        <div class="art-header-position">
            <div class="art-header-wrapper">
                <div class="cleared reset-box"></div>
                <div class="art-header-inner">
                <div class="art-headerobject"></div>
                <div class="art-logo">
              <?php if ($_smarty_tpl->tpl_vars['shop_sitename']->value){?>
                <h1 class="art-logo-name"><a href="./index.html"><?php echo $_smarty_tpl->tpl_vars['shop_sitename']->value;?>
</a></h1>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['shop_slogan']->value){?>
                <h2 class="art-logo-text"><?php echo $_smarty_tpl->tpl_vars['shop_slogan']->value;?>
</h2>
              <?php }?>
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
  
              <?php if ($_smarty_tpl->tpl_vars['topmenu']->value){?>
                 <?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['topmenu']->value,'class'=>"art-hmenu"));?>

              <?php }else{ ?>
                <ul class='art-menu'>
                  <li>
                    welkom to the world
                  </li>
                 </ul>
              <?php }?>
</div>
</div>
</div>
</div>


<div class="cleared reset-box"></div>

<div class="art-box art-sheet">
  
        <div class="art-box-body art-sheet-body">
          
            <div class="art-layout-wrapper">
              
                <?php echo $_smarty_tpl->getSubTemplate ("Progressbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>$_smarty_tpl->tpl_vars['name']->value), 0);?>


                <DIV style="MARGIN-TOP: 0.35em;MARGIN-Bottom: 0.35em; DISPLAY: none" id=error-message class="ui-state-error ui-corner-all" title="Order Error Message">
                <P><SPAN style="FLOAT: left; MARGIN-RIGHT: 0.3em" class="ui-icon ui-icon-alert"></SPAN><div id=error-text>ffff<br>tttttcv ttt </div> </P></DIV>
                <DIV style="MARGIN-TOP: 0.35em; MARGIN-Bottom: 0.35em; DISPLAY: none" id=notice-message class="ui-state-highlight ui-corner-all" title="Order Notice Message">
                <P><SPAN style="FLOAT: left; MARGIN-RIGHT: 0.3em" class="ui-icon ui-icon-info"></SPAN><div id=notice-text>fff</div> </P></DIV>

                <div class="art-content-layout">
                  
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1">
                <?php echo $_smarty_tpl->getSubTemplate ('user_login_block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <?php if ($_smarty_tpl->tpl_vars['vermenu']->value){?>
<div class="art-box art-vmenublock">
    <div class="art-box-body art-vmenublock-body">
                <div class="art-bar art-vmenublockheader">
                        <h3 class="t"><?php echo con("vertical_menu");?>
</h3>
                </div>
                <div class="art-box art-vmenublockcontent">
                    <div class="art-box-body art-vmenublockcontent-body">
                          <?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['vermenu']->value,'class'=>"art-vmenu"));?>

                                		<div class="cleared"></div>
                    </div>
                </div>
            		<div class="cleared"></div>
              </div>
            </div>
         <?php }?>
             <?php echo $_smarty_tpl->getSubTemplate ('cart_view_block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                          <div class="cleared"></div>
                        </div>


                        <div class="art-layout-cell art-content">
                          <div class="art-box art-post">
                            <div class="art-box-body art-post-body">
                              <div class="art-post-inner art-article">
                                <h2 class="art-postheader"><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h2>
                                <?php if ($_smarty_tpl->tpl_vars['headerNote']->value){?>
                                  <div class="art-postcontent">
                                    <div class="art-content-layout">
                                      <div class="art-content-layout-row">
                                        <div class="art-layout-cell layout-item-0" style="width: 100%;">
                                          <p><?php echo $_smarty_tpl->tpl_vars['headerNote']->value;?>
</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <?php }?>
                                <div class="art-postcontent">
                                   <?php echo $_smarty_tpl->tpl_vars['WebContent']->value;?>

                                </div>
                                <?php if (!$_smarty_tpl->tpl_vars['footNote']->value){?>
                                  <div class="art-postcontent">
                                    <div class="art-content-layout">
                                      <div class="art-content-layout-row">
                                        <div class="art-layout-cell layout-item-0" style="width: 100%;">
                                          <p><?php echo $_smarty_tpl->tpl_vars['footNote']->value;?>
</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <?php }?>
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
  <script>
    var emsg = '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printMsg'][0][0]->printMsg(array('key'=>'__Warning__','addspan'=>false),$_smarty_tpl);?>
<?php echo preg_replace("%(?<!\\\\)'%", "\'",ob_get_clean())?>';
    var nmsg = '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printMsg'][0][0]->printMsg(array('key'=>'__Notice__','addspan'=>false),$_smarty_tpl);?>
<?php echo preg_replace("%(?<!\\\\)'%", "\'",ob_get_clean())?>';
  </script>

</body>
</html><?php }} ?>