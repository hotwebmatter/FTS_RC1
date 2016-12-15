<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 14:08:10
         compiled from "/home/ubuntu/workspace/includes/template/theme/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5191944725852ea1a0c3105-91936495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98c64e2180679d87dc9751c466cf5ec2186ff692' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/theme/default/header.tpl',
      1 => 1481826312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5191944725852ea1a0c3105-91936495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noHeader' => 0,
    'name' => 0,
    'header' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5852ea1a10e152_73765896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5852ea1a10e152_73765896')) {function content_5852ea1a10e152_73765896($_smarty_tpl) {?>
<?php if (empty($_smarty_tpl->tpl_vars['noHeader']->value)){?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['theme'][0][0]->_SetTheme(array('set'=>true),$_smarty_tpl);?>

<?php ob_start();?><?php echo con("home");?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo con("calendar");?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo con("program");?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['topmenu'] = new Smarty_variable(array(array('href'=>'index.php','title'=>$_tmp1),array('href'=>'calendar.php','title'=>$_tmp2),array('href'=>'programm.php','title'=>$_tmp3)), null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['topmenu'] = clone $_smarty_tpl->tpl_vars['topmenu']; $_ptr = $_ptr->parent; }?>
<?php $_smarty_tpl->tpl_vars['pagetitle'] = new Smarty_variable($_smarty_tpl->tpl_vars['name']->value, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['pagetitle'] = clone $_smarty_tpl->tpl_vars['pagetitle']; $_ptr = $_ptr->parent; }?>
<?php $_smarty_tpl->tpl_vars['headerNote'] = new Smarty_variable($_smarty_tpl->tpl_vars['header']->value, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['headerNote'] = clone $_smarty_tpl->tpl_vars['headerNote']; $_ptr = $_ptr->parent; }?>
<?php $_smarty_tpl->tpl_vars['footNote'] = new Smarty_variable($_smarty_tpl->tpl_vars['footer']->value, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['footNote'] = clone $_smarty_tpl->tpl_vars['footNote']; $_ptr = $_ptr->parent; }?>
<?php }?><?php }} ?>