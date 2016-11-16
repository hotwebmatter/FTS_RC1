<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-16 13:48:39
         compiled from "/home/ubuntu/workspace/includes/template/web/user_register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1476185400582caa070c5ca5-86441831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d0090f66b8959926c89c10cd631932aa036826c' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/user_register.tpl',
      1 => 1478706703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1476185400582caa070c5ca5-86441831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ManualRegister' => 0,
    'user' => 0,
    '_SHOP_root_secured' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_582caa071fe249_05075366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582caa071fe249_05075366')) {function content_582caa071fe249_05075366($_smarty_tpl) {?><!-- $Id$ --><!-- user_register.tpl --><?php if (!$_smarty_tpl->tpl_vars['ManualRegister']->value){?><div class="art-content-layout-br layout-item-0"></div><div class="art-content-layout layout-item-1"><div class="art-content-layout-row"><div class="art-layout-cell layout-item-3"><b><?php if ($_smarty_tpl->tpl_vars['user']->value->mode()<='1'){?><?php echo con("becomemember");?>
<?php }elseif($_smarty_tpl->tpl_vars['user']->value->mode()=='2'){?><?php echo con("becomememberorguest");?>
<?php }else{ ?><?php echo con("becomeguest");?>
<?php }?></b><br><?php echo con("guest_info");?>
</div></div></div><div class="art-content-layout-br layout-item-0"></div><?php }?><?php if ($_smarty_tpl->tpl_vars['ManualRegister']->value){?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>con("becomemember"),'header'=>con("memberinfo")), 0);?>
<?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->StartForm(array('action'=>((string)$_smarty_tpl->tpl_vars['_SHOP_root_secured']->value)."index.php",'method'=>'post','model'=>'user','id'=>"userregister"),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>con("pers_info"),'header'=>con("user_notice")), 0);?>
<?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->StartForm(array('action'=>((string)$_smarty_tpl->tpl_vars['_SHOP_root_secured']->value)."checkout.php",'method'=>'post','model'=>'user','id'=>"userregister"),$_smarty_tpl);?>
<?php }?><input type='hidden' name='action' value='register' /><input type='hidden' name='register_user' value='on' /><?php if ($_smarty_tpl->tpl_vars['user']->value->mode()<='1'||$_smarty_tpl->tpl_vars['ManualRegister']->value){?><input type='hidden' name='ismember' id='type' value='true'/><?php }elseif($_smarty_tpl->tpl_vars['user']->value->mode()=='2'){?><?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->checkbox(array('name'=>'ismember','id'=>'type','value'=>$_POST['ismember'],'caption'=>con("becomemember")),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ("user_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('autocomplete'=>'off','type'=>'password','name'=>'password1','size'=>'15','id'=>"password1",'required'=>true,'validate'=>array('minlength'=>6)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('autocomplete'=>'off','type'=>'password','name'=>'password2','size'=>'15','required'=>true,'validate'=>array('minlength'=>6,'equalTo'=>'#password1')),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->captcha(array('name'=>'user_nospam','id'=>'user_nospam','size'=>'10','maxlength'=>"10",'required'=>true),$_smarty_tpl);?>
<?php $_template = new Smarty_Internal_Template('eval:'.'{con("user_condition")}', $_smarty_tpl->smarty, $_smarty_tpl);$_smarty_tpl->assign('result',$_template->fetch()); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('gui->label', array('nolabel'=>true)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_objects['gui'][0]->label(array('nolabel'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a onclick='showDialog(this);return false;'  href='agb.php' style="float:left; display:block;"><?php $_template = new Smarty_Internal_Template('eval:'.con("agrement"), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?></a><span style="float:left;">&nbsp;*</span><input type='checkbox' class='checkbox' name='check_condition' value='check' required=true /><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printMsg'][0][0]->printMsg(array('key'=>'check_condition'),$_smarty_tpl);?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_objects['gui'][0]->label(array('nolabel'=>true), $_block_content, $_smarty_tpl, $_block_repeat);   } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</fieldset><div class="art-content-layout-br layout-item-0"></div><div class="art-content-layout layout-item-1"><div class="art-content-layout-row" style='padding:10px;'><div class="art-layout-cell layout-item-3"  style='text-align:right; width: 100%;padding:10px;'><?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->button(array('url'=>"submit",'name'=>"continue",'type'=>1),$_smarty_tpl);?>
</div></div></div></form><br /><script  type="text/javascript">/**** @access public* @return void**/function showPasswords(show){if(show == true){$('#password1-tr').show();$('#password2-tr').show();$("input[name='password1']").rules("add",{ required : true, minlength : 6 });$("input[name='password2']").rules("add",{ required : true , minlength : 6, equalTo: "#password1" });}else{$('#password1-tr').hide();$('#password2-tr').hide();$("input[name='password1']").rules("remove");$("input[name='password2']").rules("remove");}}$(window).load(function(){$('#ismember').click(function(){if($(this).is(':checked')){showPasswords(true);}else{showPasswords(false);}});<?php if ($_smarty_tpl->tpl_vars['user']->value->mode()<='1'||$_smarty_tpl->tpl_vars['ManualRegister']->value){?>showPasswords(true);<?php }elseif($_smarty_tpl->tpl_vars['user']->value->mode()=='2'){?>showPasswords($('#ismember-checkbox').is(':checked'));<?php }else{ ?>showPasswords(false);<?php }?>});</script><?php if (!$_smarty_tpl->tpl_vars['ManualRegister']->value){?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php }} ?>