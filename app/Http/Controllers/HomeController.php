<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        
        /* функции для дебага кода
        dump($var); виводит содержимое переменной, после продожается вывод сайта
        dd($var); выводит содержимое и прекращает дальнейший вивод чего либо после себя*/
        
        $products = Product::orderBy('created_at')->take(8)->get();
        
        /*foreach ($products as $product){
            echo 'Title: ' . $product->title;
            echo "<br>";
            echo 'Price: ' . $product->price;
            echo "<br>";
            echo "-------------------------------";
            echo "<br>";
        }*/
        
        //            dd($products);
        return view('home.index', [
            'products' => $products,
            ]);
            
        }
    }
    