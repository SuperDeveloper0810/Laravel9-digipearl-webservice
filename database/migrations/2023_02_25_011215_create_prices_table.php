<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('website_type');
            $table->string('domain_name');
            $table->string('price');
            $table->string('is_freehosting');
            $table->string('build_type');
            $table->string('is_designlogo');
            $table->string('is_creat_social');
            $table->string('is_email_marketing');
            $table->string('is_realtime_support');
            $table->string('is_freeconsultation');
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
        Schema::dropIfExists('prices');
    }
};
