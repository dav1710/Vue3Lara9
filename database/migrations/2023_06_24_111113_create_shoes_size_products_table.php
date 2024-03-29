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
        Schema::create('shoes_size_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shoes_sizes_id')->nullable()->index()->constrained('shoes_sizes');
            $table->foreignId('product_id')->nullable()->index()->constrained('products');
            $table->timestamps();
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
        Schema::dropIfExists('shoes_size_products');
    }
};
