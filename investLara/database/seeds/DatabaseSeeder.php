<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Eduardo Alexandre',
            'cpf'       => '26328480325',
            'phone'     => '32987024149',
            'gender'    => 'M',
            'birth'     => '1984-12-24',
            'notes'     => 'Software Developer',
            'email'     => 'eduardotecnologo@hotmail.com',
            'password'  => env('PASSSWORD_HASH') ? bcrypt('123456') : '123456',
            // 'status'    => 'ativo',
            // 'permission'=> 'admin'
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
