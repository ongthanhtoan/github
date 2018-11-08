<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
 	const CREATED_AT = 'sp_taoMoi';
    const UPDATED_AT = 'sp_capNhat';   
    protected $table = 'sanpham';
    protected $fillable = ['sp_ten','spgiaGoc','sp_giaBan','sp_hinh','sp_thongTin','sp_danhGia','sp_taoMoi','sp_capNhat','sp_trangThai','l_ma'];
    protected $guarded = ['sp_ma'];
    protected $primatyKey = 'sp_ma';
    protected $dates = ['sp_taoMoi','sp_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
    public function Loai()
    {
    	return $this->belongsTo('App\Loai','l_ma','l_ma');
    }
    public function hinhAnhs()
    {
    	return $this->hasMany('App\HinhAnh','sp_ma','sp_ma')
    }
}
