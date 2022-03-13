<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('price_by_brand')->default(0.00);
            $table->float('price_by_model')->default(0.00);
            $table->string('average_time')->nullable();
            $table->string('delivery_time')->nullable();
            $table->json('features')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->unsignedBigInteger('mobile_brand_id');
            $table->foreign('mobile_brand_id')
                ->references('id')
                ->on('mobile_brands');
            $table->unsignedBigInteger('mobile_model_id');
            $table->foreign('mobile_model_id')
                ->references('id')
                ->on('mobile_models');
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
        Schema::dropIfExists('services');
    }
}
