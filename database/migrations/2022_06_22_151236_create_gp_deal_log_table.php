<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGpDealLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gp_deal_log', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->default('NULL')->nullable();
            $table->tinyInteger('type')->default('NULL')->nullable();
            $table->integer('num')->default('NULL')->nullable();
            $table->decimal('price')->default('NULL')->nullable();
            $table->time('time')->default('NULL')->nullable();
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
        Schema::dropIfExists('gp_deal_log');
    }
}
