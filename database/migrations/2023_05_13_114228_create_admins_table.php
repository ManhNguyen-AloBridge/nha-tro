<?php

use App\Enums\EnumAdminRole;
use App\Enums\EnumGender;
use App\Enums\EnumUserRole;
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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->enum('role', EnumAdminRole::values())->default(EnumAdminRole::ADMIN->value);
            $table->string('name', 100);
            $table->string('email', 100);
            $table->string('password', 250);
            $table->string('phone_number', 20);
            $table->enum('gender', EnumGender::values())->default(EnumGender::MALE->value);
            $table->dateTime('birthdate')->nullable();
            $table->string('bank_account_number', 50);
            $table->string('account_holder', 100);
            $table->string('bank_name', 50);
            $table->string('address', 250)->nullable();
            $table->string('image', 150)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
