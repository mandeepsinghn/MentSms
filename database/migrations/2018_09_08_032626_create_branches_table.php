<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id');
            $table->string('name', 250);
            $table->text('logo');
            $table->text('tagline');
            $table->text('address');
            $table->string('city', 250);
            $table->string('state', 250);
            $table->string('post_code', 50);
            $table->integer('country_id');
            $table->string('phone', 250);
            $table->text('email');
            $table->text('website');
            $table->string('fax', 250);
            $table->timestamps();
            $table->enum('status', ['ACTIVE', 'INACTIVE', 'DELETED']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branches');
    }
}
