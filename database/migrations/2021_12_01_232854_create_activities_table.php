<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->dateTime('scheduled_at');
            $table->text('observation')->nullable();
            $table->text('pending')->nullable();
            $table->string('status')->nullable();
            $table->foreignIdFor(ActivityType::class)->constrained()->onDelete('restrict');
            $table->foreignIdFor(Receptivity::class)->constrained()->onDelete('restrict');
            $table->foreignIdFor(Contact::class)->constrained()->onDelete('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
