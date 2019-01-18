<?php

use yii\db\Migration;

/**
 * Class m190118_053946_biodata
 */
class m190118_053946_biodata extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->createTable('biodata', [
        'id' => $this->primaryKey(),
        'nama_lengkap' => $this->string(30)->notNull(),
        'tempat_lahir' => $this->string(20),
        'tanggal_lahir' => $this->date(),
        'jenis_kelamin' => $this->string(10),
        'alamat' => $this->string(50),
        'no_telp' => $this->string(15),
      ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
      $this->dropTable('biodata');
        // echo "m190118_053946_biodata cannot be reverted.\n";
        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190118_053946_biodata cannot be reverted.\n";

        return false;
    }
    */
}
