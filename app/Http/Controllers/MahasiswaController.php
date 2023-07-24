<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Mahasiswa::all();

        return view('dashboard.siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required|unique:mahasiswas',
            'nama' => 'required|max:255',
            'jk' => 'required|in:Laki-laki,Perempuan',
            'tgllahir' => 'required|date',
        ]);

        $siswa = new Mahasiswa();

        $siswa->nim = $request->nim;
        $siswa->nama = $request->nama;
        $siswa->jk = $request->jk;
        $siswa->tgllahir = $request->tgllahir;
        $siswa->alamat = $request->alamat;
        $siswa->lastauthor_id = $request->user()->id;

        $siswa->save();

        // input admin history
        DB::table('adminhistory')->insert([
            'user_id' => $request->user()->id,
            'siswa_id' => $siswa->id,
            'action' => 'create',
            'created_at' => now()
        ]);

        return redirect('siswa')->with('status', 'Form Data Has Been validated and insert');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswas = Mahasiswa::where('id', $id)->first();
        return view('dashboard.siswa.edit', compact('siswas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required|max:255',
            'jk' => 'required|in:Laki-laki,Perempuan',
            'tgllahir' => 'required|date',
        ]);

        $siswa = Mahasiswa::find($id);

        $siswa->nim = $request->nim;
        $siswa->nama = $request->nama;
        $siswa->jk = $request->jk;
        $siswa->tgllahir = $request->tgllahir;
        $siswa->alamat = $request->alamat;
        $siswa->lastauthor_id = $request->user()->id;

        $siswa->update();

        // input admin history
        DB::table('adminhistory')->insert([
            'user_id' => $request->user()->id,
            'siswa_id' => $request->id,
            'action' => 'update',
            'created_at' => now()
        ]);

        return redirect('siswa')->with('status', 'Form Data Has Been validated and updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        Mahasiswa::find($id)->delete();

        // input admin history
        DB::table('adminhistory')->insert([
            'user_id' => $request->user()->id,
            'siswa_id' => $request->id,
            'action' => 'delete',
            'created_at' => now()
        ]);

        return redirect('siswa')->with('status', 'Form Data Has Been deleted');
    }
}
