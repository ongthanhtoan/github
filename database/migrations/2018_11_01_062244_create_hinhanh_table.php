<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanh', function (Blueprint $table) {
            $table -> bigInteger('sp_ma')
            -> comment('Đây là mã sản phẩm');
            $table -> unsignedTinyInteger('ha_stt')
            ->  comment('Đây là stt hình ảnh');
            $table -> String('ha_ten',150)
            -> comment('Đây là tên của hình ảnh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinhanh');
    }
}
