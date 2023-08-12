<?php

namespace App\Http\Controllers;

use App\Models\Db;
use Illuminate\Http\Request;

class DbController extends Controller
{
    public function index (Request $request) {

        if($request->has('search')){
            $data = Db::where('username', 'like', '%' .$request->search. '%')->paginate(3);
        }else{
            $data = Db::paginate(3);
        }
        return view ('db',compact('data')) ;
    }

    public function tambahdata(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        //  dd($request->all());
        Db::create($request->all());
        return redirect()->route('db')->with('success', 'Yapiola!');
    }

        public function tampilkandata($id){
            $data = Db::find($id);
            // dd($data);

            return view('tampildata', compact('data'));

        }

        public function updatedata(Request $request, $id){
            $data = Db::find($id);
            $data->update($request->all());
            return redirect()->route('db')->with('success', 'Updated!');    
        }

        public function delete($id){
            $data = Db::find($id);
            $data->delete();
            return redirect()->route('db')->with('success', 'Deleted!');  
        }

}
