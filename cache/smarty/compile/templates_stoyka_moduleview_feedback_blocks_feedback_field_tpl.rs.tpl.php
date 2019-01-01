<?php /* Smarty version Smarty-3.1.18, created on 2016-07-15 15:52:33
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/feedback/blocks/feedback/field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19097611425788dc91161648-23031723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75db84104254cf00b7b3e7b5856b88c36a34e6c8' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/feedback/blocks/feedback/field.tpl',
      1 => 1458674883,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '19097611425788dc91161648-23031723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'field' => 0,
    'postValue' => 0,
    'valList' => 0,
    'val' => 0,
    'key' => 0,
    'k' => 0,
    'router' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5788dc912ea892_85548286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5788dc912ea892_85548286')) {function content_5788dc912ea892_85548286($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['request']->value) {?> 
  <?php $_smarty_tpl->tpl_vars['postValue'] = new Smarty_variable($_smarty_tpl->tpl_vars['request']->value->request($_smarty_tpl->tpl_vars['field']->value['alias'],'string'), null, 0);?> 
<?php }?>           

<?php if ($_smarty_tpl->tpl_vars['field']->value['show_type']=='string'||$_smarty_tpl->tpl_vars['field']->value['show_type']=='email') {?>   
   <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['alias'];?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['length']>0) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value['length'];?>
"<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['postValue']->value) {?><?php echo $_smarty_tpl->tpl_vars['postValue']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['field']->value->getDefault();?>
<?php }?>"/>
<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['show_type']=='list') {?>
   <?php $_smarty_tpl->tpl_vars['valList'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value->getArrayValuesFromString(), null, 0);?>
   
   <?php if ($_smarty_tpl->tpl_vars['valList']->value) {?>
      <?php if (!$_smarty_tpl->tpl_vars['field']->value['as_radio']) {?>  
          <select name="<?php echo $_smarty_tpl->tpl_vars['field']->value['alias'];?>
">  
              <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['valList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['postValue']->value==$_smarty_tpl->tpl_vars['val']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
              <?php } ?>
          </select>
      <?php } else { ?>
          <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['valList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
              <input id="vlr_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['postValue']->value==$_smarty_tpl->tpl_vars['val']->value) {?>checked="checked"<?php }?> type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['alias'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
"/>
              <label for="vlr_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</label>
          <?php } ?>
      <?php }?>
      
   <?php } else { ?>
      Значения списка не заданы
   <?php }?>
   
<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['show_type']=='yesno') {?>
   <select name="<?php echo $_smarty_tpl->tpl_vars['field']->value['alias'];?>
"> 
        <option value="Да" <?php if ($_smarty_tpl->tpl_vars['postValue']->value=='Да') {?>selected="selected"<?php }?>>Да</option>
        <option value="Нет" <?php if ($_smarty_tpl->tpl_vars['postValue']->value=='Нет') {?>selected="selected"<?php }?>>Нет</option>
   </select>  
<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['show_type']=='text') {?>
   <textarea name="<?php echo $_smarty_tpl->tpl_vars['field']->value['alias'];?>
" class="feedTextArea"><?php if ($_smarty_tpl->tpl_vars['postValue']->value) {?><?php echo $_smarty_tpl->tpl_vars['postValue']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['field']->value->getDefault();?>
<?php }?></textarea>   
<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['show_type']=='file') {?>
   <input type="file" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['alias'];?>
"/> 
<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['show_type']=='captcha'&&\RS\Module\Manager::staticModuleEnabled('kaptcha')) {?>
    <div class="captcha">
        <img src="<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('kaptcha');?>
?rand=<?php echo rand(0,99999);?>
" height="42">
        <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['alias'];?>
"/> 
    </div>
<?php }?><?php }} ?>
