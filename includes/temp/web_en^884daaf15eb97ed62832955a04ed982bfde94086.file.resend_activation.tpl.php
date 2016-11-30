<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-28 14:18:12
         compiled from "/home/ubuntu/workspace/includes/template/web/resend_activation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:703026363583c82f4833243-02941615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '884daaf15eb97ed62832955a04ed982bfde94086' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/resend_activation.tpl',
      1 => 1478706703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '703026363583c82f4833243-02941615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_583c82f48858c2_90159147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c82f48858c2_90159147')) {function content_583c82f48858c2_90159147($_smarty_tpl) {?><!-- $Id$ -->
<?php if ($_POST['email']&&$_smarty_tpl->tpl_vars['user']->value->resend_activation_f($_POST['email'])){?>
  <?php echo $_smarty_tpl->getSubTemplate ("user_activate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
  <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>con("resend_activation")), 0);?>

  <form action='index.php' method='post' class="yform full">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['ShowFormToken'][0][0]->showFormToken(array('name'=>'ResendActivation'),$_smarty_tpl);?>

    <input type='hidden' name='action' value='resend_activation' />

    <table class="full" width='80%' align='center'>
      <tr>
        <td class='title' colspan='2' align='center'>
          <?php echo con("act_notarr");?>

        </td>
      </tr>
      <tr>
        <td colspan='2'>
          <?php echo con("act_note");?>
<br />
        </td>
      </tr>
      <tr>
        <td>
          <?php echo con("email");?>

        </td>
        <td>
          <input type='text' name='email' size='36' /> &nbsp; <input type='hidden' name='submit' value="<?php echo con("act_send");?>
" />
          <button type='submit' class="ft-ui-button"><?php echo con("act_send");?>
</button>
        </td>
      </tr>
    </table>
  </form>
<?php }?><?php }} ?>