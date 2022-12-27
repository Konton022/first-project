<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('customer', 128)->nullable();
            $table->string('address', 255)->nullable()->default('text');
            $table->integer('install_price')->unsigned()->nullable()->default(0);
            $table->integer('monthly_price')->unsigned()->nullable()->default(0);
            $table->integer('type_lm_id', 100)->default('1');
            $table->string('lm_checkup', 255)->unsigned()->default();
            $table->bigInteger('provider_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
            $table->foreign('type_lm_id')->references('id')->on('type_lm')->onDelete('cascade');
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
        Schema::dropIfExists('offers');
    }
};
