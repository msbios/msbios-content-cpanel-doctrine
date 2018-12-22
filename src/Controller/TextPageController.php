<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Content\CPanel\Doctrine\Controller;

use MSBios\Content\CPanel\Controller\TextPageController as DefaultTextPageController;
use MSBios\Content\Resource\Doctrine\Entity\TextPage;
use MSBios\CPanel\Doctrine\Mvc\Controller\AbstractActionController;

/**
 * Class TextPageController
 * @package MSBios\Content\CPanel\Doctrine\Controller
 */
class TextPageController extends AbstractActionController
{
    /**
     * @inheritdoc
     *
     * @return mixed|TextPage
     */
    protected static function factory()
    {
        return new TextPage;
    }

    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getResourceId()
    {
        return DefaultTextPageController::class;
    }
}
