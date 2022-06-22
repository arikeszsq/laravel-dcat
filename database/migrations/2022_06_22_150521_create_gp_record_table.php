<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGpRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gp_record', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->default('');
            $table->string('name')->default('NULL')->nullable();
            $table->decimal('start_price')->default('NULL')->nullable()->comment('开盘价');
            $table->decimal('end_price')->default('NULL')->nullable()->comment('收盘价');
            $table->string('change_hand')->default('NULL')->nullable()->comment('换手');
            $table->string('qrr')->default('NULL')->nullable()->comment('量比');
            $table->integer('out_num')->default('NULL')->nullable()->comment('外盘');
            $table->integer('in_num')->default('NULL')->nullable()->comment('内盘');
            $table->integer('deal_num')->default('NULL')->nullable();
            $table->string('avg')->default('NULL')->nullable();
            $table->decimal('max_price')->default('NULL')->nullable();
            $table->decimal('min_price')->default('NULL')->nullable();
            $table->string('20_day')->default('NULL')->nullable();
            $table->string('60_day')->default('NULL')->nullable();
            $table->string('main_out')->default('NULL')->nullable();
            $table->string('img')->default('NULL')->nullable();
            $table->text('bak')->default('NULL')->nullable();
            $table->dateTime('update_time')->default('NULL')->nullable();
            $table->dateTime('create_time')->default('NULL')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gp_record');
    }
}
