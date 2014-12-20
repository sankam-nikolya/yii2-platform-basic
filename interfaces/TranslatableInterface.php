<?php
/**
 * @link https://github.com/gromver/yii2-platform-basic.git#readme
 * @copyright Copyright (c) Gayazov Roman, 2014
 * @license https://github.com/gromver/yii2-platform-basic/blob/master/LICENSE
 * @package yii2-platform-basic
 * @version 1.0.0
 */

namespace gromver\platform\basic\interfaces;

/**
 * Interface TranslatableInterface
 * Используется для получения данных о мультиязычности модели
 * @package yii2-platform-basic
 * @author Gayazov Roman <gromver5@gmail.com>
 */
interface TranslatableInterface {
    /**
     * Локализации текущей модели
     * @return static[]
     */
    public function getTranslations();

    /**
     * Язык
     * @return string
     */
    public function getLanguage();
}