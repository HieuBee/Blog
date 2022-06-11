<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testController extends Controller
    {
        /* public function getxinchao($ten, $namsinh)
        {
            return 'xinchaocau :' . $ten . '<br> co nam sinh la' . $namsinh ;
        }
    public function gettambiet($ten, $namsinh)
    {
        return 'xinchaoban :' . $ten . '<br> co nam sinh la' . $namsinh ;
    }
    public function getindex($ten, $namsinh){
        return view('hello-user', compact('ten', 'namsinh'));
    }
    public function getvonglap($user){
        return view('hello-user', compact('user'));
    } */
    public function getmaster(){
        return view('index');
    }
    
    public function CreateTable()
    {
        Schema::create('bang', function($table){
            $table->increments('id');
            $table->string('name', 50);
            $table->timestamps();
        });
    }
/*
    public function CreateTable1() {
        Schema::create('users', function($table) {
            $table->String('email');
        });
    }

    public function CreateTable2() {
        Schema::create('users', function($table) {
            $table->renameColumn('email', 'users_mail');
        });
    }
*/


    public function Posts() {
        Schema::create('post', function ($table) {
            $table->integer('user_id')->unsigned();
            $table->increments('id');
            $table->String('email');
            $table->string('name', 50);
            $table->foreign('user_id')->references('id')
                                      ->on('bang')
                                      ->onDelete('cascade');
        });  
    }

    public function custom() {
        return view('custom');
    }

    public function store() {
        return view('store');
    }

    public function motorsport() {
        return view('motorsport');
    }

    public function homepage() {
        return view('homepage');
    }

    public function huracan() {
        return view('huracan');
    }
    
}
