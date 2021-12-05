<?php

use App\Models\ActivityType;
use App\Models\Contact;
use App\Models\Receptivity;
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
            $table->dateTime('time');
            $table->text('description')->nullable();
            $table->text('pendencies')->nullable();
            $table->string('status',2)->nullable();
            $table->foreignIdFor(ActivityType::class) ->constrained() ->onDelete('restrict');
            $table->foreignIdFor(Receptivity::class) ->constrained() ->onDelete('restrict');
            $table->foreignIdFor(Contact::class) ->constrained() ->onDelete('restrict');
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
