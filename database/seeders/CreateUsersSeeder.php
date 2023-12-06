<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class CreateUsersSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *
     * @return void

     */

    public function run()

    {
        $users = [

            [

               'name'=>'minaloc Manager',
               'email'=>'minaloc@gmail.com',
               'type'=>1,
               'password'=> bcrypt('123456'),

            ],

            [

               'name'=>'Sector Manager',

               'email'=>'sectorc@gmail.com',

               'type'=> 2,

               'password'=> bcrypt('123456'),

            ],

            [

               'name'=>'Cell Manager',
               'email'=>'cell@gmail.com',
               'type'=>0,
               'password'=> bcrypt('123456'),

            ],

        ];

    

        foreach ($users as $key => $user) {

            User::create($user);

        }

    }

}