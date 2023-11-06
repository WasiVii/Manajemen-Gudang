<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
// use App\Models\User;
use App\Models\Masterdata\Pegawai;
use App\Models\Masterdata\Company;
use App\Models\Masterdata\Material;
use App\Models\Masterdata\Service;
use App\Models\Masterdata\Partner;
use App\Models\Masterdata\InformasiProduk;
use App\Models\Transaksi\Quotation;
use Illuminate\Support\Str;
use App\Models\Konstanta\Propinsi;
use App\Models\Konstanta\Kota;
use App\Models\Konstanta\Kecamatan;
use App\Models\Masterdata\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('MenuTableSeeder');
        $this->call('MenuRoleTableSeeder');
        $this->call('MenuDetailTableSeeder');
        $this->call('MenuDetailRoleTableSeeder');
        $this->call('RoleTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('GenderTableSeeder');
        $this->call('ReligionTableSeeder');
        $this->call('InformasiProdukTableSeeder');
        $this->command->info('All table seeded!');
    }
}

class MenuTableSeeder extends Seeder
{

    public function run()
    {
        $data = array(
            array(
                'menu_kode' => 'dashboard',
                'menu_nama' => 'Dashboard',
                'menu_icon' => 'icon-dashboard',
                'menu_href' => '/dashboard',
                'menu_status' => '0',
            ),
            array(
                'menu_kode' => 'masterdata',
                'menu_nama' => 'Master Data',
                'menu_icon' => 'icon-card',
                'menu_href' => "",
                'menu_status' => '1',
            ),
            array(
                'menu_kode' => 'transaksi',
                'menu_nama' => 'Transaksi',
                'menu_icon' => 'icon-pricing-table',
                'menu_href' => "",
                'menu_status' => '2',
            ),
        );

        DB::table('menu')->insert($data);
    }
}

class MenuRoleTableSeeder extends Seeder
{

    public function run()
    {
        $data = array(
            array(
                'menu_id' => '1',
                'role_id' => '1',
            ),
            array(
                'menu_id' => '2',
                'role_id' => '1',
            ),
            array(
                'menu_id' => '3',
                'role_id' => '1',
            ),
        );

        DB::table('menu_role')->insert($data);
    }
}

class MenuDetailTableSeeder extends Seeder
{

    public function run()
    {
        $data = array(
            array(
                'menu_id' => '2',
                'detail_menu_kode' => 'user',
                'detail_menu_nama' => 'User',
                'detail_menu_href' => '/masterdata/user',
            ),
            array(
                'menu_id' => '2',
                'detail_menu_kode' => 'informasi_produk',
                'detail_menu_nama' => 'Informasi Produk',
                'detail_menu_href' => '/masterdata/informasi_produk',
            ),
            array(
                'menu_id' => '2',
                'detail_menu_kode' => 'role',
                'detail_menu_nama' => 'Role',
                'detail_menu_href' => '/masterdata/role',
            ),

            array(
                'menu_id' => '3',
                'detail_menu_kode' => 'barang_masuk',
                'detail_menu_nama' => 'Barang Masuk',
                'detail_menu_href' => '/transaksi/barang_masuk',
            ),
        );

        DB::table('detail_menu')->insert($data);
    }
}

class MenuDetailRoleTableSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            array(
                'detail_menu_id' => '1',
                'role_id' => '1',
            ),
            array(
                'detail_menu_id' => '2',
                'role_id' => '1',
            ), 
            array(
                'detail_menu_id' => '3',
                'role_id' => '1',
            ),
            array(
                'detail_menu_id' => '4',
                'role_id' => '1',
            ), 
        );

        DB::table('detail_menu_role')->insert($data);
    }
}

class RoleTableSeeder extends Seeder
{

    public function run()
    {
        $data = array(
            array(
                'role_nama' => 'Admin',
            ),
            array(
                'role_nama' => 'Pemilik',
            ),
            array(
                'role_nama' => 'Pegawai',
            ),
        );
        DB::table('role')->insert($data);
    }
}

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create('id_ID');
        User::create(
            array(
                'name' => 'Admin',
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'role_id' => 1,
                'user_date_of_birth' => $faker->dateTime,
                'user_place_of_birth' => $faker->city,
                'gender_id' => $faker->numberBetween($min = 1, $max = 2),
                'religion_id' => $faker->numberBetween($min = 1, $max = 7),
                'user_domisili_address' => $faker->address,
                'user_provinsi' => $faker->state,
                'user_kecamatan' => $faker->state,
                'user_city' => $faker->city,
                'user_postal_code' => $faker->randomNumber(5, true),
                'user_phone_number' => $faker->e164PhoneNumber,
            )
        );
    }
}


class GenderTableSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            array(
                'gender_name' => 'Laki-Laki',
            ),
            array(
                'gender_name' => 'Perempuan',
            ),
        );
        DB::table('gender')->insert($data);
    }
}

class ReligionTableSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            array(
                'religion_name' => 'Islam',
            ),
            array(
                'religion_name' => 'Budha',
            ),
            array(
                'religion_name' => 'Kristen',
            ),
            array(
                'religion_name' => 'Katolik',
            ),
            array(
                'religion_name' => 'Hindu',
            ),
            array(
                'religion_name' => 'Konghuchu',
            ),
            array(
                'religion_name' => 'Lainnya',
            ),
        );
        DB::table('religion')->insert($data);
    }
}

class InformasiProdukTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        InformasiProduk::create(
            array(
                'nama_produk' => 'Beras AG12',
                'jenis_produk' => 'Beras',
                'satuan_produk' => 'Kg (Kilogram)',
                'harga_produk' => 10000,
                'stok_produk' => 0,
            )
        );
    }
}