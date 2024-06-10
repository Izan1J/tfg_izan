<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'apellidos' => null,
                'domicilio' => null,
                'municipio' => null,
                'telefono' => null,
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
            ],
            [
                'name' => 'Marta',
                'apellidos' => 'Gonzalez Perez',
                'domicilio' => 'Calle libertad n6',
                'municipio' => 'Catral',
                'telefono' => '652148563',
                'email' => 'marta@email.com',
                'password' => Hash::make('marta'),
            ],
            [
                'name' => 'Miguel',
                'apellidos' => 'Fernandez Pardo',
                'domicilio' => 'Calle libertad n6',
                'municipio' => 'Catral',
                'telefono' => '685412359',
                'email' => 'miguel@email.com',
                'password' => Hash::make('miguel'),
            ],
            [
                'name' => 'Pedro',
                'apellidos' => 'Parera Vazquez',
                'domicilio' => 'Avenida libertad n6',
                'municipio' => 'Catral',
                'telefono' => '695321584',
                'email' => 'pedro@email.com',
                'password' => Hash::make('pedro'),
            ],
            [
                'name' => 'Nole',
                'apellidos' => null,
                'domicilio' => null,
                'municipio' => null,
                'telefono' => null,
                'email' => 'nole@email.com',
                'password' => Hash::make('nole'),
            ],
            [
                'name' => 'Lucia',
                'apellidos' => null,
                'domicilio' => null,
                'municipio' => null,
                'telefono' => null,
                'email' => 'lucia@email.com',
                'password' => Hash::make('lucia'),
            ],
        ]);

        $role1= Role::create(['name' => 'admin']);
        $role2= Role::create(['name' => 'padre']);
        $role3= Role::create(['name' => 'profe']);
        $admin = User::find(1);
        $padre1 = User::find(2);
        $padre2 = User::find(3);
        $padre3 = User::find(4);
        $profe1 = User::find(5);
        $profe2 = User::find(6);
        $admin->assignRole($role1);
        $padre1->assignRole($role2);
        $padre2->assignRole($role2);
        $padre3->assignRole($role2);
        $profe1->assignRole($role3);
        $profe2->assignRole($role3);

        $this->call([
            NoticiaSeeder::class,
        ]);
    }
}
