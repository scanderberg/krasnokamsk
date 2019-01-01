<?php /* Smarty version Smarty-3.1.18, created on 2018-04-03 15:05:05
         compiled from "/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/feedback/form/field/type.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18977308305ac36df17b95d3-28711337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d22a967ee3fd2d2535929f706cf49a0aef5f621' => 
    array (
      0 => '/var/www/www-root/data/www/xn----7sbac5ajmzrjl.xn--p1ai/templates/stoyka/moduleview/feedback/form/field/type.tpl',
      1 => 1458674883,
      2 => 'rs',
    ),
  ),
  'nocache_hash' => '18977308305ac36df17b95d3-28711337',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ac36df1846c52_00501316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac36df1846c52_00501316')) {function content_5ac36df1846c52_00501316($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['field']->value->getOriginalTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script type="text/javascript">
    $(function() {
        
        //Навесим события
        
        /**
        * Тип отображения
        */
        $('[name="show_type"]').change(function(){  
            if ($(this).val()=='string'){ //если строка
                $('[name="use_mask"]').closest('tr').show(); 
                $('[name="length"]').closest('tr').show(); 
                $('[name="use_mask"]').change();
            }
            
            if($(this).val()=='list'){ //Список
                $('[name="anwer_list"]').closest('tr').show();
                $('[name="as_radio"]').closest('tr').show();
            }
            
            if($(this).val()=='file'){ //Файл
                $('[name="file_size"]').closest('tr').show();
                $('[name="file_ext"]').closest('tr').show();
            }
            
            
            //Если не строка, то скроем лишнее
            if ($(this).val()!='string'){
               $('[name="use_mask"]').closest('tr').hide();
               $('[name="mask"]').closest('tr').hide(); 
               $('[name="error_text"]').closest('tr').hide();
               $('[name="length"]').closest('tr').hide();
            }
            
            //Если не список, то скроем лишнее
            if ($(this).val()!='list'){
               $('[name="anwer_list"]').closest('tr').hide();
               $('[name="as_radio"]').closest('tr').hide();
            }
            
            //Если не файл, то скроем лишнее
            if ($(this).val()!='file'){
               $('[name="file_size"]').closest('tr').hide();
               $('[name="file_ext"]').closest('tr').hide();
            }
        });
        
        
        /**
        * Использовать маску
        */
        $('[name="use_mask"]').change(function(){
            if ($(this).val()!==''){ //Если кроме значения "не проверять"
              $('[name="mask"]').closest('tr').show();  
              $('[name="error_text"]').closest('tr').show(); 
              switch($(this).val()){
                  case 'email': //Email
                        $('[name="mask"]').val('^[a-zA-Z0-9_\\-.]+@[a-zA-Z0-9\\-]+\\.[a-zA-Z0-9\\-.]+$');
                        break;
                  case 'phone': //Телефон
                         $('[name="mask"]').val('^((\\d|\\+\\d)[\\- ]?)?(\\(?\\d{3}\\)?[\\- ]?)?[\\d\\- ]{7,10}$');
                        break;
                  default:
                        $('[name="mask"]').val('');
                        break;
              } 
              
            }else{
              $('[name="mask"]').closest('tr').hide();   
              $('[name="error_text"]').closest('tr').hide();   
            }
        });
        
        
        
        /**
        * Функция проверки отображения полей поля формы
        */
        var checkDepend = function() {
            
            //Сначала закрое, всё что надо скрыть
            $('[name="anwer_list"]').closest('tr').hide();
            $('[name="as_radio"]').closest('tr').hide();
            $('[name="use_mask"]').closest('tr').hide();
            $('[name="length"]').closest('tr').hide();
            $('[name="mask"]').closest('tr').hide();
            $('[name="error_text"]').closest('tr').hide();
            $('[name="file_size"]').closest('tr').hide();
            $('[name="file_ext"]').closest('tr').hide();
            
            //Проверим условия отображения полей 
            $('[name="show_type"]').change();
            $('[name="use_mask"]').change();
            
        }();
        
        
        
    });
</script>
<?php }} ?>
