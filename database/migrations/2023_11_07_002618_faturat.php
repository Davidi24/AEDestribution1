<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('faturat', function (Blueprint $table) {
            $table->id();
            $table->string('column1', 255);
            $table->string('column2', 255);
            $table->string('column3', 255);
            $table->string('column4', 255);
            $table->string('column5', 255);
            $table->string('column6', 255);
            $table->string('column7', 255);
            $table->string('column8', 255);
            $table->string('column9', 255);
            $table->string('column10', 255);
            $table->string('column11', 255);
            $table->string('column12', 255);
            $table->string('column13', 255);
            $table->string('column14', 255);
            $table->string('column15', 255);
            $table->date('creation_date');
            $table->timestamps();
        });
    }

    public function down()
    {

    }
};
