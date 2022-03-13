<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_faqs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('answer');
            $table->unsignedBigInteger('mobile_brand_id');
            $table->tinyInteger('status')->default(1);
            $table->foreign('mobile_brand_id')
                ->references('id')
                ->on('mobile_brands');
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
        Schema::dropIfExists('brand_faqs');
    }
}
