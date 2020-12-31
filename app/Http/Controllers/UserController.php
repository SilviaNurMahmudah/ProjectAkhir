<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Gate;
use PDF;


class UserController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
        $this->middleware(function($request, $next){
            if(Gate::allows('manage')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    public function User(){
        $User = User::all();
        return view('ManageUser',['User' => $User]);
    }
    public function edit($id) {
        $User = User::find($id);
        return view('editUser',['User'=>$User]);
    }
    public function update($id, Request $request){
        $User = User::find($id);

        $User->name = $request->name;
        if($User->profil && file_exists(storage_path('app/public/' . $User->profil))) {
            \Storage::delete('public/'.$Destinasi->image);
        }
        $image_name = $request->file('image')->store('user', 'public');
        $User->profil = $image_name;

        $User->save();
        return redirect('/manageUser');
    }
    public function delete($id) {
        $User = User::find($id);
        $User->delete();
        return redirect('/manageUser');
    }
    public function cetak_pdf(){
        $User = User::all();
        $pdf = PDF::loadview('user_pdf',['User'=>$User]);
        return $pdf->stream();
    }
}
