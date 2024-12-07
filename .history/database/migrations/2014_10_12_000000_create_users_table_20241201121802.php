<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('county')->nullable();            // Selectează Județul (poate fi null pentru super-admin)
            $table->string('company_name')->nullable();      // Nume Firmă (poate fi null pentru super-admin)
            $table->string('company_cui')->nullable();       // CUI Firmă (poate fi null pentru super-admin)
            $table->string('manager_name')->nullable();      // Nume Manager (poate fi null pentru super-admin)
            $table->string('company_address')->nullable();   // Sediu Firmă (poate fi null pentru super-admin)
            $table->string('email')->unique();               // Email (unic pentru fiecare firmă)
            $table->string('password')->nullable();          // Parolă (poate fi null implicit)
            $table->tinyInteger('status')->default(0);       // Status (0 - în așteptare, 1 - aprobat, 2 - respins)
            $table->enum('role', ['owner','super-admin', 'admin', 'user'])->nullable(); // Roluri utilizator
            $table->unsignedBigInteger('super_admin_id')->nullable(); // FK către super-admin
            $table->unsignedBigInteger('department_id')->nullable();  // FK către departament
            $table->timestamps();                            // Created at și updated at

            // Constrângeri
            $table->foreign('super_admin_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('set null');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
