<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        echo'LISTADO DE PRODUCTOS DE ECOMMERCE';
    }

    public function create(){
        echo'FORMULARIO PARA CREAR UN PRODUCTO';
    }

    public function show($name,$categoria = null){
        if($categoria ==null){
            echo "El producto ES: $name";
        }else{
                echo "El producto es $name, y su categoria es $categoria";
            }
        }
    }

