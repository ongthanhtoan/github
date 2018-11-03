<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThanhtoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thanhtoan', function (Blueprint $table) {
            $table -> engine = 'InnoDB';
            $table -> unsignedTinyInteger('tt_ma')
                -> autoIncrement()
                -> comment('Đây là mã thanh toán');
            $table -> string('tt_ten',200)
                -> comment('Đây là tên của thanh toán');
            $table -> text('tt_dienGiai')
                -> comment('Đây là giải thích về các thanh toán');
            $table->timestamp('tt_taoMoi')
                -> default(DB::raw('CURRENT_TIMESTAMP'))
                -> comment('Thời điểm đầu tiên khởi tạo của thanh toán');
            $table->timestamp('tt_capNhat')
                -> default(DB::raw('CURRENT_TIMESTAMP'))
                -> comment('Thời điểm đầu tiên cập nhật thanh toán');
            $table->unsignedTinyInteger('tt_trangThai')
                -> default('2')
                -> comment('1: khóa, 2: khả dụng');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thanhtoan');
    }
}
