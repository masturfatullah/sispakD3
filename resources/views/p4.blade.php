@extends('layouts.app')
@section('title', 'Pertanyaan 4')

@section('content')
    <div class="page-header">
        <h1>Konsultasi</h1>
    </div>

<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Jawablah pertanyaan berikut ini</h3></div>
    <div class="panel-body">
        <h3>Jarak antar gill pada jamur?</h3>
        <form method="POST" action="/p4">
            {{ csrf_field() }}
            <input type="hidden" name="kode_gejala" value="G023" />
            <p>
                
                    <div class="row col-sm-12">
                        <div class="col-sm-6">
                            <div class="radio">
                                <input type="radio" name="radio4" id="radio41" value="Close">
                                <label for="radio41">
                                    Close
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="radio">
                                <input type="radio" name="radio4" id="radio42" value="Crowded">
                                <label for="radio42">
                                    Crowded
                                </label>
                            </div>
                        </div>
                    </div>
                <button name="yes" class="btn btn-primary" value="1">Submit</button>
                
                           
                
                <a class="btn btn-primary pull-right" href="{{ url('/batal') }}"><span class="glyphicon glyphicon-refresh"></span> Batal</a>
                            </p>
        </form>
    </div>
</div>
@endsection