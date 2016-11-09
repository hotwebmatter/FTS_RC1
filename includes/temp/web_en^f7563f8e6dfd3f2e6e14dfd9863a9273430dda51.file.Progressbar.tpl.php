<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-09 13:30:57
         compiled from "/home/ubuntu/workspace/includes/template/web/Progressbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86014986658236b611f90b1-96936007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7563f8e6dfd3f2e6e14dfd9863a9273430dda51' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/Progressbar.tpl',
      1 => 1478706703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86014986658236b611f90b1-96936007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'shop_event' => 0,
    '_SHOP_themeimages' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58236b614cbc05_83897409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58236b614cbc05_83897409')) {function content_58236b614cbc05_83897409($_smarty_tpl) {?><!-- $Id$ -->
<style type="text/css">
.pagination{
  background-color: #99d9ea;
  TEXT-ALIGN: center;
  width:100%;
}
.pagination td{
  padding:0;
}


.done{
  background-color: #42729a;
  color: #FFFFFF;
  TEXT-ALIGN: center;
  border-left: 2px solid #5EA3DB;
}
.current{
  background-repeat: no-repeat;
  background-color: #BdC9D5;
   font-weight: bold;
   color: #000000;
}
.next{
  TEXT-ALIGN: center;
  border-right: 2px solid #9FE1F2;
}

</style>

<?php if ($_smarty_tpl->tpl_vars['name']->value==con("shop")||$_smarty_tpl->tpl_vars['name']->value==con("select_seat")||$_smarty_tpl->tpl_vars['name']->value==con("discounts")||$_smarty_tpl->tpl_vars['name']->value==con("shopping_cart")||$_smarty_tpl->tpl_vars['name']->value==con("pers_info")||$_smarty_tpl->tpl_vars['name']->value==con("shopping_cart_check_out")||$_smarty_tpl->tpl_vars['name']->value==con("order_reg")||$_smarty_tpl->tpl_vars['name']->value==con("pay_accept")||$_smarty_tpl->tpl_vars['name']->value==con("pay_refused")){?>
  <table cellspacing=0 cellpadding=0 class="full pagination">
    <tr>
      <?php if ($_smarty_tpl->tpl_vars['name']->value==con("shop")&&$_smarty_tpl->tpl_vars['shop_event']->value['event_pm_id']){?>
        <td class='current'> <?php echo con("prg_order");?>
 </td>
        <td width='25'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
trans_12_11_r.png' height='20'></td>
        <td class='next'><?php echo con("prg_review");?>
</td>
        <?php if (!$_smarty_tpl->tpl_vars['user']->value->logged){?>
          <td class='next'>
            <?php echo con("prg_signin");?>

          </td>
        <?php }?>
        <td class='next'><?php echo con("prg_payment");?>
</td>
        <td class="next"><?php echo con("prg_complete");?>
</td>
      <?php }elseif($_smarty_tpl->tpl_vars['name']->value==con("select_seat")){?>
        <td class='done'><?php echo con("prg_order");?>
 </td>
        <td width='11'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
trans_12_11_b.png' width='11' height='20'></td>
        <td class='current'><?php echo con("prg_seat");?>
 </td>
        <td width='25'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
trans_12_11_r.png' height='20'></td>
        <td class='next'><?php echo con("prg_review");?>
</td>
        <?php if (!$_smarty_tpl->tpl_vars['user']->value->logged){?>
          <td class='next'>
            <?php echo con("prg_signin");?>

          </td>
        <?php }?>
        <td class='next'><?php echo con("prg_payment");?>
</td>
        <td class="next"><?php echo con("prg_complete");?>
</td>
      <?php }elseif($_smarty_tpl->tpl_vars['name']->value==con("discounts")){?>
        <td class='done'><?php echo con("prg_order");?>
 </td>
        <td width='11'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
trans_12_11_b.png' width='11' height='20'></td>
        <td class='current'><?php echo con("prg_discounts");?>
</td>
        <td width='25'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
trans_12_11_r.png' height='20'></td>
        <td class='next'><?php echo con("prg_review");?>
</td>
        <?php if (!$_smarty_tpl->tpl_vars['user']->value->logged){?>
          <td class='next'>
            <?php echo con("prg_signin");?>

          </td>
        <?php }?>
        <td class='next'><?php echo con("prg_payment");?>
</td>
        <td class="next"><?php echo con("prg_complete");?>
</td>
      <?php }elseif($_smarty_tpl->tpl_vars['name']->value==con("shopping_cart")){?>
        <td class='done'><?php echo con("prg_order");?>
 </td>
        <td width='11'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
trans_12_11_b.png' width='11' height='20'></td>
        <td class='current'><?php echo con("prg_review");?>
 </td>
        <td width='25'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
trans_12_11_r.png' height='20'></td>
        <?php if (!$_smarty_tpl->tpl_vars['user']->value->logged){?>
          <td class='next'>
            <?php echo con("prg_signin");?>

          </td>
        <?php }?>
        <td class='next'><?php echo con("prg_payment");?>
</td>
        <td class="next"><?php echo con("prg_complete");?>
</td>
      <?php }elseif($_smarty_tpl->tpl_vars['name']->value==con("pers_info")){?>
        <td class='done'><?php echo con("prg_order");?>
 </td>
        <td class='done'><?php echo con("prg_review");?>
 </td>
        <td width='11'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
trans_12_11_b.png' width='11' height='20'></td>
        <td class='current'><?php echo con("prg_signin");?>
 </td>
        <td width='25'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
trans_12_11_r.png' height='20'></td>
        <td class='next'><?php echo con("prg_payment");?>
</td>
        <td class="next"><?php echo con("prg_complete");?>
</td>
      <?php }elseif($_smarty_tpl->tpl_vars['name']->value==con("shopping_cart_check_out")){?>
        <td class='done'><?php echo con("prg_order");?>
 </td>
        <td class='done'><?php echo con("prg_review");?>
 </td>
        <td class='done'><?php echo con("prg_signin");?>
</td>
        <td width='11'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
trans_12_11_b.png' width='11' height='20'></td>
        <td class='current'><?php echo con("prg_payment");?>
 </td>
        <td width='25'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
trans_12_11_r.png' height='20'></td>
        <td class="next"><?php echo con("prg_complete");?>
</td>
      <?php }elseif($_smarty_tpl->tpl_vars['name']->value==con("order_reg")){?>
        <td class='done'><?php echo con("prg_order");?>
 </td>
        <td class='done'><?php echo con("prg_review");?>
 </td>
        <td class='done'><?php echo con("prg_signin");?>
</td>
        <td class='done'><?php echo con("prg_payment");?>
 </td>
        <td width='11'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
trans_12_11_b.png' width='11' height='20'></td>
        <td class="current"><?php echo con("prg_complete");?>
</td>
        <td width='25' ><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
trans_12_11_r.png' height='20'></td>
      <?php }elseif($_smarty_tpl->tpl_vars['name']->value==con("pay_accept")||$_smarty_tpl->tpl_vars['name']->value==con("pay_refused")){?>
        <td class='done'><?php echo con("prg_order");?>
 </td>
        <td class='done'><?php echo con("prg_review");?>
 </td>
        <td class='done'><?php echo con("prg_signin");?>
</td>
        <td class='done'><?php echo con("prg_payment");?>
 </td>
        <td width='11'><img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
trans_12_11_b.png' height='20'></td>
        <td class="current"><?php echo con("prg_complete");?>
</td>
      <?php }?>
    </tr>
  </table>
<?php }?><?php }} ?>