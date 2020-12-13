<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Poetscircle extends Migration
{
    public function up()
    {
        DB::statement("DROP TABLE IF EXISTS poets");
        DB::statement("CREATE TABLE poets (
            poet_code INT, 
            first_name CHARACTER(30), 
            surname CHARACTER(40), 
            adress CHARACTER(100), 
            postcode CHARACTER(20), 
            telephone_number CHARACTER(30),
            PRIMARY KEY (poet_code)
        )");

        DB::statement("DROP TABLE IF EXISTS poems");
        DB::statement("CREATE TABLE poems (
            poem_code INT, 
            poem_title CHARACTER(50), 
            poem_contents TEXT, 
            poet_code INT,
            PRIMARY KEY (poem_code)
        )");

        DB::statement("DROP TABLE IF EXISTS poems_publication");
        DB::statement("CREATE TABLE poems_publication (
            poem_code INT, 
            publication_code INT,
            PRIMARY KEY (poem_code)
        )");

        DB::statement("DROP TABLE IF EXISTS publications");
        DB::statement("CREATE TABLE publications (
            publication_code INT, 
            title CHARACTER(100), 
            price FLOAT(5,2)
        )");

        DB::statement("DROP TABLE IF EXISTS sale_publications");
        DB::statement("CREATE TABLE sale_publications (
            sale_code INT, 
            publication_code INT,
            PRIMARY KEY (publication_code)
        )");

        DB::statement("DROP TABLE IF EXISTS sales");
        DB::statement("CREATE TABLE sales (
            sale_code INT,
            date DATE, 
            amount FLOAT(10,2), 
            customer_code INT,
            PRIMARY KEY (sale_code)
        )");

        DB::statement("DROP TABLE IF EXISTS customers");
        DB::statement("CREATE TABLE customers (
            customer_code INT, 
            first_name CHARACTER(30), 
            surname CHARACTER(40), 
            adress CHARACTER(100), 
            postcode CHARACTER(20), 
            telephone_number CHARACTER(30),
            PRIMARY KEY (customer_code)
        )");
        
    }

    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            Schema::dropIfExists('customers');
        });
    }
}
