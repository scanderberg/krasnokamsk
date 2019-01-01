<?php /* Smarty version Smarty-3.1.18, created on 2016-10-27 11:40:09
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/dialog/wrapper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5405705065811bd696159d5-65205056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec2c63203ab5254a552f781869217e480e58e9ac' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/catalog/view/dialog/wrapper.tpl',
      1 => 1457614298,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '5405705065811bd696159d5-65205056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Setup' => 0,
    'hideGroupCheckbox' => 0,
    'treeList' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5811bd6977ec40_04447415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5811bd6977ec40_04447415')) {function content_5811bd6977ec40_04447415($_smarty_tpl) {?><div class="column-left">
    <div class="admin-category">
        <ul>
            <li class="endminus" qid="0"><img src="<?php echo $_smarty_tpl->tpl_vars['Setup']->value['IMG_PATH'];?>
/adminstyle/minitree/folder.png">
            <input type="checkbox" value="0" <?php if ($_smarty_tpl->tpl_vars['hideGroupCheckbox']->value) {?>style="display:none"<?php }?>><a class="act">Все</a>
            <?php echo $_smarty_tpl->getSubTemplate ("dialog/tree_branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dirlist'=>$_smarty_tpl->tpl_vars['treeList']->value,'open'=>true), 0);?>

            </li>
        </ul>
    </div>
    
</div>
<div class="column-right">
    <form class="filter" onsubmit="return false;">
        <table width="100%">
            <tr>
                <td width="20">№:</td>
                <td width="60"><input type="text" class="field-id"></td>
                <td width="60">Название:</td>
                <td><input type="text" class="field-title"></td>
                <td width="60">Артикул:</td>
                <td><input type="text" class="field-barcode"></td>                
                <td>
                    <button type="submit" class="set-filter" title="фильтровать"></button>
                </td>
                <td>
                    <a class="clear-filter" title="очистить фильтр"></a>
                </td>
            </tr>
        </table>
        <input type="submit" style="display:none">
    </form>

    <div class="productblock">
        <div class="loader">
            <div class="overlay">&nbsp;</div>
            <div class="loooading">
                <div class="back"></div>
                <span>Загрузка...</span>
            </div>
        </div>    
        <div class="product-container">
        <?php echo $_smarty_tpl->tpl_vars['products']->value;?>

        </div>
    </div>
</div><?php }} ?>
