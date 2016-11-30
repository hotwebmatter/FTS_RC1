<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-28 12:36:36
         compiled from "/home/ubuntu/workspace/includes/template/web/custom/cart_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:562129670583c5f3467b247-20356991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406c061075ded011d10ba8a962bb09bb0a584148' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/custom/cart_content.tpl',
      1 => 1480354594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '562129670583c5f3467b247-20356991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_583c5f34747ca8_92724959',
  'variables' => 
  array (
    'cart' => 0,
    'lastevent' => 0,
    'event_item' => 0,
    'class' => 0,
    'check_out' => 0,
    'seat_item' => 0,
    '_SHOP_themeimages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c5f34747ca8_92724959')) {function content_583c5f34747ca8_92724959($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/ubuntu/workspace/includes/libs/smarty3/plugins/function.counter.php';
if (!is_callable('smarty_function_cycle')) include '/home/ubuntu/workspace/includes/libs/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/ubuntu/workspace/includes/libs/smarty3/plugins/modifier.date_format.php';
?><!-- $Id$ -->
<div class="art-content-layout-br layout-item-0"></div>

 <?php if ($_smarty_tpl->tpl_vars['cart']->value->is_empty_f()){?>
  <div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row" style='padding:10px;'>
      <div class="art-layout-cell layout-item-3"  style='text-align:center; width: 100%;padding:10px;'>
        <span class='title'><br><?php echo con("cart_empty");?>
<br><br> </span>
  	  </div>
    </div>
  </div>
<?php }else{ ?>
  <?php echo smarty_function_counter(array('start'=>"0",'assign'=>"count"),$_smarty_tpl);?>

  <table width="100%" class='table_midtone'>
    <tr class='small_table_dark' >
			<th><?php echo con("tickets");?>
</th>
			<th width='80'><?php echo con("total");?>
</th>
			<th width='70'><?php echo con("expires_in");?>
</th>
    </tr>
    <?php $_smarty_tpl->tpl_vars['lastevent'] = new Smarty_variable('', null, 0);?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('cart->items', array('perevent'=>true)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_objects['cart'][0]->items(array('perevent'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

      <?php if ($_smarty_tpl->tpl_vars['lastevent']->value!=$_smarty_tpl->tpl_vars['event_item']->value->event_id){?>
       <?php ob_start();?><?php echo smarty_function_cycle(array('name'=>'events','values'=>'tr_0,tr_1'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable($_tmp1, null, 0);?>
        <tr class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
          <td  colspan='3'>
             <ul>
                <li>
                  <b><?php echo con("event_name");?>
:</b> <?php echo $_smarty_tpl->tpl_vars['event_item']->value->event_name;?>

                </li>
                <li>
                   <b><?php echo con("date");?>
:</b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event_item']->value->event_date,con("shortdate_format"));?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event_item']->value->event_time,con("time_format"));?>

                </li>
                <li>
                  <b><?php echo con("venue");?>
:</b> <?php echo $_smarty_tpl->tpl_vars['event_item']->value->ort_name;?>
 - <?php echo $_smarty_tpl->tpl_vars['event_item']->value->ort_city;?>

                </li>
              </ul>
			</td>
    </tr>
        <?php $_smarty_tpl->tpl_vars['lastevent'] = new Smarty_variable($_smarty_tpl->tpl_vars['event_item']->value->event_id, null, 0);?>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['check_out']->value=="on"){?>
        <?php if (!$_smarty_tpl->tpl_vars['seat_item']->value->is_expired()){?>
          <?php echo $_smarty_tpl->getSubTemplate ("cart_subcontent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('check_out'=>"on",'seat_item'=>$_smarty_tpl->tpl_vars['seat_item']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value), 0);?>

        <?php }?>
      <?php }else{ ?>
        <?php echo $_smarty_tpl->getSubTemplate ("cart_subcontent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('seat_item'=>$_smarty_tpl->tpl_vars['seat_item']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value), 0);?>

      <?php }?>
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_objects['cart'][0]->items(array('perevent'=>true), $_block_content, $_smarty_tpl, $_block_repeat);   } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <tr class="<?php echo smarty_function_cycle(array('name'=>'events','values'=>'TblHigher,TblLower'),$_smarty_tpl);?>
">
      <td  colspan='1' align='right'>
        <b><?php echo con("total_price");?>
</b>
      </td>
      <td align='right' style='text-align:right'>
       <b> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['valuta'][0][0]->valuta(array('value'=>$_smarty_tpl->tpl_vars['cart']->value->total_price_f()),$_smarty_tpl);?>
</b> 
      </td>
      <td style='text-align:right;'>
        <!--<img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
clock.gif' valign="middle" align="middle" style='margin:0px;'> <span id="countdown2"><?php echo $_smarty_tpl->tpl_vars['seat_item']->value->ttl();?>
 </span> <?php echo con("minutes");?>
-->
        <i class="fa fa-clock-o" aria-hidden="true" alt='clock' valign="middle" align="middle" style='margin:0px;'></i><span id="countdown2"><?php echo $_smarty_tpl->tpl_vars['seat_item']->value->ttl();?>
</span><?php echo con("minutes");?>

        <script>
          $('#countdown2').countdown({ until: <?php echo $_smarty_tpl->tpl_vars['seat_item']->value->ttlsec();?>
, compact: true,  format: 'M', description: '' });
        </script>
      </td>
    </tr>
  </table>
<?php }?><?php }} ?>