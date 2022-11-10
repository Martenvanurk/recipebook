<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        public function up()
        {
            Schema::create('recipes', function (Blueprint $table) {
                $table->id();

                $table->string('title');
                $table->text('short_description');
                $table->text('long_description');

                // Refactor this later to different tables
                $table->text('tools');
                $table->text('ingredients');

                $table->smallInteger('duration_to_make'); // Save in minutes
                $table->smallInteger('duration_to_wait'); // Save in minutes

                $table->smallInteger('difficulty');

                $table->smallInteger('servings');
                $table->foreignIdFor(\App\Models\ServingType::class);

                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('recipes');
        }
    };
