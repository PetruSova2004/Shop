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
        Schema::table('products', function (Blueprint $table) {
            $table->text('description');
            $table->text('content');
            $table->string('preview_image');

            $table->integer('price');
            $table->integer('count');
            $table->boolean('is_published')->default(true);

            $table->unsignedBigInteger('sub_category_id');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('content');
            $table->dropColumn('preview_image');
            $table->dropColumn('price');
            $table->dropColumn('count');
            $table->dropColumn('is_published');
            $table->dropColumn('sub_category_id');
        });
    }
};
