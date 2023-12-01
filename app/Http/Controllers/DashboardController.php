<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('store');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        return view('master.layouts.dashboard-tabel', [
            'pengaduan' => Pengaduan::paginate(10),
            'title' => 'Dashboard'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = $request->validate([
            'nama' => 'required',
            'judul' => 'required',
            'kategori' => 'required',
            'pesan' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'file_input' => 'required',
        ]);
        $rules['file_input'] = $request->file('file_input')->store('bukti');
        $rules['status'] = "Baru";
        // dd($rules);
        Pengaduan::create($rules);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengaduan $dashboard)
    {
        $getID = Pengaduan::findOrFail($dashboard->id);
        // dd($getID);
        $getID['status'] = "Sudah di proses";
        $getID->save();
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }
}
