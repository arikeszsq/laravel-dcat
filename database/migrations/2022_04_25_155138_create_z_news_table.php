<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('')->comment('标题');
            $table->string('description')->default('')->comment('描述');
            $table->string('content')->default('')->comment('内容');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('z_news');
    }
}
