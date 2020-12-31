<?php

namespace App\Http\Controllers;
use App\Destinasi;
use App\Comment;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function Destinasi() {
		$Destinasi = Destinasi::all();
		return view('Home1',['Destinasi'=> $Destinasi]);
    }
    public function DetailDestinasi($id) {
    	$Destinasi = Destinasi::find($id);
		return view('Detail',['Destinasi'=>$Destinasi]);
    }
    public function About() {
    	return view('About');
    }
    public function Comment() {
        $Comment = Comment::all();
    	return view('Comment',['Comment'=> $Comment]);
    }
    public function Gallery() {
        $Gallery = Comment::all();
    	return view('Gallery',['Gallery'=> $Gallery]);
    }

    //comment
    public function create(Request $request) {
        if($request->file('image')){
            $image_name = $request->file('image')->store('comment','public');
        }
           
        Comment::create([
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image_name
        ]);
        return redirect('/gallery');
    }
    
}
