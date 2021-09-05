<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Insert;

class Usercontroller extends Controller
{
    //
    
    public function loadview()
    {
        $data=['jignesh','unnati','shivani'];
        return view('about',["name"=>$data]);
    }
    public function getdata(Request $req)
    {
        return $req->input();
        // echo "form Submitted";
    }
    public function fetch()
    {
        return DB::select("select * from image");
    }
    public function get()
    {
        return Insert::all();
    }
    public function httpapi()
    {
        $data=Http::get('http://localhost:8080/apicodeigniter/');
        return view("fetch",['collection'=>$data['data']]);
    }
    // public function registration(Request $req)
    // {
    //     return $req->input();
    // }
    public function logincode(Request $req)
    {
        $data=$req->input('username');
        $req->session()->put('username',$data);
        return redirect('profile');
       
    }
    public function upload(Request $req)
    {
     return $req->file('file')->store("img");   
       
    }
    public function insert(Request $req)
    {
     $insert=new Insert; 
     $insert->fname=$req->username;  
     $insert->lname=$req->lname; 
     $insert->save();
     return redirect("insert");
    }
    public function fetchdata()
    {
        $data=Insert::paginate(1);
        return view("fetchdata",["fetch"=>$data]);

    }
    public function showdata($id)
    {
        $data=Insert::find($id);
        return view("edit",['edit'=>$data]);
    }
    public function update(Request $req)
    {
        $data=Insert::find($req->id);
        $data->fname=$req->username;
        $data->lname=$req->lname;
        $data->save();
        return redirect("fetchdata");
    }
    public function delete($id)
    {
        $data=Insert::find($id);
       $data->delete();
       return redirect("fetchdata");
    }
}
