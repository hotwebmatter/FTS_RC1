<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-16 14:05:11
         compiled from "/home/ubuntu/workspace/includes/template/web/event_description.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1152311178582cade7c28552-13667725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7333ff4357ef3979f626d04033d959a67471d2f6' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/event_description.tpl',
      1 => 1478706703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1152311178582cade7c28552-13667725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_event' => 0,
    'start_date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_582cade7cc28d9_85134065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582cade7cc28d9_85134065')) {function content_582cade7cc28d9_85134065($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/ubuntu/workspace/includes/libs/smarty3/plugins/modifier.date_format.php';
if (!is_callable('smarty_block_event')) include '/home/ubuntu/workspace/includes/shop_plugins/block.event.php';
?><!-- $Id$ -->
  <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['event_text']){?>
    <div class="art-content-layout-br layout-item-0"></div>
    <b><?php echo con("event_description");?>
</b><br>
    <div class="art-content-layout">
      <div class="art-content-layout-row">
        <div class="art-layout-cell layout-item-4" style="width: 100%;">
           <?php echo $_smarty_tpl->tpl_vars['shop_event']->value['event_text'];?>

        </div>
      </div>
    </div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['shop_event']->value['event_rep']=='main'){?>
    <div class="art-content-layout-br layout-item-0"></div>
    <b><?php echo con("dates_localities");?>
</b><br>
    <div class="art-content-layout">
      <div class="art-content-layout-row">
        <div class="art-layout-cell layout-item-4" style="width: 100%;"><ul>
          <?php $_smarty_tpl->tpl_vars['start_date'] = new Smarty_variable(smarty_modifier_date_format(time(),"%Y-%m-%d"), null, 0);?>
          <?php $_smarty_tpl->smarty->_tag_stack[] = array('event', array('event_main_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'ort'=>'on','stats'=>'on','sub'=>'on','event_status'=>'pub','place_map'=>'on','start_date'=>$_smarty_tpl->tpl_vars['start_date']->value,'order'=>"event_date,event_time")); $_block_repeat=true; echo smarty_block_event(array('event_main_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'ort'=>'on','stats'=>'on','sub'=>'on','event_status'=>'pub','place_map'=>'on','start_date'=>$_smarty_tpl->tpl_vars['start_date']->value,'order'=>"event_date,event_time"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
              <a href="index.php?event_id=<?php echo $_smarty_tpl->tpl_vars['shop_event']->value['event_id'];?>
">
                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['shop_event']->value['event_date'],con("date_format"));?>

              </a>
	            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['shop_event']->value['event_time'],con("time_format"));?>
 <?php echo $_smarty_tpl->tpl_vars['shop_event']->value['pm_name'];?>

            </li>
          <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_event(array('event_main_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'ort'=>'on','stats'=>'on','sub'=>'on','event_status'=>'pub','place_map'=>'on','start_date'=>$_smarty_tpl->tpl_vars['start_date']->value,'order'=>"event_date,event_time"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

          </ul>
          <?php if (!$_smarty_tpl->tpl_vars['shop_event']->value['event_main_id']){?>
          	  <div class="art-content-layout-br layout-item-0"></div>
              <div class="art-content-layout layout-item-1">
                <div class="art-content-layout-row" style='padding:10px;'>
                  <p><center><?php echo con("no_sub_events");?>
</center></p>
               </div>
              </div>
          <?php }?>
        </div>
      </div>
    </div>

<?php }else{ ?>
	<?php if (!$_smarty_tpl->tpl_vars['shop_event']->value['event_pm_id']){?>
	  <div class="art-content-layout-br layout-item-0"></div>
    <div class="art-content-layout layout-item-1">
      <div class="art-content-layout-row" style='padding:10px;'>
        <p><center><?php echo con("no_placemap_available");?>
</center></p>
      </div>
    </div>
    <br/>
	<?php }elseif($_smarty_tpl->tpl_vars['shop_event']->value['category_web']>=1){?>
		<?php echo $_smarty_tpl->getSubTemplate ("event_prices.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php }else{ ?>
	  <div class="art-content-layout-br layout-item-0"></div>
    <div class="art-content-layout layout-item-1">
      <div class="art-content-layout-row" style='padding:10px;'>
    <p><center><?php echo con("no_categories_available");?>
</center></p>
     </div>
    </div>
    <br/>
  <?php }?>
<?php }?><?php }} ?>