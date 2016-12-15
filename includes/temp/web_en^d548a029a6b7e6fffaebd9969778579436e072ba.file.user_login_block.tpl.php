<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 14:21:50
         compiled from "/home/ubuntu/workspace/includes/template/web/user_login_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10446312435852ed4e25a305-72027773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd548a029a6b7e6fffaebd9969778579436e072ba' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/user_login_block.tpl',
      1 => 1481826312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10446312435852ed4e25a305-72027773',
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
  'unifunc' => 'content_5852ed4e3d6151_51489984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5852ed4e3d6151_51489984')) {function content_5852ed4e3d6151_51489984($_smarty_tpl) {?><!-- $Id$ -->
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
                        <div class="art-box art-block">
                          <div class="art-box-body art-block-body">
                            <div class="art-bar art-blockheader">
                                <h3 class="t"><?php echo con("member");?>
</h3>
                            </div>
                            <div class="art-box art-blockcontent">
                              <div class="art-box-body art-blockcontent-body">
                                <div>
                                  <?php echo con("welcome_patron");?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->user_lastname;?>

                                </div>
                             		<div class="cleared"></div>
                              </div>
                            </div>
                        		<div class="cleared"></div>
                          </div>
                        </div>
<?php }else{ ?>
                        <div class="art-box art-block">
                          <div class="art-box-body art-block-body">
                            <div class="art-bar art-blockheader">
                                <h3 class="t"><?php echo con("member");?>
</h3>
                            </div>
                            <div class="art-box art-blockcontent">
                              <div class="art-box-body art-blockcontent-body">
                                <div>
                                  <form action="<?php echo $_smarty_tpl->tpl_vars['_SHOP_root']->value;?>
index.php" id='login-form' name='' method='post' class='loginform' enctype='application/x-www-form-urlencoded'>
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['ShowFormToken'][0][0]->showFormToken(array('name'=>'login-form'),$_smarty_tpl);?>

                                    <input type="hidden" name="action" value="login">
                                    <input type="hidden" name="type" value="block">
                                    <?php if ($_GET['action']!="logout"&&$_GET['action']!="login"){?>
                                      <input type="hidden" name="uri" value="<?php echo $_SERVER['REQUEST_URI'];?>
">
                                    <?php }?>
                                    <p id="form-login-username">
                                  		<label for="modlgn-username"><?php echo con("email");?>
</label><input type='text' id="modlgn-username" name='username' required='required' size='30'/><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printMsg'][0][0]->printMsg(array('key'=>'loginusername'),$_smarty_tpl);?>

                                  	</p>
                                  	<p id="form-login-password">
                                  		<label for="modlgn-passwd"><?php echo con("password");?>
</label><input id="modlgn-passwd" type='password' name='password' required='required' size='30'/><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printMsg'][0][0]->printMsg(array('key'=>'loginpassword'),$_smarty_tpl);?>

                                    </p>
                                   	<div id="form-shop-remember">
                                      <ul>
                                        <li><a href='index.php?action=register'><?php echo con("register");?>
</a></li>
                                    		<li><a onclick='showDialog(this);return false;' href='forgot_password.php'><?php echo con("forgot_pwd");?>
</a></li>
                                    	</ul>
                                    </div>
                                    <div class='gui_footer'>
                                      <button  type='submit' name='submit' id='_submit' class=' admin-button ui-state-default  link  ui-corner-all admin-button-text ' style='float:right;'><?php echo con("login_button");?>
</button>
                                    </div>
                                  </form>

                                </div>
                             		<div class="cleared"></div>
                              </div>
                            </div>
                        		<div class="cleared"></div>
                          </div>
                        </div>
<?php }?><?php }} ?>