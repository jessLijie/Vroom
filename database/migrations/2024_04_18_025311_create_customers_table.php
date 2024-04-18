<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile');
            $table->integer('userid');
            $table->string('status')->default('pending');
            $table->float('downpayment')->nullable();
            $table->float('loanamount')->nullable();
            $table->string('eligibility');
            $table->timestamps();
        });

        // Insert customers
        DB::table('customers')->insert([
            ['name' => 'Customer A', 'mobile' => '0123456789', 'userid' => 2, 'status' => 'approved', 'downpayment' => 20, 'eligibility' => 'ineligible'],
            ['name' => 'Customer B', 'mobile' => '0153468954', 'userid' => 3, 'status' => 'rejected', 'downpayment' => null, 'eligibility' => 'ineligible'],
            ['name' => 'Customer M', 'mobile' => '0124586542', 'userid' => 4, 'status' => 'approved', 'downpayment' => null, 'eligibility' => 'ineligible'],
            ['name' => 'Customer D', 'mobile' => '0123875487', 'userid' => 5, 'status' => 'approved', 'downpayment' => 15, 'eligibility' => 'ineligible'],
            ['name' => 'Customer F', 'mobile' => '0123427759', 'userid' => 7, 'status' => 'approved', 'downpayment' => 10, 'eligibility' => 'ineligible'],
            ['name' => 'Customer G', 'mobile' => '01143456789', 'userid' => 8, 'status' => 'approved', 'downpayment' => 10, 'eligibility' => 'ineligible'],
            ['name' => 'Customer H', 'mobile' => '0158375777', 'userid' => 9, 'status' => 'approved', 'downpayment' => 20, 'eligibility' => 'ineligible'],
            ['name' => 'Customer I', 'mobile' => '0173456789', 'userid' => 10, 'status' => 'approved', 'downpayment' => 20, 'eligibility' => 'ineligible'],
            ['name' => 'Customer J', 'mobile' => '0173456789', 'userid' => 11, 'status' => 'approved', 'downpayment' => 20, 'eligibility' => 'ineligible'],
            ['name' => 'Customer K', 'mobile' => '0163456789', 'userid' => 12, 'status' => 'approved', 'downpayment' => 20, 'eligibility' => 'ineligible'],
            ['name' => 'Customer C', 'mobile' => '0163456789', 'userid' => 14, 'status' => 'approved', 'downpayment' => 10, 'eligibility' => 'ineligible'],
            ['name' => 'Customer O', 'mobile' => '0163456789', 'userid' => 16, 'status' => 'pending', 'downpayment' => null, 'eligibility' => 'ineligible'],
            ['name' => 'Customer Q', 'mobile' => '0183457579', 'userid' => 18, 'status' => 'approved', 'downpayment' => 20, 'eligibility' => 'ineligible'],
            ['name' => 'Customer R', 'mobile' => '0143456749', 'userid' => 19, 'status' => 'approved', 'downpayment' => 20, 'eligibility' => 'ineligible'],
            ['name' => 'Customer S', 'mobile' => '0143456780', 'userid' => 20, 'status' => 'approved', 'downpayment' => 20, 'eligibility' => 'ineligible'],
        ]);

    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
