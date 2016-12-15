<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 16:02:54
         compiled from "/home/ubuntu/workspace/includes/template/pos/handlings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:773841355585304fe897755-70978725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caae5018f7b3fce60e7bcabe85499e02545db49b' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/pos/handlings.tpl',
      1 => 1481835448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '773841355585304fe897755-70978725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'min_date' => 0,
    'shop_handling' => 0,
    'checked' => 0,
    'shoppos_allow_without_fee' => 0,
    'shoppos_allow_without_cost' => 0,
    'update_view' => 0,
    'errstyle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_585304fe93f471_08944595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585304fe93f471_08944595')) {function content_585304fe93f471_08944595($_smarty_tpl) {?><?php if (!is_callable('smarty_block_handling')) include '/home/ubuntu/workspace/includes/shop_plugins/block.handling.php';
if (!is_callable('smarty_function_cycle')) include '/home/ubuntu/workspace/includes/libs/smarty3/plugins/function.cycle.php';
?><!-- $Id$ -->

  	<?php $_smarty_tpl->tpl_vars['min_date'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->min_date_f(), null, 0);?>
    <?php $_smarty_tpl->_capture_stack[0][] = array('total_price', null, null); ob_start(); ?>
      <?php echo $_smarty_tpl->smarty->registered_objects['cart'][0]->total_price(array(),$_smarty_tpl);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
  	<?php $_smarty_tpl->smarty->_tag_stack[] = array('handling', array('sp'=>'on','event_date'=>$_smarty_tpl->tpl_vars['min_date']->value)); $_block_repeat=true; echo smarty_block_handling(array('sp'=>'on','event_date'=>$_smarty_tpl->tpl_vars['min_date']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

      <?php $_smarty_tpl->tpl_vars['total_price'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['total_price'], null, 0);?>

  		<tr class="<?php echo smarty_function_cycle(array('name'=>'payments','values'=>'admin_list_row_0, admin_list_row_1'),$_smarty_tpl);?>
">
  		  <td class='payment_form' style='vertical-align:middle; '> &nbsp;
      	  <?php if ($_POST['handling_id']==$_smarty_tpl->tpl_vars['shop_handling']->value['handling_id']){?>
      			 <?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable("checked='checked'", null, 0);?>
          <?php }else{ ?>
             <?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable('', null, 0);?>
          <?php }?>

    		  <input <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 type='radio' id='handling_id' class='checkbox_dark' name='handling_id' value='<?php echo $_smarty_tpl->tpl_vars['shop_handling']->value['handling_id'];?>
'>
  		  </td>
  		  <td class='payment_form'>
  		  	<label for='<?php echo $_smarty_tpl->tpl_vars['shop_handling']->value['handling_id'];?>
_check'>
  		  	<?php if ($_smarty_tpl->tpl_vars['shop_handling']->value['handling_id']==1){?>
  		  	   <?php echo con("reserve");?>
 <?php echo con("tickets");?>

	  	    <?php }else{ ?>
    		  	<?php echo con("payment");?>
: <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['shop_handling']->value['handling_text_payment'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?><br>
    		  	<?php echo con("shipment");?>
: <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['shop_handling']->value['handling_text_shipment'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
   		  	<?php }?>
  		  	</label>
  		  </td>
  		  <td  class='view_cart_td'  valign='top'  align='right' width='100' id='price_<?php echo $_smarty_tpl->tpl_vars['shop_handling']->value['handling_id'];?>
'>
          &nbsp;
  		  </td>
  		</tr>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_handling(array('sp'=>'on','event_date'=>$_smarty_tpl->tpl_vars['min_date']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php if ($_smarty_tpl->tpl_vars['shoppos_allow_without_fee']->value==1){?>
    <tr>
      <td class='user_item' height='16' colspan='2'>
         <?php echo con("without_fee");?>

      </td>
      <td  class='user_value'>
        <input type='checkbox' class='checkbox' name='no_fee' id='no_fee' value='1'>
      </td>
    </tr>
    <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['shoppos_allow_without_cost']->value==1){?>
    <tr>
      <td class='user_item' height='16' colspan='2'>
         <?php echo con("without_cost");?>

      </td>
      <td  class='user_value'>
        <input type='checkbox' class='checkbox' name='no_cost' id='no_cost' value='1'>
      </td>
    </tr>
		<?php }?>
  	<?php if (!$_smarty_tpl->tpl_vars['update_view']->value['currentres']){?>
      <?php $_smarty_tpl->tpl_vars['errstyle'] = new Smarty_variable('style="display:none;"', null, 0);?>
  	<?php }?>
		<tr class="err" <?php echo $_smarty_tpl->tpl_vars['errstyle']->value;?>
 >
			<td colspan="3">
 			  
 			  <?php echo con("limit");?>
 <br>
			</td>
		</tr>
  	<tr>
     	<td class='view_cart_total' colspan='2'>
      	<?php echo con("total_price");?>

    	</td>
    	<td class='view_cart_total' align='right' id='total_price'>
      
    	</td>
   	</tr>

<?php }} ?>