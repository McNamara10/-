<?php

use yii\db\Migration;

/**
 * Class m231014_192358_add_fk_categorie_to_entrate
 */
class m231014_192358_add_fk_categorie_to_entrate extends Migration
{
    

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addForeignKey(
            'fk_categorie',
            'entrate', // Il nome della tabella esistente
            'fk_categorie', // Il nome del campo che sarà la chiave esterna
            'categorie', // Nome della tabella di riferimento
            'id', // Nome del campo riferimento nella tabella di riferimento
            'CASCADE', // Azione di aggiornamento
            'CASCADE' // Azione di eliminazione
        );
    }

    public function down()
    {
        $this->dropTable('entrate');
    }
    
}
