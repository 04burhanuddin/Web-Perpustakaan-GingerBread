<?php

use Illuminate\Database\Seeder;

class BukusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Buku::insert([
            [
              'id'  			=> 1,
              'judul'  			=> 'Laravel',
              'isbn'			=> '49579345',
              'pengarang' 		=> 'Test Upload',
              'penerbit'		=> 'PT. Coba',
              'tahun_terbit'	=> 2020,
              'jumlah_buku'		=> 5,
              'deskripsi'		=> 'Buku Pertama Belajar Laravel Utk Pemula',
              'lokasi'			=> 'rak1',
              'cover'			=> 'laravel.jpg',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
        ]);
    }
}
