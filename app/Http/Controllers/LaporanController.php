<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarMenu;
use App\Models\Laporan;

class LaporanController extends Controller
{
    public function index()
    {
        $daftarmenu = Laporan::with('daftarmenu')->paginate(10);
        $laporan = Laporan::latest()->get();
        return view('laporan.index', compact('laporan', 'daftarmenu'));
    }

    public function create()
    {
        $daftarmenu = DaftarMenu::all();
        return view('laporan.create', compact('daftarmenu'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'daftar_menu' => 'required|string|max:155',
            // 'harga' => 'required',
            // 'jumlah' => 'required',
            'total' => 'required'
        ]);
        $getdaftarmenu = $request->daftar_menu;
        $datamenu = DaftarMenu::where('id','=',$getdaftarmenu)->get()->first();
        $countjumlah = $datamenu['harga_menu'] * $request->total;

        $laporan = Laporan::create([
            'daftarmenu_id' => $datamenu['id'],
            'harga_menu' => $datamenu['harga_menu'],
            'jumlah' => $countjumlah,
            'total' => $request->total
        ]);

        if ($laporan) {
            return redirect()
                ->route('laporan.index')
                ->with([
                    'success' => 'New post has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    public function edit($id)
    {
        $laporan = Laporan::findOrFail($id);
        $getmenu = DaftarMenu::where('id','=',$laporan['daftarmenu_id'])->get()->first();
        $daftarmenu = DaftarMenu::all();
        return view('laporan.edit', compact('laporan', 'daftarmenu', 'getmenu'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_menu' => 'required|string|max:155',
            // 'harga' => 'required',
            // 'jumlah' => 'required',
            'total' => 'required'
        ]);

        $laporan = Laporan::findOrFail($id);
        $getdaftarmenu = $request->nama_menu;
        $datamenu = DaftarMenu::where('id','=',$getdaftarmenu)->get()->first();
        $countjumlah = $datamenu['harga_menu'] * $request->total;

        $laporan->update([
            'daftarmenu_id' => $datamenu['id'],
            'harga_menu' => $datamenu['harga_menu'],
            'jumlah' => $countjumlah,
            'total' => $request->total
        ]);

        if ($laporan) {
            return redirect()
                ->route('laporan.index')
                ->with([
                    'success' => 'Post has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

    public function destroy($id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->delete();

        if ($laporan) {
            return redirect()
                ->route('laporan.index')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('laporan.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
