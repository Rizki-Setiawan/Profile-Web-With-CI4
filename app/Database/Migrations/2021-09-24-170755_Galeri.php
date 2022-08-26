<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Galeri extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'gambar'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'keterangan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('galeri');
	}

	public function down()
	{
		$this->forge->dropTable('galeri');
	}
}