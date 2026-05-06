<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('firmateVeshjeve', function (Blueprint $table) {
            $table->id();
            $table->string("FirmaVeshjes_umfv");
            $table->string("ProduktiVeshjes_umfv");
            $table->string("CmimiVeshjes_umfv");
     
        });
    }


    public function down()
    {
        Schema::dropIfExists('firmateVeshjeve');
    }
};