<?php

namespace yii2mod\settings\models\enumerables;

use yii2mod\enum\helpers\BaseEnum;

/**
 * Class SettingStatus
 * @package yii2mod\settings\models\enumerables
 */
class SettingType extends BaseEnum
{
    const STRING_TYPE = 'string';
    const INTEGER_TYPE = 'integer';
    const BOOLEAN_TYPE = 'boolean';
    const FLOAT_TYPE = 'float';
    const ARRAY_TYPE = 'array';
    const OBJECT_TYPE = 'object';
    const NULL_TYPE = 'null';

    public static $list = [
        self::STRING_TYPE => 'String',
        self::INTEGER_TYPE => 'Integer',
        self::BOOLEAN_TYPE => 'Boolean',
        self::FLOAT_TYPE => 'Float',
        self::ARRAY_TYPE => 'Array',
        self::OBJECT_TYPE => 'Object',
        self::NULL_TYPE => 'Null',
    ];
}