<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            DB::table('menus')->insert([
                'id_user'           => rand(1,20),
                'nama_menu'         => str_random(3),
                'deskripsi_menu'    => str_random(10),    
                'harga_menu'        => rand(1,9)*10000,
                'stock_menu'        => rand(1,90),
                'tipe_menu'         => $this->getMenuTipe(),
                'is_habis'          => false,
                'image_menu'        => null,
            ]);
        }
    }

    private function getMenuTipe()
    {
        $data = ['makanan','minuman'];
        $k = array_rand($data);
        return (string)($data[$k]);
    }
}
