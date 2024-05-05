<?php

namespace App\Http\Controllers;

use App\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        $visiMisi = Sejarah::find(1);
        return view('sejarah.index', compact('Sejarah'));
    }

    public function update(Request $request, Sejarah $sejarah)
    {

        $data = $request->validate([
            'konten' => ['nullable', 'string'],
        ]);

        if ($request->visi != $sejarah->visi  || $request->misi != $sejarah->misi) {
            $sejarah->update($data);
            return redirect()->back()->with('success', 'visi misi desa berhasil di perbarui');
        } else {
            return redirect()->back()->with('error', 'Tidak ada perubahan yang berhasil disimpan');
        }
    }
}
