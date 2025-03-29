<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->binary('image');
            $table->text('description');
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
        Schema::dropIfExists('products');
        // Schema::table('products',function (Blueprint $table){
            // $table->dropForeign('products_season_id_foreign');
            // $table->dropColumn('product_id','season_id');
        //     $table->dropForeign('products_season_id');
        //     $table->dropColumn('product_id','season_id');
        // });
    }
}
