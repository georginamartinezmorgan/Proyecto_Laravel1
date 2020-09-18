<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Auto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('auto', function (Blueprint $table) {
                $table->id();
                $table->string('nombre del dueño');
                $table->string('placa')->unique();
                $table->Integer('año')->nullable();
                $table->string('password');
               
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('auto');
        }
    }
