<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventPostsTable extends Migration
{
    public function up(): void
    {
        Schema::create('event_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Admin who created the post
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_posts');
    }
}