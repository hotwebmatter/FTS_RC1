<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-09 12:14:27
         compiled from "/home/ubuntu/workspace/includes/template/web/page_shop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7846229595823597331ef46-71353527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5192672c5d23c3d8b614429545de7f63d16d8a83' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/page_shop.tpl',
      1 => 1478706703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7846229595823597331ef46-71353527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'start_date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5823597334d754_19163658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5823597334d754_19163658')) {function content_5823597334d754_19163658($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/ubuntu/workspace/includes/libs/smarty3/plugins/modifier.date_format.php';
if (!is_callable('smarty_block_event')) include '/home/ubuntu/workspace/includes/shop_plugins/block.event.php';
?><!-- $Id$ -->
 <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>con("up_events"),'header'=>con("eventlist_info")), 0);?>

<!-- Upcoming Events (last_event_list.tpl) -->
<?php $_smarty_tpl->tpl_vars['start_date'] = new Smarty_variable(smarty_modifier_date_format(time(),"%Y-%m-%d"), null, 0);?>
<p>
  <?php $_smarty_tpl->smarty->_tag_stack[] = array('event', array('order'=>"event_date, event_time",'ort'=>'on','sub'=>'on','event_status'=>'pub','place_map'=>'on','start_date'=>$_smarty_tpl->tpl_vars['start_date']->value,'limit'=>'0,4')); $_block_repeat=true; echo smarty_block_event(array('order'=>"event_date, event_time",'ort'=>'on','sub'=>'on','event_status'=>'pub','place_map'=>'on','start_date'=>$_smarty_tpl->tpl_vars['start_date']->value,'limit'=>'0,4'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("event_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_event(array('order'=>"event_date, event_time",'ort'=>'on','sub'=>'on','event_status'=>'pub','place_map'=>'on','start_date'=>$_smarty_tpl->tpl_vars['start_date']->value,'limit'=>'0,4'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</p><?php }} ?>