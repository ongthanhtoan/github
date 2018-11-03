<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXuatxuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xuatxu', function (Blueprint $table) {
            $table -> engine = 'InnoDB';
            $table -> unsignedTinyInteger('xx_ma')
                -> autoIncrement()
                -> comment('Đây là mã xuất xứ');
            $table -> string('xx_ten',50)
                -> comment('Đây là tên màu');
            $table->timestamp('xx_taoMoi')
                -> default(DB::raw('CURRENT_TIMESTAMP'))
                -> comment('Thời điểm đầu tiên khởi xuất xứ');
            $table->timestamp('xx_capNhat')
                -> default(DB::raw('CURRENT_TIMESTAMP'))
                -> comment('Thời điểm đầu tiên cập nhật xuất xứ');
            $table->unsignedTinyInteger('xx_trangThai')
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
        Schema::dropIfExists('xuatxu');
    }
}
