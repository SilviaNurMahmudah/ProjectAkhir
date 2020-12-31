<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Gate;
use PDF;


class CommentController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
        $this->middleware(function($request, $next){
            if(Gate::allows('manage')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    public function Comment(){
        $Comment = Comment::all();
        return view('ManageComment',['Comment' => $Comment]);
    }
    public function delete($id) {
        $Comment = Comment::find($id);
        $Comment->delete();
        return redirect('/manageComment');
    }
    public function cetak_pdf(){
        $Comment = Comment::all();
        $pdf = PDF::loadview('comment_pdf',['Comment'=>$Comment]);
        return $pdf->stream();
    }    
    
}
