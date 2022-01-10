<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etenders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('t_date')->nullable();
            $table->date('deadline')->nullable();
            $table->string('title')->nullable();
            $table->string('t_download')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0=inactive,1=active');
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
        Schema::dropIfExists('etenders');
    }
}
