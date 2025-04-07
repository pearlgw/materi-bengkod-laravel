<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\User;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        // $obats = Obat::latest()->paginate(5);
        $obats = Obat::latest()->get();

        return view('dokter.obat.obat', compact('obats'));
    }
    public function create()
    {
        // $users = User::latest()->get();
        // return view('dokter.obat.create', compact('users'));
        
        return view('dokter.obat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => ['required', 'string', 'max:255'],
            'kemasan' => ['required', 'string', 'max:255'],
            'harga' => ['required', 'integer'],
        ]);

        Obat::create($request->all());

        return redirect('/dokter/obat')->with('success', 'Obat berhasil ditambahkan');
    }

    public function edit($id)
    {
        $obat = Obat::find($id);
        return view('dokter.obat.edit', compact('obat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_obat' => ['required', 'string', 'max:255'],
            'kemasan' => ['required', 'string', 'max:255'],
            'harga' => ['required', 'integer'],
        ]);

        Obat::find($id)->update($request->all());

        return redirect('/dokter/obat')->with('success', 'Obat berhasil diubah');
    }

    public function destroy($id)
    {
        Obat::find($id)->delete();

        return redirect('/dokter/obat')->with('success', 'Obat berhasil dihapus');
    }
}
