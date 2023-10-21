<?php

use yii\db\Migration;

/**
 * Class m231008_144937_entrate
 */
class m231008_144937_entrate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('entrate',[
            'id' => $this->primaryKey(),
            'descrizione' => $this->string(255)->notNull(),
            'importo' => $this->decimal(10,2),
            'data' => $this->date(),
        ]);
    
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('entrate');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231008_144937_entrate cannot be reverted.\n";

        return false;
    }
    */
}
