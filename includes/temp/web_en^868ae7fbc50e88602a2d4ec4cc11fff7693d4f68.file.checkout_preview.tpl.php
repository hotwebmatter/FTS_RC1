<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-16 14:17:42
         compiled from "/home/ubuntu/workspace/includes/template/web/checkout_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1420888533582cb0d629c932-14959134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '868ae7fbc50e88602a2d4ec4cc11fff7693d4f68' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/checkout_preview.tpl',
      1 => 1478706703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1420888533582cb0d629c932-14959134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'cart' => 0,
    'update' => 0,
    'min_date' => 0,
    'total' => 0,
    'shop_handling' => 0,
    'order' => 0,
    'update_view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_582cb0d63df8b1_99828009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582cb0d63df8b1_99828009')) {function content_582cb0d63df8b1_99828009($_smarty_tpl) {?><?php if (!is_callable('smarty_block_handling')) include '/home/ubuntu/workspace/includes/shop_plugins/block.handling.php';
if (!is_callable('smarty_function_cycle')) include '/home/ubuntu/workspace/includes/libs/smarty3/plugins/function.cycle.php';
?><!-- $Id$ --><?php if ($_smarty_tpl->tpl_vars['user']->value->mode()==0&&!$_smarty_tpl->tpl_vars['user']->value->active){?><?php echo $_smarty_tpl->getSubTemplate ("user_activate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>con("shopping_cart_check_out"),'header'=>con("handling_cont_mess")), 0);?>
<!-- checkout_preview.tpl --><?php if ($_smarty_tpl->tpl_vars['user']->value->mode()<=2&&$_smarty_tpl->tpl_vars['user']->value->new_member){?><?php echo $_smarty_tpl->getSubTemplate ("user_nm_registered.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ("cart_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('check_out'=>"on"), 0);?>
<?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->total_price_f(), null, 0);?><br /><?php if (!$_smarty_tpl->tpl_vars['update']->value->is_demo()){?><form method='post' name='handling' id="ft-order-handling"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['ShowFormToken'][0][0]->showFormToken(array('name'=>'OrderHandling'),$_smarty_tpl);?>
<input type='hidden' name='action' value='confirm' /><?php }?><div class="art-content-layout-wrapper layout-item-5"><div class="art-content-layout layout-item-6"><div class="art-content-layout-row"><div class="art-layout-cell layout-item-7" style="width: 50%;"><?php echo $_smarty_tpl->getSubTemplate ("user_address.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"on"), 0);?>
</div><div class="art-layout-cell layout-item-7" style="width: 50%;"><table border='0' width='100%' cellpadding="5"><tr><td colspan='3' class='TblHeader' align='left'><h4 style='margin:0px;'><?php echo con("handlings");?>
</h2></td></tr><?php $_smarty_tpl->tpl_vars['min_date'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->min_date_f(), null, 0);?><?php echo $_smarty_tpl->smarty->registered_objects['update'][0]->view(array('event_date'=>$_smarty_tpl->tpl_vars['min_date']->value),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('handling', array('www'=>'on','event_date'=>$_smarty_tpl->tpl_vars['min_date']->value,'total'=>$_smarty_tpl->tpl_vars['total']->value,'count'=>$_smarty_tpl->tpl_vars['cart']->value->total_seats_f())); $_block_repeat=true; echo smarty_block_handling(array('www'=>'on','event_date'=>$_smarty_tpl->tpl_vars['min_date']->value,'total'=>$_smarty_tpl->tpl_vars['total']->value,'count'=>$_smarty_tpl->tpl_vars['cart']->value->total_seats_f()), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
   <tr class="<?php echo smarty_function_cycle(array('name'=>'payments','values'=>'TblHigher,TblLower'),$_smarty_tpl);?>
"><td class='payment_form'><input  type='radio' id='<?php echo $_smarty_tpl->tpl_vars['shop_handling']->value['handling_id'];?>
_check' class='checkbox_dark' name='handling_id' value='<?php echo $_smarty_tpl->tpl_vars['shop_handling']->value['handling_id'];?>
' /></td><td class='payment_form'><label for='<?php echo $_smarty_tpl->tpl_vars['shop_handling']->value['handling_id'];?>
_check'><?php echo con("payment");?>
: <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['shop_handling']->value['handling_text_payment'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?><br/><?php echo con("shipment");?>
: <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['shop_handling']->value['handling_text_shipment'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></label></td><td class='payment_form' align='right'><?php if ($_smarty_tpl->tpl_vars['shop_handling']->value['fee']){?>+ <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->valuta(array('value'=>sprintf("%.2f",$_smarty_tpl->tpl_vars['shop_handling']->value['fee'])),$_smarty_tpl);?>
<?php }?>&nbsp;</td></tr><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_handling(array('www'=>'on','event_date'=>$_smarty_tpl->tpl_vars['min_date']->value,'total'=>$_smarty_tpl->tpl_vars['total']->value,'count'=>$_smarty_tpl->tpl_vars['cart']->value->total_seats_f()), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</table></div></div></div></div><?php if ($_smarty_tpl->tpl_vars['order']->value->can_freeTicketCode()){?><div class="art-content-layout-wrapper layout-item-5"><div class="art-content-layout layout-item-6"><div class="art-content-layout-row"><div class="art-layout-cell layout-item-7 gui_form" style="width: 100%;"><?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('caption'=>con("freeTicketCode"),'type'=>'text','name'=>'FreeTicketCode'),$_smarty_tpl);?>
</div></div></div></div><?php }?><div class="art-content-layout-br layout-item-0"></div><div class="art-content-layout layout-item-1"><div class="art-content-layout-row" style='padding:10px;'><div class="art-layout-cell layout-item-3"  style='text-align:right; width: 100%;padding:10px;'><?php if ($_smarty_tpl->tpl_vars['update']->value->is_demo()){?><div class='error'>For safety issues we have disabled the order button. </div><?php }elseif($_smarty_tpl->tpl_vars['update_view']->value['currentres']){?><div class='error'><?php echo con("limit");?>
</div><?php }else{ ?><?php ob_start();?><?php echo con("order_it");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->button(array('url'=>'submit','id'=>'checkout-commit','name'=>'submit','value'=>$_tmp1),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['update_view']->value['can_reserve']){?></form><span style="display:inline-block;">&nbsp;<?php echo con("orclick");?>
&nbsp;</span><form  style="display:inline-block;" action='' method='post' name='handling'><input type='hidden' name='action' value='reserve' /><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['ShowFormToken'][0][0]->showFormToken(array('name'=>'ReservHandling'),$_smarty_tpl);?>
<?php ob_start();?><?php echo con("reserve");?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->button(array('url'=>'submit','id'=>'checkout-reserve','name'=>'submit_reserve','value'=>$_tmp2),$_smarty_tpl);?>
<?php }?><?php }?></div></div></div><?php if (!$_smarty_tpl->tpl_vars['update']->value->is_demo()){?></form><?php }?><br/><script language="javascript" type="text/javascript">jQuery(document).ready(function(){jQuery("#ft-order-handling").submit(function(){var handlingRadio = $("input:radio[name='handling_id']:checked").val();if(handlingRadio === undefined){showErrorMsg("<?php echo con("select_handling_option");?>
");return false;}jQuery('#checkout-commit').attr('disabled','true').addClass('Buttonloading').text("<?php echo con("please_wait_button");?>
");showNoticeMsg("<?php echo con("please_wait_message_order");?>
");return true;});});</script><?php }?><?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>