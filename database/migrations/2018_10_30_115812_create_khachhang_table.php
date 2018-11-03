<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table -> engine = 'InnoDB';
            $table -> bigInteger('kh_ma')
                -> autoIncrement()
                -> comment('Đây là mã khách hàng');
            $table -> string('kh_taiKhoan',50)
                -> comment('Đây là tên người dùng');
            $table -> string('kh_matKhau',32)
                -> comment('Đây là mật khẩu của khách hàng');
            $table -> string('kh_hoTen',100)
                -> comment('Đây là họ tên của khách hàng');
            $table -> unsignedTinyInteger('kh_gioiTinh')
                -> default('1')
                -> comment('1: là nam, 2: là nữ');
            $table -> string('kh_email',100)
                -> comment('Đây là email của khách hàng');
            $table -> dateTime('kh_ngaySinh')
                -> default(DB::raw('CURRENT_TIMESTAMP'))
                -> comment('Đây là ngày sinh của khách hàng');
            $table -> string('kh_diaChi',250)
                -> default("")
                -> comment('Đây là địa chỉ của khách hàng');
            $table -> string('kh_dienThoai',11)
                -> default("")
                -> comment('Đây là điện thoại của khách hàng');
            $table->timestamp('kh_taoMoi')
                -> default(DB::raw('CURRENT_TIMESTAMP'))
                -> comment('Thời điểm đầu tiên khởi tạo tài khoản');
            $table->timestamp('kh_capNhat')
                -> default(DB::raw('CURRENT_TIMESTAMP'))
                -> comment('Thời điểm đầu tiên cập nhật tài khoản');
            $table->unsignedTinyInteger('kh_trangThai')
                -> default('3')
                -> comment('1: admin, 2: quản trị, 3: người dùng');
            $table -> unique(['kh_taiKhoan','kh_email','kh_dienThoai']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachhang');
    }
}
