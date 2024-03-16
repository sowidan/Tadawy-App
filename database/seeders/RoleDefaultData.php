<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminPermissions = [
            'edit patient',
            'add patient',
            'delete patient',
            'edit doctor',
            'add doctor ',
            'delete doctor'
        ];

        $adminRole = Role::create(['name' => 'admin']);
        $permissions = Permission::create($adminPermissions);
        $adminRole->givePermissionTo($permissions);

        $doctorPermissions = [
            'edit patient',
            'add patient',
            'delete patient'
        ];

        $doctorRole = Role::create(['name' => 'doctor']);
        $permissions = Permission::create($doctorPermissions);
        $doctorRole->givePermissionTo($permissions);

        $patientPermissions = [
            'edit patient'
        ];

        $patientRole = Role::create(['name' => 'patient']);
        $permissions = Permission::create($patientPermissions);
        $patientRole->givePermissionTo($permissions);

        
    }
}
