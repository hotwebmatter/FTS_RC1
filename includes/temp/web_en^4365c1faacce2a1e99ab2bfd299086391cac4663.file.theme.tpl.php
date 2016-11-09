<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-09 12:14:27
         compiled from "/home/ubuntu/workspace/includes/template/theme/default/theme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:866522585582359733a1679-74353894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4365c1faacce2a1e99ab2bfd299086391cac4663' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/theme/default/theme.tpl',
      1 => 1478706703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '866522585582359733a1679-74353894',
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
    '_SHOP_root' => 0,
    '_SHOP_root_secured' => 0,
    'organizer_logo' => 0,
    '_SHOP_themeimages' => 0,
    'shop_sitename' => 0,
    'organizer_name' => 0,
    'shop_slogan' => 0,
    'topmenu' => 0,
    'plugin' => 0,
    'vermenu' => 0,
    'google_ad_client' => 0,
    'google_ad_slot_left' => 0,
    'hideGoogleAds' => 0,
    'pagetitle' => 0,
    'headerNote' => 0,
    'WebContent' => 0,
    'footNote' => 0,
    'google_ad_slot_right' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_582359734de5e2_35405524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582359734de5e2_35405524')) {function content_582359734de5e2_35405524($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_menu')) {
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
    <?php if (!empty($_smarty_tpl->tpl_vars['entry']->value['menu'])&&is_array($_smarty_tpl->tpl_vars['entry']->value['menu'])){?>
       <?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['entry']->value['menu'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

    <?php }?>
  <?php } ?>
  </ul>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.57793 -->
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_SHOP_root']->value;?>
style.php" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_SHOP_root_secured']->value;?>
style.php?T=style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_SHOP_root']->value;?>
style.php?T=style.responsive.css" media="all">

		<?php echo $_smarty_tpl->getSubTemplate ("required_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['_SHOP_root']->value;?>
style.php?T=style.ext.css' type='text/css' />
    <script src="<?php echo $_smarty_tpl->tpl_vars['_SHOP_root']->value;?>
style.php?T=script.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['_SHOP_root']->value;?>
style.php?T=script.responsive.js"></script>

  <script type="text/javascript">
  	jQuery(document).ready(function(){
      //var msg = ' errors';
      showErrorMsg(emsg);
      showNoticeMsg(nmsg);
      if (navigator.cookieEnabled == false) { $.modal("<div><?php echo con("cookie_disabled");?>
</div>"); }
    });
var ajaxQManager = $.manageAjax.create('ajaxQMan',{
	queue:true,
	abortOld:true,
	maxRequests: 1,
	cacheResponse: false
});
  </script>
</head>
<body>
   <div id='messagebar' style='text-align:left; display: block; position: fixed; left:0px; top: 0px; z-index: 1031; width:100%;'> </div>
  <div id="art-main">
    <div class="art-sheet clearfix">
      <header class="art-header clearfix">
        <?php if ($_smarty_tpl->tpl_vars['organizer_logo']->value){?>
          <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->image(array('href'=>((string)$_smarty_tpl->tpl_vars['organizer_logo']->value),'class'=>'art-logo','height'=>130,'align'=>'left','border'=>"0",'style'=>"left:10px;top:4px"),$_smarty_tpl);?>

        <?php }else{ ?>
          <img class='art-logo' style='left:10px;top:4px' src="<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
object0.png"/>
        <?php }?>
        <div class="art-shapes">
          <h1 class="art-headline" data-left="1.39%">
            <a href="#">
             <?php if (!empty($_smarty_tpl->tpl_vars['shop_sitename']->value)){?>
               <?php echo $_smarty_tpl->tpl_vars['shop_sitename']->value;?>

             <?php }else{ ?>
                <?php echo $_smarty_tpl->tpl_vars['organizer_name']->value;?>

             <?php }?>
            </a>
          </h1>
          <?php if (!empty($_smarty_tpl->tpl_vars['shop_slogan']->value)){?>
            <h2 class="art-slogan" data-left="1.39%">Voer site-slogan in</h2>
          <?php }?>
        </div>
      </header>
      <nav class="art-nav clearfix">
        <?php if (!empty($_smarty_tpl->tpl_vars['topmenu']->value)){?>
          <?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['topmenu']->value,'class'=>"art-hmenu"));?>

        <?php }else{ ?>
          <ul class="art-hmenu">
            <li>
               welkom to the world
            </li>
          </ul>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['plugin']->value->showLanguageSelector();?>

      </nav>
      

      <div class="art-layout-wrapper clearfix">
        <div class="art-content-layout">
          <div class="art-content-layout-row">
            <div class="art-layout-cell art-sidebar1 clearfix">
              <?php echo $_smarty_tpl->getSubTemplate ('user_login_block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

              <?php if (!empty($_smarty_tpl->tpl_vars['vermenu']->value)){?>
                <div class="art-vmenublock clearfix">
                  <div class="art-vmenublockheader">
                    <h3 class="t"><?php echo con("vertical_menu");?>
</h3>
                  </div>
                  <div class="art-vmenublockcontent">
                    <?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['vermenu']->value,'class'=>"art-vmenu"));?>

                  </div>
                </div>
              <?php }?>
              <?php echo $_smarty_tpl->getSubTemplate ('cart_view_block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

              <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['plugin']->value->leftsidebar(), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
              <?php if ($_smarty_tpl->tpl_vars['google_ad_client']->value&&$_smarty_tpl->tpl_vars['google_ad_slot_left']->value&&!$_smarty_tpl->tpl_vars['hideGoogleAds']->value){?>
              <div class="art-block clearfix">

                        <script type="text/javascript">
                          <!--
                          google_ad_client = "<?php echo $_smarty_tpl->tpl_vars['google_ad_client']->value;?>
";
                          /* 200x200, gemaakt 13-9-10 */
                          google_ad_slot = "<?php echo $_smarty_tpl->tpl_vars['google_ad_slot_left']->value;?>
";
                          google_ad_width = 200;
                          google_ad_height = 200;
                          //-->
                        </script>
                        <script type="text/javascript"
                          src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
                        </script>
              </div>
              <?php }?>
            </div>
            <div class="art-layout-cell art-content clearfix">
              <article class="art-post art-article">
                <h2 class="art-postheader"><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h2>

                <div class="art-postcontent art-postcontent-0 clearfix">
                  <?php if (!empty($_smarty_tpl->tpl_vars['headerNote']->value)){?>
                    <div class="art-content-layout">
                      <div class="art-content-layout-row">
                        <div class="art-layout-cell layout-item-0" style="width: 100%;" >
                            <p><?php echo $_smarty_tpl->tpl_vars['headerNote']->value;?>
</p>
                        </div>
                      </div>
                    </div>
                  <?php }?>
                  <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <?php echo $_smarty_tpl->tpl_vars['WebContent']->value;?>

                    </div>
                  </div>
                  <div class="art-content-layout">
                    <div class="art-content-layout-row">
                      <div class="art-layout-cell layout-item-0" style="width: 100%;" >
                        <?php if (!empty($_smarty_tpl->tpl_vars['footNote']->value)){?>
                          <p><?php echo $_smarty_tpl->tpl_vars['footNote']->value;?>
</p>
                        <?php }?>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['google_ad_client']->value&&$_smarty_tpl->tpl_vars['google_ad_slot_right']->value&&!$_smarty_tpl->tpl_vars['hideGoogleAds']->value){?>
            <div class="art-layout-cell art-sidebar2 clearfix">
              <div class="art-block clearfix">

                <script type="text/javascript">
                  <!--
                  google_ad_client = "<?php echo $_smarty_tpl->tpl_vars['google_ad_client']->value;?>
";
                  /* 120x600, gemaakt 13-9-10 */
                  google_ad_slot = "<?php echo $_smarty_tpl->tpl_vars['google_ad_slot_right']->value;?>
";
                  google_ad_width = 120;
                  google_ad_height = 600;
                  //-->
                </script>
                <script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
      </div>
      <footer class="art-footer clearfix">
        <p>
          <!-- To comply with our GPL please keep the following link in the footer of your site -->
          <!-- Failure to abide by these rules may result in the loss of all support and/or site status. -->
          Copyright &copy; 2013. All Rights Reserved.<br>
          Powered By <a href="https://www.fusionticket.org">Fusion Ticket</a> - Free Open Source Online Box Office
        </p>
      </footer>

    </div><br>
  </div>
  <div style="display:none" id='showdialog'></div>
  <script>
    var emsg = '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printMsg'][0][0]->printMsg(array('key'=>'__Warning__','addspan'=>false),$_smarty_tpl);?>
<?php echo preg_replace("%(?<!\\\\)'%", "\'",ob_get_clean())?>';
    var nmsg = '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printMsg'][0][0]->printMsg(array('key'=>'__Notice__','addspan'=>false),$_smarty_tpl);?>
<?php echo preg_replace("%(?<!\\\\)'%", "\'",ob_get_clean())?>';
  	jQuery(document).ready(function(){
      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->getJQuery(array(),$_smarty_tpl);?>

    });
  </script>


</body>
</html><?php }} ?>