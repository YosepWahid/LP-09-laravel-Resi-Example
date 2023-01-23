<?php

namespace App\Http\Controllers;

use App\Models\Resi;
use Illuminate\Http\Request;

class SideController extends Controller
{
    public function create()
    {
        return view('resi.create');
    }

    public function store(Request $req)
    {
        $req->validate([
            '*' => 'required'
        ]);
        Resi::create($req->all());
        return redirect()->route('Resi');
    }

    public function edit($id)
    {
        $data = Resi::find($id);
        return view('resi.edit', ['item' => $data]);
    }

    public function show($id)
    {
        $data = Resi::find($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Resi',
            'data' => $data,
        ]);
    }

    public function update(Request $req, $id)
    {
        $req->validate([
            '*' => 'required'
        ]);
        Resi::find($id)->update($req->all());
        return redirect()->route('Resi');
    }

    public function delete($id)
    {
        Resi::find($id)->delete();
        return back();
    }

    public function print($id)
    {
        $data = Resi::find($id);
        return view('resi.print', ['item' => $data]);
    }
}
