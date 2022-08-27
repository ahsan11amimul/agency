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
        Schema::create('dispatch_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->reference('id')->on('users')->onDelete('cascade');
            $table->string('company_name');
            $table->string('company_contact');
            $table->string('address_line_1');
            $table->string('city');
            $table->string('address_line_2');
            $table->string('address_line_3');
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');
            $table->string('primary_email');
            $table->string('primary_contact');
            $table->string('other_phone');
            $table->string('fax');
            $table->string('receivable_name');
            $table->string('receivable_email');
            $table->string('receivable_phone');
            $table->string('payable_name');
            $table->string('payable_email');
            $table->string('payable_phone');
            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_phone');
         
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
        Schema::dropIfExists('dispatch_information');
    }
};
