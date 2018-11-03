<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMauSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mau_sanpham', function (Blueprint $table) {
            $table -> bigInteger('sp_ma')
            -> comment('Đây mà lã của sản phẩm');
            $table -> unsignedTinyInteger('m_ma')
            -> comment('đây là mã của màu');
            $table -> smallInteger('msp_soLuong')
            -> comment('Đây là số lượng màu của sản phẩm');
            $table -> foreign('sp_ma') -> references('sp_ma') -> on('sanpham');
            $table -> foreign('m_ma') -> references('m_ma') -> on('mau');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mau_sanpham');
    }
}
