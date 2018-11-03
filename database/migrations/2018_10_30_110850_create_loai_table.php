<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai', function (Blueprint $table) {
            $table -> engine = 'InnoDB';
            $table -> unsignedTinyInteger('l_ma')
                -> autoIncrement()
                -> comment('Đây là mã loại');
            $table->string('l_ten',50)
                -> comment('đây là tên loại');
            $table->timestamp('l_taoMoi')
                -> default(DB::raw('CURRENT_TIMESTAMP'))
                -> comment('Thời điểm đầu tiên khởi tạo loại');
            $table->timestamp('l_capNhat')
                -> default(DB::raw('CURRENT_TIMESTAMP'))
                -> comment('Thời điểm đầu tiên cập nhật');
            $table->unsignedTinyInteger('l_trangThai')
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
        Schema::dropIfExists('loai');
    }
}
