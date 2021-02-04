<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardItemsTable extends Migration
{
    public function up(): void
    {
        Schema::create('card_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('card_id');
            $table->unsignedInteger('position');
            $table->unsignedInteger('value_id');
            $table->boolean('checked')->default(false);
            $table->timestamps();
        });
    }
}
