<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fakultas =[
            [
                'nama_fakultas'=> 'Fakultas Teknik',
                'nama_dekan'=>'Dr. Ir.Budi Santoso, M.T.',
            ],
             [
                'nama_fakultas'=> 'Fakultas Konoha',
                'nama_dekan'=>'Dr. Ir.Bahlil Ganteng, M.T.',
            ],
             [
                'nama_fakultas'=> 'Fakultas Sentosa',
                'nama_dekan'=>'Dr.Jokowi Pranowo, M.T.I,S.H',
            ],
             [
                'nama_fakultas'=> 'Fakultas Lock',
                'nama_dekan'=>'Dr. Ir.Budi Setiabudi, M.T.',
            ],
        ];
        foreach ($fakultas as $data){
            Fakultas::create($data);
        }
    }
}
