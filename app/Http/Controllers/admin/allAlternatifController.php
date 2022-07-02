<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\alternatif;
use Illuminate\Http\Request;
use App\Models\kriteria;
use RealRashid\SweetAlert\Facades\Alert;

class allAlternatifController extends Controller
{
    public function index()
    {
        return view('pages.admin.pages-admin.allalternatif.allalternatif')
            ->with(
                [
                    'title' => 'Data Kriteria',
                    'alternatif' => alternatif::orderBy('kriteria_id')->filterAlternatif(request(['searchA']))->get()
                ]
            );
    }

    public function create()
    {
        return view('pages.admin.pages-admin.allalternatif.tambah')
            ->with(
                [
                    'title' => 'Tambah Alternatif',
                    'kriteria' => kriteria::all(),
                ]
            );
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'nilai' => 'required|integer',
            'kriteria_id' => 'required'
        ];
        $data = $request->validate($rules);
        alternatif::create($data);

        Alert::success('Success', 'Berhasil menambah alternatif');
        return redirect()
            ->route('allalternatif.index');
    }

    public function edit($id)
    {
        return view('pages.admin.pages-admin.allalternatif.edit')
            ->with(
                [
                    'title' => 'Edit Alternatif',
                    'kriteria' => kriteria::all(),
                    'alternatif' => alternatif::findOrFail($id)
                ]
            );
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'required',
            'nilai' => 'required|integer',
            'kriteria_id' => 'required'
        ];
        $data = $request->validate($rules);

        $db = alternatif::findOrFail($id);

        $db->update($data);
        Alert::success('Success', 'Berhasil mengubah alternatif');
        return redirect()
            ->route('allalternatif.index');
    }

    public function destroy($id)
    {
        alternatif::findOrFail($id)->delete();
        Alert::success('Success', 'Berhasil menghapus alternatif');
        return redirect()->back();
    }
}
