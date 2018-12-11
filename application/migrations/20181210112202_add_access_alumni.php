<?php

class Migration_Add_access_alumni extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_field(array(
			'id_access' => array(
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
            'access' => array(
            'type' => 'VARCHAR',
            'constraint' => '100',
            ),
            'title' => array(
            'type' => 'TEXT',
            'null' => TRUE,
            )
		));
        $this->dbforge->add_key('id_access', TRUE);
        $this->dbforge->create_table('accesses');
	}

	public function down()
	{
		$this->dbforge->drop_table('accesses');
	}
}