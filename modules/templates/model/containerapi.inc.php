<?php
/**
* ReadyScript (http://readyscript.ru)
*
* @copyright Copyright (c) ReadyScript lab. (http://readyscript.ru)
* @license http://readyscript.ru/licenseAgreement/
*/
namespace Templates\Model;

/**
* API функции для контейнеров, находяхихся на страницах
*/
class ContainerApi extends \RS\Module\AbstractModel\EntityList
{
    function __construct()
    {
        parent::__construct(new \Templates\Model\Orm\SectionContainer, 
        array(
            'loadOnDelete' => true
        ));
    }
    
    /**
    * Копирует контейнер со всем содержимым из одной страницы на другую
    * 
    * @param integer $from_container - id контейнера источника
    * @param mixed $to_page_id - id страницы приемника контейнера
    * @param mixed $to_container_type - тип контейнера приемника
    */
    function copyContainer($from_container, $to_page_id, $to_container_type)
    {
        if ($acl_err = \RS\AccessControl\Rights::CheckRightError($this, ACCESS_BIT_WRITE)) {
            return $this->addError($acl_err);
        }
        
        $source = new Orm\SectionContainer($from_container);
        $sections = $source->getSections();
                
        $source['id'] = null;
        $source['page_id'] = $to_page_id;
        $source['type'] = $to_container_type;
        $result = $source->insert();
        
        $this->copySectionsRecursive($sections, $to_page_id, -$source['type']);
        return $result;
    }
    
    /**
    * Копирует секции и блоки внутри контейнера
    * 
    * @param array $sections
    * @param integer $to_page_id
    * @param integer $parent
    */
    protected function copySectionsRecursive($sections, $to_page_id, $parent)
    {
        foreach($sections as $section) {
            $current_section = $section['section'];
            $blocks = $current_section->getBlocks();
            
            $current_section['id'] = null;
            $current_section['page_id'] = $to_page_id;
            $current_section['parent_id'] = $parent;
            $current_section->insert();

            if (!empty($section['childs'])) {
                $this->copySectionsRecursive($section['childs'], $to_page_id, $current_section['id']);
            } else {
                //Копируем модули со всеми настройками в секции
                foreach($blocks as $block) {
                    $block['id'] = null;
                    $block['page_id'] = $to_page_id;
                    $block['section_id'] = $current_section['id'];
                    $block->insert();
                }
            }
        }
    }
    
    
}