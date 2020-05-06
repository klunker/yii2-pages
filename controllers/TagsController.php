<?php

namespace klunker\pages\controllers;

use yii\web\Controller;

/**
 * Default controller for the `pages` module
 */
class TagsController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
