<?php
namespace funcraft\masterpiece\fa\yii\migrations;

use indigerd\migrationaware\MigrationAwareInterface;
use indigerd\migrationaware\MigrationAwareTrait;

/**
 * Class Module
 * @package funcraft\masterpiece\fa\yii\migrations
 * @author Funcraft <what4me@yandex.ru>
 */
class Module extends \yii\base\Module implements MigrationAwareInterface
{
    use MigrationAwareTrait;

    /**
     * @return string
     */
    public function getMigrationPath()
    {
        return __DIR__ . '/migrations';
    }
}
