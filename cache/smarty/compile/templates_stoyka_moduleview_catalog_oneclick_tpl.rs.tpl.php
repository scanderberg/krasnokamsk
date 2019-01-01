<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 22:48:03
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/oneclick.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206255948357893df348d6e1-55973921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4422a65d4d6cc10c53792b02a4aabf45de7e7b4d' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/catalog/oneclick.tpl',
      1 => 1458682266,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '206255948357893df348d6e1-55973921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this_controller' => 0,
    'success' => 0,
    'product' => 0,
    'router' => 0,
    'error_fields' => 0,
    'error_field' => 0,
    'error' => 0,
    'offers_levels' => 0,
    'level' => 0,
    'ltitle' => 0,
    'value' => 0,
    'concat' => 0,
    'offer_fields' => 0,
    'key' => 0,
    'offer' => 0,
    'catalog_config' => 0,
    'offers' => 0,
    'offer_val' => 0,
    'request' => 0,
    'click' => 0,
    'oneclick_userfields' => 0,
    'fld' => 0,
    'is_auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57893df37023b1_65892041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57893df37023b1_65892041')) {function content_57893df37023b1_65892041($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['catalog_config'] = new Smarty_variable($_smarty_tpl->tpl_vars['this_controller']->value->getModuleConfig(), null, 0);?> 
<div class="oneClickWrapper">
    <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
        <div class="reserveForm">
            <h2 class="dialogTitle" data-dialog-options='{ "width": "400" }'>Заказ принят</h2>
            <p class="prodtitle"><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
 Артикул:<?php echo $_smarty_tpl->tpl_vars['product']->value['barcode'];?>
</p>
            <p class="infotext">
                В ближайшее время с Вами свяжется наш менеджер.
            </p>
        </div>
    <?php } else { ?>
        <form enctype="multipart/form-data" class="reserveForm" action="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('catalog-front-oneclick',array("product_id"=>$_smarty_tpl->tpl_vars['product']->value['id']));?>
" method="POST"> 
           <?php echo $_smarty_tpl->tpl_vars['this_controller']->value->myBlockIdInput();?>
 
           <input type="hidden" name="product_name" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
"/>
           <h2 class="dialogTitle" data-dialog-options='{ "width": "400" }'>Купить в один клик</h2>
           <p class="infotext">
                Оставьте Ваши данные и наш консультант с вами свяжется.
           </p>  
           <?php if ($_smarty_tpl->tpl_vars['error_fields']->value) {?>
               <div class="pageError"> 
               <?php  $_smarty_tpl->tpl_vars['error_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error_field']->key => $_smarty_tpl->tpl_vars['error_field']->value) {
$_smarty_tpl->tpl_vars['error_field']->_loop = true;
?>
                   <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error_field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                        <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                   <?php } ?>
               <?php } ?>
               </div>
           <?php }?>
           
          <table class="formTable tabFrame">
                <?php if ($_smarty_tpl->tpl_vars['product']->value->isMultiOffersUse()) {?>
                    <tr>
                        <td class="key"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['offer_caption'])===null||$tmp==='' ? 'Комплектация' : $tmp);?>
</td>
                        <td class="value">
                        </td>
                    </tr>
                    <?php $_smarty_tpl->tpl_vars['offers_levels'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['multioffers']['levels'], null, 0);?> 
                    <?php  $_smarty_tpl->tpl_vars['level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['offers_levels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level']->key => $_smarty_tpl->tpl_vars['level']->value) {
$_smarty_tpl->tpl_vars['level']->_loop = true;
?>
                        <tr>
                            <td class="key"><?php if ($_smarty_tpl->tpl_vars['level']->value['title']) {?><?php echo $_smarty_tpl->tpl_vars['level']->value['title'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['level']->value['prop_title'];?>
<?php }?></td>
                            <td class="value">
                                <select name="multioffers[<?php echo $_smarty_tpl->tpl_vars['level']->value['prop_id'];?>
]" data-prop-title="<?php if ($_smarty_tpl->tpl_vars['level']->value['title']) {?><?php echo $_smarty_tpl->tpl_vars['level']->value['title'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['level']->value['prop_title'];?>
<?php }?>">
                                   <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>       
                                       <?php if ($_smarty_tpl->tpl_vars['level']->value['title']) {?>
                                            <?php $_smarty_tpl->tpl_vars['ltitle'] = new Smarty_variable($_smarty_tpl->tpl_vars['level']->value['title'], null, 0);?>
                                       <?php } else { ?>
                                            <?php $_smarty_tpl->tpl_vars['ltitle'] = new Smarty_variable($_smarty_tpl->tpl_vars['level']->value['prop_title'], null, 0);?>
                                       <?php }?> 
                                       <?php $_smarty_tpl->tpl_vars['concat'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['ltitle']->value).": ".((string)$_smarty_tpl->tpl_vars['value']->value['val_str']), null, 0);?>
                                       <option <?php if (in_array($_smarty_tpl->tpl_vars['concat']->value,$_smarty_tpl->tpl_vars['offer_fields']->value['multioffer'])) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['ltitle']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['val_str'];?>
</option> 
                                   <?php } ?>
                                </select>
                            </td>
                        </tr>
                    <?php } ?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['product']->value->isOffersUse()) {?>
                       <?php  $_smarty_tpl->tpl_vars['offer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['offer']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['offers']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['offer']->key => $_smarty_tpl->tpl_vars['offer']->value) {
$_smarty_tpl->tpl_vars['offer']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['offer']->key;
?>
                          <input value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="hidden" class="hidden_offers" data-info='<?php echo $_smarty_tpl->tpl_vars['offer']->value->getPropertiesJson();?>
' data-num="<?php echo $_smarty_tpl->tpl_vars['offer']->value['num'];?>
" <?php if ($_smarty_tpl->tpl_vars['catalog_config']->value['dont_buy_when_null']&&$_smarty_tpl->tpl_vars['offer']->value['num']<=0) {?>disabled<?php }?>/>
                       <?php } ?>
                    <?php }?>
               <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->isOffersUse()) {?>
                    <?php $_smarty_tpl->tpl_vars['offers'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['offers']['items'], null, 0);?>
                    <tr>
                        <td class="key"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['offer_caption'])===null||$tmp==='' ? 'Комплектация' : $tmp);?>
</td>
                        <td class="value">
                            <select name="offer">
                               <?php  $_smarty_tpl->tpl_vars['offer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['offer']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['offers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['offer']->key => $_smarty_tpl->tpl_vars['offer']->value) {
$_smarty_tpl->tpl_vars['offer']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['offer']->key;
?>
                                   <option value="<?php echo $_smarty_tpl->tpl_vars['offer']->value['title'];?>
" <?php if ($_smarty_tpl->tpl_vars['catalog_config']->value['dont_buy_when_null']&&$_smarty_tpl->tpl_vars['offer']->value['num']<=0) {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['offer_fields']->value['offer']==$_smarty_tpl->tpl_vars['offer']->value['title']||$_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['offer_val']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['offer']->value['title'];?>
</option> 
                               <?php } ?>
                            </select>
                        </td>
                    </tr>
               <?php }?>           
          </table>      
               
           <table class="formTable tabFrame">
               <tbody>
                   <tr class="clickRow">
                        
                       <td class="key">
                          Ваше имя
                       </td>                                     
                       <td class="value">
                          <input type="text" class="inp <?php if ($_smarty_tpl->tpl_vars['error_fields']->value) {?>has-error<?php }?>" value="<?php if ($_smarty_tpl->tpl_vars['request']->value->request('name','string')) {?><?php echo $_smarty_tpl->tpl_vars['request']->value->request('name','string');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['click']->value['name'];?>
<?php }?>" maxlength="100" name="name">
                       </td>    
                   </tr>
                   <tr class="clickRow">
                        
                       <td class="key">
                          Ваш телефон
                       </td> 
                       <td class="value">
                          <input type="text" class="inp <?php if ($_smarty_tpl->tpl_vars['error_fields']->value) {?>has-error<?php }?>" value="<?php if ($_smarty_tpl->tpl_vars['request']->value->request('phone','string')) {?><?php echo $_smarty_tpl->tpl_vars['request']->value->request('phone','string');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['click']->value['phone'];?>
<?php }?>" maxlength="20" name="phone">
                       </td>      
                   </tr>
                   
                   <?php  $_smarty_tpl->tpl_vars['fld'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fld']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oneclick_userfields']->value->getStructure(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fld']->key => $_smarty_tpl->tpl_vars['fld']->value) {
$_smarty_tpl->tpl_vars['fld']->_loop = true;
?>
                    <tr>
                        <td class="key"><?php echo $_smarty_tpl->tpl_vars['fld']->value['title'];?>
</td>
                        <td class="value">
                            <?php echo $_smarty_tpl->tpl_vars['oneclick_userfields']->value->getForm($_smarty_tpl->tpl_vars['fld']->value['alias']);?>
                   
                        </td>
                    </tr>
                    <?php } ?>
                   
                   <?php if (!$_smarty_tpl->tpl_vars['is_auth']->value&&\RS\Module\Manager::staticModuleEnabled('kaptcha')) {?>
                    <tr>
                        <td class="key">Введите код, указанный на картинке</td>
                        <td class="value">
                            <img height="42" width="100" src="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('kaptcha',array('rand'=>rand(1,9999999)));?>
" alt=""/>
                            <input type="text" name="kaptcha" class="kaptcha">
                        </td>
                    </tr>
                   <?php }?>
                   
               </tbody>
           </table>
           
           <div class="centerWrap">
              <input type="submit" value="Отправить" class="formSave">
              <span class="unobtainable">Нет в наличии</span>
           </div>
        </form>
    <?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['catalog_config']->value['dont_buy_when_null']&&$_smarty_tpl->tpl_vars['product']->value->isMultiOffersUse()) {?>

    <script type="text/javascript">
        $(function() {
            var click_context = $(".oneClickWrapper");
            
            $('[name^="multioffers["]', click_context).on('change', function(){
                 var _this = this, selected = [], offer  = false;
                 
                 $('[name^="multioffers["]', click_context).each(function(i){
                     selected.push([$(this).data('propTitle'), $('option:selected', this).text()]);
                 });
                 
                 //Найдём нашу выбранную комплектацию
                 $(".hidden_offers", click_context).each(function(i) {
                     var _offer_this = this, info = $(this).data('info'), found = 0;
                        
                     for(var m=0; m < info.length; m++) {
                        for(var j=0; j < selected.length; j++) {
                           if ( (selected[j][0] == info[m][0]) && (selected[j][1] == info[m][1]) ) {
                              found++;
                           }        
                           if (found == selected.length){ //Если удалось найди совпадение, то выходим
                                offer = $(_offer_this);
                                break;
                           }
                        }
                     }
                 });
                 
                 //Если мы нашли комплектацию, и товара нет в наличии
                 var verdict = offer && offer.prop('disabled');
                 $("[type='submit']", click_context).toggle(!verdict).prop('disabled', verdict); 
                 click_context.toggleClass('disabled', verdict);
            });
        });
    </script>
<?php }?><?php }} ?>
