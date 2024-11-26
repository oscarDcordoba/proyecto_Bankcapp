<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // los roles son administrador, supervisor, cajero y cliente

        $Admin = Role::create(['name' => 'admin']);
        $Svisor = Role::create(['name' => 'supervisor']);
        $Cajero = Role::create(['name' => 'cajero']);
        $cliente = Role::create(['name' => 'cliente']);
        
        Permission::create(['name' => 'admin.index'])->syncRoles($Admin,$Svisor,$Cajero);
        Permission::create(['name' => 'usuarios.index'])->syncRoles($Admin,$Svisor,$Cajero);
        Permission::create(['name' => 'usuarios.create'])->syncRoles($Admin,$Svisor);
        Permission::create(['name' => 'usuarios.store'])->syncRoles($Admin,$Svisor);
        Permission::create(['name' => 'usuarios.show'])->syncRoles($Admin,$Cajero,$Svisor);
        Permission::create(['name' => 'usuarios.edit'])->syncRoles($Admin,$Svisor);
        Permission::create(['name' => 'usuarios.update'])->syncRoles($Admin,$Svisor);
        Permission::create(['name' => 'usuarios.destroy'])->syncRoles($Admin,$Svisor);
        Permission::create(['name' => 'usuarios.graficas'])->syncRoles($Admin,$Svisor);


        Permission::create(['name' => 'menu_cliente.index'])->syncRoles($cliente);


    }
}
