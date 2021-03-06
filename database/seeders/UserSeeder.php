<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UserProgram;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create([
			'name' => 'Student 1',
			'email' => 'student1@mail.com',
			'role' => 'student',
			'school_id' => 1,
			'password' => bcrypt('1234'),
		]);

		UserProgram::create([
			'user_id' => 1,
			'program_id' => 1,
		]);

		User::create([
			'name' => 'Student 2',
			'email' => 'student2@mail.com',
			'role' => 'student',
			'school_id' => 1,
			'password' => bcrypt('1234'),
		]);

		UserProgram::create([
			'user_id' => 2,
			'program_id' => 1,
		]);

		User::create([
			'name' => 'Teacher 1',
			'email' => 'teacher1@mail.com',
			'role' => 'teacher',
			'school_id' => 1,
			'password' => bcrypt('1234'),
		]);

		UserProgram::create([
			'user_id' => 3,
			'program_id' => 1,
		]);

		UserProgram::create([
			'user_id' => 3,
			'program_id' => 2,
		]);

		User::create([
			'name' => 'Teacher 2',
			'email' => 'teacher2@mail.com',
			'role' => 'teacher',
			'school_id' => 1,
			'password' => bcrypt('1234'),
		]);

		UserProgram::create([
			'user_id' => 4,
			'program_id' => 1,
		]);

		UserProgram::create([
			'user_id' => 4,
			'program_id' => 2,
		]);

		User::create([
			'name' => 'Admin 1',
			'email' => 'admin1@mail.com',
			'role' => 'admin',
			'school_id' => 1,
			'password' => bcrypt('1234'),
		]);

		UserProgram::create([
			'user_id' => 5,
			'program_id' => 1,
		]);

		UserProgram::create([
			'user_id' => 5,
			'program_id' => 2,
		]);

		UserProgram::create([
			'user_id' => 5,
			'program_id' => 3,
		]);
	}
}
