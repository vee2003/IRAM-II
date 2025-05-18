<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content')->nullable();
            $table->string('slug')->unique();
            $table->timestamps();
        });

        //Test data
        DB::table('pages')->insert([
            [
                'title' => 'About Us',
                'content' => 'Welcome to Iram II Elementary School!',
                'slug' => 'about-us',
            ],
            [
                'title' => 'Programs',
                'content' => 'Our Special Indigenous Education Program',
                'slug' => 'programs',
            ],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('pages');
    }
};

