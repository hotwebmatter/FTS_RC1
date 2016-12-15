<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 16:02:30
         compiled from "/home/ubuntu/workspace/includes/template/theme/_admin2/theme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:702941831585304e65767c8-79285990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffc0cdba7b0a764c2b07fca260e9d8f08c73d393' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/theme/_admin2/theme.tpl',
      1 => 1481835448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '702941831585304e65767c8-79285990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_SHOP_root' => 0,
    '_SHOP_themeimages' => 0,
    'pos' => 0,
    '_SHOP_images' => 0,
    'topmenu' => 0,
    'headerNote' => 0,
    'WebContent' => 0,
    'footNote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_585304e6674aa7_66896965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585304e6674aa7_66896965')) {function content_585304e6674aa7_66896965($_smarty_tpl) {?><?php if (!is_callable('smarty_function_minify')) include '/home/ubuntu/workspace/includes/shop_plugins/function.minify.php';
if (!is_callable('smarty_function_menu')) include '/home/ubuntu/workspace/includes/shop_plugins/function.menu.php';
?><!DOCTYPE html>
<html>
<head>
    <!-- Created by Artisteer v4.1.0.59861 -->
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
		<title>FusionTicket: Box Office / Sale Point </title>
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.php?T=style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.php?T=style.ie7.css" media="screen" /><![endif]-->

    <link rel="stylesheet" href="style.php?T=style.responsive.css" media="all">

    <?php echo smarty_function_minify(array('type'=>'css','base'=>''),$_smarty_tpl);?>

    <?php echo smarty_function_minify(array('type'=>'css','base'=>'css','files'=>'jquery.datatables.css'),$_smarty_tpl);?>


    <?php echo smarty_function_minify(array('type'=>'js','base'=>'scripts/jquery'),$_smarty_tpl);?>

    <?php echo smarty_function_minify(array('type'=>'js','base'=>'scripts/jquery','files'=>'jquery-ui-timepicker-addon.js,jquery.dataTables.js,jquery.dataTables.columnFilter.js,jquery.dataTables.KeyTable.min.js,jquery.notify.js'),$_smarty_tpl);?>


    <script src="style.php?T=script.js"></script>
    <script src="style.php?T=script.responsive.js"></script>

    <link rel="stylesheet" href="style.php?T=style.ext.css" type="text/css">

		<script type="text/javascript">
      var address = '<?php echo $_smarty_tpl->tpl_vars['_SHOP_root']->value;?>
';
			var lang = new Object();
			lang.required = '<?php echo con("mandatory");?>
';        lang.phone_long = '<?php echo con("phone_long");?>
'; lang.phone_short = '<?php echo con("phone_short");?>
';
			lang.fax_long = '<?php echo con("fax_long");?>
';         lang.fax_short = '<?php echo con("fax_short");?>
';
			lang.email_valid = '<?php echo con("email_valid");?>
';   lang.email_match = '<?php echo con("email_match");?>
';
			lang.not_number = '<?php echo con("not_number");?>
';     lang.add_tickets = '<?php echo con("add_tickets");?>
';
			lang.chart_title = '<?php echo con("select_seat_pos");?>
';
      lang.discount_none ='<?php echo con("discount_none");?>
';
      lang.select_event_first ='<?php echo con("select_event_first");?>
';
		</script>
    <?php echo smarty_function_minify(array('type'=>'js','base'=>'pos/scripts','files'=>'pos.jquery.style.js,pos.jquery.ajax.js,pos.jquery.order.functions.js,pos.jquery.order.js,pos.jquery.order.user.js,pos.jq.forms.js,pos.jq.current.js,pos.jq.current.functions.js'),$_smarty_tpl);?>

    <style>
      .ui-state-highlight {
        	background: #cdefeb url(../css/flick/images/ui-bg_flat_55_d2e2fe_40x100.png) 50% 50% repeat-x !important ;
			}
		</style>

    <script type="text/javascript">
        jQuery(document).ready(function(){
            <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->getJQuery(array(),$_smarty_tpl);?>

        });
    </script>

</head>
<body>
<div id="art-main">

    <div id='messagebar' style='text-align:left; display: block; position: fixed; left:0px; top: 0px; z-index: 1031; width:100%;'> </div>

    <div class="art-sheet clearfix">
<header class="art-header">
				<div class="loading">
					<img src="<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
LoadingImageSmall.gif" width="16" height="16" alt="Loading data, please wait" />
				</div>
    <div class="art-shapes"></div>
<h1 class="art-headline" data-left="1.22%">
   <?php echo con("box_office");?>

</h1>
 <h2 class="art-slogan" data-left="50%"> <?php echo $_smarty_tpl->tpl_vars['pos']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['pos']->value->user_lastname;?>
 - <?php echo $_smarty_tpl->tpl_vars['pos']->value->user_city;?>
</h2>
<div class="art-positioncontrol art-positioncontrol-1616327719" id="logo" data-left="1.25%"><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_images']->value;?>
logo.png'  border='0' style='float:left;'/></div>
<nav class="art-nav">
<?php if (!empty($_smarty_tpl->tpl_vars['topmenu']->value)){?>
  <?php echo smarty_function_menu(array('data'=>$_smarty_tpl->tpl_vars['topmenu']->value,'class'=>'art-hmenu'),$_smarty_tpl);?>

<?php }else{ ?>
  <ul class='art-hmenu'>
   <li>
      Welkom to Fusion Ticket.
   </li>
  </ul>
<?php }?>
</nav>
</header>
<div class="art-layout-wrapper">
  <div class="art-content-layout">
    <div class="art-content-layout-row">

			<div class="art-layout-cell art-content">
         <article class="art-post art-article">
                                <?php if ($_smarty_tpl->tpl_vars['headerNote']->value){?>
                                  <div class="art-postcontent  art-postcontent-0 clearfix">
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
                                <div class="art-postcontent  art-postcontent-0 clearfix">
                                   <?php echo $_smarty_tpl->tpl_vars['WebContent']->value;?>

                                </div>
                                <?php if (!empty($_smarty_tpl->tpl_vars['footNote']->value)){?>
                                  <div class="art-postcontent art-postcontent-0 clearfix">
                                    <div class="art-content-layout">
                                      <div class="art-content-layout-row">
                                        <div class="art-layout-cell layout-item-0" style="width: 100%;">
                                          <p>@@:<?php echo $_smarty_tpl->tpl_vars['footNote']->value;?>
</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <?php }?>
</article>

                        </div>
                    </div>
                </div>
            </div>
<footer class="art-footer">
<!-- To comply with our GPL please keep the following link in the footer of your site -->
              <!-- Failure to abide by these rules may result in the loss of all support and/or site status. -->
              <p>Copyright © 2013. All Rights Reserved.	Powered by <a href="http://fusionticket.org">Fusion Ticket</a> - The Free Open Source Box Office</p>
</footer>

    </div>
    <p class="art-page-footer">

    </p>
</div>


<div style="display:none" id="showdialog"></div>
<script>
var emsg = '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printMsg'][0][0]->printMsg(array('key'=>'__Warning__','addspan'=>false),$_smarty_tpl);?>
<?php echo preg_replace("%(?<!\\\\)'%", "\'",ob_get_clean())?>';
var nmsg = '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printMsg'][0][0]->printMsg(array('key'=>'__Notice__','addspan'=>false),$_smarty_tpl);?>
<?php echo preg_replace("%(?<!\\\\)'%", "\'",ob_get_clean())?>';
</script>

</body>
</html><?php }} ?>