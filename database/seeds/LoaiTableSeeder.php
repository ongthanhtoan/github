<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class LoaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$faker = Faker\Factory::create('vi_VN');
        $list = [];
        $types = ["Hoa lẻ", "Phụ liệu", "Bó hoa", "Giỏ hoa", "Hoa hộp giấy", "Kệ hoa", "Vòng hoa", "Bình hoa", "Hoa hộp gỗ"];
        sort($types);
        $now = new Carbon('2018-11-1 18:20:00');
        for($i = 1; $i <= count($types); $i++)
        {
        	array_push($list,
        		[
        			'l_ten' => $types[$i-1],
        			'l_taoMoi' => $now ->format('Y-m-d H:i:s'),
        			'l_capNhat' => $now ->format('Y-m-d H:i:s'),
        			'l_trangThai' => 2
        		]
        	);
        }
        DB::table('loai') -> insert($list);
    }
}
