<?php

use yii\db\Migration;

/**
 * Handles the creation of table `simple_config`.
 */
class m171209_101930_create_simple_config_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('simple_config', [
            'id' => $this->primaryKey(),
            'key' => $this->string(255)->notNull(),
            'value' => $this->string(255)->null(),
            'big_value' => $this->text()->null()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('simple_config');
    }
}
