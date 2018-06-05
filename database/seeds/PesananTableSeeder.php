<?php

use Illuminate\Database\Seeder;

class PesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            DB::table('pesanans')->insert([
                'id_user'           => 1,
                'id_menu'           => rand(1,20),
                'is_selesai'        => false,
                'is_batal'          => true,
                'is_notif'          => false,
                'jumlah_pesanan'    => rand(1,3),
                'metode_pemesanan'  => $this->getMetodePemesanan(),
                'nama_pemesan'      => str_random(10),
                'kontak'            => str_random(12),
                'alamat'            => str_random(20)
            ]);
        }
    }

    private function getMetodePemesanan()
    {
        $data = ['antar','ambil'];
        $k = array_rand($data);
        return (string)($data[$k]);
    }
}
