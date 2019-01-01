<?php /* Smarty version Smarty-3.1.18, created on 2016-07-20 13:26:24
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/shop/view/widget/orderstatuses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:990148895578f51d060e6c9-87117993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b636e96e2926ce565854ddbd84a7293958405b4' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/modules/shop/view/widget/orderstatuses.tpl',
      1 => 1457614300,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '990148895578f51d060e6c9-87117993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod_js' => 0,
    'total' => 0,
    'inwork' => 0,
    'finished' => 0,
    'json_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_578f51d065a409_61225766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578f51d065a409_61225766')) {function content_578f51d065a409_61225766($_smarty_tpl) {?><?php if (!is_callable('smarty_function_addjs')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/function.addjs.php';
if (!is_callable('smarty_block_t')) include '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/core/smarty/rsplugins/block.t.php';
?><?php echo smarty_function_addjs(array('file'=>"flot/excanvas.js",'basepath'=>"common",'before'=>"<!--[if lte IE 8]>",'after'=>"<![endif]-->"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"flot/jquery.flot.min.js",'basepath'=>"common"),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"flot/jquery.flot.resize.js",'basepath'=>"common",'waitbefore'=>true),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>"flot/jquery.flot.pie.js",'basepath'=>"common",'waitbefore'=>true),$_smarty_tpl);?>

<?php echo smarty_function_addjs(array('file'=>((string)$_smarty_tpl->tpl_vars['mod_js']->value)."orderstatuses.js",'basepath'=>"root",'waitbefore'=>true),$_smarty_tpl);?>


<div class="order-statuses">
    <?php if ($_smarty_tpl->tpl_vars['total']->value) {?>
    <div id="orderStatusesGraph" class="graph" style="height:300px"></div>
    <div style="background: #efefef; padding:10px;">
        <table width="100%">
            <tr align="center" style="font-weight:bold">
                <td width="33%">Всего</td>
                <td width="33%">Открыто</td>
                <td width="33%">Завершено</td>
            </tr>
            <tr align="center">
                <td><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['inwork']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['finished']->value;?>
</td>
            </tr>            
        </table>
    </div>
    <script>
        $.allReady(function() {
            var data = <?php echo $_smarty_tpl->tpl_vars['json_data']->value;?>
;
            initOrderStatusesWidget(data);
        });
    </script>    
    <?php } else { ?>
        <div class="empty-widget">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Нет ни одного заказа<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php }?>
</div><?php }} ?>
