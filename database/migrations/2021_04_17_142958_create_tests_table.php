<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('Region')->nullable();	
            $table->string('CountryItemType')->nullable();
            $table->string('SalesChannel')->nullable();	
            $table->string('OrderPriority')->nullable();
            $table->string('OrderDate')->nullable();	
            $table->string('OrderID')->nullable();	
            $table->string('ShipDate')->nullable();	
            $table->string('UnitsSold')->nullable();	
            $table->string('UnitPrice')->nullable();	
            $table->string('UnitCost')->nullable();	
            $table->string('TotalRevenue')->nullable();	
            $table->string('TotalCost')->nullable();	
            $table->string('TotalProfit')->nullable();
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
        Schema::dropIfExists('tests');
    }
}
