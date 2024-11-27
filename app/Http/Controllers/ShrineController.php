<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShrineController extends Controller
{
    /**
     * Показати всі святині.
     */
    public function index()
    {
        // Отримати всі записи з таблиці 'shrines'
        $shrines = DB::table('shrines')->get();

        // Повернути вигляд з передачею даних
        return view('shrineChoose', ['shrines' => $shrines]);
    }

    /**
     * Показати конкретну святиню за ID.
     */
    public function show($id)
    {
        // Отримати святиню за ID
        $shrine = DB::table('shrines')->where('id', $id)->first();

        // Якщо святиню не знайдено, показати 404
        if (!$shrine) {
            abort(404);
        }

        // Повернути вигляд з передачею даних
        return view('dynamicShrine', ['shrine' => $shrine]);
    }
}
