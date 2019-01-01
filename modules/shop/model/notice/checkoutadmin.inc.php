<?php
/**
* ReadyScript (http://readyscript.ru)
*
* @copyright Copyright (c) ReadyScript lab. (http://readyscript.ru)
* @license http://readyscript.ru/licenseAgreement/
*/
namespace Shop\Model\Notice;

/**
* Уведомление - оформление заказа
*/
class CheckoutAdmin extends \Alerts\Model\Types\AbstractNotice 
    implements \Alerts\Model\Types\InterfaceEmail, \Alerts\Model\Types\InterfaceSms
{
    public
        $order,
        $user;
        
    public function getDescription()
    {
        return t('Заказ оформлен (администратору)');
    }
    
    function init(\Shop\Model\Orm\Order $order)
    {
        $this->order = $order;
        $this->user = $order->getUser();
    }
    
    function getNoticeDataEmail()
    {
        $system_config = \RS\Config\Loader::getSystemConfig();
        $config = \RS\Config\Loader::getSiteConfig();
        
        $email_to_admin = new \Alerts\Model\Types\NoticeDataEmail();
        $email_to_admin->email      = $config['admin_email'];
        $email_to_admin->subject    = t('Оформлен заказ N%0 на сайте %1', array($this->order['order_num'], \RS\Http\Request::commonInstance()->getDomainStr()));
        $email_to_admin->vars       = $this;
        
        return $email_to_admin;
    }

    public function getTemplateEmail()
    {
        return '%shop%/notice/toadmin_checkout.tpl';
    }
    
    function getNoticeDataSms()
    {
        $system_config = \RS\Config\Loader::getSystemConfig();
        $config = \RS\Config\Loader::getSiteConfig();
        
        if(!$config['admin_phone']) return;
        
        $sms_to_admin = new \Alerts\Model\Types\NoticeDataSms();
        $sms_to_admin->phone      = $config['admin_phone'];
        $sms_to_admin->vars       = $this;
        
        return $sms_to_admin;
    }

    public function getTemplateSms()
    {
        return '%shop%/notice/toadmin_checkout_sms.tpl';
    }
    
    
}
