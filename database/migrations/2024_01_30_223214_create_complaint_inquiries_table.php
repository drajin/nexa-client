<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('complaint_inquiries', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('customer_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('brand_id')->constrained();
            $table->foreignUuid('note_id')->nullable()->constrained()->nullOnDelete();
            $table->text('description');
            $table->string('status');
            $table->string('priority');
            $table->timestamp('creation_timestamp');
            $table->timestamp('resolution_timestamp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaint_inquiries');
    }
};
