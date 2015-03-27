<?php
/**
 * @link https://github.com/gromver/yii2-platform-basic.git#readme
 * @copyright Copyright (c) Gayazov Roman, 2014
 * @license https://github.com/gromver/yii2-platform-basic/blob/master/LICENSE
 * @package yii2-platform-basic
 * @version 1.0.0
 */

namespace gromver\platform\basic\modules\tag;


use gromver\modulequery\ModuleEventsInterface;
use gromver\platform\basic\components\MenuUrlRule;
use gromver\platform\basic\widgets\Desktop;
use gromver\platform\basic\widgets\MenuItemRoutes;
use gromver\platform\basic\modules\tag\components\MenuRouterTag;
use Yii;

/**
 * Class Module
 * @package yii2-platform-basic
 * @author Gayazov Roman <gromver5@gmail.com>
 */
class Module extends \yii\base\Module implements ModuleEventsInterface
{
    public $controllerNamespace = 'gromver\platform\basic\modules\tag\controllers';
    public $defaultRoute = 'frontend/default';
    public $desktopOrder = 7;

    /**
     * @param $event \gromver\platform\basic\widgets\events\DesktopEvent
     */
    public function addDesktopItem($event)
    {
        $event->items[] = [
            'label' => Yii::t('gromver.platform', 'Tags'),
            'items' => [
                ['label' => Yii::t('gromver.platform', 'Tags'), 'url' => ['/grom/tag/backend/default/index']],
            ]
        ];
    }

    /**
     * @param $event \gromver\platform\basic\widgets\events\MenuItemRoutesEvent
     */
    public function addMenuItemRoutes($event)
    {
        $event->items[] = [
            'label' => Yii::t('gromver.platform', 'Tags'),
            'items' => [
                ['label' => Yii::t('gromver.platform', 'Tag Cloud'), 'route' => 'grom/tag/frontend/default/index'],
                ['label' => Yii::t('gromver.platform', 'Tag View'), 'url' => ['/grom/tag/backend/default/select']],
            ]
        ];
    }

    /**
     * @param $event \gromver\platform\basic\widgets\events\MenuUrlRuleEvent
     */
    public function addMenuRouter($event)
    {
        $event->routers[] = MenuRouterTag::className();
    }

    /**
     * @inheritdoc
     */
    public function events()
    {
        return [
            Desktop::EVENT_FETCH_ITEMS => 'addDesktopItem',
            MenuItemRoutes::EVENT_FETCH_ITEMS => 'addMenuItemRoutes',
            MenuUrlRule::EVENT_FETCH_MODULE_ROUTERS => 'addMenuRouter'
        ];
    }
}
