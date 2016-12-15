<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 16:03:36
         compiled from "/home/ubuntu/workspace/includes/template/pos/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:777298197585305289881a4-70449098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b67798d83408bec7ac7975e22278d1d25d83f188' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/pos/view.tpl',
      1 => 1481835448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '777298197585305289881a4-70449098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_success' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58530528a1e9a9_64747166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58530528a1e9a9_64747166')) {function content_58530528a1e9a9_64747166($_smarty_tpl) {?><!-- $Id$ -->

 
<?php if ($_GET['action']=='cancel_order'){?>
  <?php echo $_smarty_tpl->smarty->registered_objects['order'][0]->cancel(array('order_id'=>$_GET['order_id'],'reason'=>$_GET['place']),$_smarty_tpl);?>

  <?php echo $_smarty_tpl->getSubTemplate ("process_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }elseif($_GET['action']=='cancel_ticket'){?>
  <?php echo $_smarty_tpl->smarty->registered_objects['order'][0]->delete_ticket(array('order_id'=>$_GET['order_id'],'ticket_id'=>$_GET['ticket_id']),$_smarty_tpl);?>

  <?php echo $_smarty_tpl->getSubTemplate ("process_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }elseif($_POST['action']=='confirm'){?>
  <?php echo $_smarty_tpl->getSubTemplate ("process_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }elseif($_REQUEST['action']=='reorder'){?>
  <?php echo $_smarty_tpl->getSubTemplate ("view_reorder.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }elseif($_POST['action']=='order_res'){?>
  <?php echo $_smarty_tpl->smarty->registered_objects['order'][0]->res_to_order(array('order_id'=>$_POST['order_id'],'handling_id'=>$_POST['handling'],'place'=>'pos'),$_smarty_tpl);?>

  <?php if ($_smarty_tpl->tpl_vars['order_success']->value){?>
    <?php echo $_smarty_tpl->getSubTemplate ('process_select.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php }else{ ?>
    <div class='error'>Error</div>
    <?php echo $_smarty_tpl->getSubTemplate ("process_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php }?>
<?php }else{ ?>
  <?php if ($_REQUEST['order_id']){?>
    <?php if ($_POST['action']=="setpaid"){?>
      <?php echo $_smarty_tpl->tpl_vars['order']->value->set_paid_f($_POST['order_id']);?>

  	<?php }?>
    <?php if ($_POST['action']=='setsend'){?>
    	
    	<?php echo $_smarty_tpl->tpl_vars['order']->value->setStatusSent($_POST['order_id']);?>

    <?php }?>
  <?php }?>

  <?php echo $_smarty_tpl->getSubTemplate ("process_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>