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
            $table->float('price_by_brand')->nullable();
            $table->float('price_by_model')->nullable();
            $table->string('average_time')->nullable();
            $table->string('delivery_time')->nullable();
            $table->text('feature')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->unsignedBigInteger('mobile_brand_id')->nullable();
            $table->foreign('mobile_brand_id')
                ->references('id')
                ->on('mobile_brands');
            $table->unsignedBigInteger('mobile_model_id')->nullable();
            $table->foreign('mobile_model_id')
                ->references('id')
                ->on('mobile_models');
            $table->string('service_type')->nullable();
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
