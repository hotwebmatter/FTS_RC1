<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-22 16:12:12
         compiled from "384a18841fc55bac36cfb92c70f870f73a588c69" */ ?>
<?php /*%%SmartyHeaderCode:8370188265834b4ac2fb4b8-93315548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '384a18841fc55bac36cfb92c70f870f73a588c69' => 
    array (
      0 => '384a18841fc55bac36cfb92c70f870f73a588c69',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '8370188265834b4ac2fb4b8-93315548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'user_firstname' => 0,
    'user_lastname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5834b4ac30f156_41457496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5834b4ac30f156_41457496')) {function content_5834b4ac30f156_41457496($_smarty_tpl) {?><template deflang="en">
<TO email="$user_firstname $user_lastname &lt;$user_email&gt;"/>
<subject lang="en" value="Confimation of registration"/>


<text lang="en">
Dear $user_firstname $user_lastname,

Please click on the link below:

Please copy the following link into your browser:
<?php echo $_smarty_tpl->tpl_vars['link']->value;?>


Thank you

</text>

<html lang="en">
<p>Dear <?php echo $_smarty_tpl->tpl_vars['user_firstname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['user_lastname']->value;?>
!</p>

<p>Please click on the link below:</p>

<a href="$link">Click Here</a>

<p>Thank You</p>
 
</html>

</template>
<?php }} ?>