<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DbController extends Controller
{
    public function index (Request $request) {

        if($request->has('search')){
<<<<<<< HEAD
            $data = User::where('name', 'like', '%' .$request->search. '%')->where('role','admin')->paginate(3);
        }else{
            $data = User::where('role','admin')->paginate(3);
=======
            $data = User::where('role', 'admin')->where('name', 'like', '%' .$request->search. '%')->paginate(3);
        }else{
            $data = User::where('role', 'admin')->paginate(3);
>>>>>>> b244a1fb171f410ab7aea0f65c96b1b20f9be237
        }
        return view ('db',compact('data')) ;
    }

    public function tambahdata(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        //  dd($request->all());
        User::create([
            'name' => $request->username,
<<<<<<< HEAD
            'email'=> $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
=======
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'role' => $request->role,
>>>>>>> b244a1fb171f410ab7aea0f65c96b1b20f9be237
        ]);
        return redirect()->route('db')->with('success', 'Yapiola!');
    }

        public function tampilkandata($id){
            $data = User::find($id);
            // dd($data);

            return view('tampildata', compact('data'));

        }

        public function updatedata(Request $request, $id){
            $data = User::find($id);
            $data->update([
                'name' => $request->username,
<<<<<<< HEAD
            'email'=> $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
=======
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role,
>>>>>>> b244a1fb171f410ab7aea0f65c96b1b20f9be237
            ]);
            return redirect()->route('db')->with('success', 'Updated!');    
        }

        public function delete($id){
            $data = User::find($id);
            $data->delete();
            return redirect()->route('db')->with('success', 'Deleted!');  
        }

}
