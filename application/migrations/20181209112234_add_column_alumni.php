<?php

class Migration_Add_column_alumni extends CI_Migration
{
	public function up()
	{
		$fields = array(
        'user_id' => array('type' => 'INT', 'after' => 'alamat', 'reference' => 'users'.'user_id', 'foreign key' => 'user.id', 'unsigned' => TRUE)
        );
        $this->dbforge->add_column('alumnies', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_table('alumnies');
	}
}