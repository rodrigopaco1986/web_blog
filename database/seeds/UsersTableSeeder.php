<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->delete();

        DB::table('users')->insert([
			[
				'id' => '1', 
				'name' => 'Rodrigo Paco', 
				'email' => 'rodrigopaco.1986@gmail.com', 
				'password' => Hash::make('Admin123_'),
				'created_at' => Carbon::now(),
				'type'	=> User::TYPE_ADMIN,
			],
			[
				'id' => '2', 
				'name' => 'Anthony Lynch', 
				'email' => 'anthony@projectmark.com', 
				'password' => Hash::make('Admin123_'),
				'created_at' => Carbon::now(),
				'type'	=> User::TYPE_ADMIN,
			],
        ]);

        Model::reguard();
    }
}
