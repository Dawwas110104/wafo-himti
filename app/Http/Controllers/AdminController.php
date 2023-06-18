<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $datas = Pertanyaan::all();

        $semua = count(Pertanyaan::all());
        $terjawab = count(Pertanyaan::where('status', 1)->get());
        $belum_terjawab = count(Pertanyaan::where('status', 0)->get());

        return view('admin.semua', compact([
            'datas',
            'semua',
            'terjawab',
            'belum_terjawab'
        ]));
    }

    public function terjawab(Request $request)
    {
        $datas = Pertanyaan::all();

        $semua = count(Pertanyaan::all());
        $terjawab = count(Pertanyaan::where('status', 1)->get());
        $belum_terjawab = count(Pertanyaan::where('status', 0)->get());

        return view('admin.terjawab', compact([
            'datas',
            'semua',
            'terjawab',
            'belum_terjawab'
        ]));
    }

    public function belum(Request $request)
    {
        $datas = Pertanyaan::all();

        $semua = count(Pertanyaan::all());
        $terjawab = count(Pertanyaan::where('status', 1)->get());
        $belum_terjawab = count(Pertanyaan::where('status', 0)->get());

        return view('admin.belum', compact([
            'datas',
            'semua',
            'terjawab',
            'belum_terjawab'
        ]));
    }

    public function detail($id)
    {
        $data = Pertanyaan::where('id', $id)->first();

        return view('admin.detail', compact([
            'data'
        ]));
    }

    public function inActive($id)
    {
        Pertanyaan::where('id', $id)->update([
            'status' => 0,
        ]);

        return redirect()->route('admin.index')->with('message', 'Pertanyaan id: ' . $id . ', telah dinonaktifkan!');
    }

    public function update(Request $request,  $id)
    {
        Pertanyaan::where('id', $id)->update([
            'jawaban' => $request->jawaban,
            'status' => 1,
        ]);

        return redirect()->route('admin.index')->with('message', 'Pertanyaan id: ' . $id . ', telah dijawab!');
    }
}
