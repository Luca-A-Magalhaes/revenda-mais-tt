<?php

class m180729_210315_create_query_table extends CDbMigration
{
	/*
	public function up()
	{
		$this->createTable('tbl_query', [
			'id' => 'pk',
			'query' => 'string',
			'trending' => 'boolean',
			'date' => 'date',
		]);
	}

	public function down()
	{
		$this->dropTable('tbl_query');
	}
	*/
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('tbl_query', [
			'id' => 'pk',
			'query' => 'string',
			'trending' => 'boolean',
			'date' => 'date',
		]);
		$this->insert('tbl_query', ['query' => 'Neymar', 'trending' => 1, 'date' => '2018-07-29']);
		$this->insert('tbl_query', ['query' => '#armyseguindoarmy', 'trending' => 1, 'date' => '2018-07-29']);
		$this->insert('tbl_query', ['query' => '#ProgramaSilvioSantos', 'trending' => 1, 'date' => '2018-07-29']);
		$this->insert('tbl_query', ['query' => '#Fantastico', 'trending' => 1, 'date' => '2018-07-29']);
		$this->insert('tbl_query', ['query' => 'Gillete', 'trending' => 1, 'date' => '2018-07-29']);
	}

	public function safeDown()
	{
		$this->truncateTable('tbl_query');
		$this->dropTable('tbl_query');
	}
	
}