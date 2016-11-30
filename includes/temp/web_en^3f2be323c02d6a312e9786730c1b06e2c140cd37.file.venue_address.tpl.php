<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-28 12:17:42
         compiled from "/home/ubuntu/workspace/includes/template/web/venue_address.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1621558144583c66b6612fa1-33605495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f2be323c02d6a312e9786730c1b06e2c140cd37' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/venue_address.tpl',
      1 => 1478706703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1621558144583c66b6612fa1-33605495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_event' => 0,
    'organizer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_583c66b669bac8_07697584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c66b669bac8_07697584')) {function content_583c66b669bac8_07697584($_smarty_tpl) {?><?php if (!is_callable('smarty_block_event')) include '/home/ubuntu/workspace/includes/shop_plugins/block.event.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<!-- $Id$ -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<meta http-equiv="Content-Language" content="nl" >

<link REL='stylesheet' HREF='style.php' TYPE='text/css' >

</head>
<body>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('event', array('event_id'=>$_GET['event_id'],'ort'=>'on','limit'=>1)); $_block_repeat=true; echo smarty_block_event(array('event_id'=>$_GET['event_id'],'ort'=>'on','limit'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

     <table border="0" cellpadding="0" cellspacing="0" width="600">
      <tr>
        <td valign=top>
    	    <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['ort_image']){?>
    		    <img src="files/<?php echo $_smarty_tpl->tpl_vars['shop_event']->value['ort_image'];?>
" width='160' align='left' border="0">
          <?php }else{ ?>
    		    <img src="images/na.png" align='left' style="margin:20px"  border="0">
          <?php }?>
          <br>
        </td>
        <td valign='top' align='left' width='400' >
          <h3><?php echo $_smarty_tpl->tpl_vars['shop_event']->value['ort_name'];?>
 </h3><br>
          <table border=0 cellSpacing=2 cellPadding=3 width='90%' bgcolor='white'>
          <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->setData(array('data'=>$_smarty_tpl->tpl_vars['shop_event']->value),$_smarty_tpl);?>

          <?php $_smarty_tpl->smarty->_tag_stack[] = array('gui->label', array('name'=>'ort_address')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_objects['gui'][0]->label(array('name'=>'ort_address'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->view(array('name'=>'ort_address','nolabel'=>true),$_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['ort_address1']){?>
              <br><?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->view(array('name'=>'ort_address1','nolabel'=>true),$_smarty_tpl);?>

            <?php }?>
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_objects['gui'][0]->label(array('name'=>'ort_address'), $_block_content, $_smarty_tpl, $_block_repeat);   } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->view(array('name'=>'ort_city'),$_smarty_tpl);?>

            <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->view(array('name'=>'ort_zip'),$_smarty_tpl);?>

            <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->view(array('name'=>'ort_state','option'=>true),$_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['ort_country']&&$_smarty_tpl->tpl_vars['shop_event']->value['ort_country']!=$_smarty_tpl->tpl_vars['organizer']->value->organizer_country){?>
              <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->view(array('name'=>'ort_country','option'=>true),$_smarty_tpl);?>

            <?php }?>
            <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->view(array('name'=>'ort_phone','option'=>true),$_smarty_tpl);?>

            <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->view(array('name'=>'ort_fax','option'=>true),$_smarty_tpl);?>

            <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->viewUrl(array('name'=>'ort_url','option'=>true),$_smarty_tpl);?>

          </table>
        </td>
      </tr>
      <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['ort_pm']){?>
        <tr>
          <td colspan=2 >
            <hr>
            <center>
             <?php echo $_smarty_tpl->tpl_vars['shop_event']->value['ort_pm'];?>

             </center>
            <hr>
          </td>
        </tr>
     <?php }?>
    </table>
  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_event(array('event_id'=>$_GET['event_id'],'ort'=>'on','limit'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

  <div align='right'>
  <button onclick="jQuery.modal.close();">Close</button>
  </div>

</body><?php }} ?>