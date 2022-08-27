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
        Schema::create('account_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->reference('id')->on('users')->onDelete('cascade');
            $table->string('payment_preference');
            $table->string('account_type');
            $table->string('bank_name');
            $table->string('bank_routing_number');
            $table->string('bank_account_number');
            $table->string('address_nickname');
            $table->string('name');
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('city');
            $table->string('complete_address')->nullable();
            $table->string('order')->nullable()->default(0);
            $table->double('dollar')->nullable()->default(0.00);
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');
            $table->string('phone');
            $table->string('contact_email');
            $table->string('po_email');
            $table->string('pay_term');
            $table->string('account_nickname');
            $table->string('bank_location');
            $table->string('preferred_currency');
            $table->string('payment_method');
            $table->string('remittance_email');
            $table->string('certificate')->nullable();
            $table->string('certificate_number')->nullable();
            $table->date('expire_date')->nullable();

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
        Schema::dropIfExists('account_information');
    }
};
