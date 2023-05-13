<?php

use App\Enums\EnumGender;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained('rooms');
            $table->foreignId('vehicle_id')->constrained('vehicles')->nullable();
            $table->foreignId('card_id')->constrained('id_cards');
            $table->foreignId('motel_id')->constrained('motels');
            $table->foreignId('contract_id')->constrained('contracts');
            $table->string('name', 100);
            $table->string('email', 100);
            $table->string('password', 250);
            $table->string('phone_number', 20);
            $table->string('image', 150)->nullable();
            $table->enum('gender', EnumGender::values())->default(EnumGender::MALE->value);
            $table->dateTime('birthdate')->nullable();
            $table->string('address', 250)->nullable();
            $table->dateTime('joined_date');
            $table->dateTime('leaved_date')->nullable();
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
        Schema::dropIfExists('users');
    }
}
