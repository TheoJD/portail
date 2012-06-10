<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version7 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('emprunt', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'materiel_id' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             'user_id' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             'asso_id' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             'nombre' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
            'recu' =>
             array(
              'type' => 'boolean',
              'length' => '25',
             ),
             'rendu' => 
             array(
              'type' => 'boolean',
              'length' => '25',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'utf8_unicode_ci',
             'charset' => 'utf8',
             ));
        $this->createTable('etat', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'nom' => 
             array(
              'type' => 'string',
              'length' => '100',
             ),
             'disponible' => 
             array(
              'type' => 'boolean',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'utf8_unicode_ci',
             'charset' => 'utf8',
             ));
        $this->createTable('materiel', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'nom' => 
             array(
              'type' => 'string',
              'length' => '100',
             ),
             'asso_id' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             'description' => 
             array(
              'type' => 'string',
              'length' => '',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'utf8_unicode_ci',
             'charset' => 'utf8',
             ));
        $this->createTable('stock', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'materiel_id' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             'etat_id' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             'nombre' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'utf8_unicode_ci',
             'charset' => 'utf8',
             ));
    }

    public function down()
    {
        $this->dropTable('emprunt');
        $this->dropTable('etat');
        $this->dropTable('materiel');
        $this->dropTable('stock');
    }
}