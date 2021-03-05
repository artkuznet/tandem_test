<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('person', function (Blueprint $table) {
            $table->id();
            $table->string('last_name')->index();
            $table->string('first_name')->index();
            $table->string('middle_name')->index();
            $table->date('birth_date');
            $table->boolean('active');
            $table->bigInteger('group_id');
            $table->timestamps();
            $table->foreign('group_id')
                ->references('id')
                ->on('group')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('person');
    }
}
