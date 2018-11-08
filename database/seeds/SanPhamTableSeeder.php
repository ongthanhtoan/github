<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class SanPhamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN');
        $now = new Carbon('2018-11-1','Asia/Ho_Chi_Minh');
        $list = [];
        for($i = 1; $i <= 100; $i++)
        {
        	$created = $now -> copy() -> addSeconds($faker -> numberBetween(1,259200));
        	$updated = $created -> copy() -> addSeconds($faker -> numberBetween(300,172800));
        	array_push($list,
        		[
        			'sp_taoMoi' => $created,
        			'sp_capNhat' => $updated,
        			'sp_ten' => $faker->text(50),
        			'sp_giaGoc' => rand(1000,1000000),
        			'sp_giaBan' => rand(1000,1000000),
        			'sp_hinh' => $faker->text(10),
        			'sp_thongTin' => $faker->text(50),
        			'sp_danhGia' => $faker->text(50),
        			'sp_trangThai' => 2,
        			'l_ma' => rand(1,10)
        		]
        	);
        	$now = $updated -> copy();
        }
        DB::table('sanpham') -> insert($list);
    }
}
