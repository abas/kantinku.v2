<?php

use Illuminate\Database\Seeder;

class RekeningTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rekenings')->insert([
            'id_user'           => 1,
            'atasnama'          => str_random(5),
            'no_rekening'       => str_random(20),    
            'jenis_rekening'    => $this->getJenisRekening(),
        ]);
    }

    private function getJenisRekening()
    {
        $data = ['BNI','BRI','MANDIRI','BPD'];
        $k = array_rand($data);
        return (string)($data[$k]);
    }
}
