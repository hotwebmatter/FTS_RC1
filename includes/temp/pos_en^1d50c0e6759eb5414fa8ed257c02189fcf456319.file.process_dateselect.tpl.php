<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 16:03:36
         compiled from "/home/ubuntu/workspace/includes/template/pos/process_dateselect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34431667058530528ccba88-45598428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d50c0e6759eb5414fa8ed257c02189fcf456319' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/pos/process_dateselect.tpl',
      1 => 1481835448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34431667058530528ccba88-45598428',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58530528ce6f03_96481312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58530528ce6f03_96481312')) {function content_58530528ce6f03_96481312($_smarty_tpl) {?><!-- $Id$ -->        <tr>
          <td colspan='5' align='center'>
            <form action='view.php' method='get'>
              <table border='0' width='100%' style='border-top:#45436d 1px solid;border-bottom:#45436d 1px solid;' >
                <tr>
                  <td class='admin_info' width='12%'><?php echo con("date_from");?>
</td>
                  <td class='note'  width='35%'>
                   <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->inputdate(array('name'=>'from','value'=>'{$smarty.get.from}','nolabel'=>true),$_smarty_tpl);?>

                  </td>
                  <td class='admin_info' width='12%'><?php echo con("date_to");?>
</td>
                  <td class='note'  width='35%'>
                   <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->inputdate(array('name'=>'to','value'=>'{$smarty.get.to}','nolabel'=>true),$_smarty_tpl);?>

                  </td>
                  <td class='admin_info' colspan='2'>
                    <input type='submit' name='submit' value='<?php echo con("submit");?>
' />
                  </td>
                </tr>
              </table>
            </form>
          </td>
        </tr>
<?php }} ?>