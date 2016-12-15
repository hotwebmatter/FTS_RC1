<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 14:12:57
         compiled from "/home/ubuntu/workspace/includes/template/web/user_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289538465852eb393652c5-23958272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a2f0717067834156f1d6c35e356e617c3896acf' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/user_form.tpl',
      1 => 1481826312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289538465852eb393652c5-23958272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5852eb393e7ef8_09498368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5852eb393e7ef8_09498368')) {function content_5852eb393e7ef8_09498368($_smarty_tpl) {?><!-- $Id$ -->
  <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('type'=>'text','name'=>'user_firstname','size'=>'30','maxlength'=>'50','value'=>$_smarty_tpl->tpl_vars['user_data']->value['user_firstname'],'required'=>true),$_smarty_tpl);?>

  <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('type'=>'text','name'=>'user_lastname','size'=>'30','maxlength'=>'50','value'=>$_smarty_tpl->tpl_vars['user_data']->value['user_lastname']),$_smarty_tpl);?>

  <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('type'=>'text','name'=>'user_address','size'=>'30','maxlength'=>'75','value'=>$_smarty_tpl->tpl_vars['user_data']->value['user_address']),$_smarty_tpl);?>

  <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('type'=>'text','name'=>'user_address1','size'=>'30','maxlength'=>'75','value'=>$_smarty_tpl->tpl_vars['user_data']->value['user_address1']),$_smarty_tpl);?>

  <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('type'=>'text','name'=>'user_zip','size'=>'8','maxlength'=>'20','value'=>$_smarty_tpl->tpl_vars['user_data']->value['user_zip']),$_smarty_tpl);?>

  <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('type'=>'text','name'=>'user_city','size'=>'30','maxlength'=>'50','value'=>$_smarty_tpl->tpl_vars['user_data']->value['user_city']),$_smarty_tpl);?>

  <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('type'=>'text','name'=>'user_state','size'=>'30','maxlength'=>"50",'value'=>$_smarty_tpl->tpl_vars['user_data']->value['user_state']),$_smarty_tpl);?>

  <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->selectcountry(array('name'=>'user_country','value'=>$_smarty_tpl->tpl_vars['user_data']->value['user_country']),$_smarty_tpl);?>

  <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('type'=>'text','name'=>'user_phone','size'=>'30','maxlength'=>'50','value'=>$_smarty_tpl->tpl_vars['user_data']->value['user_phone']),$_smarty_tpl);?>

  <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('type'=>'text','name'=>'user_fax','size'=>'30','maxlength'=>'50','value'=>$_smarty_tpl->tpl_vars['user_data']->value['user_fax']),$_smarty_tpl);?>

  <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('readonly'=>$_smarty_tpl->tpl_vars['user_data']->value['user_id'],'type'=>'text','name'=>'user_email','size'=>'30','maxlength'=>'50','value'=>$_smarty_tpl->tpl_vars['user_data']->value['user_email'],'required'=>true,'validate'=>array('email'=>true)),$_smarty_tpl);?>

  <?php if (!$_smarty_tpl->tpl_vars['user_data']->value['user_id']){?>
    <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('autocomplete'=>'off','type'=>'text','name'=>'user_email2','size'=>'30','maxlength'=>'50','value'=>$_smarty_tpl->tpl_vars['user_data']->value['user_email2'],'required'=>true,'validate'=>array('email'=>true,'equalTo'=>"#user_email")),$_smarty_tpl);?>

  <?php }?><?php }} ?>