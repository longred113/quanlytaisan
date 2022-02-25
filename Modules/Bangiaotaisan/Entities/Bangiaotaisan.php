<?php

namespace Modules\Bangiaotaisan\Entities;

use Illuminate\Database\Eloquent\Model;

class Bangiaotaisan extends Model
{

    protected $table = 'bangiaotaisan__bangiaotaisans';
    public $translatedAttributes = [];
    protected $fillable = [
        'loai_ban_giao',
        'ngay',
        'ly_do_ban_giao',
        'bo_phan_ban_giao',
        'bo_phan_nhan_ban_giao',
        'nhan_vien_ban_giao',
        'nhan_vien_nhan_ban_giao',
        'ma_tai_san',
        'ten_tai_san',
        'so_luong',
        'tinh_trang',
        'nguoi_su_dung',
    ];
}
