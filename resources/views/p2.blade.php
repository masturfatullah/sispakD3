@extends('layouts.app')
@section('title', 'Pertanyaan 2')

@section('content')
    <div class="page-header">
        <h1>Konsultasi</h1>
    </div>

<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Jawablah pertanyaan berikut ini</h3></div>
    <div class="panel-body">
        <h3>Bagaimana permukaan tangkai di atas cincin jamur?</h3>
        <form method="POST" action="/p2">
            {{ csrf_field() }}
            <input type="hidden" name="kode_gejala" value="G023" />
            <p>
                
                    <div class="row col-sm-12">
                        <div class="col-sm-3">
                            <div class="radio">
                                <input type="radio" name="radio2" id="radio21" value="Fibrous">
                                <label for="radio21">
                                    Fibrous
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="radio">
                                <input type="radio" name="radio2" id="radio22" value="Scaly">
                                <label for="radio22">
                                    Scaly
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="radio">
                                <input type="radio" name="radio2" id="radio23" value="Silky">
                                <label for="radio23">
                                    Silky
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="radio">
                                <input type="radio" name="radio2" id="radio24" value="Smooth">
                                <label for="radio24">
                                    Smooth
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