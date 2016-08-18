<?php

use yii\db\Schema;
use yii\db\Migration;
use funcraft\masterpiece\interfaces\IMasterpiece;

/**
 * Class m160818_151020_funcraft_masterpiece_fa_yii
 * @package funcraft\masterpiece-migrations-fa-yii
 * @author Funcraft <what4me@yandex.ru>
 *
 * Basic migration, create table IMasterpiece::TABLE_NAME
 */
class m160818_151020_funcraft_masterpiece_fa_yii extends Migration
{
    public function safeUp()
    {
        $this->createTable(IMasterpiece::TABLE_NAME, [
            IMasterpiece::FIELD_ID              => Schema::TYPE_PK,
            IMasterpiece::FIELD_ACCESS_LEVEL    => Schema::TYPE_SMALLINT,
            IMasterpiece::FIELD_CONTENT         => Schema::TYPE_STRING,
            IMasterpiece::FIELD_CREATOR         => Schema::TYPE_INTEGER,
            IMasterpiece::FIELD_KIND            => Schema::TYPE_INTEGER,
            IMasterpiece::FIELD_TITLE           => Schema::TYPE_STRING,
            IMasterpiece::FIELD_CREATION_DATE   => Schema::TYPE_INTEGER,
            IMasterpiece::FIELD_UPDATE_DATE     => Schema::TYPE_INTEGER
        ]);
    }

    public function safeDown()
    {
        $this->dropTable(IMasterpiece::TABLE_NAME);
    }
}
