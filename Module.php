<?php

namespace klunker\pages;

/**
 * pages module definition class
 */
class Module extends \yii\base\Module implements \yii\base\BootstrapInterface
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'klunker\pages\controllers';
    
    public function bootstrap($app) {
        $app->getUrlManager()->addRules([
        $this->id => $this->id.'/page/index',
        ],false);
    }

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
