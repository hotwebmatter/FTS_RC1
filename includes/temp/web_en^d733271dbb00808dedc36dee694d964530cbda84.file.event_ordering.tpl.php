<?php /* Smarty version Smarty-3.1-DEV, created on 2016-11-16 14:10:07
         compiled from "/home/ubuntu/workspace/includes/template/web/event_ordering.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85545559582caf0f038536-81199406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd733271dbb00808dedc36dee694d964530cbda84' => 
    array (
      0 => '/home/ubuntu/workspace/includes/template/web/event_ordering.tpl',
      1 => 1478706703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85545559582caf0f038536-81199406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'shop_event' => 0,
    'category_id' => 0,
    'shop_category' => 0,
    'shop_discounts' => 0,
    'seatlimit' => 0,
    'haspromos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_582caf0f492a00_97978927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582caf0f492a00_97978927')) {function content_582caf0f492a00_97978927($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/ubuntu/workspace/includes/libs/smarty3/plugins/modifier.date_format.php';
if (!is_callable('smarty_block_event')) include '/home/ubuntu/workspace/includes/shop_plugins/block.event.php';
if (!is_callable('smarty_block_category')) include '/home/ubuntu/workspace/includes/shop_plugins/block.category.php';
if (!is_callable('smarty_block_discount')) include '/home/ubuntu/workspace/includes/shop_plugins/block.discount.php';
?><!-- $Id$ -->
<?php if ($_smarty_tpl->tpl_vars['user']->value->mode()=='-1'&&!$_smarty_tpl->tpl_vars['user']->value->logged&&$_smarty_tpl->tpl_vars['shop_event']->value['event_date']<smarty_modifier_date_format(time(),"%Y-%m-%d")){?>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['redirect'][0][0]->_ReDirect(array('url'=>"?event_id=".((string)$_REQUEST['event_id'])),$_smarty_tpl);?>

<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('event', array('event_id'=>$_REQUEST['event_id'],'ort'=>'on','place_map'=>'on','event_status'=>'pub','limit'=>1)); $_block_repeat=true; echo smarty_block_event(array('event_id'=>$_REQUEST['event_id'],'ort'=>'on','place_map'=>'on','event_status'=>'pub','limit'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>con("shop"),'header'=>con("shop_info"),'footer'=>con("shop_condition")), 0);?>

  <style type="text/css">
    .seatmapimage {
       width: 16px;
       height:16px;
    }
  </style>

  <?php echo $_smarty_tpl->getSubTemplate ("event_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <div class="art-content-layout-br layout-item-0"></div>
    <?php echo $_smarty_tpl->smarty->registered_objects['cart'][0]->maxSeatsAlowed(array('event'=>$_smarty_tpl->tpl_vars['shop_event']->value),$_smarty_tpl);?>

    <form name='f' id='catselect' action='index.php' method='post'>
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['ShowFormToken'][0][0]->showFormToken(array('name'=>'orderevent'),$_smarty_tpl);?>

      <input type='hidden' name='event_id' value='<?php echo $_smarty_tpl->tpl_vars['shop_event']->value['event_id'];?>
'>
      <input type='hidden' name='action' value='addtocart'>
    <table width="100%" cellpadding='2' cellspacing='2' >
      <tbody>
        <tr>
          <td class='user_item' width="110"><?php echo con("select_category");?>
:</td>
          <td class='user_value'><?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('category', array('event_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'stats'=>"on")); $_block_repeat=true; echo smarty_block_category(array('event_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'stats'=>"on"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

              <?php if (!$_smarty_tpl->tpl_vars['category_id']->value){?> <?php $_smarty_tpl->tpl_vars['category_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['shop_category']->value['category_id'], null, 0);?> <?php }?>
              <label for="category_id_<?php echo $_smarty_tpl->tpl_vars['shop_category']->value['category_id'];?>
">
                <span id="catcolor" style="background-color:<?php echo $_smarty_tpl->tpl_vars['shop_category']->value['category_color'];?>
;padding:0px; margin-right:5px;">
                 <input type="radio" style='margin:0px 0px 0px  2px;' id="category_id_<?php echo $_smarty_tpl->tpl_vars['shop_category']->value['category_id'];?>
" name="category_id" value="<?php echo $_smarty_tpl->tpl_vars['shop_category']->value['category_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['category_id']->value==$_smarty_tpl->tpl_vars['shop_category']->value['category_id']){?>checked<?php }?> onClick="setNum(<?php echo $_smarty_tpl->tpl_vars['shop_category']->value['category_id'];?>
,true)" <?php if ($_smarty_tpl->tpl_vars['shop_category']->value['category_free']==0){?>disabled="true"<?php }?>>
               </span>
                <?php echo $_smarty_tpl->tpl_vars['shop_category']->value['category_name'];?>
</label> &nbsp;
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_category(array('event_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'stats'=>"on"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            (<?php echo con("free_seat");?>
: <span id="ft-cat-free-seats" ><?php echo $_smarty_tpl->tpl_vars['shop_category']->value['category_free'];?>
</span> (<?php echo con("approx");?>
))
          </td>
        </tr>
        <tr id='discount-name'>
          <td class='user_item' ><?php echo con("select_discounts");?>
:</td>
          <td class='user_value'>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('discount', array('all'=>'on','event_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'cat_price'=>$_smarty_tpl->tpl_vars['shop_category']->value['category_price'])); $_block_repeat=true; echo smarty_block_discount(array('all'=>'on','event_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'cat_price'=>$_smarty_tpl->tpl_vars['shop_category']->value['category_price']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_discount(array('all'=>'on','event_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'cat_price'=>$_smarty_tpl->tpl_vars['shop_category']->value['category_price']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php $_smarty_tpl->tpl_vars['haspromos'] = new Smarty_variable(false, null, 0);?>
            <label><input class='checkbox_dark mydiscount discount_none' type='radio' name='discount' data-name='<?php echo con("no_discount");?>
' data-price='<?php echo $_smarty_tpl->tpl_vars['shop_category']->value['category_price'];?>
' data-pricetxt='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['valuta'][0][0]->valuta(array('value'=>$_smarty_tpl->tpl_vars['shop_category']->value['category_price']),$_smarty_tpl);?>
' value='0' checked><?php echo con("no_discount");?>
</label>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['shop_discounts']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total']);
?>
              <label id='discount_<?php echo $_smarty_tpl->tpl_vars['shop_discounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['discount_id'];?>
' class='discount has-tooltip' title='<?php echo $_smarty_tpl->tpl_vars['shop_discounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['discount_cond'];?>
'>
                <input class='checkbox_dark mydiscount discount_<?php echo $_smarty_tpl->tpl_vars['shop_discounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['discount_id'];?>
' type='radio' name='discount' value='<?php echo $_smarty_tpl->tpl_vars['shop_discounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['discount_id'];?>
'>
                <?php echo $_smarty_tpl->tpl_vars['shop_discounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['discount_name'];?>
&nbsp;
              </label>
              <?php if ($_smarty_tpl->tpl_vars['shop_discounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['discount_promo']){?><?php $_smarty_tpl->tpl_vars['haspromos'] = new Smarty_variable(true, null, 0);?><?php }?>
            <?php endfor; else: ?>
              <script>
                $('#discount-name').hide();
              </script>
            <?php endif; ?>
          </td>
        </tr>
      </tbody>
    </table>


<div id="top5tabs" style='margin:0px; padding:0px;'>
  <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['pm_image']){?>
  	<ul>
  		<li><a href="#tabs-1"><?php echo con("event_select_cat");?>
</a></li>
		<li><a href="#tabs-2"><?php echo con("event_select_seats");?>
</a></li>
	</ul>
  	<div id="tabs-1">
      <img class="chartmap" src="files/<?php echo $_smarty_tpl->tpl_vars['shop_event']->value['pm_image'];?>
"  border='1' width='581' usemap="#ort_map">
      <map name="ort_map">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('category', array('event_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'stats'=>"on")); $_block_repeat=true; echo smarty_block_category(array('event_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'stats'=>"on"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

          <?php if ($_smarty_tpl->tpl_vars['shop_category']->value['category_free']>0&&$_smarty_tpl->tpl_vars['shop_category']->value['category_data']){?>
            <area href="#" cat="<?php echo $_smarty_tpl->tpl_vars['shop_category']->value['category_id'];?>
" <?php echo $_smarty_tpl->tpl_vars['shop_category']->value['category_data'];?>
 />
          <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_category(array('event_id'=>$_smarty_tpl->tpl_vars['shop_event']->value['event_id'],'stats'=>"on"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

      </map>
  	</div>
  	<?php }else{ ?>
  	<br/>
  <?php }?>
	<div id="tabs-2">
         <span id='order_amound' style='display:none;'>
         <center>
            <table border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td class='event_data'>
                  <?php echo con("number_seats");?>

                </td>
                <td class='title'>
                  <select style="float:none;"  id='seat_places' name='places' >
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['name'] = "myLoop";
$_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['seatlimit']->value+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["myLoop"]['total']);
?>
                      <option value='<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['myLoop']['index'];?>
' > <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['myLoop']['index'];?>
 </option>
                    <?php endfor; endif; ?>
                  </select>
                  <input type='hidden' name='numbering' value='none' />
                </td>
              </tr>
            </table>
          </center>
          </span>
          <span id='order_placemap' style='display:none;'>
          <div style='overflow: auto; height: 350px;  border: 1px solid #DDDDDD;background-color: #fcfcfc'
               id='placemap' align='center' valign='middle'>
          </div> <!-- width:595px; --->
          <center><div valign='top'> <?php echo con("placemap_image_explanation");?>
</div></center>
          </span>

	</div>
</div>

  <div class="art-content-layout-br layout-item-0"></div>
  <div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row" style='padding:10px;'>
      <div class="art-layout-cell layout-item-3"  style='width: 100%;padding:10px;'>
      <?php echo con("event_ordering_tickets_info");?>

      <div style='float:right;padding:0px;margin:0px;'>
      <?php if ($_smarty_tpl->tpl_vars['haspromos']->value){?>
        <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->button(array('url'=>"button",'onclick'=>"enterPromo();",'name'=>"has_eventpromo",'type'=>1),$_smarty_tpl);?>

      <?php }?>
      <?php echo $_smarty_tpl->smarty->registered_objects['gui'][0]->button(array('url'=>"button",'onclick'=>"validateSelection();",'name'=>"add_to_cart",'type'=>1),$_smarty_tpl);?>

      </div>
   	  </div>
    </div>
  </div><br/>
</form>
<script type="text/javascript">
	var mode = 'both';
	var category = -1;
	function setNum(cat_id, doSwitch) {
      //$('#tabs-2').
	  $('.pm_check').unbind('click');
	  $('#seat_places').attr('disabled', true);
 //   $('#add_to_cart').button( "option", "disabled", true );
      ajaxQManager.add({
         type:       "POST",
         url:        "json.php?x=placemap",
         dataType:   "json",
         data:      { "action":"PlaceMap", "category_id":cat_id, "seatlimit":<?php echo $_smarty_tpl->tpl_vars['seatlimit']->value;?>
 },
         success:function(data, status){
           category = cat_id;
            if(data.status){
              $("#ft-cat-free-seats").text(data.cat.category_free);
              $("#ordering_category").text(data.cat.category_name);
              $(".discount_none").data('price',data.cat.category_price);
              $("#ordering_seats").text('0');
              $("#placemap").html(data.placemap);
          		if (data.placemap != '') {
          			$("#order_amound").hide();
          			$("#order_placemap").show();
          			mode = 'both';
                setTimeout( function(){ var c = $('#tabs-2').width(); $('#placemap').width(c); }, 300 );
          	    $("#places").val(0);
          		} else {
          			$("#order_amound").show();
          			$("#order_placemap").hide();
	              $('#seat_places').html('');
	              var max = Math.min(<?php echo $_smarty_tpl->tpl_vars['seatlimit']->value;?>
,data.cat.category_free);
	              for (var z=1;z<max+1;z++) {
	                 $("#seat_places").append('<option value='+z+'>'+z+'</option>');
	              }
	              mode = 'none';
	          		$('#seat_places').removeAttr('disabled');
	          	  $("#ordering_seats").text('1');
	           	}
              updateDiscounts(data.discounts);
       // 		  $('#add_to_cart').button( "option", "disabled", false );
              <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['pm_image']){?>
             		if (doSwitch) {
                    $("#top5tabs").tabs("option",  "active" , 1);
                }
      				<?php }?>

            }
         }
      });

	}
  /**
   *
   * @access public
   * @return void
   **/
  Number.prototype.formatMoney = function(c, d, t){
var n = this,
    c = isNaN(c = Math.abs(c)) ? 2 : c,
    d = d == undefined ? "." : d,
    t = t == undefined ? "," : t,
    s = n < 0 ? "-" : "",
    i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
    j = (j = i.length) > 3 ? j % 3 : 0;
   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d<?php echo 3;?>
)(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
 };


  function updateDiscounts(discounts){
  	$('.discount').hide();
  	$.each(discounts,function(index, value){
  	  var disc = $('.discount_'+index);
  	  disc.data('price',value.discount_price);
  	  disc.data('pricetxt',value.discount_pricetxt);
  	  disc.data('name',value.discount_name);
    	$('#discount_'+index).show();
  	});
  	if ( $('input[name=discount]:checked').is(':hidden')) {
    	$(".discount_none").prop('checked', true);
  	}
  	setsetprice();
  }

  /**
   *
   * @access public
   * @return void
   **/
  setsetprice = function (){
  	var disc = $('input[name=discount]:checked');
  	var price = 0.0 + parseFloat(disc.data('price'));
  	$("#ordering_discount").text(disc.data('name'));
  	$("#ordering_price").html(price.toFixed(2));

    var amount = $("#ordering_seats").text();
  	$("#ordering_total").text((amount * price).formatMoney(2));
  }

   $('.mydiscount').live('click', setsetprice);
   $('.pm_check').live('click',setsetprice);
   $('#seat_places').live('change',function() {
     $("#ordering_seats").text($(this).val());
     setsetprice();
   });

  /**
   *
   * @access public
   * @return void
   **/
  function enterPromo(){
  	var promo;
  	promo = prompt('<?php echo con("enter_eventpromocode");?>
','');
  	ajaxQManager.add({
         type:       "POST",
         url:        "json.php?x=checkEventPromo",
         dataType:   "json",
         data:      { "action":"checkEventPromo", "event_id":<?php echo $_smarty_tpl->tpl_vars['shop_event']->value['event_id'];?>
,'category_id': category ,'promo': promo},
         success:function(data, status){
            printMessages(data.messages);
            if(data.status){
               updateDiscounts(data.discounts);
               $(".discount_"+data.discount_id).prop('checked', true);
            } else {
              showErrorMsg(data.reason);
            }
         }
    });


  }
	function validateSelection() {
	  if ($('#add_to_cart').attr('disabled')) {
	  	return false;
	  }
	  if (mode == 'none') {
			bool= ($('#places').val() != 0 && $('input[name=category_id]:checked').val() != "");
			if (!bool) {
				showErrorMsg('Please select your category and the number of tickets');
				return false;
			}
		} else {
			bool= $('input[name=category_id]:checked').val();
			if (!bool) {
				showErrorMsg('Please select your category');
			}
		}
		$('#catselect').submit();
		return true;
	}

  function state_change(data) {
		 $('.chartmap').mapster('rebind',{
		    noHrefIsMask: false,
	    	onClick: state_change,
     		fillColor: 'afafaf',
    		fillOpacity: 0.3,
    		strokeWidth: 2,
    		stroke:true,
    		strokeColor: 'F88017',
         singleSelect:true,

      });
      var url = $(this).attr('cat');
      $("#category_id_"+url).attr('checked', true);
      setNum(url, true);
	}

    $('.chartmap').mapster({
		    noHrefIsMask: false,
	    	onClick: state_change,
      		fillColor: 'afafaf',
    		fillOpacity: 0.3,
    		strokeWidth: 2,
    		stroke:true,
    		strokeColor: 'F88017',
      singleSelect:true,

    });
    <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['pm_image']){?>
     	$("#top5tabs").tabs( { activate: function( event, ui ) { var c = $('#tabs-2').width(); $('#placemap').width(c); } });
	<?php }?>
  	$('.catselect').on('submit', function() {
  	  $('.pm_check').unbind('click');
  	  $('#seat_places').attr('disabled', true);
      $('#add_to_cart').attr('disabled', true);
        ajaxQManager.add({
           type:       "POST",
           url:        "jsonrpc.php?x=add",
           dataType:   "json",
           data:      { "action":"AddToCart", "event_id": <?php echo $_REQUEST['event_id'];?>
, "category_id":cat_id,  "category_id":cat_id, "seatlimit":<?php echo $_smarty_tpl->tpl_vars['seatlimit']->value;?>
 },
           success:function(data, status){
            //  printMessages(data.messages);
              if(data.status){
                  $("#ft-cat-free-seats").text(data.cat.category_free);
                  $("#placemap").html(data.placemap);
            		if (data.placemap != '') {
            			$("#order_amound").hide();
            			$("#order_placemap").show();
            			mode = 'both';
           //       setTimeout( function(){ var c = $('#tabs-2').width(); $('#placemap').width(c); }, 200 );
            		} else {
            			$("#order_amound").show();
            			$("#order_placemap").hide();
  	                $('#seat_places').html('');
  	                var max = Math.min(<?php echo $_smarty_tpl->tpl_vars['seatlimit']->value;?>
,data.cat.category_free);
  	                for (var z=1;z<max+1;z++) {
  	                   $("#seat_places").append('<option value='+z+'>'+z+'</option>');
  	                }
  	                mode = 'none';
  	      		    $('#seat_places').removeAttr('disabled');
            		}
                  $('#add_to_cart').removeAttr('disabled');
            		$("#places").val(0);
                  <?php if ($_smarty_tpl->tpl_vars['shop_event']->value['pm_image']){?>
                    if (doSwitch) {
                      $("#top5tabs").tabs("option",  "active" , 1);
                    }
        	        <?php }?>
              }
           }
        });
  	  });
     setNum(<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
, false);

</script>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_event(array('event_id'=>$_REQUEST['event_id'],'ort'=>'on','place_map'=>'on','event_status'=>'pub','limit'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>