<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendingUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pending_users', function (Blueprint $table) {
            $table->id();
            $table->string('county');            // Selectează Județul
            $table->string('company_name');      // Nume Firmă
            $table->string('company_cui');       // CUI Firmă
            $table->string('manager_name');      // Nume Manager
            $table->string('company_address');   // Sediu Firmă
            $table->string('email')->unique();   // Email (unic pentru fiecare firmă)
            $table->tinyInteger('status')->default(0); // Status (0 - în așteptare, 1 - aprobat)
            $table->timestamps();                // Created at și updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pending_users');
    }
}
