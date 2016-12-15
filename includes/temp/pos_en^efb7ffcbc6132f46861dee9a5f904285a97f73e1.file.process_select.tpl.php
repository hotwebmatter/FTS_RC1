<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 16:03:36
         compiled from "/home/ubuntu/workspace/includes/template/pos/process_select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11874945958530528a24517-91709332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efb7ffcbc6132f46861dee9a5f904285a97f73e1' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/pos/process_select.tpl',
      1 => 1481835448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11874945958530528a24517-91709332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'update' => 0,
    'tabview' => 0,
    'TabBarid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58530528b91ab6_57683552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58530528b91ab6_57683552')) {function content_58530528b91ab6_57683552($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<!-- $Id$ -->
<?php if (!$_smarty_tpl->tpl_vars['update']->value->can_reserve()){?>
  <?php ob_start();?><?php echo con("pos_unpaidlist");?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo con("pos_unsentlist");?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo con("pos_yourtickets");?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo con("pos_alltickets");?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['tabview'] = new Smarty_variable(array(1=>$_tmp1,2=>$_tmp2,3=>$_tmp3,4=>$_tmp4), null, 0);?>
<?php }else{ ?>
  <?php ob_start();?><?php echo con("pos_reservedlist");?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo con("pos_unpaidlist");?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo con("pos_unsentlist");?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo con("pos_yourtickets");?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo con("pos_alltickets");?>
<?php $_tmp9=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['tabview'] = new Smarty_variable(array(0=>$_tmp5,1=>$_tmp6,2=>$_tmp7,3=>$_tmp8,4=>$_tmp9), null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->Tabbar(array('menu'=>$_smarty_tpl->tpl_vars['tabview']->value),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['TabBarid']->value==0){?> 
  <?php if ($_REQUEST['order_id']){?>
    <?php echo $_smarty_tpl->getSubTemplate ("process_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('status'=>"res"), 0);?>

  <?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate ("process_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('status'=>"res"), 0);?>

  <?php }?>

<?php }elseif($_smarty_tpl->tpl_vars['TabBarid']->value==1){?> 
  <?php if ($_REQUEST['order_id']){?>
    <?php echo $_smarty_tpl->getSubTemplate ("process_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('status'=>"ord",'not_status'=>"paid",'place'=>'','not_hand_payment'=>'entrance'), 0);?>

  <?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate ("process_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('status'=>"ord",'not_status'=>"paid",'place'=>'','not_hand_payment'=>'entrance'), 0);?>

  <?php }?>

<?php }elseif($_smarty_tpl->tpl_vars['TabBarid']->value==2){?> 
  <?php if ($_REQUEST['order_id']){?>
    <?php echo $_smarty_tpl->getSubTemplate ("process_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('not_status'=>"send",'status'=>"paid",'hand_shipment'=>'post,sp'), 0);?>

  <?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate ("process_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('not_status'=>"send",'status'=>"paid",'hand_shipment'=>'post,sp'), 0);?>

  <?php }?>

<?php }elseif($_smarty_tpl->tpl_vars['TabBarid']->value==3){?> 
  <?php if ($_REQUEST['order_id']){?>
    <?php echo $_smarty_tpl->getSubTemplate ("process_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('place'=>'pos'), 0);?>

  <?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate ("process_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('place'=>'pos'), 0);?>

  <?php }?>

<?php }elseif($_smarty_tpl->tpl_vars['TabBarid']->value==4){?> 
  <?php if ($_REQUEST['order_id']){?>
    <?php echo $_smarty_tpl->getSubTemplate ("process_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('status'=>"paid,send",'orderby'=>"order_date DESC",'cur_order_dir'=>"DESC"), 0);?>

  <?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate ("process_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('status'=>"paid,send",'orderby'=>"order_date DESC"), 0);?>

  <?php }?>

<?php }elseif($_smarty_tpl->tpl_vars['TabBarid']->value==5){?> 
  <?php if ($_REQUEST['order_id']){?>
    <?php echo $_smarty_tpl->getSubTemplate ("process_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('status'=>'','orderby'=>"order_date DESC",'cur_order_dir'=>"DESC",'order_search'=>'on'), 0);?>

  <?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate ("process_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('status'=>'','orderby'=>"order_date DESC",'order_search'=>'on'), 0);?>

  <?php }?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>