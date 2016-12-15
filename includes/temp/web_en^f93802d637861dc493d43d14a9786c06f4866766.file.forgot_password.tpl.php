<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 14:12:17
         compiled from "/home/ubuntu/workspace/includes/template/web/forgot_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14031793685852eb110e1900-87467616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f93802d637861dc493d43d14a9786c06f4866766' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/forgot_password.tpl',
      1 => 1481826312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14031793685852eb110e1900-87467616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5852eb1114ca67_87702585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5852eb1114ca67_87702585')) {function content_5852eb1114ca67_87702585($_smarty_tpl) {?><!-- $Id$ -->
 <?php if ($_POST['action']=='resendpassword'){?>
    <?php echo $_smarty_tpl->tpl_vars['user']->value->forgot_password_f($_POST['email']);?>

<?php }?>
  <h1><?php echo con("forgot_password");?>
</h1>
  <br />
  <div id="error-message-dialog" class="ui-state-error ui-corner-all" style="padding: 1em; margin-bottom: .7em; display:none; " >
     <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
        <span id='error-text-dialog'>ffff</span>
     </p>
  </div>
  <div id="notice-message-dialog" class="ui-state-highlight ui-corner-all" style=" padding: 1em; margin-bottom: .7em; display:none; " >
     <p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
        <span id='notice-text-dialog'>fff</span>
     </p>
  </div>
  <?php if ($_POST['submit']&&$_smarty_tpl->tpl_vars['user']->value->forgot_password_f($_POST['email'])){?>
    <center><button onclick="jQuery.modal.close();"><?php echo con("close");?>
</button></center>
  <?php }else{ ?>
    <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->StartForm(array('width'=>"100%",'id'=>'ft-forgot-password-form','class'=>"login_table",'action'=>'forgot_password.php','method'=>'post','name'=>'resendpassword','onsubmit'=>'this.submit.disabled=true;return true;'),$_smarty_tpl);?>

      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->hidden(array('name'=>'action','value'=>'resendpassword'),$_smarty_tpl);?>

      <tr>
        <td colspan='2'><?php echo con("pwd_note");?>
<br/><br/></td>
      </tr>
      <tr>
        <td width='100'><?php echo con("user_email");?>
</td>
        <td><input type='text' name='email' size='30'/><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printMsg'][0][0]->printMsg(array('key'=>'email'),$_smarty_tpl);?>
</td>
      </tr>
      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->EndForm(array('title'=>con("pwd_send"),'noreset'=>true,'align'=>'center'),$_smarty_tpl);?>

    </table>
    </form>
  <?php }?>
<script type="text/javascript">
    jQuery('#ft-forgot-password-form').unbind('submit');
    jQuery('#ft-forgot-password-form').validate({
        rules: { email 	: 	{ required : true, email :true }
    		        },
    		errorClass: "form-error",
    		success: "form-valid",
    		errorPlacement: function(error, element) {
    	 		if (element.attr("name") == "check_condition")
    		   		error.insertAfter(element);
    		 	else
    		   		error.insertAfter(element);
    		},
    invalidHandler: function(form, validator) {
       $('#submit').attr("disabled",false);
    },

      submitHandler: function(form) {
        jQuery(form).ajaxSubmit({
          success: function(data){
            jQuery("#showdialog").html(data);
          }
        });
      }
    });
  var msg = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printMsg'][0][0]->printMsg(array('key'=>'__Warning__','addspan'=>false),$_smarty_tpl);?>
';
    if(msg) {
      $("#error-text-dialog").html(msg);
      $("#error-message-dialog").show();
      setTimeout(function(){ $("#error-message-dialog").hide(); }, 10000);
    }
    var msg = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printMsg'][0][0]->printMsg(array('key'=>'__Notice__','addspan'=>false),$_smarty_tpl);?>
';
    if(msg) {
      $("#notice-text-dialog").html(msg);
      $("#notice-message-dialog").show();
    }
</script><?php }} ?>