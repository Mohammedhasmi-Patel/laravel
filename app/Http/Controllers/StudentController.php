<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;


class StudentController
{
    function getStudents(){
        $response = Http::get("https://jsonholder.typicode.com");
        return "user get function";
    }
}
