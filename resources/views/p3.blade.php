@extends('layouts.app')
@section('title', 'Pertanyaan 3')

@section('content')
    <div class="page-header">
        <h1>Konsultasi</h1>
    </div>

<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Jawablah pertanyaan berikut ini</h3></div>
    <div class="panel-body">
        <h3>Apa warna dari tudung jamur?</h3>
        <form method="POST" action="/p3">
            {{ csrf_field() }}
            <input type="hidden" name="kode_gejala" value="G023" />
            <p>
                
                    <div class="row col-sm-12">
                        <div class="col-sm-3">
                            <div class="radio">
                                <input type="radio" name="radio3" id="radio31" value="Brown">
                                <label for="radio31">
                                    Brown
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="radio">
                                <input type="radio" name="radio3" id="radio32" value="Orange">
                                <label for="radio32">
                                    Orange
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="radio">
                                <input type="radio" name="radio3" id="radio33" value="White">
                                <label for="radio33">
                                    White
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="radio">
                                <input type="radio" name="radio3" id="radio34" value="Yellow">
                                <label for="radio34">
                                    Yellow
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