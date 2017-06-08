<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class SispakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function pertanyaan1view(){
        session()->forget('jawabanP1');
        session()->forget('jawabanP2');
        session()->forget('jawabanP3');
        session()->forget('jawabanP4');
        return view('p1');
    }
    public function pertanyaan1(Request $data){
        $jawaban1 = $data->input('radio1');
        session(['jawabanP1' => $jawaban1]);

        if($jawaban1 == "None"){
            return Redirect('pertanyaan2');
        } else {
            //return $jawaban1;
            //Langsung ke Hasil
            return Redirect('/hasil');
        }

    }
    
    public function pertanyaan2view(){
        $SeasionP1 = session('jawabanP1');
        if($SeasionP1 == "None"){
            return view('p2');
        } else {
            return Redirect('pertanyaan1');
        }
        
    }
    public function pertanyaan2(Request $data){
        $jawaban2 = $data->input('radio2');
        session(['jawabanP2' => $jawaban2]);

        if($jawaban2 == "Fibrous"){
            //return $jawaban2;
            //Langsung ke hasil
            return Redirect('/hasil');
        } else if($jawaban2 == "Smooth") {
            return Redirect('pertanyaan3');
        } else {
            return Redirect('pertanyaan4');
        }
    }
    

    public function pertanyaan3view(){
        $SeasionP2 = session('jawabanP2');
        if($SeasionP2 == "Smooth"){
            return view('p3');
        } else {
            return Redirect('pertanyaan2');
        }
        
    }
    public function pertanyaan3(Request $data){
        $jawaban3 = $data->input('radio3');
        session(['jawabanP3' => $jawaban3]);
        
        if($jawaban3 == "White"){
            return Redirect('pertanyaan4');
        } else {
            return Redirect('hasil');
        }
    }

    public function pertanyaan4view(){
        $SeasionP2 = session('jawabanP2');
        $SeasionP3 = session('jawabanP3');
        if($SeasionP3 == "White"){
            return view('p4');
        } else if(($SeasionP3 == "Brown" or $SeasionP3 == "Orange" or $SeasionP3 == "Yellow") and $SeasionP2 == ""){
            return Redirect('pertanyaan3');
        } else if($SeasionP2 == "Scaly" or $SeasionP2 == "Silky"){
            return view('p4');
        } else {
            return Redirect('pertanyaan1');
        }
        
    }
    public function pertanyaan4(Request $data){
        $jawaban4 = $data->input('radio4');
        session(['jawabanP4' => $jawaban4]);
        
        return Redirect('hasil');
    }
    public function not_found(){
        
        return Redirect('/');
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
