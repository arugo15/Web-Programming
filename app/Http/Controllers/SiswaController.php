<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('data', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'urutan' => 'required|integer',
            'nim' => 'required|numeric',
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa.index');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'urutan' => 'required|integer',
            'nim' => 'required|numeric',
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());

        return redirect()->route('siswa.index');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index');
    }

    public function getAbout()
    {
        return view('about');
    }

    public function getHome()
    {
        return view('home2');
    }

    public function getData()
    {
        $siswa = Siswa::all();
        return view('data', compact('siswa'));
    }

    public function deleteSiswa($id){
        
        Siswa::destroy($id);
        return redirect(route('data.index'));
    }
}
