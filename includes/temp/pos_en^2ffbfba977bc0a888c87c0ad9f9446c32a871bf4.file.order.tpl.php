<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 16:02:54
         compiled from "/home/ubuntu/workspace/includes/template/pos/order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:391649204585304fe6aedc7-20510139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ffbfba977bc0a888c87c0ad9f9446c32a871bf4' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/pos/order.tpl',
      1 => 1481835448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '391649204585304fe6aedc7-20510139',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_585304fe7421d0_06185378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585304fe7421d0_06185378')) {function content_585304fe7421d0_06185378($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<!-- $Id$ -->
<style>
  .dataTables_filter {
	width: 100%;
	}
</style>

<form id="order-form" name='addtickets' action='ajax.php?x=addtocart' method='post'>
  <input type='hidden'  id="event-id" name="event_id" value=0 />
  <div class="art-content-layout">
    <div class="art-content-layout-row">
      <div class="art-layout-cell" style="width: 40%; padding-right:4px;" >
        <div class='title' align='left'><?php echo con("select_event");?>
</div>
        <div class='user_item' style='text-align:right; width:100%' >  <label for='event-search'><?php echo con("filter");?>
:&nbsp;</label><input style='margin:2px' type="text" id="event-search"  /></div>
        <table id="event_table" >
          <thead style='display:none'>
            <tr style='display:none'>
              <td></td>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
      <div class="art-layout-cell" style="width: 60%;padding-left:4px;" >
        <div class='title' align='left'><?php echo con("select_category");?>
</div>
        <table width="100%" cellpadding='2' cellspacing='2' bgcolor='white'>
          <tbody>
            <tr style='height:255px'>
              <td colspan=2 class='user_value' style='overflow: hidden; position: relative;'>
                <div id='cat-select' style='overflow-y: auto;height:230px;width:100%; overload:'>
                  <?php echo con("select_event_first");?>

                </div>
              </td>
            </tr>
            <tr >
            <td class='user_item'  style='width:100px;' ><?php echo con("discounts");?>
:</td>
            <td class='user_value'>
              <select name='discount_id' id='discount-select' style="width:100%;">
                <option value='0'><?php echo con("discount_none");?>
</option>
              </select>
            </td>
            </tr>
            <tr>
              <td class='user_item' style='width:100px; height:26px;' ><?php echo con("select_seats");?>
:</td>
              <td class='user_value' class="seat-selection" >
                <div id="show-seats-div" style="display:none;float:left;">
                  <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->button(array('url'=>"button",'name'=>'show_seats'),$_smarty_tpl);?>

                </div>
                <div id="seat-qty-div" style="display:none;float:left;">
                  <input type='number' id="seat-qty" name='place' min='1' max='99' style='width:50px;' />
                  <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->button(array('url'=>"submit",'id'=>"continue",'name'=>'add_tickets','type'=>1),$_smarty_tpl);?>

                </div>
                <div style='float:right;'>
                  <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->button(array('url'=>"button",'id'=>"clear-button",'name'=>'clear_selection'),$_smarty_tpl);?>

                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    </div>
</form>
  <div class="art-content-layout clearfix">
    <div class="art-content-layout-row">
      <div class="art-layout-cell" style="width: 100%;padding-top:8px;" >

<table id="cart_table"  class="scroll display" cellpadding="0" cellspacing="2" style='font-family: "Verdana"; font-size: 12px;'>
  <thead>
    <tr>
      <th><?php echo con("pos_event_name_title");?>
</th>
      <th><?php echo con("pos_tickets_title");?>
</th>
      <th><?php echo con("pos_total_title");?>
</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody></tbody>
</table>
</div>
</div>
    </div>

<div id="cart-pager"></div>
<div id="seat-chart" title="<?php echo con("select_seat_pos");?>
"></div>
<div id="order_action" title="<?php echo con("pos_order_page");?>
"></div>

  <div class="art-content-layout clearfix">
   <div class="art-content-layout-row">
      <div class="art-layout-cell " style="width: 50%; padding-right:4px;" >
        <div class='title' align='left'><?php echo con("pers_info");?>
</div>
	      <form id="pos-user-form" name="pos-user">
	        <?php echo $_smarty_tpl->getSubTemplate ('order_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	      </form>
      </div>
      <div class="art-layout-cell" style="width: 50%; padding-leftt:4px;" >
        <div class='title' align='left'><?php echo con("handlings");?>
</div>
      <form>
        <table id='handling-table' width='100%' cellspacing='2' cellpadding='2'  bgcolor='white' style='margin:0px;'>
          <tbody id='handling-block'>
            <?php echo $_smarty_tpl->getSubTemplate ('handlings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          </tbody>
        </table>
      </form>
    </div>
    </div>
    </div>
  <div class="art-content-layout">
    <div class="art-content-layout-row">
      <div class="art-layout-cell" style="width: 100%; padding-top:8px;" >
     <div style="text-align:right;">
      <form id="ft-pos-order-form">
        <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->button(array('url'=>'button','id'=>'checkout','name'=>'order_action','value'=>'order_it','style'=>"float:none;"),$_smarty_tpl);?>

        &nbsp;
        <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->button(array('url'=>'button','id'=>'cancel','name'=>'order_cancel_action','value'=>'cancel','style'=>"float:none;"),$_smarty_tpl);?>

      </form>
    </div>
  </div>
  </div>
  </div>
<script type="text/javascript">
  
    $(document).ready(function(){
      loadOrder();
    });
  
</script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>