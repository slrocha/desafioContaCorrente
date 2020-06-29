<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContaCorrente;

class ContaCorrenteController extends Controller
{

    public function index()
    {
        return response()->json(ContaCorrente::all());
    }

    public function create()
    {
        return view('create');
    }
 
 
    public function store(Request $request)
    {
        $data = ContaCorrente::create($request);
        return response()->json($data);
    }

    public function show($id)
    {
        $data = ContaCorrente::findOrfail($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $data = ContaCorrente::findOrfail($id);
        $data->fill($request);
        $data->save();
        return response()->json($data);
    }

    public function destroy($id)
    {
        $data = ContaCorrente::findOrfail($id);
        $data->delete();
        return response()->json(['message'=>'Deletado com sucesso']);
    }
}
