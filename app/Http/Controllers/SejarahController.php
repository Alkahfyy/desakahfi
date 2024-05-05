<?php

namespace App\Http\Controllers;

use App\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::find(1);
        return view('sejarah.index', compact('sejarah'));
    }

    public function update(Request $request, Sejarah $sejarah)
    {

        $data = $request->validate([
            'konten' => ['nullable', 'string'],
        ]);

        $sejarah->update($data);
        if ( $sejarah->update($data)) {
            return redirect()->back()->with('success', 'visi misi desa berhasil di perbarui');
        } else {
            return redirect()->back()->with('error', 'Tidak ada perubahan yang berhasil disimpan');
        }
    }
}
