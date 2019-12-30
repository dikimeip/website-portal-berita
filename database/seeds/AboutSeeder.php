<?php

use Illuminate\Database\Seeder;
use App\TentangModel;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TentangModel::create({
        	'tentang' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'kontak' => '0852-2131-1122',
			'alamat' => 'Dsn Mlati Ds Simongagrok Kec Dawarblandong Kab Mojokerto',
			'email' => 'dc_news@dc.com',
			'status' => 'aktif'
        });
    }
}


