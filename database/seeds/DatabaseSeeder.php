<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;
use App\Charge;
use App\Vehicle;
use App\Country;
use App\Permission;
use App\KindPersons;
use App\ServiceStatus;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Ask for confirmation to refresh migration
        if ($this->command->confirm('¿Desea actualizar la migración antes de la siembra, asegúrese de que borrará todos los datos antiguos?')) {
            $this->command->call('migrate:refresh');
            $this->command->warn("Datos borrados, comenzando desde la nueva base de datos.");

            if ($this->command->confirm('¿Desea insertar los datos por default?')) {

                $this->createUserTypes();
                $this->command->info('Tipo de usuarios predeterminados agregados.');

                $this->createVehicles();
                $this->command->info('Vehiculos predeterminados agregados.');

                $this->createContries();
                $this->command->info('Países predeterminados agregados.');

                $this->createStatus();
                $this->command->info('Estatus servicio predeterminados agregados.');

                $permissions = Permission::defaultPermissions();
                foreach ($permissions as $permission) {
                    Permission::firstOrCreate(['name' => $permission]);
                }

                $this->command->info('Permisos predeterminados agregados.');

                // Ask to confirm to assign admin or user role
                if ($this->command->confirm('Crear roles para el usuario, ¿predeterminado es administrador y usuario? [y|N]', true)) {

                    $roles = 'Administrador,Cliente,Conductor';
                    $rolesArray = explode(',', $roles);

                    // add roles
                    foreach ($rolesArray as $role) {
                        $role = Role::firstOrCreate(['name' => trim($role)]);

                        if ($role->name == 'Administrador') {
                            // assign all permissions to admin role

                            $role->permissions()->sync(Permission::all());
                            $this->command->info('El administrador tendrá plenos derechos');

                            // create one user for each role

                            $this->createUser($role);

                        }

                        $this->command->info('Roles ' . $role->name . ' added successfully');
                    }


                }
            }
        }
    }

    private function createUserTypes() {
        $data = array(
            'name' => 'Persona física',
            'status' => 1,
        );
        KindPersons::create($data);

        $data = array(
            'name' => 'Persona moral',
            'status' => 1,
        );
        KindPersons::create($data);
    }

    private function createVehicles() {
        $data = array(
            'name' => 'Motocicleta',
            'travelMode' => 'DRIVING',
            'status' => 1,
        );

        $id = Vehicle::create($data)->id;
        $this->command->info('Se agrega la moto');
        $this->createChargesMoto($id);

        $data = array(
            'name' => 'Bicicleta',
            'travelMode' => 'BICYCLING',
            'status' => 1,
        );

        $id = Vehicle::create($data)->id;
        $this->command->info('Se agrega la bicicleta');
        $this->createChargesBicicleta($id);
    }

    private function createChargesBicicleta($id) {

        $data = array(
            'vehicles_id' => $id,
            'name' => 'Precio Base',
            'charge' => '12',
            'default' => 0,
            'status' => 1,
        );

        Charge::create($data);
        $this->command->info('Se agrega precio base bicicleta');

        $data = array(
            'vehicles_id' => $id,
            'name' => 'Kilometro',
            'charge' => '3.50',
            'default' => 1,
            'status' => 1,
        );

        Charge::create($data);
        $this->command->info('Se agrega precio kilometro bicicleta');

        $data = array(
            'vehicles_id' => $id,
            'name' => 'Minuto',
            'charge' => '1.80',
            'default' => 2,
            'status' => 1,
        );

        Charge::create($data);
        $this->command->info('Se agrega precio minuto bicicleta');

        $data = array(
            'vehicles_id' => $id,
            'name' => 'Seguro',
            'charge' => '10',
            'default' => 0,
            'status' => 1,
        );

        Charge::create($data);
        $this->command->info('Se agrega precio seguro bicicleta');

    }

    private function createChargesMoto($id) {

        $data = array(
            'vehicles_id' => $id,
            'name' => 'Precio Base',
            'charge' => '15',
            'default' => 0,
            'status' => 1,
        );

        Charge::create($data);
        $this->command->info('Se agrega precio base moto');

        $data = array(
            'vehicles_id' => $id,
            'name' => 'Kilometro',
            'charge' => '3.50',
            'default' => 1,
            'status' => 1,
        );

        Charge::create($data);
        $this->command->info('Se agrega precio kilometro moto');

        $data = array(
            'vehicles_id' => $id,
            'name' => 'Minuto',
            'charge' => '2.80',
            'default' => 2,
            'status' => 1,
        );

        Charge::create($data);
        $this->command->info('Se agrega precio minuto moto');

        $data = array(
            'vehicles_id' => $id,
            'name' => 'Seguro',
            'charge' => '10',
            'default' => 0,
            'status' => 1,
        );

        Charge::create($data);
        $this->command->info('Se agrega precio seguro moto');

    }

    private function createStatus() {
        $data = array(
            'name' => 'Programado',
            'status' => 1,
        );

        ServiceStatus::create($data);

        $data = array(
            'name' => 'Pendiente',
            'status' => 1,
        );

        ServiceStatus::create($data);

        $data = array(
            'name' => 'En proceso',
            'status' => 1,
        );

        ServiceStatus::create($data);

        $data = array(
            'name' => 'Concluido',
            'status' => 1,
        );

        ServiceStatus::create($data);

        $data = array(
            'name' => 'Cancelado',
            'status' => 1,
        );

        ServiceStatus::create($data);
    }

    private function createContries() {
        $data = array(
            'name' => 'México',
            'status' => 1,
        );

        Country::create($data);
    }

    /**
     * Create a user with given role
     *
     * @param $role
     */
    private function createUser($role)
    {
        $data = array(
            'name' => 'Gad',
            'surnames' => 'Arenas',
            'email' => 'garenas.1991@gmail.com',
            'password' => 'Sysware2016',
            'email_verified_at' => now(),
            'status' => 1,
            'authorized' => 1
        );

        $user = User::create($data);
        $user->assignRole($role->name);

        $this->command->info('Admin login details:');
        $this->command->warn('Username : '.$user->email);
        $this->command->warn('Password : "Sysware2016"');
    }
}
