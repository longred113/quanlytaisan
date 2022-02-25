<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBangiaotaisanBangiaotaisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangiaotaisan__bangiaotaisans', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('loai_ban_giao');
            $table->string('ngay');
            $table->text('ly_do_ban_giao');
            $table->string('bo_phan_ban_giao');
            $table->string('bo_phan_nhan_ban_giao');
            $table->string('nhan_vien_ban_giao');
            $table->string('nhan_vien_nhan_ban_giao');
            $table->string('ma_tai_san');
            $table->string('ten_tai_san');
            $table->integer('so_luong');
            $table->string('tinh_trang');
            $table->String('nguoi_su_dung');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bangiaotaisan__bangiaotaisans');
    }
}
