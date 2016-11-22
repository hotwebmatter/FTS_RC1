<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-16 14:17:38
         compiled from "/home/ubuntu/workspace/includes/template/web/cart_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1474190015582cb0d2429c59-19687398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4c8111a419a1c2a6429dc2dc436aa5400ca6469' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/cart_view.tpl',
      1 => 1478706703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1474190015582cb0d2429c59-19687398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart_cont_mess' => 0,
    'event_id' => 0,
    'cart' => 0,
    '_SHOP_root_secured' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_582cb0d248e999_33616487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582cb0d248e999_33616487')) {function content_582cb0d248e999_33616487($_smarty_tpl) {?><!-- $Id$ -->
<?php $_template = new Smarty_Internal_Template('eval:'.con("cart_cont_mess"), $_smarty_tpl->smarty, $_smarty_tpl);$_smarty_tpl->assign('cart_cont_mess',$_template->fetch()); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>con("shopping_cart"),'header'=>$_smarty_tpl->tpl_vars['cart_cont_mess']->value), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("cart_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<br>
  <div class="art-content-layout-br layout-item-0"></div>
  <div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row" style='padding:10px;'>
      <div class="art-layout-cell layout-item-3"  style='width: 50%;padding:10px;'>
      <form method='post' action="index.php">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['ShowFormToken'][0][0]->showFormToken(array('name'=>'moretickets'),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['event_id']->value){?>
           <input type='hidden' name='event_id' value='<?php echo $_smarty_tpl->tpl_vars['event_id']->value;?>
' />
           <input type='hidden' name='action' value='buy' />
        <?php }?>
        <?php ob_start();?><?php echo con("order_more_tickets");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->button(array('name'=>"go_home",'value'=>$_tmp1,'url'=>"submit"),$_smarty_tpl);?>

      </form>
      </div>
      <div class="art-layout-cell layout-item-3"  style='width: 50%;padding:10px;'>
      <?php if ($_smarty_tpl->tpl_vars['cart']->value->can_checkout_f()){?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['_SHOP_root_secured']->value;?>
checkout.php" method='post'  style='text-align:right;'>
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['ShowFormToken'][0][0]->showFormToken(array('name'=>'checkout'),$_smarty_tpl);?>

          <?php ob_start();?><?php echo con("checkout");?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->button(array('name'=>"go_pay",'value'=>$_tmp2,'url'=>"submit"),$_smarty_tpl);?>

        </form>
      <?php }?>
  	  </div>
    </div>
  </div>
  <br/><?php }} ?>