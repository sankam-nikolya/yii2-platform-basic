<?php
/**
 * @link https://github.com/gromver/yii2-platform-basic.git#readme
 * @copyright Copyright (c) Gayazov Roman, 2014
 * @license https://github.com/gromver/yii2-platform-basic/blob/master/LICENSE
 * @package yii2-platform-basic
 * @version 1.0.0
 */

namespace gromver\platform\basic\modules\elasticsearch\events;


use gromver\modulequery\Event;

/**
 * Class ElasticModuleEvent
 * @package yii2-platform-basic
 * @author Gayazov Roman <gromver5@gmail.com>
 */
class ElasticModuleEvent extends Event {
    /**
     * @var \yii\db\ActiveRecord
     */
    public $model;
    /**
     * @var \gromver\platform\basic\modules\elasticsearch\models\Index
     */
    public $index;
} 