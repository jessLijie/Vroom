<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile');

            $table->integer('userid');
            //from login session

            $table->string('status');
            //pending at default
            //decline means rejected

            $table->float('downpayment')->nullable();
            $table->float('loanamount')->nullable();
            //paid if both not null

            $table->string('eligibility');
            //paid = yes

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
        Schema::dropIfExists('customers');
    }
}
