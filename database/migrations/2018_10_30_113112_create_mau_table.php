<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mau', function (Blueprint $table) {
            $table -> engine = 'InnoDB';
            $table -> unsignedTinyInteger('m_ma')
                -> autoIncrement()
                -> comment('Đây là mã màu');
            $table -> string('m_ten',50)
                -> comment('Đây là tên màu');
            $table->timestamp('m_taoMoi')
                -> default(DB::raw('CURRENT_TIMESTAMP'))
                -> comment('Thời điểm đầu tiên khởi tạo màu');
            $table->timestamp('m_capNhat')
                -> default(DB::raw('CURRENT_TIMESTAMP'))
                -> comment('Thời điểm đầu tiên cập nhật');
            $table->unsignedTinyInteger('m_trangThai')
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
        Schema::dropIfExists('mau');
    }
}
