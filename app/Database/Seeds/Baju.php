<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Baju extends Seeder
{
    public function run()
    {
        $data = [
            'baju_title'    => 'polo',
            'baju_description'    => 'Baju polo yang nyaman dengan motif bagus',

        ];

        // Simple Queries
        //$this->db->query("INSERT INTO baju (baju_id, baju_title, baju_description) VALUES(:baju_id:, :baju_title:, :baju_description:)", $data);

        // Using Query Builder
        $this->db->table('baju')->insert($data);
    }
}
