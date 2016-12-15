<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 16:03:36
         compiled from "/home/ubuntu/workspace/includes/template/pos/process_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153968440058530528b99cd8-38845065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bab0a330982d6ef1d8ed48f7ffcb277119df2c1a' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/pos/process_list.tpl',
      1 => 1481835448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153968440058530528b99cd8-38845065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_search' => 0,
    'place' => 0,
    'pos' => 0,
    'not_hand_payment' => 0,
    'hand_shipment' => 0,
    'status' => 0,
    'not_status' => 0,
    'not_sent' => 0,
    'from' => 0,
    'to' => 0,
    'orderby' => 0,
    'ownerid' => 0,
    'count' => 0,
    'length' => 0,
    'shop_order' => 0,
    '_SHOP_images' => 0,
    'class' => 0,
    'user_order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58530528cc6116_29405500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58530528cc6116_29405500')) {function content_58530528cc6116_29405500($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/ubuntu/workspace/includes/libs/smarty3/plugins/function.counter.php';
?><!-- $Id$ -->

<?php $_smarty_tpl->tpl_vars['order_search'] = new Smarty_variable($_POST['order_search'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['length'] = new Smarty_variable('15', null, 0);?>

<?php $_smarty_tpl->tpl_vars['dates'] = new Smarty_variable("from=".((string)$_REQUEST['from'])."&to=".((string)$_REQUEST['to']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['firstpos'] = new Smarty_variable("first=".((string)$_GET['first']), null, 0);?>

<?php if ($_REQUEST['from']){?>
    <?php $_smarty_tpl->tpl_vars['from'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['smarty']->value).".request.from 00:00:00.000000", null, 0);?>
<?php }?>

<?php if ($_REQUEST['to']){?>
    <?php $_smarty_tpl->tpl_vars['to'] = new Smarty_variable(((string)$_REQUEST['to'])." 23:59:59.999999", null, 0);?>
<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['order_search']->value){?>
        <?php echo $_smarty_tpl->getSubTemplate ('process_orderselect.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <?php }else{ ?>
        <?php echo $_smarty_tpl->getSubTemplate ('process_dateselect.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <?php }?>

      <table width='100%' id='order_overview' class="scroll display" >
      <thead>
      <tr>
          <th> </th>
          <th>ID</th>
          <th><?php echo con("order_place_header");?>
</th>
          <th><?php echo con("Customer");?>
</th>
          <th><?php echo con("total_price");?>
</th>
          <th><?php echo con("tickets");?>
</th>
          <th><?php echo con("timestamp");?>
</th>
          <th> </th>
        </tr>
        </thead>
        <?php $_smarty_tpl->tpl_vars['orderby'] = new Smarty_variable('order_id desc', null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['place']->value=='pos'){?>
        	<?php $_smarty_tpl->tpl_vars['ownerid'] = new Smarty_variable($_smarty_tpl->tpl_vars['pos']->value->user_id, null, 0);?>
        <?php }else{ ?>
          <?php $_smarty_tpl->tpl_vars['ownerid'] = new Smarty_variable(null, null, 0);?>
        <?php }?>
        <tbody>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('order->order_list', array('not_hand_payment'=>$_smarty_tpl->tpl_vars['not_hand_payment']->value,'hand_shipment'=>$_smarty_tpl->tpl_vars['hand_shipment']->value,'place'=>$_smarty_tpl->tpl_vars['place']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'not_status'=>$_smarty_tpl->tpl_vars['not_status']->value,'not_sent'=>$_smarty_tpl->tpl_vars['not_sent']->value,'start_date'=>$_smarty_tpl->tpl_vars['from']->value,'end_date'=>$_smarty_tpl->tpl_vars['to']->value,'order'=>$_smarty_tpl->tpl_vars['orderby']->value,'owner_id'=>$_smarty_tpl->tpl_vars['ownerid']->value,'order_search'=>$_smarty_tpl->tpl_vars['order_search']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_objects['order'][0]->order_list(array('not_hand_payment'=>$_smarty_tpl->tpl_vars['not_hand_payment']->value,'hand_shipment'=>$_smarty_tpl->tpl_vars['hand_shipment']->value,'place'=>$_smarty_tpl->tpl_vars['place']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'not_status'=>$_smarty_tpl->tpl_vars['not_status']->value,'not_sent'=>$_smarty_tpl->tpl_vars['not_sent']->value,'start_date'=>$_smarty_tpl->tpl_vars['from']->value,'end_date'=>$_smarty_tpl->tpl_vars['to']->value,'order'=>$_smarty_tpl->tpl_vars['orderby']->value,'owner_id'=>$_smarty_tpl->tpl_vars['ownerid']->value,'order_search'=>$_smarty_tpl->tpl_vars['order_search']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

          <?php echo smarty_function_counter(array('print'=>false,'assign'=>'count'),$_smarty_tpl);?>

          <?php if ($_smarty_tpl->tpl_vars['count']->value<($_smarty_tpl->tpl_vars['length']->value+1)){?>
             <tr>
            <?php if ($_smarty_tpl->tpl_vars['shop_order']->value['order_shipment_status']=="send"){?>
              <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("admin_order_".((string)$_smarty_tpl->tpl_vars['shop_order']->value['order_shipment_status']), null, 0);?>
            <?php }elseif($_smarty_tpl->tpl_vars['shop_order']->value['order_payment_status']=="paid"){?>
              <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("admin_order_".((string)$_smarty_tpl->tpl_vars['shop_order']->value['order_payment_status']), null, 0);?>
            <?php }else{ ?>
              <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("admin_order_".((string)$_smarty_tpl->tpl_vars['shop_order']->value['order_status']), null, 0);?>
            <?php }?>
              <td class='admin_list_buttons '><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_images']->value;?>
dot.gif' class='<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
' width='15' height='15' /> </td>
              <td class='admin_list_item' align="right"><?php echo $_smarty_tpl->tpl_vars['shop_order']->value['order_id'];?>
</td>
              <td class='admin_list_item'><?php echo $_smarty_tpl->tpl_vars['shop_order']->value['order_place'];?>
</td>
              <td class='admin_list_item'><?php echo $_smarty_tpl->tpl_vars['user_order']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user_order']->value['user_lastname'];?>
</td>
              <td class='admin_list_item' align="right"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['valuta'][0][0]->valuta(array('value'=>$_smarty_tpl->tpl_vars['shop_order']->value['order_total_price']),$_smarty_tpl);?>
</td>
              <td class='admin_list_item' align="right"><?php echo $_smarty_tpl->tpl_vars['shop_order']->value['order_tickets_nr'];?>
</td>
              <td class='admin_list_item'><?php echo $_smarty_tpl->tpl_vars['shop_order']->value['order_date'];?>
</td>
              <td class='admin_list_buttons' style='padding:1; margin:0px;white-space: nowrap;' align="right">
                <a title="<?php echo con("view_details");?>
"  href='view.php?order_id=<?php echo $_smarty_tpl->tpl_vars['shop_order']->value['order_id'];?>
'>
                  <img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_images']->value;?>
view.png' border='0'>
                </a>
                <?php echo $_smarty_tpl->getSubTemplate ('process_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('shop_order'=>$_smarty_tpl->tpl_vars['shop_order']->value), 0);?>

              </td>
            </tr>
          <?php }?>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_objects['order'][0]->order_list(array('not_hand_payment'=>$_smarty_tpl->tpl_vars['not_hand_payment']->value,'hand_shipment'=>$_smarty_tpl->tpl_vars['hand_shipment']->value,'place'=>$_smarty_tpl->tpl_vars['place']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'not_status'=>$_smarty_tpl->tpl_vars['not_status']->value,'not_sent'=>$_smarty_tpl->tpl_vars['not_sent']->value,'start_date'=>$_smarty_tpl->tpl_vars['from']->value,'end_date'=>$_smarty_tpl->tpl_vars['to']->value,'order'=>$_smarty_tpl->tpl_vars['orderby']->value,'owner_id'=>$_smarty_tpl->tpl_vars['ownerid']->value,'order_search'=>$_smarty_tpl->tpl_vars['order_search']->value), $_block_content, $_smarty_tpl, $_block_repeat);   } array_pop($_smarty_tpl->smarty->_tag_stack);?>

      </table>
      </tbody>
      

    <?php echo $_smarty_tpl->getSubTemplate ('process_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



      <script>
 tblUser = $('#order_overview').dataTable({
    //   bProcessing: true,
    sScrollY: '300px',
    bJQueryUI: true,
    sDom: '<l<rt>p>',
    bSort: false,
    bAutoWidth: true,
    oLanguage: {
      sEmptyTable: 'No data available in table',
      sLoadingRecords : 'Loading...',
      sZeroRecords:  'No matching records found.'
    },
    bPaginate: false,
    bSortClasses: false,

    bScrollCollapse: false,
    aoColumns : [ { 'sWidth':'5px', },
                  { 'sWidth':'50px', },
                  { 'sWidth':'120px',  },
                  {  },
                  { 'sWidth':'100px',  },
                  { 'sWidth':'50px',  },
                  { 'sWidth':'140px', },
                  { 'sWidth':'1px',  }]
  });

      </script>
<?php }} ?>