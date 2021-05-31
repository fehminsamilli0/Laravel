<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('ust_id')->nullable();
            $table->string('kategori_adi',30);
            $table->string('slug',40);
            $table->timestamp('daxilolunma_tarixi')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('yenilenme_tarixi')->default(\DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('silinme_tarixi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori');
    }
}
