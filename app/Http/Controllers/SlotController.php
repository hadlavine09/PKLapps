<?php

namespace App\Http\Controllers;

use App\Models\Slot;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model Slot
        $Slot = Slot::all();
        return view('Slot.index', compact('Slot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Slot.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:Slots|max:255',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $Slot = new Slot();
        $Slot->nama = $request->nama;
        $Slot->nis = $request->nis;
        $Slot->jenis_kelamin = $request->jenis_kelamin;
        $Slot->agama = $request->agama;
        $Slot->tgl_lahir = $request->tgl_lahir;
        $Slot->alamat = $request->alamat;
        $Slot->save();
        return redirect()->route('Slot.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Slot = Slot::findOrFail($id);
        return view('Slot.show', compact('Slot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Slot = Slot::findOrFail($id);
        return view('Slot.edit', compact('Slot'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $validated = $request->validate([
            'nama' => 'required',
            'nis' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $Slot = Slot::findOrFail($id);
        $Slot->nama = $request->nama;
        $Slot->nis = $request->nis;
        $Slot->jenis_kelamin = $request->jenis_kelamin;
        $Slot->agama = $request->agama;
        $Slot->tgl_lahir = $request->tgl_lahir;
        $Slot->alamat = $request->alamat;
        $Slot->save();
        return redirect()->route('Slot.index')
            ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Slot = Slot::findOrFail($id);
        $Slot->delete();
        return redirect()->route('Slot.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
