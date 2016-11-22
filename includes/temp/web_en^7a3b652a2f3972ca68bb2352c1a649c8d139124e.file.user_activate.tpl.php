<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-16 14:17:42
         compiled from "/home/ubuntu/workspace/includes/template/web/user_activate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:982327365582cb0d63e5f77-08973533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a3b652a2f3972ca68bb2352c1a649c8d139124e' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/user_activate.tpl',
      1 => 1478706703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '982327365582cb0d63e5f77-08973533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_582cb0d64387f6_75623939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582cb0d64387f6_75623939')) {function content_582cb0d64387f6_75623939($_smarty_tpl) {?><!-- $Id$ -->
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>con("act_name")), 0);?>

<?php if (!$_smarty_tpl->tpl_vars['user']->value->activate()){?>
   <?php echo $_smarty_tpl->getSubTemplate ("user_registred.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   <form action='<?php echo con("PHP_SELF");?>
' method='post'>
     <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['ShowFormToken'][0][0]->showFormToken(array('name'=>'TryActivateUser'),$_smarty_tpl);?>

     <div class="art-content-layout-wrapper layout-item-5">
        <div class="art-content-layout layout-item-6">
          <div class="art-content-layout-row">
            <div class="art-layout-cell layout-item-7 gui_form" style="width: 100%;">
              <h4><?php echo con("act_enter_title");?>
</h4>
              <p><?php echo con("act_enter_code");?>
<br><br></p>
              <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('caption'=>con("act_code"),'type'=>'text','name'=>'uar','value'=>((string)$_REQUEST['uar']),'size'=>'50'),$_smarty_tpl);?>

              <a href='index.php?action=resend_activation'><?php echo con("act_notarr");?>
</a><br><br>
         	  </div>
          </div>
        </div>
      </div>
      <div class="art-content-layout-br layout-item-0"></div>
      <div class="art-content-layout layout-item-1">
        <div class="art-content-layout-row" style='padding:10px;'>
          <div class="art-layout-cell layout-item-3"  style='text-align:right; width: 100%;padding:10px;'>
         	  <?php ob_start();?><?php echo con("act_send");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->button(array('url'=>'submit','id'=>'submit','name'=>'submit','value'=>$_tmp1),$_smarty_tpl);?>

       	  </div>
        </div>
      </div>
  </form>
<?php }else{ ?>
    <?php echo con("success_activate");?>

<?php }?><?php }} ?>