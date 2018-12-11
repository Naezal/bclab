<?php

class Migration_Add_alumni extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_field(array(
			'id_alumni' => array(
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
            ),
            'name_alumni' => array(
            'type' => 'VARCHAR',
            'constraint' => '100',
            ),
            'alamat' => array(
            'type' => 'TEXT',
            'null' => TRUE,
            )
		));
        $this->dbforge->add_key('id_alumni', TRUE);
        $this->dbforge->create_table('alumnies');
	}

	public function down()
	{
		$this->dbforge->drop_table('alumnies');
	}
}