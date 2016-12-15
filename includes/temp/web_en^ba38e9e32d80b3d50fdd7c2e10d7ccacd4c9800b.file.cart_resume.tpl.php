<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 14:10:26
         compiled from "/home/ubuntu/workspace/includes/template/web/cart_resume.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18162608865852eaa2ceab42-51214204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba38e9e32d80b3d50fdd7c2e10d7ccacd4c9800b' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/cart_resume.tpl',
      1 => 1481826312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18162608865852eaa2ceab42-51214204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    '_SHOP_themeimages' => 0,
    'cart_overview' => 0,
    'seat_item' => 0,
    'event_item' => 0,
    'category_item' => 0,
    '_SHOP_root_secured' => 0,
    'login_msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5852eaa2dc5da2_61836880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5852eaa2dc5da2_61836880')) {function content_5852eaa2dc5da2_61836880($_smarty_tpl) {?><!-- $Id$ -->

<table width="195px" border="0" cellspacing="0" cellpadding="0" class="cart_table">
  <tr>
  	<td class="cart_title">
  	  <?php echo con("shopcart");?>
&nbsp;
  	  <?php if ($_smarty_tpl->tpl_vars['cart']->value->is_empty_f()){?>
  	  	<img src="<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
caddie.gif">
  	  <?php }else{ ?>
    		<img src="<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
caddie_full.png" border='0'>
  	  <?php }?>
  	</td>
  </tr>
  <tr>
  	<?php if ($_smarty_tpl->tpl_vars['cart']->value->is_empty_f()){?>
	    <td valign="top" class='cart_content' align="center"><?php echo con("no_tick_res");?>
</td>
	  <?php }else{ ?>
    	<?php $_smarty_tpl->tpl_vars["cart_overview"] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->overview_f(), null, 0);?>
    	<td valign="top" class='cart_content' align='left' >
    	  <table>
      		<tr>
      		  <td class="cart_content">
        		  <?php if ($_smarty_tpl->tpl_vars['cart_overview']->value['valid']){?>
        		  	<img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
ticket-valid.png'> <?php echo con("valid_tickets");?>
 <?php echo $_smarty_tpl->tpl_vars['cart_overview']->value['valid'];?>
<br><br>
        		  <?php }?>
        		  <?php if ($_smarty_tpl->tpl_vars['cart_overview']->value['expired']){?>
        		  	<img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
ticket-expired.png'> <?php echo con("expired_tickets");?>
 <?php echo $_smarty_tpl->tpl_vars['cart_overview']->value['expired'];?>
<br><br>
        		  <?php }?>
        		  <?php if ($_smarty_tpl->tpl_vars['cart_overview']->value['valid']){?>
          			<img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
clock.gif'> <?php echo con("tick_exp_in");?>
 <span id="countdown1"></span>
                 
                   <script>
                  $('#countdown1').countdown({ until:  +<?php echo $_smarty_tpl->tpl_vars['cart_overview']->value['secttl'];?>
  , compact: true,
                                               format: 'mS', description: 's' });
                  </script>
                 

        		  <?php }?>
      		  </td>
      		</tr>
    	  </table>
  	  </td>
    </tr>
    <tr>
    	<td class='cart_content'>
    	  <table>
        	<?php $_smarty_tpl->smarty->_tag_stack[] = array('cart->items', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_objects['cart'][0]->items(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        	  <?php if (!$_smarty_tpl->tpl_vars['seat_item']->value->is_expired()){?>

          		<tr>
          		  <td class='cart_content' style='border-bottom:#cccccc 1px solid;padding-bottom:4px;padding-top:4px; font-size:10px;'>
            		  <?php echo $_smarty_tpl->tpl_vars['event_item']->value->event_name;?>
<br>
            		  <?php echo $_smarty_tpl->tpl_vars['category_item']->value->cat_name;?>
<br>
            		  <?php echo $_smarty_tpl->tpl_vars['seat_item']->value->count();?>
 <?php echo con("x_tick");?>

          		  </td>
          		  <td  width="45%" valign='top' class='cart_content' style='border-bottom:#cccccc 1px solid;padding-bottom:4px;padding-top:4 font-size:10px;'>
            			<b><?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->valuta(array('value'=>$_smarty_tpl->tpl_vars['seat_item']->value->total_price()),$_smarty_tpl);?>
</b>
            			<br>
                			<img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
clock.gif' valign='middle' align='middle'> <?php echo $_smarty_tpl->tpl_vars['seat_item']->value->ttl();?>
 min.
          		  </td>
          		</tr>
            <?php }?>
       		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_objects['cart'][0]->items(array(), $_block_content, $_smarty_tpl, $_block_repeat);   } array_pop($_smarty_tpl->smarty->_tag_stack);?>

      		<?php if ($_smarty_tpl->tpl_vars['cart_overview']->value['valid']){?>
        		<tr>
        		  <td align='center' class='cart_content' colspan='2'>
          			<br>
          			<a href='index.php?action=view_cart'><?php echo con("view_order");?>
</a>
          			<br>
          			<br><?php echo con("tot_tick_price");?>
 <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->valuta(array('value'=>$_smarty_tpl->tpl_vars['cart']->value->total_price_f()),$_smarty_tpl);?>

        		  </td>
        		</tr>
        		<tr>
        		  <td align='center' class='cart_content' colspan='2'>
          			<form action="<?php echo $_smarty_tpl->tpl_vars['_SHOP_root_secured']->value;?>
/checkout.php" method='post'>
          			   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['ShowFormToken'][0][0]->showFormToken(array('name'=>'ReservHandling'),$_smarty_tpl);?>

            			<input type="submit" name="go_pay" value="<?php echo con("checkout");?>
">
          			</form>
        	    </td>
        		</tr>
      		<?php }?>
    	  </table>
  	  <?php }?>
  	</td>
  </tr>
</table>
<?php echo $_smarty_tpl->tpl_vars['login_msg']->value;?>
<?php }} ?>