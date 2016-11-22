<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-16 14:05:11
         compiled from "/home/ubuntu/workspace/includes/template/web/event.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1390987604582cade7b0b420-17429661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa4054adce7923bb5dc633ebf99725805df7723f' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/event.tpl',
      1 => 1478706703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1390987604582cade7b0b420-17429661',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'event_id' => 0,
    'shop_event' => 0,
    'my_event_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_582cade7bbbcc0_56371730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582cade7bbbcc0_56371730')) {function content_582cade7bbbcc0_56371730($_smarty_tpl) {?><?php if (!is_callable('smarty_block_event')) include '/home/ubuntu/workspace/includes/shop_plugins/block.event.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/ubuntu/workspace/includes/libs/smarty3/plugins/modifier.date_format.php';
?><!-- $Id$ -->
<?php $_smarty_tpl->smarty->_tag_stack[] = array('event', array('event_id'=>$_smarty_tpl->tpl_vars['event_id']->value,'ort'=>'on','place_map'=>'on','cat_web'=>'on','event_status'=>'pub','limit'=>1)); $_block_repeat=true; echo smarty_block_event(array('event_id'=>$_smarty_tpl->tpl_vars['event_id']->value,'ort'=>'on','place_map'=>'on','cat_web'=>'on','event_status'=>'pub','limit'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['event_pm_id']){?>
    <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>con("event_details"),'header'=>con("shop_info"),'footer'=>con("shop_condition")), 0);?>

  <?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>con("event_details"),'footer'=>con("shop_condition")), 0);?>

  <?php }?>
  <?php $_smarty_tpl->tpl_vars['my_event_short_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['shop_event']->value['event_short_text'], null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['my_event_short_text'] = clone $_smarty_tpl->tpl_vars['my_event_short_text']; $_ptr = $_ptr->parent; }?>
  <?php $_smarty_tpl->tpl_vars['my_event_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['shop_event']->value['event_name'], null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['my_event_name'] = clone $_smarty_tpl->tpl_vars['my_event_name']; $_ptr = $_ptr->parent; }?>
  <?php $_smarty_tpl->tpl_vars['my_event_keywords'] = new Smarty_variable($_smarty_tpl->tpl_vars['shop_event']->value['event_keywords'], null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['my_event_keywords'] = clone $_smarty_tpl->tpl_vars['my_event_keywords']; $_ptr = $_ptr->parent; }?>
  <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['event_rep']!="main"){?> <?php ob_start();?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['shop_event']->value['event_date'],con("date_format"));?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['my_event_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['my_event_name']->value+" / ".$_tmp1." / ".((string)$_smarty_tpl->tpl_vars['shop_event']->value['ort_city']), null, 0);?> <?php }?>

  <?php echo $_smarty_tpl->getSubTemplate ("event_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("event_description.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_event(array('event_id'=>$_smarty_tpl->tpl_vars['event_id']->value,'ort'=>'on','place_map'=>'on','cat_web'=>'on','event_status'=>'pub','limit'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['shop_event']->value['event_id']<=0){?>
  <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>con("event"),'header'=>con("shop_no_event")), 0);?>

<?php }?><?php }} ?>