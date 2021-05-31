<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('kategori')->truncate();
        $id=DB::table('kategori')->insertGetId(['kategori_adi'=>'Kitab','slug'=>'Roman']);
        DB::table('kategori')->insert(['kategori_adi'=>'Vərəq','slug'=>'Vereq','ust_id'=>$id]);

        DB::table('kategori')->insert(['kategori_adi'=>'Kale','slug'=>'Hasar']);
        DB::table('kategori')->insert(['kategori_adi'=>'Oyun','slug'=>'GTA']);
        DB::table('kategori')->insert(['kategori_adi'=>'Ders','slug'=>'Tarix']);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
