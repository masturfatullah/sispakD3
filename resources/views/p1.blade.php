@extends('layouts.app')
@section('title', 'Pertanyaan 1')

@section('content')
    <div class="page-header">
        <h1>Konsultasi</h1>
    </div>

<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Jawablah pertanyaan berikut ini</h3></div>
    <div class="panel-body">
        <h3>Apakah ada bau yang tercium dari jamur yang anda temukan?</h3>
        <form method="POST" action="/p1">
            {{ csrf_field() }}
            <input type="hidden" name="kode_gejala" value="G023" />
            <p>
                
                    <div class="row col-sm-12">
                        <div class="col-sm-4">
                            <div class="radio">
                                <input type="radio" name="radio1" id="radio1" value="Almond">
                                <label for="radio1">
                                    Almond
                                </label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="radio1" id="radio2" value="Pugent">
                                <label for="radio2">
                                    Pugent
                                </label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="radio1" id="radio3" value="Fishy">
                                <label for="radio3">
                                    Fishy
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="radio">
                                <input type="radio" name="radio1" id="radio4" value="Anise">
                                <label for="radio4">
                                    Anise
                                </label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="radio1" id="radio5" value="None">
                                <label for="radio5">
                                    None
                                </label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="radio1" id="radio6" value="Foul">
                                <label for="radio6">
                                    Foul
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="radio">
                                <input type="radio" name="radio1" id="radio7" value="Creosote">
                                <label for="radio7">
                                    Creosote
                                </label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="radio1" id="radio8" value="Spicy">
                                <label for="radio8">
                                    Spicy
                                </label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="radio1" id="radio9" value="Musty">
                                <label for="radio9">
                                    Musty
                                </label>
                            </div>
                        </div>
                    </div>
                <button name="yes" type="submit" class="btn btn-primary" value="1">Submit</button>
                           
                            </p>
        </form>
    </div>
</div>
@endsection