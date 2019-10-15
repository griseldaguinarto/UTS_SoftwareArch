<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Contact extends Controller
{
    public function index(Request $request) {
       $data = \App\Contact::all();
       if(count($data) > 0){ 
        $res['message'] = "Success!";
        $res['values'] = $data;
        return response($res);
        } else{
        $res['message'] = "Empty!";
        return response($res);
        }
    }

    public function get(int $id) {
        $data = \App\Contact::where('id',$id)->get();
        if(count($data) > 0){ 
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response($res);
        }
        else{
            $res['message'] = "Failed!";
            return response($res);
        }
    }

    public function create(Request $request) {
        $nama = $request->input('nama');
        $telepon = $request->input('telepon');
        $email = $request->input('email');
        $alamat = $request->input('alamat');

        $data = new \App\Contact();
        $data->nama = $nama;
        $data->telepon = $telepon;
        $data->email = $email;
        $data->alamat = $alamat;

        if($data->save()){
        $res['message'] = "Success!";
        $res['value'] = "$data";
        return response($res);
        }
    }

    public function update(Request $request, $id) {
    $nama = $request->input('nama');
    $telepon = $request->input('telepon');
    $email = $request->input('email');
    $alamat = $request->input('alamat');

    $data = \App\Contact::where('id',$id)->first();
    $data->nama = $nama;
    $data->telepon = $telepon;
    $data->email = $email;
    $data->alamat = $alamat;

    if($data->save()){
        $res['message'] = "Success!";
        $res['value'] = "$data";
        return response($res);
    }
    else{
        $res['message'] = "Failed!";
        return response($res);
    }
    }

    public function delete($id) {
        $data = \App\Contact::where('id',$id)->first();

    if($data->delete()){
        $res['message'] = "Success!";
        $res['value'] = "$data";
        return response($res);
    }
    else{
        $res['message'] = "Failed!";
        return response($res);
    }
    }


}
