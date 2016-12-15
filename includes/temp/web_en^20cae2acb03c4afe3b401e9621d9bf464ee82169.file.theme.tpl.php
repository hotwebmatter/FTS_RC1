<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 14:09:01
         compiled from "/home/ubuntu/workspace/includes/template/theme/basic/theme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16260303235852ea4d670864-13549022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20cae2acb03c4afe3b401e9621d9bf464ee82169' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/theme/basic/theme.tpl',
      1 => 1481826312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16260303235852ea4d670864-13549022',
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
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5852ea4d8e0ed6_03118496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5852ea4d8e0ed6_03118496')) {function content_5852ea4d8e0ed6_03118496($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

		<link rel='stylesheet' href='style.php' type='text/css' />

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