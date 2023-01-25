<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Schema;

class roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Schema::enableForeignKeyConstraints();
        $data = [
            ['role_name' => 'admin'],
            ['role_name' => 'users'],
        ];
        foreach ($data as $a)
        Role::insert([
            'role_name' => $a['role_name'],
            // 'created_at'=>Carbon::now(),
            // 'updated_at'=>Carbon::now(),
        ]);
    }
}
