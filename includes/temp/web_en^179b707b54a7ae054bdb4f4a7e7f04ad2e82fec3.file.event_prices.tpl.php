<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-16 14:05:11
         compiled from "/home/ubuntu/workspace/includes/template/web/event_prices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1078269433582cade7cc9b80-86087083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '179b707b54a7ae054bdb4f4a7e7f04ad2e82fec3' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/event_prices.tpl',
      1 => 1478706703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1078269433582cade7cc9b80-86087083',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_event' => 0,
    'cycle' => 0,
    'shop_category' => 0,
    'shop_discount' => 0,
    'organizer_currency' => 0,
    'user' => 0,
    'event_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_582cade7da26c0_24582288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582cade7da26c0_24582288')) {function content_582cade7da26c0_24582288($_smarty_tpl) {?><?php if (!is_callable('smarty_block_category')) include '/home/ubuntu/workspace/includes/shop_plugins/block.category.php';
if (!is_callable('smarty_function_cycle')) include '/home/ubuntu/workspace/includes/libs/smarty3/plugins/function.cycle.php';
if (!is_callable('smarty_block_discount')) include '/home/ubuntu/workspace/includes/shop_plugins/block.discount.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/ubuntu/workspace/includes/libs/smarty3/plugins/modifier.date_format.php';
?><!-- $Id$ -->
<?php if ($_smarty_tpl->tpl_vars['shop_event']->value['event_pm_id']){?>
  <div class="art-content-layout-br layout-item-0"></div>
  <b><?php echo con("cat_description");?>
</b>
  <div class="art-content-layout" style="width: 100%;">
    <div class="art-content-layout-row" >
      <div class="art-layout-cell layout-item-4" style="width: 100%;">
        <table border=0 class='table_midtone'>
      		<tr class='small_table_dark' >
      			<th><?php echo con("category");?>
</th>
      			<th width='15%'><?php echo con("price");?>
</th>
      			<th><?php echo con("tickets_available");?>
</th>
      		</tr>
          <?php $_smarty_tpl->smarty->_tag_stack[] = array('category', array('event_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'stats'=>"on")); $_block_repeat=true; echo smarty_block_category(array('event_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'stats'=>"on"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo smarty_function_cycle(array('assign'=>'cycle','name'=>'events','values'=>"tr_0,tr_1",'print'=>'NO'),$_smarty_tpl);?>

            <tr class='<?php echo $_smarty_tpl->tpl_vars['cycle']->value;?>
'>
              <td ><b><?php echo $_smarty_tpl->tpl_vars['shop_category']->value['category_name'];?>
</b>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('discount', array('event_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'cat_price'=>$_smarty_tpl->tpl_vars['shop_category']->value['category_price'])); $_block_repeat=true; echo smarty_block_discount(array('event_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'cat_price'=>$_smarty_tpl->tpl_vars['shop_category']->value['category_price']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                  <br>&nbsp;
                  <span class='note'>
                     <?php echo $_smarty_tpl->tpl_vars['shop_discount']->value['discount_name'];?>
: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['valuta'][0][0]->valuta(array('value'=>$_smarty_tpl->tpl_vars['shop_discount']->value['discount_price']),$_smarty_tpl);?>

                  </span>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_discount(array('event_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'cat_price'=>$_smarty_tpl->tpl_vars['shop_category']->value['category_price']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

              </td>
              <td align='right' style='text-align:right'>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['valuta'][0][0]->valuta(array('value'=>$_smarty_tpl->tpl_vars['shop_category']->value['category_price']),$_smarty_tpl);?>

              </td>
              <td  align='right' width='10%' style='text-align:right'>
                <?php if ($_smarty_tpl->tpl_vars['shop_category']->value['category_free']>0){?>
                	<?php $_smarty_tpl->tpl_vars['event_has_seats'] = new Smarty_variable("true", null, 0);?>
      	          <?php if ($_smarty_tpl->tpl_vars['shop_category']->value['category_free']/$_smarty_tpl->tpl_vars['shop_category']->value['category_size']>=0.2){?>
                    <span><?php echo $_smarty_tpl->tpl_vars['shop_category']->value['category_free'];?>
</span>
                  <?php }else{ ?>
                    <span style='color:Orange; '><b><?php echo $_smarty_tpl->tpl_vars['shop_category']->value['category_free'];?>
</b></span>
                  <?php }?>
                <?php }else{ ?>
                  <span color='red'><?php echo con("category_sold");?>
</span>
                <?php }?>
              </td>
            </tr>
          <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_category(array('event_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'stats'=>"on"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </table>
        <div class='note' align='right' style='text-align:right'>
         <?php echo con("prices_in");?>
 <?php echo $_smarty_tpl->tpl_vars['organizer_currency']->value;?>

        </div>
      </div>
    </div>
  </div>
  <div class="art-content-layout-br layout-item-0"></div>
  <div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row" style='padding:10px;'>
      <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['event_date']<smarty_modifier_date_format(time(),"%Y-%m-%d")){?>
        <p><center><?php echo con("old_event");?>
</center></p>
      <?php }elseif($_smarty_tpl->tpl_vars['user']->value->mode()=='-1'&&!$_smarty_tpl->tpl_vars['user']->value->logged){?>
        <p><center><?php echo con("Please_login");?>
</center></p>
      <?php }else{ ?>
          <div class="art-layout-cell layout-item-3"  style='text-align:right; width: 100%;padding:10px;'>
		        <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->button(array('url'=>"?event_id=".((string)$_smarty_tpl->tpl_vars['event_id']->value)."&action=buy",'name'=>"buy_tickets"),$_smarty_tpl);?>

      	  </div>
      <?php }?>
    </div>
  </div>
  <br>

<?php }?><?php }} ?>