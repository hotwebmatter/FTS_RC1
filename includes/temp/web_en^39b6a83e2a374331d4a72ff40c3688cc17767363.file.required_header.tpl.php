<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-09 12:14:27
         compiled from "/home/ubuntu/workspace/includes/template/web/required_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1807553624582359734e4b20-93681299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39b6a83e2a374331d4a72ff40c3688cc17767363' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/required_header.tpl',
      1 => 1478706703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1807553624582359734e4b20-93681299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'organizer_name' => 0,
    'my_event_short_text' => 0,
    'my_event_name' => 0,
    'my_event_keywords' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58235973571578_75650042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58235973571578_75650042')) {function content_58235973571578_75650042($_smarty_tpl) {?><?php if (!is_callable('smarty_function_minify')) include '/home/ubuntu/workspace/includes/shop_plugins/function.minify.php';
?><!-- $Id$ -->  <!-- Required Header .tpl Start -->
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <meta name="description" content="<?php echo smarty_modifier_clean($_smarty_tpl->tpl_vars['organizer_name']->value);?>
<?php if (!empty($_smarty_tpl->tpl_vars['my_event_short_text']->value)){?> - <?php echo smarty_modifier_clean($_smarty_tpl->tpl_vars['my_event_short_text']->value);?>
 <?php }?>" /><title><?php echo smarty_modifier_clean($_smarty_tpl->tpl_vars['organizer_name']->value);?>
<?php if (!empty($_smarty_tpl->tpl_vars['my_event_name']->value)){?> - <?php echo smarty_modifier_clean($_smarty_tpl->tpl_vars['my_event_name']->value);?>
<?php }?></title><?php if (!empty($_smarty_tpl->tpl_vars['my_event_keywords']->value)){?><META NAME="keywords" CONTENT="<?php echo smarty_modifier_clean($_smarty_tpl->tpl_vars['my_event_keywords']->value);?>
"><?php }?>
  <?php echo smarty_function_minify(array('type'=>'css'),$_smarty_tpl);?>


  <?php echo smarty_function_minify(array('type'=>'js','base'=>'scripts/jquery'),$_smarty_tpl);?>
 
  <?php echo smarty_function_minify(array('type'=>'js','base'=>'scripts/jquery','files'=>'jquery.countdown.pack.js,jquery.imagemapster.js,jquery.metadata.min.js,jquery.notify.js'),$_smarty_tpl);?>


  <!--Start Image Mapping-->
<style type="text/css">
		.Buttonloading {
			background : url('images/theme/default/grid-loading.gif') no-repeat  1px 1px !important;
			padding-left: 20px !important;
		}
</style>
  <!--End Image Mapping-->

  <script type="text/javascript">
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
  	lang.pass_short = '<?php echo con("pass_too_short");?>
'; lang.pass_match = '<?php echo con("pass_match");?>
';
  	lang.not_number = '<?php echo con("not_number");?>
';     lang.condition ='<?php echo con("check_condition");?>
';

    jQuery(document).ready(function(){
        $("*[class*='has-tooltip']").tooltip({
          delay:0,
          showBody: "~",
          showURL:false,
          track: true,
          opacity: 1,
          fixPNG: true,
          fade: 250
        });
      });

    var showDialog = function(element){
      jQuery.get(jQuery(element).attr('href'),
        function(data){
          jQuery("#showdialog").html(data);
          jQuery("#showdialog").modal({
            autoResize:true,
            maxHeight:500,
            maxWidth:800
          });
        }
      );
      return false;
    }

    function BasicPopup(a) {
      showDialog(a);
      return false;
    }

       var printMessages = function(messages){
  if(messages === undefined){
    return;
  }
  if (messages.warning) {
    showErrorMsg(messages.warning);
  }
  if (messages.notice) {
    showNoticeMsg(messages.notice);
  }
}
  </script>
  <!-- Required Header .tpl  end --><?php }} ?>