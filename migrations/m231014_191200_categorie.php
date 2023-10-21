<?php

use yii\db\Migration;

/**
 * Class m231014_191200_categorie
 */
class m231014_191200_categorie extends Migration
{
   /**
     * {@inheritdoc}
     */
     public function up()
     {
         $this->createTable('categorie',[
             'id' => $this->primaryKey(),
             'nome' => $this->string(255)->notNull(),
            
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
