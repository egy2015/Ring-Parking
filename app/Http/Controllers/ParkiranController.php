<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parkir;
use App\Models\Parkiran;
use Illuminate\Support\Facades\DB;
// use config\app\PDF;
use Barryvdh\DomPDF\PDF;

class ParkirController extends Controller
{

    public function index()
    {
        $parkir = Parkiran::all();
    	return view('page.index', compact('parkir'));
    }


    public function create()
    {
        $data = new Parkiran;
        return view('page.create', compact('data'));
    }


    public function store(Request $request)
    {

        $data = new Parkiran;
        $data->plat_no = $request->plat_no;
        $data->j_kend = $request->j_kend;
        $data->biaya = $request->biaya;

        if($request->file('image')){
            $file = $request->file('image');
            $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('assets/images/parking', $nama_file);
            $data->image = $nama_file;
        }
        $data->save();

        return redirect('page')->with('success', "Data berhasil disimpan");
    }


    public function show(Parkiran $parkir)
    {
        return view('page.detail', compact('parkir'));
    }


    public function edit(Parkiran $parkir)
    {
        return view('page.edit', compact('parkir'));
    }


    public function update(Request $request, Parkiran $parkir)
    {

        $parkir->update($request->all());

        return redirect()->route('page.index')->with('success', 'Data berhasil terupdate!');
    }


    public function destroy(Parkiran $parkir)
    {
        $parkir->delete();
        return redirect()->route('page.index');
    }

   

    public function search(Request $request)
    {
        $keyword = $request->search;
        $parkir = Parkiran::where('j_kend', 'like', "%" . $keyword . "%")->paginate(5);
        return view('page.index', compact('parkir'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

   
}
