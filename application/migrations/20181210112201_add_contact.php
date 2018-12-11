<?php

class Migration_Add_contact extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_field(array(
			'id_contact' => array(
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
            ),
            'id_alumni' => array(
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => TRUE,
            'reference' => 'alumnies'.'id_alumni',
            'foreign key' => 'id_alumni'
            ),
            'contact_phone' => array(
            'type' => 'INT',
            'constraint' => '100',
            ),
            'contact_fb' => array(
            'type' => 'varchar',
            'constraint' => '100',
            ),
            'contact_ig' => array(
            'type' => 'varchar',
            'constraint' => '100',
            ),
            'ket' => array(
            'type' => 'TEXT',
            'null' => TRUE,
            )
		));
        $this->dbforge->add_key('id_contact', TRUE);
        $this->dbforge->create_table('contacts');
	}

	public function down()
	{
		$this->dbforge->drop_table('contacts');
	}
}