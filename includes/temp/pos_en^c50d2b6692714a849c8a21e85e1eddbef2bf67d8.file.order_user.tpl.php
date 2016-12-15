<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 16:02:54
         compiled from "/home/ubuntu/workspace/includes/template/pos/order_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1136545835585304fe7701d8-13670777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c50d2b6692714a849c8a21e85e1eddbef2bf67d8' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/pos/order_user.tpl',
      1 => 1481835448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1136545835585304fe7701d8-13670777',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'user_errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_585304fe87e5c5_33594720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585304fe87e5c5_33594720')) {function content_585304fe87e5c5_33594720($_smarty_tpl) {?><!-- $Id: user.tpl 1921 2012-12-18 08:11:53Z nielsNL $ -->
 <style>
  #toolbar {
	padding: 2px;
	display: inline-block;
	margin-bottom:2px;
	}
/* support: IE7 */
*+html #toolbar {
	display: inline;
	}
</style>
<script type="text/javascript">
    $(document).ready(function(){
      loadUser();
      $('form#pos-user-form').keypress(function(e){
        if(e.which == 13){
          if ($('#user_info_new').attr("checked") == "true") $('#pos-user-form').submit();
          else $('#search_user').click();
        }
      });
     $( "#repeat" ).buttonset();
    });
</script>
<div id="toolbar" class="title" style='width:99%;'>
  <span id="repeat">
              <input checked="checked" type='radio' id='user_info_none' class='checkbox_dark' name='user_info' value='0'>
              <label for='user_info_none'> <?php echo con("none");?>
 </label>
               <input checked="checked" type='radio' id='user_info_new' class='checkbox_dark' name='user_info' value='2'>
               <label for='user_info_new'> <?php echo con("new_partron");?>
 </label>
              <input type='radio' id='user_info_search' class='checkbox_dark' name='user_info' value='1'>
              <label for='user_info_search'> <?php echo con("exist_user");?>
 </label>
  </span>
  <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->button(array('url'=>"button",'id'=>"search_user",'name'=>'search_action','value'=>'search','style'=>'float:right;'),$_smarty_tpl);?>

  </div>
    <div id='user_data' class='gui_form' style="display:none;padding:0px;" >
      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->setdata(array('data'=>$_smarty_tpl->tpl_vars['user_data']->value,'errors'=>$_smarty_tpl->tpl_vars['user_errors']->value,'nameclass'=>'user_item','valueclass'=>'user_value','model'=>'user','namewidth'=>'120'),$_smarty_tpl);?>

      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('name'=>'user_firstname','size'=>'30','maxlength'=>'50'),$_smarty_tpl);?>

      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('name'=>'user_lastname','size'=>'30','maxlength'=>'50'),$_smarty_tpl);?>

      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('name'=>'user_address','size'=>'30','maxlength'=>'75'),$_smarty_tpl);?>

      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('name'=>'user_address1','size'=>'30','maxlength'=>'75'),$_smarty_tpl);?>

      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('name'=>'user_zip','size'=>'8','maxlength'=>'20'),$_smarty_tpl);?>

      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('name'=>'user_city','size'=>'30','maxlength'=>'50'),$_smarty_tpl);?>

      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('name'=>'user_state','size'=>'30','maxlength'=>"50"),$_smarty_tpl);?>

      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->selectcountry(array('name'=>'user_country','DefaultEmpty'=>true,'style'=>'width:180px;','all'=>true),$_smarty_tpl);?>

      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('name'=>'user_phone','size'=>'30','maxlength'=>'50'),$_smarty_tpl);?>

      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('name'=>'user_fax','size'=>'30','maxlength'=>'50'),$_smarty_tpl);?>

      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->input(array('name'=>'user_email','size'=>'30','maxlength'=>'50'),$_smarty_tpl);?>

      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->hidden(array('id'=>'user_id','name'=>'user_id','value'=>'0'),$_smarty_tpl);?>

</div>

      <script>

      </script>

  <div id="search-dialog" title="<?php echo con("personal_search_dialog");?>
">
     <table id="users_table" class="scroll" cellpadding="0" cellspacing="0">
     <thead>
       <tr>
         <th><?php echo con("user_name");?>
</th>
         <th><?php echo con("user_phone");?>
</th>
         <th><?php echo con("user_city");?>
</th>
         <th><?php echo con("user_email");?>
</th>
       </tr>
     </thead>
     <tbody></tbody>
     </table>
  </div><?php }} ?>