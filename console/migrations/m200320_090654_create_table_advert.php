<?php

use yii\db\Migration;

class m200320_090654_create_table_advert extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%advert}}', [
            'id' => $this->primaryKey(),
            'naslov' => $this->string(150),
            'povzetek' => $this->string(600),
            'avtor' => $this->integer(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%advert}}');
    }
}
