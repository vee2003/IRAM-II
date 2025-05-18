<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('sender');
            $table->text('message');
            $table->timestamps();
        });

        // Test Data
        DB::table('messages')->insert([
            [
                'sender' => 'user',
                'message' => 'Hello!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sender' => 'bot',
                'message' => 'Hi there! How can I assist you today?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
};
