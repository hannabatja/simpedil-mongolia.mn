<?php

/**
 * Content
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    barilga
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
class Content extends BaseContent
{

    public function __toString()
    {
        $cul = sfContext::getInstance()->getUser()->getCulture();
        if($cul == 'en')
            return $this->getTitleEn();
        else 
            return $this->getTitle();
            
    }
    
    public function getBodyCulture()
    {
        $cul = sfContext::getInstance()->getUser()->getCulture();
        if($cul == 'en')
            return $this->getBodyEn();
        else 
            return $this->getBody();
    }


    public function getSummary()
    {
        return myTools::utf8_substr(strip_tags($this->getBody()), 0, 255).'...';
    }
    
}