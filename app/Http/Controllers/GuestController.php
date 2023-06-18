<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;

class GuestController extends Controller
{
    public function index()
    {
        return view('guest.index');
    }

    public function tanya()
    {
        return view('guest.tanya');

    }

    public function buat(Request $request)
    {
        // return $request;
        Pertanyaan::create([
            'nama' => $request->name,
            'pertanyaan' => $request->message,
        ]);

        return  redirect()->route('guest.index')->with('message','Pertanyaan berhasil disampaikan, harap menunggu 1X24 jam.');

        // return redirect()->route('your route name')->with('error','Data Deleted');
        // return redirect()->route('your route name')->with('Warning','Are you sure you want to delete? ');
        // return redirect()->route('your route name')->with('info','This is xyz information');
    }
}
