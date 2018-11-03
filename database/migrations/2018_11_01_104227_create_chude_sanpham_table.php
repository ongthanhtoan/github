<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChudeSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chude_sanpham', function (Blueprint $table) {
            $table -> bigInteger('sp_ma')
            -> comment('Đây là mã của sản phẩm');
            $table -> unsignedTinyInteger('cd_ma')
            -> comment('Đây là mã của chủ đề');
            $table -> foreign('sp_ma') -> references('sp_ma') -> on('sanpham');
            $table -> foreign('cd_ma') -> references('cd_ma') -> on('chude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chude_sanpham');
    }
}
