<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("brand");
            $table->integer("mg");
            $table->integer("quantity");
            $table->string("image");
            $table->string("catagory");
            $table->string("scientific");
            $table->float("price");
            $table->char("status")->default("Y")->comment("Y= available, N= not available");
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
        Schema::dropIfExists('drugs');
    }
}
