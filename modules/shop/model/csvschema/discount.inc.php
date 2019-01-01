<?php
/**
* ReadyScript (http://readyscript.ru)
*
* @copyright Copyright (c) ReadyScript lab. (http://readyscript.ru)
* @license http://readyscript.ru/licenseAgreement/
*/
namespace Shop\Model\CsvSchema;
use \RS\Csv\Preset;

/**
* Схема экспорта/импорта справочника цен в CSV
*/
class Discount extends \RS\Csv\AbstractSchema
{
    function __construct()
    {
        parent::__construct(
            new Preset\Base(array(
                'ormObject' => new \Shop\Model\Orm\Discount(),
                'excludeFields' => array(
                    'id', 'site_id', 'sproducts'
                ),
                'savedRequest' => \Shop\Model\DiscountApi::getSavedRequest('Shop\Controller\Admin\DiscountCtrl_list'), //Объект запроса из сессии с параметрами текущего просмотра списка
                'multisite' => true,
                'searchFields' => array('code')
            )),
            array(
                new Preset\ProductsSerialized(array(
                    'title' => t('Список товаров и категорий, на которы распространяется скидка'),
                    'linkForeignField' => 'sproducts',
                    'linkIdField' => 'id',
                    'linkPresetId' => 0
                ))
            )
        );
    }
}
?>