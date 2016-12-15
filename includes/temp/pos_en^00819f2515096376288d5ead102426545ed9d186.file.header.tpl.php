<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 16:02:54
         compiled from "/home/ubuntu/workspace/includes/template/theme/_admin2/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1949239861585304fe747385-69853613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00819f2515096376288d5ead102426545ed9d186' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/theme/_admin2/header.tpl',
      1 => 1481835448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1949239861585304fe747385-69853613',
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
  'unifunc' => 'content_585304fe76a565_05582931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585304fe76a565_05582931')) {function content_585304fe76a565_05582931($_smarty_tpl) {?>
<?php if (empty($_smarty_tpl->tpl_vars['noHeader']->value)){?>
  
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['theme'][0][0]->_SetTheme(array('show'=>true),$_smarty_tpl);?>

  <?php $_smarty_tpl->tpl_vars['pagetitle'] = new Smarty_variable($_smarty_tpl->tpl_vars['name']->value, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['pagetitle'] = clone $_smarty_tpl->tpl_vars['pagetitle']; $_ptr = $_ptr->parent; }?>
  <?php $_smarty_tpl->tpl_vars['headerNote'] = new Smarty_variable($_smarty_tpl->tpl_vars['header']->value, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['headerNote'] = clone $_smarty_tpl->tpl_vars['headerNote']; $_ptr = $_ptr->parent; }?>
  <?php $_smarty_tpl->tpl_vars['footNote'] = new Smarty_variable($_smarty_tpl->tpl_vars['footer']->value, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['footNote'] = clone $_smarty_tpl->tpl_vars['footNote']; $_ptr = $_ptr->parent; }?>
<?php }?><?php }} ?>