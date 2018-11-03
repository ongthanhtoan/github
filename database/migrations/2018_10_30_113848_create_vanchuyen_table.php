<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVanchuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vanchuyen', function (Blueprint $table) {
            $table -> engine = 'InnoDB';
            $table -> unsignedTinyInteger('vc_ma')
                -> autoIncrement()
                -> comment('Đây là mã vận chuyển');
            $table -> string('vc_ten',200)
                -> comment('Đây là tên vận chuyển');
            $table -> integer('vc_chiPhi')
                -> comment('Đây là chi phí của vận chuyển');
            $table -> text('vc_dienGiai')
                -> comment('Đây là diển giải của vận chuyển');
            $table->timestamp('vc_taoMoi')
                -> default(DB::raw('CURRENT_TIMESTAMP'))
                -> comment('Thời điểm đầu tiên khởi tạo vận chuyển');
            $table->timestamp('vc_capNhat')
                -> default(DB::raw('CURRENT_TIMESTAMP'))
                -> comment('Thời điểm đầu tiên cập nhật vận chuyển');
            $table->unsignedTinyInteger('vc_trangThai')
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
        Schema::dropIfExists('vanchuyen');
    }
}
