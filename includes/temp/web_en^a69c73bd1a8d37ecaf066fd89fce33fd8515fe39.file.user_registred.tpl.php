<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-16 14:17:42
         compiled from "/home/ubuntu/workspace/includes/template/web/user_registred.tpl" */ ?>
<?php /*%%SmartyHeaderCode:333982560582cb0d643e6b9-72627280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a69c73bd1a8d37ecaf066fd89fce33fd8515fe39' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/user_registred.tpl',
      1 => 1478706703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '333982560582cb0d643e6b9-72627280',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_582cb0d6451862_16417109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582cb0d6451862_16417109')) {function content_582cb0d6451862_16417109($_smarty_tpl) {?><!-- $Id$ -->

      <div class="art-content-layout-br layout-item-0"></div>
      <div class="art-content-layout layout-item-1">
        <div class="art-content-layout-row">
          <div class="art-layout-cell layout-item-3" id="notice-message" title='<?php echo con("order_notice_message");?>
'>

             <p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
                <?php echo con("act_is_sent");?>

               <blockquote style="margin: 10px 0"><?php echo con("act_mess_line");?>
</blockquote>
             </p>
          </div>
        </div>
      </div>
      <div class="art-content-layout-br layout-item-0"></div><?php }} ?>