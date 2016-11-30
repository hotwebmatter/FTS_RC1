<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-28 12:54:30
         compiled from "/home/ubuntu/workspace/includes/template/web/custom/event_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1064942741583c6cdacaef33-72029616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '234cead2fad35373dddd15bbe7b0c1a3001b06be' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/custom/event_header.tpl',
      1 => 1480355667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1064942741583c6cdacaef33-72029616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_583c6cdb04eab7_39402793',
  'variables' => 
  array (
    'shop_event' => 0,
    '_SHOP_themeimages' => 0,
    'info_plus' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c6cdb04eab7_39402793')) {function content_583c6cdb04eab7_39402793($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/ubuntu/workspace/includes/libs/smarty3/plugins/modifier.date_format.php';
?><!-- $Id$ -->
                                <div class="art-content-layout-br layout-item-0"></div>
                                <div class="art-content-layout layout-item-1">
                                  <div class="art-content-layout-row">
                                    <div class="art-layout-cell layout-item-2" style="width: 30%;">
                                         <a class="title_link" href='<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['shop_event']->value['event_id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->_Url(array('file'=>'index.php','event_id'=>$_tmp1),$_smarty_tpl);?>
'>
                                      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->image(array('href'=>((string)$_smarty_tpl->tpl_vars['shop_event']->value['event_image']),'width'=>120,'height'=>110,'align'=>'left','class'=>"magnify has-tooltip",'border'=>"0",'style'=>'','alt'=>((string)$_smarty_tpl->tpl_vars['shop_event']->value['event_name'])." in ".((string)$_smarty_tpl->tpl_vars['shop_event']->value['ort_city']),'title'=>((string)$_smarty_tpl->tpl_vars['shop_event']->value['event_name'])." in ".((string)$_smarty_tpl->tpl_vars['shop_event']->value['ort_city'])),$_smarty_tpl);?>

                                           </a>
                                    </div>
                                    <div class="art-layout-cell layout-item-3" style="width: 70%;">
                                      <ul>
                                        <li><b><?php echo con("event_name");?>
:</b>
                                          <a class="title_link" href='<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['shop_event']->value['event_id'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->_Url(array('file'=>'index.php','event_id'=>$_tmp2),$_smarty_tpl);?>
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
                                           <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['event_rep']=='main'){?>
                                             <?php echo con("div_dates");?>

                                           <?php }else{ ?>
                                             <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['shop_event']->value['event_date'],con("shortdate_format"));?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['shop_event']->value['event_time'],con("time_format"));?>

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
 - <?php echo $_smarty_tpl->tpl_vars['shop_event']->value['pm_name'];?>

                                        </li>
                                      </ul>
                                      <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['event_short_text']){?>
                                      <blockquote style="margin: 10px 0"><?php echo $_smarty_tpl->tpl_vars['shop_event']->value['event_short_text'];?>
</blockquote>
                                      <?php }?>
                                    </div>
                                  </div>
                                </div><?php }} ?>