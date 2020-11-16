<?php namespace App\Database\Seeds;

class ProdukSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                    [
                        'nama_produk' => 'Baju',
                        'deskripsi_produk'   => 'Baju panjang'
                    ],
                    [
                        'nama_produk' => 'Celana',
                        'deskripsi_produk'   => 'Celana panjang'
                    ],

                ];

                  $this->db->table('produk')->insertBatch($data);            
        }
}