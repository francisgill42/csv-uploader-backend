<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('entity_name')->nullablle();
            $table->string('registration_incorporation_date')->nullablle();
            $table->string('paid_up_capital1_ordinary')->nullablle();
            $table->string('uen_of_audit_firm1')->nullablle();
            $table->string('name_of_audit_firm1')->nullablle();
            $table->string('address_type')->nullablle();
            $table->string('street_name')->nullablle();
            $table->string('building_name')->nullablle();
            $table->string('block')->nullablle();
            $table->string('unit_no')->nullablle();
            $table->string('company_type_description')->nullablle();
            $table->string('primary_ssic_code')->nullablle();
            $table->string('primary_ssic_description')->nullablle();
            $table->string('secondary_ssic_code')->nullablle();
            $table->string('secondary_ssic_description')->nullablle();
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
        Schema::dropIfExists('records')->nullablle();
    }
}
