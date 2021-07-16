<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id(); //crea colonna "id" con tipo di dato BIGINT che è UNDEFINED NOTNULL AUTOINCREMENT
            $table->string("location", 100);
            $table->string("address");
            $table->string("cover");
            $table->integer("price");
            $table->integer("days");
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
        Schema::dropIfExists('packages');
    }
}
