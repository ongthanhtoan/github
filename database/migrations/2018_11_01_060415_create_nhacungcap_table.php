<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhacungcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhacungcap', function (Blueprint $table) {
            $table -> smallInteger('ncc_ma')
            -> autoIncrement()
            -> comment('Đây là mã nhà cung cấp');
            $table -> String('ncc_ten',191)
            -> comment('Đây là tên nhà cung cấp');
            $table -> String('ncc_daiDien',100)
            -> comment('Đây là tên đại diện nhà cung cấp');
            $table -> String('ncc_diaChi',250)
            -> comment('Đây là địa chỉ nhà cung cấp');
            $table -> String('ncc_dienThoai',11)
            -> comment('Đây là số điện thoại nhà cung cấp');
            $table -> String('ncc_email',100)
            -> comment('Đây là email nhà cung cấp');
            $table->timestamp('ncc_taoMoi')
            -> default(DB::raw('CURRENT_TIMESTAMP'))
            -> comment('Thời điểm đầu tiên khởi tạo nhà cung cấp');
            $table->timestamp('ncc_capNhat')
            -> default(DB::raw('CURRENT_TIMESTAMP'))
            -> comment('Thời điểm đầu tiên cập nhật nhà cung cấp');
            $table->unsignedTinyInteger('ncc_trangThai')
            -> default('2')
            -> comment('1: khóa, 2: khả dụng');
            $table -> unsignedTinyInteger('xx_ma')
            -> comment('Đây là mã xuất xứ');
            $table -> unique(['ncc_ten']);
            $table -> foreign('xx_ma') -> references('xx_ma') -> on('xuatxu');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhacungcap');
    }
}
