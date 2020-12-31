<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destinasi;
use Illuminate\Support\Facades\Gate;
use PDF;


class DestinasiController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
        $this->middleware(function($request, $next){
            if(Gate::allows('manage')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    public function index(){
        $Destinasi = Destinasi::all();
        return view('ManageDestinasi',['Destinasi' => $Destinasi]);
    }
    public function add(){
        return view('addDestinasi');
    }
    public function create(Request $request) {
        if($request->file('image')){
            $image_name = $request->file('image')->store('destinasi','public');
        }
           
        Destinasi::create([
            'title' => $request->title,
            'content' => $request->content,
            'jenis_wisata' => $request->jenis_wisata,
            'image' => $image_name
        ]);
        return redirect('/manageDestinasi');
    }
    public function edit($id) {
        $Destinasi = Destinasi::find($id);
        return view('editDestinasi',['Destinasi'=>$Destinasi]);
    }
    public function update($id, Request $request){
        $Destinasi = Destinasi::find($id);

        $Destinasi->title = $request->title;
        $Destinasi->content = $request->content;
        $Destinasi->jenis_wisata = $request->jenis_wisata;

        if($Destinasi->image && file_exists(storage_path('app/public/' . $Destinasi->image))) {
            \Storage::delete('public/'.$Destinasi->image);
        }
        $image_name = $request->file('image')->store('destinasi', 'public');
        $Destinasi->image = $image_name;

        $Destinasi->save();
        return redirect('/manageDestinasi');
    }
    public function delete($id) {
        $Destinasi = Destinasi::find($id);
        $Destinasi->delete();
        return redirect('/manageDestinasi');
    }
    public function cetak_pdf(){
        $Destinasi = Destinasi::all();
        $pdf = PDF::loadview('destinasi_pdf',['Destinasi'=>$Destinasi]);
        return $pdf->stream();
    }
       
}
