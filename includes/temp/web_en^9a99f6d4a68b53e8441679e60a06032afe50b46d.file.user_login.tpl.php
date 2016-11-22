<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-16 14:50:21
         compiled from "/home/ubuntu/workspace/includes/template/web/user_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1027269214582cb87d9a5cf4-56864069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a99f6d4a68b53e8441679e60a06032afe50b46d' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/user_login.tpl',
      1 => 1478706703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1027269214582cb87d9a5cf4-56864069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_582cb87dc5be39_55440483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582cb87dc5be39_55440483')) {function content_582cb87dc5be39_55440483($_smarty_tpl) {?><!-- $Id$ -->
<?php if ($_GET['action']=='login'){?>
	<?php echo $_smarty_tpl->smarty->registered_objects['user'][0]->login(array('username'=>$_POST['username'],'password'=>$_POST['password'],'uri'=>$_POST['uri']),$_smarty_tpl);?>

<?php }elseif($_GET['action']=='logout'){?>
	<?php echo $_smarty_tpl->smarty->registered_objects['user'][0]->logout(array(),$_smarty_tpl);?>

<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['user']->value->logged){?>
  <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>con("login"),'header'=>con("memberinfo")), 0);?>
<br>

  <form method='post' action='index.php' style='margin-top:0px;'>
    <input type="hidden" name="action" value="login">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['ShowFormToken'][0][0]->showFormToken(array('name'=>'login'),$_smarty_tpl);?>



    <?php if ($_GET['action']!="logout"&&$_GET['action']!="login"){?>
      <input type="hidden" name="uri" value="<?php echo $_SERVER['REQUEST_URI'];?>
">
    <?php }?>
    <center>
      <table border="0" cellpadding="3" class="login_table" bgcolor='white' width='80%'>
      	<tr>
      		<td width='30%' class="TblLower"><?php echo con("email");?>
</td>
      		<td class="TblHigher" ><input type='input' name='username' size='20' /> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printMsg'][0][0]->printMsg(array('key'=>'loginusername'),$_smarty_tpl);?>
</td>
      	</tr>
      	<tr>
      		<td  class="TblLower"><?php echo con("password");?>
</td>
      		<td class="TblHigher" ><input type='password' name='password' size='20' /> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printMsg'][0][0]->printMsg(array('key'=>'loginpassword'),$_smarty_tpl);?>

      		<input type='submit' value='<?php echo con("login_button");?>
' style='font-size:10px;'/>
      		</td>
      	</tr>
      	<tr>
      		<td colspan='2' class="TblLower">
      			<li><a  href='index.php?action=register'><?php echo con("register");?>
</a></li>
      		</td>
      	</tr>
      	<tr>
      		<td colspan='2' class="TblLower">
      			<li><a onclick='showDialog(this);return false;' href='forgot_password.php'><?php echo con("forgot_pwd");?>
</a></li>
      		</td>
      	</tr>
      	      	<tr>
      		<td colspan='2' class="TblLower">
      			<li><a onclick='showDialog(this);return false;' href='index.php?action=resend_activation'><?php echo con("act_notarr");?>
</a></li>
      		</td>
      	</tr>

      </table>
    </center>
  </form>
<?php }?><?php }} ?>