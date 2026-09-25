<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // نام همایش
            $table->string('slug')->unique();
            $table->text('description')->nullable(); // توضیحات
            $table->string('image')->nullable(); // پوستر
            $table->dateTime('event_date')->nullable(); // تاریخ برگزاری
            $table->string('location')->nullable(); // محل برگزاری
            $table->string('status')->default('upcoming');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};