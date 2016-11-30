<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-23 12:06:48
         compiled from "/home/ubuntu/workspace/includes/template/web/custom/cart_view_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6133409655835ca93040817-46787229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45a30cddf3f488ae4d6a7e89bbf16b664e378387' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/custom/cart_view_block.tpl',
      1 => 1479920805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6133409655835ca93040817-46787229',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5835ca9322fbb0_13184030',
  'variables' => 
  array (
    'cart' => 0,
    '_SHOP_themeimages' => 0,
    'cart_overview' => 0,
    'seat_item' => 0,
    'lastevent' => 0,
    'event_item' => 0,
    'category_item' => 0,
    '_SHOP_root_secured' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5835ca9322fbb0_13184030')) {function content_5835ca9322fbb0_13184030($_smarty_tpl) {?><!-- $Id$ -->
<div class="art-box art-block">
  <div class="art-box-body art-block-body">
    <div class="art-bar art-blockheader">
      <h3 class="t">
        <?php echo con("shopcart");?>
&nbsp;
        <?php if ($_smarty_tpl->tpl_vars['cart']->value->is_empty_f()){?>
          <!--<img src="<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
caddie.gif" alt="<?php echo con("cart_image_alt");?>
" /> -->
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        <?php }else{ ?>
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          <!--<img src="<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
caddie_full.png" alt="<?php echo con("cart_full_image_alt");?>
">-->
        <?php }?>
      </h3>
    </div>
    <div class="art-box art-blockcontent">
      <div class="art-box-body art-blockcontent-body">
        <?php if ($_smarty_tpl->tpl_vars['cart']->value->is_empty_f()){?>
          <div class='cart_content'><?php echo con("no_tick_res");?>
</div>
        <?php }else{ ?>
          <?php $_smarty_tpl->tpl_vars["cart_overview"] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->overview_f(), null, 0);?>
          <div style='text-align:center;'>
            <?php if ($_smarty_tpl->tpl_vars['cart_overview']->value['expired']){?>
              <!--<img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
ticket-expired.png' title="<?php echo con("expired_tickets");?>
" alt='expired' />  <?php echo $_smarty_tpl->tpl_vars['cart_overview']->value['expired'];?>
<br><br>-->
              <i class="fa fa-ticket" aria-hidden="true" title="<?php echo con("expired_tickets");?>
" alt='expired'></i><?php echo $_smarty_tpl->tpl_vars['cart_overview']->value['expired'];?>
<br><br>
            <?php }elseif($_smarty_tpl->tpl_vars['cart_overview']->value['valid']){?>
              <!--<img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
ticket-valid.png' title="<?php echo con("valid_tickets");?>
" alt='valid' /> <?php echo $_smarty_tpl->tpl_vars['cart_overview']->value['valid'];?>
&nbsp;&nbsp;-->
              <i class="fa fa-ticket" aria-hidden="true" title="<?php echo con("valid_tickets");?>
" alt='valid'></i><?php echo $_smarty_tpl->tpl_vars['cart_overview']->value['valid'];?>
&nbsp;&nbsp;
              <!--<img src='<?php echo $_smarty_tpl->tpl_vars['_SHOP_themeimages']->value;?>
clock.gif' alt='clock' />  <span id="countdown1"></span>-->
              <i class="fa fa-clock-o" aria-hidden="true" alt='clock'></i><span id="countdown1"></span>
              <script>
                $('#countdown1').countdown({
                   until: <?php echo $_smarty_tpl->tpl_vars['cart_overview']->value['secttl'];?>
,
                   compact: true,
                   format: 'MS',
                   description: 's',
                   onExpiry: function(){
                        var sURL = unescape(window.location.href);
                        alert('<?php echo con("cart_expired");?>
');
                        window.location.href = sURL;
                        //location.reload(true);
                        }
                });
              </script>
            <?php }?>
          </div>
          <table border=0 style='width:100%;'>
             <?php $_smarty_tpl->tpl_vars['lastevent'] = new Smarty_variable('', null, 0);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('cart->items', array('perevent'=>true)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_objects['cart'][0]->items(array('perevent'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

              <?php if (!$_smarty_tpl->tpl_vars['seat_item']->value->is_expired()){?>
                  <?php if ($_smarty_tpl->tpl_vars['lastevent']->value!=$_smarty_tpl->tpl_vars['event_item']->value->event_id){?>
                    <tr>
                      <td  colspan='2' style='font-size:10px;'>
                        <b><?php echo $_smarty_tpl->tpl_vars['event_item']->value->event_name;?>
</b>
                      </td>
                    </tr>
                    <?php $_smarty_tpl->tpl_vars['lastevent'] = new Smarty_variable($_smarty_tpl->tpl_vars['event_item']->value->event_id, null, 0);?>
                  <?php }?>
                  <tr>
                  <td class='cart_content' style='font-size:10px;'>
                    &nbsp;<?php echo $_smarty_tpl->tpl_vars['seat_item']->value->count();?>
&nbsp;x&nbsp;<?php echo $_smarty_tpl->tpl_vars['category_item']->value->cat_name;?>

                  </td>
                  <td width="35%" valign='top'  align='right' class='cart_content' style='font-size:10px;'>
                    <b><?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->valuta(array('value'=>$_smarty_tpl->tpl_vars['seat_item']->value->total_price()),$_smarty_tpl);?>
</b>
                  </td>
                </tr>
              <?php }?>
             <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_objects['cart'][0]->items(array('perevent'=>true), $_block_content, $_smarty_tpl, $_block_repeat);   } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <tr>
              <td align='center' class='cart_content' style='border-top:#cccccc 1px solid; padding-bottom:4px; font-size:10px;'>
                  <?php echo con("tot_tick_price");?>

                </td>
                <td  width="35%" valign='top' align='right' class='cart_content' style='border-top:#cccccc 1px solid; padding-bottom:4px; font-size:10px;'>
                   <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->valuta(array('value'=>$_smarty_tpl->tpl_vars['cart']->value->total_price_f()),$_smarty_tpl);?>

              </td>
            </tr>
          </table>
          <?php if ($_smarty_tpl->tpl_vars['cart_overview']->value['valid']){?>
             <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->button(array('url'=>'button','onclick'=>"window.location='".((string)$_smarty_tpl->tpl_vars['_SHOP_root_secured']->value)."checkout.php'",'name'=>'checkout','type'=>1,'style'=>"float:right;"),$_smarty_tpl);?>

          <?php }?>
             <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->button(array('url'=>'button','onclick'=>"window.location='index.php?action=view_cart'",'name'=>'view_order','type'=>1,'style'=>"float:right;"),$_smarty_tpl);?>

        <?php }?>
        <div class="cleared"></div>
      </div>
    </div>
    <div class="cleared"></div>
  </div>
</div>
<?php }} ?>