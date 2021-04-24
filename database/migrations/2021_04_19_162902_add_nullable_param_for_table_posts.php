<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullableParamForTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('external_id')->nullable()->change();
            $table->text('text')->nullable()->change();
            $table->string('social_network')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('external_id')->nullable(false)->change();
            $table->text('text')->nullable(false)->change();
            $table->string('social_network')->nullable(false)->change();
        });
    }
}
