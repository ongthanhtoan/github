<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quyen', function (Blueprint $table) {
            $table -> engine = 'InnoDB';
            $table -> unsignedTinyInteger('q_ma')
                -> autoIncrement()
                -> comment('Đây là mã quyền');
            $table -> string('q_ten',50)
                -> comment('Đây là tên quyền');
            $table -> string('q_dienGiai',250)
                -> comment('Đây là giải thích về các quyền');
            $table->timestamp('q_taoMoi')
                -> default(DB::raw('CURRENT_TIMESTAMP'))
                -> comment('Thời điểm đầu tiên khởi tạo quyền');
            $table->timestamp('q_capNhat')
                -> default(DB::raw('CURRENT_TIMESTAMP'))
                -> comment('Thời điểm đầu tiên cập nhật quyền');
            $table->unsignedTinyInteger('q_trangThai')
                -> default('2')
                -> comment('1: admin, 2: người dùng');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quyen');
    }
}
