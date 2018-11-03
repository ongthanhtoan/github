<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table -> engine = 'InnoDB';
            $table -> bigInteger('sp_ma')
                -> autoIncrement()
                -> comment('Đây là mã của sản phẩm');
            $table -> string('sp_ten',50)
                -> comment('');
            $table -> Integer('sp_giaGoc')
                -> comment();
            $table -> Integer('sp_giaBan')
                -> comment('');
            $table -> string('sp_hinh',200)
                -> comment('');
            $table -> Text('sp_thongTin')
                -> comment('');
            $table -> string('sp_danhGia',50)
                -> comment('');
            $table -> unsignedTinyInteger('l_ma')
                -> comment('Đây là mã loại');
            $table->timestamp('sp_taoMoi')
                -> default(DB::raw('CURRENT_TIMESTAMP'))
                -> comment('Thời điểm đầu tiên khởi tạo sản phẩm');
            $table->timestamp('sp_capNhat')
                -> default(DB::raw('CURRENT_TIMESTAMP'))
                -> comment('Thời điểm đầu tiên cập nhật sản phẩm');
            $table->unsignedTinyInteger('sp_trangThai')
                -> default('2')
                -> comment('1: khóa, 2: khả dụng');
            $table -> unique(['sp_ten']);
            $table -> foreign("l_ma") -> references("l_ma") -> on("loai");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
