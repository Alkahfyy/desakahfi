<?php

namespace App\Http\Controllers;

use App\VisiMisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class VisiMisiController extends Controller
{

    public function index()
    {
        $visiMisi = VisiMisi::find(1);
        return view('visi-misi.index', compact('visiMisi'));
    }

    public function update(Request $request, VisiMisi $visiMisi)
    {

        $data = $request->validate([
            'visi' => ['nullable', 'string'],
            'misi' => ['nullable', 'string'],

        ]);

        if ($visiMisi->update($data)) {
            return redirect()->back()->with('success', 'visi misi desa berhasil di perbarui');
        } else {
            return redirect()->back()->with('error', 'Tidak ada perubahan yang berhasil disimpan');
        }
    }


    public function visiMisiShow(Request $request)
    {
        $visiMisi = VisiMisi::find(1);

        return view('visi-misi.show', compact('visiMisi'));
    }
}
