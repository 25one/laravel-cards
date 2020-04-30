<?php

//use DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Autos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->index();
            $table->string('name');            
            $table->string('image', 500);            
        }); 
        DB::table('autos')->insert(
           array(
             ['country_id' => 1, 'name' => 'Ford', 'image' => 'ford.jpg'],    
             ['country_id' => 1, 'name' => 'Chevrolet', 'image' => 'chevrolet.jpg'],   
             ['country_id' => 2, 'name' => 'VW', 'image' => 'vw.jpg'],    
             ['country_id' => 2, 'name' => 'Opel', 'image' => 'opel.jpg'],  
             ['country_id' => 3, 'name' => 'Renault', 'image' => 'renault.jpg'],    
             ['country_id' => 3, 'name' => 'Peugeot', 'image' => 'peugeot.jpg'],                             
           )               
        );
         

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('autos');        
    }
}
