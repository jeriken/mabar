<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Acara;

class AcaraController extends Controller
{
    public function all()
    {
        return Acara::all();
    }

    // mengambil data by id
    public function show($id)
    {
        return Acara::find($id);
    }

    // menambah data
    public function store(Request $request)
    {
        return Acara::create($request->all());
    }

    // mengubah data
    public function update($id, Request $request)
    {
        $Acara = Acara::find($id);
        $Acara->update($request->all());
        return $Acara;
    }

    // menghapus data
    public function delete($id)
    {
        $Acara = Acara::find($id);
        $Acara->delete();
        return 204;
    }
}
