<?php

use App\TotalPendapatan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTotalPendapatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('total_pendapatans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bulan_id');
            $table->integer('kode');
            $table->integer('total_Pendapatan');
            $table->integer('tahun');
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
        Schema::dropIfExists('total_pendapatans');
    }
}
