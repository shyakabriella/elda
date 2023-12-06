<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder

{

    /**

     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'desease-list',
           'desease-create',
           'desease-edit',
           'desease-delete',
           'disability-list',
           'disability-create',
           'disability-edit',
           'disability-delete',
           'education-list',
           'education-create',
           'education-edit',
           'education-delete',
           'ubudehe-list',
           'ubudehe-create',
           'ubudehe-edit',
           'ubudehe-delete'
          

        ];

     

        foreach ($permissions as $permission) {

             Permission::create(['name' => $permission]);

        }

    }

}