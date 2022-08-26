<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Berita extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'author'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'default'        => 'John Doe',
			],
			'content' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'status'      => [
				'type'           => 'ENUM',
				'constraint'     => ['published', 'draft'],
				'default'        => 'draft',
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
			'slug VARCHAR(100) UNIQUE'
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('berita', TRUE);
	}

	

	public function down()
	{
		$this->forge->dropTable('berita');
	}
}
