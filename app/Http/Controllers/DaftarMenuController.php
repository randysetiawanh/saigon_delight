<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarMenu;
use App\Models\Kategori;
use Illuminate\Support\Str;

class DaftarMenuController extends Controller
{
    public function index()
    {
        $daftarmenu = DaftarMenu::with('kategori')->paginate(10);
        $kategori = Kategori::latest()->get();
        $kategorii = Kategori::all();
        return view('daftarmenu.index', compact('daftarmenu', 'kategori', 'kategorii'));
    }

    public function create()
    {
        $kategorii = Kategori::all();
        return view('daftarmenu.create', compact('kategorii'));
    }
    
    public function store(Request $request)
    {

        $this->validate($request, [
            'kategori_menu' => 'required',
            'kode_menu' => 'required',
            'nama_menu' => 'required',
            'harga' => 'required'
        ]);

        $daftarmenu = DaftarMenu::create([
            'kategori_id' => $request->kategori_menu,
            'kode_menu' => $request->kode_menu,
            'nama_menu' => $request->nama_menu,
            'harga_menu' => $request->harga

        ]);
        if ($daftarmenu) {
            return redirect()
                ->route('daftarmenu.index')
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
        $daftarmenu = DaftarMenu::findOrFail($id);
        return view('daftarmenu.edit', compact('daftarmenu'));
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kategori_id' => 'required',
            'kode_menu' => 'required',
            'nama_menu' => 'required',
            'harga_menu' => 'required'
        ]);

        $daftarmenu = DaftarMenu::findOrFail($id);

        $daftarmenu->update([
            'kategori_id' => $request->kategori_id,
            'kode_menu' => $request->kode_menu,
            'nama_menu' => $request->nama_menu,
            'harga_menu' => $request->harga
        ]);

        if ($daftarmenu) {
            return redirect()
                ->route('daftarmenu.index')
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
        $daftarmenu = DaftarMenu::findOrFail($id);
        $daftarmenu->delete();
        if ($daftarmenu) {
            return redirect()
                ->route('daftarmenu.index')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('daftarmenu.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
