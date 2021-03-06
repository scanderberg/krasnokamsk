<?php
/**
* ReadyScript (http://readyscript.ru)
*
* @copyright Copyright (c) ReadyScript lab. (http://readyscript.ru)
* @license http://readyscript.ru/licenseAgreement/
*/
namespace Shop\Model\Orm;
use \RS\Orm\Type;

/**
* Реквизиты компании, принимающей платежи.
*/
class Company extends \RS\Orm\AbstractObject
{
    function _init()
    {
        $this->getPropertyIterator()->append(array(
            'firm_name' => new Type\Varchar(array(
                'maxLength' => '255',
                'description' => 'Наименование организации',
            )),
            'firm_inn' => new Type\Varchar(array(
                'maxLength' => '12',
                'description' => 'ИНН организации',
                'Attr' => array(array('size' => 20)),
            )),
            'firm_kpp' => new Type\Varchar(array(
                'maxLength' => '12',
                'description' => 'КПП организации',
                'Attr' => array(array('size' => 20)),
            )),
            'firm_bank' => new Type\Varchar(array(
                'maxLength' => '255',
                'description' => 'Наименование банка',
            )),
            'firm_bik' => new Type\Varchar(array(
                'maxLength' => '10',
                'description' => 'БИК',
            )),
            'firm_rs' => new Type\Varchar(array(
                'maxLength' => '20',
                'description' => 'Расчетный счет',
                'Attr' => array(array('size' => 25)),
            )),
            'firm_ks' => new Type\Varchar(array(
                'maxLength' => '20',
                'description' => 'Корреспондентский счет',
                'Attr' => array(array('size' => 25)),
            )),
            'firm_director' => new Type\Varchar(array(
                'maxLength' => '70',
                'description' => 'Фамилия, инициалы руководителя',
            )),
            'firm_accountant' => new Type\Varchar(array(
                'maxLength' => '70',
                'description' => 'Фамилия, инициалы главного бухгалтера',
            ))
        ));
    }        
    
    /**
    * Возвращает объект хранилища
    * 
    * @return \RS\Orm\Storage\AbstractStorage
    */
    protected function getStorageInstance()
    {
        return new \RS\Orm\Storage\Stub($this);
    }
    
}
?>
