<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-16 14:17:38
         compiled from "/home/ubuntu/workspace/includes/template/web/cart_subcontent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1960593541582cb0d258a694-31897293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3cd90e1dc3ce0417fe72344ca314b0f713a4305' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/cart_subcontent.tpl',
      1 => 1478706703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1960593541582cb0d258a694-31897293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'seat_item' => 0,
    'category_item' => 0,
    'disc' => 0,
    'seats' => 0,
    'seat' => 0,
    'three_cols' => 0,
    'check_out' => 0,
    'event_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_582cb0d26801f6_68695415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582cb0d26801f6_68695415')) {function content_582cb0d26801f6_68695415($_smarty_tpl) {?><!-- $Id$ -->

<tr class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
  <td  valign='top'>
    <span class='has-tooltip' id='seatitem_<?php echo $_smarty_tpl->tpl_vars['seat_item']->value->id;?>
'>
      &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['seat_item']->value->count();?>
 x <?php echo $_smarty_tpl->tpl_vars['category_item']->value->cat_name;?>

      <?php $_smarty_tpl->tpl_vars['seats'] = new Smarty_variable($_smarty_tpl->tpl_vars['seat_item']->value->seats, null, 0);?>
      <?php $_smarty_tpl->tpl_vars['disc'] = new Smarty_variable($_smarty_tpl->tpl_vars['seat_item']->value->discount(), null, 0);?>
      <?php if ($_smarty_tpl->tpl_vars['disc']->value){?>
          <?php echo con("with_discount");?>
: <?php echo $_smarty_tpl->tpl_vars['disc']->value->discount_name;?>

      <?php }?>
      <div style='float:right'>
        <?php if ($_smarty_tpl->tpl_vars['disc']->value){?>
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['valuta'][0][0]->valuta(array('value'=>$_smarty_tpl->tpl_vars['disc']->value->apply_to($_smarty_tpl->tpl_vars['category_item']->value->cat_price)),$_smarty_tpl);?>

        <?php }else{ ?>
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['valuta'][0][0]->valuta(array('value'=>$_smarty_tpl->tpl_vars['category_item']->value->cat_price),$_smarty_tpl);?>

        <?php }?>
      </div>
      <div id='seatitem_<?php echo $_smarty_tpl->tpl_vars['seat_item']->value->id;?>
-tooltip' class='is-tooltip' style='display:none;'>
        <?php if ($_smarty_tpl->tpl_vars['category_item']->value->cat_numbering!='none'){?>
          <?php if ($_smarty_tpl->tpl_vars['category_item']->value->cat_numbering=='rows'){?>
            <b><?php echo con("row");?>
:</b><br>
          <?php }else{ ?>
            <b><?php echo con("seat");?>
:</b><br>
          <?php }?>

          <?php  $_smarty_tpl->tpl_vars['seat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['seats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['seat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['seat']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['seat']->key => $_smarty_tpl->tpl_vars['seat']->value){
$_smarty_tpl->tpl_vars['seat']->_loop = true;
 $_smarty_tpl->tpl_vars['seat']->iteration++;
 $_smarty_tpl->tpl_vars['seat']->last = $_smarty_tpl->tpl_vars['seat']->iteration === $_smarty_tpl->tpl_vars['seat']->total;
?>
              <?php if ($_smarty_tpl->tpl_vars['category_item']->value->cat_numbering=='both'){?>
                 <?php echo $_smarty_tpl->tpl_vars['seat']->value->seat_row_nr;?>
 - <?php echo $_smarty_tpl->tpl_vars['seat']->value->seat_nr;?>

              <?php }elseif($_smarty_tpl->tpl_vars['category_item']->value->cat_numbering=='rows'){?>
                 <?php echo $_smarty_tpl->tpl_vars['seat']->value->seat_row_nr;?>

              <?php }elseif($_smarty_tpl->tpl_vars['category_item']->value->cat_numbering=='seat'){?>
                 <?php echo $_smarty_tpl->tpl_vars['seat']->value->seat_nr;?>

              <?php }?>
              <?php if (!$_smarty_tpl->tpl_vars['seat']->last){?>,&nbsp;<?php }?>

           <?php } ?>
         <?php }else{ ?>
           <?php echo con("category_numbering_none");?>

         <?php }?>
      </div>
    </span>
  </td>
  <td  valign='top' align='right' style='text-align:right'>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['valuta'][0][0]->valuta(array('value'=>$_smarty_tpl->tpl_vars['seat_item']->value->total_price()),$_smarty_tpl);?>

  </td>
  <?php if ($_smarty_tpl->tpl_vars['three_cols']->value!="on"){?>
    <td  valign='top'>
      <?php if ($_smarty_tpl->tpl_vars['seat_item']->value->is_expired()){?>
        <span style="color:#ff0000;"><?php echo con("expired");?>
</span> <br>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['check_out']->value!="on"){?>
        <a href='index.php?action=remove&event_id=<?php echo $_smarty_tpl->tpl_vars['event_item']->value->event_id;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['category_item']->value->cat_id;?>
&item=<?php echo $_smarty_tpl->tpl_vars['seat_item']->value->id;?>
'>
          <?php echo con("remove");?>

        </a>
      <?php }?>
    </td>
  <?php }?>
</tr><?php }} ?>