<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 16:03:36
         compiled from "/home/ubuntu/workspace/includes/template/pos/process_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89250476958530528cf0698-89844975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c1d85ef0c44c6ea23060dddd2e201543184959a' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/pos/process_menu.tpl',
      1 => 1481835448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89250476958530528cf0698-89844975',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_SHOP_images' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58530528d35e40_19244052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58530528d35e40_19244052')) {function content_58530528d35e40_19244052($_smarty_tpl) {?><!-- $Id$ -->
<table width='100%'  cellspacing='2' style='border-top:#45436d 1px solid;border-bottom:#45436d 1px solid;'>
  <tr>
  <td class='admin_list_buttons'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_images']->value;?>
dot.gif' class='admin_order_res' width='15' height='15' /> <?php echo con("order_status_reserved");?>
</td>
  <td class='admin_list_buttons'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_images']->value;?>
dot.gif' class='admin_order_ord' width='15' height='15' /> <?php echo con("order_status_ordered");?>
</td>
  <td class='admin_list_buttons'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_images']->value;?>
dot.gif' class='admin_order_send' width='15' height='15' /> <?php echo con("order_status_sent");?>
</td>
  <td class='admin_list_buttons'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_images']->value;?>
dot.gif' class='admin_order_paid' width='15' height='15' /> <?php echo con("order_status_paid");?>
</td>
  <td class='admin_list_buttons'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_images']->value;?>
dot.gif' class='admin_order_cancel' width='15' height='15' /> <?php echo con("order_status_cancelled");?>
</td>
  </tr>
  <tr><td class='admin_list_buttons' ><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_images']->value;?>
view.png' border='0'>
  <?php echo con("order_details");?>

</td><td class='admin_list_buttons'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_images']->value;?>
printer.png' border='0'>
  <?php echo con("print_order");?>

</td><td class='admin_list_buttons' colspan=2><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_images']->value;?>
trash.png' border='0'>
  <?php echo con("cancel_and_delete");?>

</td></tr>
  </table><?php }} ?>