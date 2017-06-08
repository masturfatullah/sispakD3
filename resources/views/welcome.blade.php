@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="page-header">
        <h1>Konsultasi</h1>
    </div>

<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Jawablah pertanyaan berikut ini</h3></div>
    <div class="panel-body">
        <h3>1. Apakah ada bau yang tercium dari jamur yang anda temukan?</h3>
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

<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Jawablah pertanyaan berikut ini</h3></div>
    <div class="panel-body">
        <h3>2. Bagaimana permukaan tangkai di atas cincin jamur?</h3>
        <form action="" method="post">
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
                
                           
                <a class="btn btn-success " href="?m=konsultasi&success=1">Lihat Hasil</a>
                <a class="btn btn-primary pull-right" href="aksi.php?m=konsultasi&act=new"><span class="glyphicon glyphicon-refresh"></span> Batal</a>
                            </p>
        </form>
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Jawablah pertanyaan berikut ini</h3></div>
    <div class="panel-body">
        <h3>3.Apa warna dari tudung jamur?</h3>
        <form action="" method="post">
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
                
                           
                <a class="btn btn-success " href="?m=konsultasi&success=1">Lihat Hasil</a>
                <a class="btn btn-primary pull-right" href="aksi.php?m=konsultasi&act=new"><span class="glyphicon glyphicon-refresh"></span> Batal</a>
                            </p>
        </form>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Jawablah pertanyaan berikut ini</h3></div>
    <div class="panel-body">
        <h3>4.Jarak antar gill pada jamur?</h3>
        <form action="" method="post">
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
                
                           
                <a class="btn btn-success " href="?m=konsultasi&success=1">Lihat Hasil</a>
                <a class="btn btn-primary pull-right" href="aksi.php?m=konsultasi&act=new"><span class="glyphicon glyphicon-refresh"></span> Batal</a>
                            </p>
        </form>
    </div>
</div>
@endsection