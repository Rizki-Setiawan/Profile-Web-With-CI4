<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pendaftaran extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => '100',
				'auto_increment' => true
			],

			'nama_lengkap'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'tempat_lahir'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'tanggal_lahir'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'no_hp'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'nama_ayah'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'nama_ibu'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
			'program_pelatihan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'status'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'

		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('pendaftaran');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('pendaftaran');
	}
}