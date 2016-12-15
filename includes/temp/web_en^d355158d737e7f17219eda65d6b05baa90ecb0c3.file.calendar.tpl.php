<?php /* Smarty version Smarty-3.1-DEV, created on 2016-12-15 16:03:52
         compiled from "/home/ubuntu/workspace/includes/template/web/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178659631458530538756611-09944674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd355158d737e7f17219eda65d6b05baa90ecb0c3' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/calendar.tpl',
      1 => 1481835448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178659631458530538756611-09944674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'start_date' => 0,
    'length' => 0,
    'shop_event' => 0,
    'month' => 0,
    'month1' => 0,
    '_SHOP_themeimages' => 0,
    '_SHOP_files' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58530538843b78_05722519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58530538843b78_05722519')) {function content_58530538843b78_05722519($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/ubuntu/workspace/includes/libs/smarty3/plugins/modifier.date_format.php';
if (!is_callable('smarty_block_event')) include '/home/ubuntu/workspace/includes/shop_plugins/block.event.php';
if (!is_callable('smarty_function_cycle')) include '/home/ubuntu/workspace/includes/libs/smarty3/plugins/function.cycle.php';
?><!-- $Id$ --><?php if ($_GET['inframe']=='yes'){?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<title>FusionTicket</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- link rel="stylesheet" type="text/css" href="css/formatting.css" media="screen"  -->

		<link rel='stylesheet' href='style.php' type='text/css' />

		<!-- Must be included in all templates -->
		<?php echo $_smarty_tpl->getSubTemplate ("required_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- End Required Headers -->
	</head>
	<body class='main_side'>
<?php }else{ ?>
  <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>con("calendar")), 0);?>

<?php }?>
<?php $_smarty_tpl->tpl_vars['length'] = new Smarty_variable('15', null, 0);?>
<?php $_smarty_tpl->tpl_vars['start_date'] = new Smarty_variable(smarty_modifier_date_format(time(),"%Y-%m-%d"), null, 0);?>

<table class='table_dark' style='width:100%;'>
   <?php $_smarty_tpl->smarty->_tag_stack[] = array('event', array('start_date'=>$_smarty_tpl->tpl_vars['start_date']->value,'sub'=>'on','ort'=>'on','place_map'=>'on','order'=>"event_date,event_time",'first'=>$_GET['offset'],'length'=>$_smarty_tpl->tpl_vars['length']->value)); $_block_repeat=true; echo smarty_block_event(array('start_date'=>$_smarty_tpl->tpl_vars['start_date']->value,'sub'=>'on','ort'=>'on','place_map'=>'on','order'=>"event_date,event_time",'first'=>$_GET['offset'],'length'=>$_smarty_tpl->tpl_vars['length']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->tpl_vars['month'] = new Smarty_variable(smarty_modifier_date_format($_smarty_tpl->tpl_vars['shop_event']->value['event_date'],"%B"), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['month']->value!=$_smarty_tpl->tpl_vars['month1']->value){?>
     <tr><td colspan='3' class='title' style='text-decoration:underline;'><br /><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['shop_event']->value['event_date'],"%B %Y");?>
</td></tr>
     <?php $_smarty_tpl->tpl_vars['month1'] = new Smarty_variable($_smarty_tpl->tpl_vars['month']->value, null, 0);?>
    <?php }?>
    <tr class='tr_<?php echo smarty_function_cycle(array('values'=>"0,1"),$_smarty_tpl);?>
'>
      <td style='vertical-align:top;' >
        <a target='_parent' href='index.php?event_id=<?php echo $_smarty_tpl->tpl_vars['shop_event']->value['event_id'];?>
'>
          <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['event_pm_id']){?><img style='margin:0px;' src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
ticket.gif' alt='ticket' />
          <?php }else{ ?><img style='margin:0px;' src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
info.gif' alt='info' /><?php }?>
          </a>
        <a  style='vertical-align: top;' target='_parent' href='index.php?event_id=<?php echo $_smarty_tpl->tpl_vars['shop_event']->value['event_id'];?>
'><?php echo $_smarty_tpl->tpl_vars['shop_event']->value['event_name'];?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['event_mp3']){?><a target="_blank" style='float:right' href="<?php echo $_smarty_tpl->tpl_vars['_SHOP_files']->value;?>
<?php echo $_smarty_tpl->tpl_vars['shop_event']->value['event_mp3'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
audio-small.png" alt='audio'/></a><?php }?>
      </td>
      <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['shop_event']->value['event_date'],con("shortdate_format"));?>
 <br /><b><?php echo con("time");?>
:</b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['shop_event']->value['event_time'],con("time_format"));?>
</td>
      <td >
        <?php echo $_smarty_tpl->tpl_vars['shop_event']->value['ort_name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['shop_event']->value['ort_city'];?>

        <br /> <?php echo $_smarty_tpl->tpl_vars['shop_event']->value['pm_name'];?>

      </td>
    </tr>
  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_event(array('start_date'=>$_smarty_tpl->tpl_vars['start_date']->value,'sub'=>'on','ort'=>'on','place_map'=>'on','order'=>"event_date,event_time",'first'=>$_GET['offset'],'length'=>$_smarty_tpl->tpl_vars['length']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</table>
<?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->navigation(array('offset'=>$_GET['offset'],'count'=>$_smarty_tpl->tpl_vars['shop_event']->value['tot_count'],'length'=>$_smarty_tpl->tpl_vars['length']->value),$_smarty_tpl);?>

<?php if ($_GET['inframe']=='yes'){?>
  	<div class="footer">
  		<hr width="100%" />
      <p>
         <!-- To comply with our GPL please keep the following link in the footer of your site -->
         <!-- Failure to abide by these rules may result in the loss of all support and/or site status. -->
         Copyright $copy; 2013. All Rights Reserved.<br />
         Powered By <a href="http://www.fusionticket.org">Fusion Ticket</a> - Free Open Source Online Box Office
       </p>
  	</div>
  </body>
  </html>
<?php }else{ ?>
  <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>