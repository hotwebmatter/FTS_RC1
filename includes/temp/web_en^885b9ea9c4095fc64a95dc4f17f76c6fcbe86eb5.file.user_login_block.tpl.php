<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 13:54:02
         compiled from "/home/ubuntu/workspace/includes/template/web/custom/user_login_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14585993425852e6ca142454-48272545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '885b9ea9c4095fc64a95dc4f17f76c6fcbe86eb5' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/custom/user_login_block.tpl',
      1 => 1481826312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14585993425852e6ca142454-48272545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    '_SHOP_root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5852e6ca1fac08_81579415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5852e6ca1fac08_81579415')) {function content_5852e6ca1fac08_81579415($_smarty_tpl) {?><!-- $Id$ -->
<?php if ($_POST['action']=='login'){?>
	<?php echo $_smarty_tpl->smarty->registered_objects['user'][0]->login(array('username'=>$_POST['username'],'password'=>$_POST['password'],'uri'=>$_POST['uri']),$_smarty_tpl);?>

<?php }elseif($_GET['action']=='logout'){?>
	<?php echo $_smarty_tpl->smarty->registered_objects['user'][0]->logout(array(),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['user']->value->logged){?>
  <?php ob_start();?><?php echo con("person_user");?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo con("person_orders");?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo con("logout");?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['vermenu'] = new Smarty_variable(array(array('href'=>'index.php?action=person_user','title'=>$_tmp1),array('href'=>'index.php?action=person_orders','title'=>$_tmp2),array('href'=>'index.php?action=logout','title'=>$_tmp3)), null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['vermenu'] = clone $_smarty_tpl->tpl_vars['vermenu']; $_ptr = $_ptr->parent; }?>
                        <form class="form-signin">
                                <h3 class="t"><?php echo con("member");?>
</h3>
                                <div>
                                  <?php echo con("welcome_patron");?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->user_lastname;?>

                                </div>
                             		<div class="cleared"></div>
                        </form>
<?php }else{ ?>
                        <form class="form-signin">
                          <div class="row row-login row-login-top">
                              <h2 class="form-signin-heading">Hello.</h2>
                              <form action="<?php echo $_smarty_tpl->tpl_vars['_SHOP_root']->value;?>
index.php" id='login-form' name='' method='post' class='loginform' enctype='application/x-www-form-urlencoded'>
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['ShowFormToken'][0][0]->showFormToken(array('name'=>'login-form'),$_smarty_tpl);?>

                                <input type="hidden" name="action" value="login">
                                <input type="hidden" name="type" value="block">
                                <div class="form-group">
                                <?php if ($_GET['action']!="logout"&&$_GET['action']!="login"){?>
                                <input type="hidden" name="uri" value="<?php echo $_SERVER['REQUEST_URI'];?>
">
                                <?php }?>
                                </div>
                                <div class="form-group">
                                <label for="modlgn-username"><?php echo con("email");?>
</label>
                                <input type='email' id="modlgn-username" name='username' class="form-control" placeholder="Email address" required autofocus><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printMsg'][0][0]->printMsg(array('key'=>'loginusername'),$_smarty_tpl);?>

                                </div>
                                <div class="form-group">
                                <label for="modlgn-passwd"><?php echo con("password");?>
</label>
                                <input type='password' id="modlgn-passwd" name='password' class="form-control" placeholder="Password" required><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printMsg'][0][0]->printMsg(array('key'=>'loginpassword'),$_smarty_tpl);?>

                                </div>
                                <div class="form-group">
                                <button type='submit' name='submit' id='_submit' class="btn btn-lg btn-primary btn-block"><?php echo con("login_button");?>
</button>
                                </div>
                              </form>
                              <div class="cleared"></div>
                              <div id="form-group">
                                <p><a onclick='showDialog(this);return false;' href='forgot_password.php'>Forgot your password?</a></p>
                                <p>New to Fusion Ticket? <a href='index.php?action=register'>Join us.</a></p>
                              </div>
                          </div>
                        </form>
<?php }?><?php }} ?>