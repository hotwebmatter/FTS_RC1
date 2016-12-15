<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 16:03:06
         compiled from "/home/ubuntu/workspace/includes/template/web/shop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4646248125853050a30f781-53986843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e9c60985aeb7abb28729cc65c2984d7b97f373f' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/shop.tpl',
      1 => 1481835448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4646248125853050a30f781-53986843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'user_errors' => 0,
    'cart' => 0,
    'last_item' => 0,
    'page' => 0,
    'nofooter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5853050a5daf99_28991020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5853050a5daf99_28991020')) {function content_5853050a5daf99_28991020($_smarty_tpl) {?><!-- $Id$ --><?php if ($_POST['action']=='resendpassword'){?><?php echo $_smarty_tpl->tpl_vars['user']->value->forgot_password_f($_POST['email']);?>
<?php }?><?php if ($_REQUEST['action']=='login'&&$_REQUEST['type']!='block'){?><?php echo $_smarty_tpl->getSubTemplate ("user_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }elseif($_REQUEST['action']=='register'){?><?php if ($_REQUEST['register_user']){?><?php echo $_smarty_tpl->smarty->registered_objects['user'][0]->register(array('ismember'=>true,'data'=>$_POST,'secure'=>'user_nospam','login'=>true),$_smarty_tpl);?>
<?php $_smarty_tpl->tpl_vars['user_data'] = new Smarty_variable($_POST, null, 0);?><?php if ($_smarty_tpl->tpl_vars['user_errors']->value){?><?php echo $_smarty_tpl->getSubTemplate ("user_register.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('ManualRegister'=>true), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("user_activate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("user_register.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('ManualRegister'=>true), 0);?>
<?php }?><?php }elseif($_REQUEST['action']=='activate'){?><?php echo $_smarty_tpl->getSubTemplate ("user_activate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }elseif($_REQUEST['action']=='resend_activation'){?><?php echo $_smarty_tpl->getSubTemplate ("resend_activation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }elseif($_GET['action']=="remove"){?><?php echo $_smarty_tpl->tpl_vars['cart']->value->remove_item_f($_GET['event_id'],$_GET['cat_id'],$_GET['item']);?>
<?php echo $_smarty_tpl->getSubTemplate ("cart_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }elseif($_REQUEST['action']=="addtocart"){?><?php if ($_POST['place']){?><?php $_smarty_tpl->tpl_vars['last_item'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->add_item_f($_POST['event_id'],$_POST['category_id'],$_POST['place'],$_POST['discount'],'mode_web'), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['last_item'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->add_item_f($_POST['event_id'],$_POST['category_id'],$_POST['places'],$_POST['discount'],'mode_web'), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['last_item']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['redirect'][0][0]->_ReDirect(array('url'=>"index.php?action=view_cart&event_id=".((string)$_POST['event_id'])),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("event_ordering.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php }elseif($_REQUEST['action']=="buy"){?><?php echo $_smarty_tpl->getSubTemplate ("event_ordering.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }elseif($_REQUEST['action']=="view_cart"){?><?php ob_start();?><?php echo $_REQUEST['event_id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("cart_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('event_id'=>$_tmp1), 0);?>
<?php }elseif(!empty($_REQUEST['event_group_id'])){?><?php echo $_smarty_tpl->getSubTemplate ("event_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }elseif(!empty($_REQUEST['event_groups'])){?><?php echo $_smarty_tpl->getSubTemplate ("event_groups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }elseif(!empty($_REQUEST['event_type'])){?><?php echo $_smarty_tpl->getSubTemplate ("event_type.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }elseif($_smarty_tpl->tpl_vars['user']->value->logged&&$_REQUEST['action']=="person_user"){?><?php echo $_smarty_tpl->getSubTemplate ("personal_user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }elseif($_smarty_tpl->tpl_vars['user']->value->logged&&$_REQUEST['action']=="person_user_edit"){?><?php $_smarty_tpl->tpl_vars['user_data'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->asarray(), null, 0);?><?php if ($_POST['submit_update']){?><?php echo $_smarty_tpl->smarty->registered_objects['user'][0]->update(array('data'=>$_POST),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['user_errors']->value||!$_POST['submit_update']){?><?php echo $_smarty_tpl->getSubTemplate ("user_update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['redirect'][0][0]->_ReDirect(array('url'=>"?action=person_user"),$_smarty_tpl);?>
<?php }?><?php }elseif($_smarty_tpl->tpl_vars['user']->value->logged&&$_REQUEST['action']=='person_orders'){?><?php if ($_GET['id']){?><?php echo $_smarty_tpl->getSubTemplate ("personal_order.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("personal_orders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php }elseif($_smarty_tpl->tpl_vars['user']->value->logged&&$_REQUEST['action']=='order_res'){?><?php echo $_smarty_tpl->smarty->registered_objects['order'][0]->res_to_order(array('order_id'=>$_POST['order_id'],'handling_id'=>$_POST['handling']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['redirect'][0][0]->_ReDirect(array('url'=>"?action=person_order"),$_smarty_tpl);?>
<?php }elseif(!empty($_REQUEST['event_id'])){?><?php echo $_smarty_tpl->getSubTemplate ("event.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('event_id'=>$_REQUEST['event_id']), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("page_".((string)$_smarty_tpl->tpl_vars['page']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><!-- End of massive Elseif --><?php if (!$_smarty_tpl->tpl_vars['nofooter']->value){?><?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php }} ?>