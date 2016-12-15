<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 14:08:36
         compiled from "/home/ubuntu/workspace/includes/template/web/programm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13089695565852ea346ba5a4-84170141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bfd58922f6ad3e3ff8adcb4f7d37013a56d17e5' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/programm.tpl',
      1 => 1481826312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13089695565852ea346ba5a4-84170141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'start_date' => 0,
    'count' => 0,
    'shop_event' => 0,
    '_SHOP_themeimages' => 0,
    'info_plus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5852ea3478f815_05528163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5852ea3478f815_05528163')) {function content_5852ea3478f815_05528163($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/ubuntu/workspace/includes/libs/smarty3/plugins/modifier.date_format.php';
if (!is_callable('smarty_block_event')) include '/home/ubuntu/workspace/includes/shop_plugins/block.event.php';
if (!is_callable('smarty_function_counter')) include '/home/ubuntu/workspace/includes/libs/smarty3/plugins/function.counter.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>con("program"),'header'=>con("eventlist_info")), 0);?>

                                <div class="art-content-layout-br layout-item-0"></div>
                    <div class="art-content-layout">

<?php $_smarty_tpl->tpl_vars['start_date'] = new Smarty_variable(smarty_modifier_date_format(time(),"%Y-%m-%d"), null, 0);?>
  <?php $_smarty_tpl->smarty->_tag_stack[] = array('event', array('order'=>"event_date,event_time",'main'=>'on','ort'=>'on','event_status'=>'pub','start_date'=>$_smarty_tpl->tpl_vars['start_date']->value)); $_block_repeat=true; echo smarty_block_event(array('order'=>"event_date,event_time",'main'=>'on','ort'=>'on','event_status'=>'pub','start_date'=>$_smarty_tpl->tpl_vars['start_date']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo smarty_function_counter(array('print'=>false,'assign'=>'count'),$_smarty_tpl);?>

    <?php if ((1 & $_smarty_tpl->tpl_vars['count']->value)){?>
     <div  class="art-content-layout-row" style='width:100%;'>
    <?php }?>
    <div class="art-layout-cell" style='vertical-align:top;text-align:center;width:50%;padding:15px !important;' >
      <div class="art-content-layout layout-item-1">
        <div class="art-content-layout-row" style='padding:10px;'>
          <div class="art-layout-cell layout-item-3"  style='text-align:left; width: 100%;padding:10px;'>
                <a class="title_link" href='index.php?event_id=<?php echo $_smarty_tpl->tpl_vars['shop_event']->value['event_id'];?>
'>
            <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->image(array('href'=>((string)$_smarty_tpl->tpl_vars['shop_event']->value['event_image']),'width'=>160,'height'=>150,'class'=>"magnify has-tooltip",'alt'=>((string)$_smarty_tpl->tpl_vars['shop_event']->value['event_name'])." in ".((string)$_smarty_tpl->tpl_vars['shop_event']->value['ort_city']),'title'=>((string)$_smarty_tpl->tpl_vars['shop_event']->value['event_name'])." in ".((string)$_smarty_tpl->tpl_vars['shop_event']->value['ort_city']),'border'=>"0"),$_smarty_tpl);?>

                </a>
            <ul>
              <li><b><?php echo con("event_name");?>
:</b>
                <a class="title_link" href='index.php?event_id=<?php echo $_smarty_tpl->tpl_vars['shop_event']->value['event_id'];?>
'>
                  <?php echo $_smarty_tpl->tpl_vars['shop_event']->value['event_name'];?>

                </a>
                <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['event_mp3']){?>
                  <a  href='files/<?php echo $_smarty_tpl->tpl_vars['shop_event']->value['event_mp3'];?>
'>
                    <img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
audio-small.png' alt='audio' />
                  </a>
                <?php }?>
              </li>
              <li>
                 <b><?php echo con("date");?>
:</b>
                    <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['event_rep']=="main,sub"){?>
                      <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['shop_event']->value['event_date'],con("shortdate_format"));?>

                      <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['shop_event']->value['event_time'],con("time_format"));?>

                      <?php echo $_smarty_tpl->tpl_vars['shop_event']->value['pm_name'];?>

                    <?php }elseif($_smarty_tpl->tpl_vars['shop_event']->value['event_rep']=="main"){?>
                      <?php echo con("div_dates");?>

                    <?php }?>
              </li>
              <?php if ($_smarty_tpl->tpl_vars['info_plus']->value&&$_smarty_tpl->tpl_vars['shop_event']->value['event_open']){?>
                <li><b><?php echo con("doors_open");?>
</b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['shop_event']->value['event_open'],con("time_format"));?>
</li>
              <?php }?>
              <li>
                <b><?php echo con("venue");?>
:</b>
                <a onclick='showDialog(this);return false;' href='address.php?event_id=<?php echo $_smarty_tpl->tpl_vars['shop_event']->value['event_id'];?>
'><?php echo $_smarty_tpl->tpl_vars['shop_event']->value['ort_name'];?>
</a> -
                <?php echo $_smarty_tpl->tpl_vars['shop_event']->value['ort_city'];?>

              </li>
            </ul>
            <div><?php echo $_smarty_tpl->tpl_vars['shop_event']->value['event_short_text'];?>
</div>

          </div>
        </div>
      </div>
    </div>
    <?php if (!(1 & $_smarty_tpl->tpl_vars['count']->value)){?>
      </div>
    <?php }?>
  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_event(array('order'=>"event_date,event_time",'main'=>'on','ort'=>'on','event_status'=>'pub','start_date'=>$_smarty_tpl->tpl_vars['start_date']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php if ((1 & $_smarty_tpl->tpl_vars['count']->value)){?>
        <div class="art-layout-cell" style='vertical-align:top;text-align:center;width:50%;padding:15px !important;' ></div>

      </div>
    <?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>