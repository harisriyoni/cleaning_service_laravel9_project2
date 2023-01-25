<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'id' => '1',
            'nama_lengkap' => 'Admin Ganteng',
            'username' => 'Admin',
            'password' => Hash::make('admin'),
            'no_hp' => '085860149271',
            'no_ktp' => '3212222804030001',
            'alamat' => 'Jawa Barat,Indramayu,Kec.Bongas,Desa.Kertajaya,Jl.Babakan Redo',
            'tanggal_lahir' => '28-04-2003',
            'email' => 'admin@gmail.com',
            'role_id' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
