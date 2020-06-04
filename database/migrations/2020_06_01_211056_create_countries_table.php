<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->integerIncrements('id')->comment('id');
            $table->string('cn_name')->comment('中文名');
            $table->string('en_name')->comment('英文名');
            $table->string('ping_name')->comment('拼音名');
            $table->unsignedInteger('continent_id')->comment('大洲id');
            $table->foreign('continent_id')->references('id')->on('continents')->onDelete('cascade');
            $table->char('code',3)->comment('国家三字代码');
            $table->char('low_code',2)->comment('国家二字代码')->nullable();
            $table->text('remark')->comment('备注')->nullable();
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
        Schema::dropIfExists('countries');
    }
}
