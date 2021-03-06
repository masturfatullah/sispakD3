@extends('layouts.app')
@section('title', 'Hasil')

@section('content')
    <div class="page-header">
        <h1>Hasil</h1>
    </div>
<div class="panel panel-default">
    <div class="panel-heading">        
        <h3 class="panel-title">Riwayat Pertanyaan</h3>
    </div>
    <div class="list-group">
        @if((session('jawabanP1') != "") and session('jawabanP1') != "None" and session('jawabanP2') == "" and session('jawabanP3') == "" and session('jawabanP4') == "")   
        <div class="list-group-item">1. Apakah ada bau yang tercium dari jamur yang anda temukan? <strong>{{  session('jawabanP1') }}</strong></div>
        @endif
        @if(session('jawabanP1') != "" and session('jawabanP2') != "" and session('jawabanP2') == "Fibrous" and session('jawabanP3') == "" and session('jawabanP4') == "" and session('jawabanP1') == "None")
        <div class="list-group-item">1. Apakah ada bau yang tercium dari jamur yang anda temukan? <strong>{{  session('jawabanP1') }}</strong></div>
        <div class="list-group-item">2. Bagaimana permukaan tangkai di atas cincin jamur? <strong>{{  session('jawabanP2') }}</strong></div>    
        @endif
        @if(session('jawabanP1') != "" and session('jawabanP2') != ""  and session('jawabanP3') != "" and session('jawabanP2') == "Smooth" and session('jawabanP4') == "" and session('jawabanP1') == "None")
        <div class="list-group-item">1. Apakah ada bau yang tercium dari jamur yang anda temukan? <strong>{{  session('jawabanP1') }}</strong></div>
        <div class="list-group-item">2. Bagaimana permukaan tangkai di atas cincin jamur? <strong>{{  session('jawabanP2') }}</strong></div>    
        <div class="list-group-item">3. Apa warna dari tudung jamur? <strong>{{  session('jawabanP3') }}</strong></div>    
        @endif
        @if((session('jawabanP1') != "" and session('jawabanP2') != ""  and session('jawabanP3') != "" and session('jawabanP4') != "") and (session('jawabanP1') == "None" and session('jawabanP2') == "Smooth"  and session('jawabanP3') == "White"))
        <div class="list-group-item">1. Apakah ada bau yang tercium dari jamur yang anda temukan? <strong>{{  session('jawabanP1') }}</strong></div>
        <div class="list-group-item">2. Bagaimana permukaan tangkai di atas cincin jamur? <strong>{{  session('jawabanP2') }}</strong></div>    
        <div class="list-group-item">3. Apa warna dari tudung jamur? <strong>{{  session('jawabanP3') }}</strong></div>
        <div class="list-group-item">4. Jarak antar gill pada jamur? <strong>{{  session('jawabanP4') }}</strong></div>    
        @endif
        @if((session('jawabanP1') != "" and session('jawabanP2') != ""  and session('jawabanP4') != "" and session('jawabanP3') == "") and (session('jawabanP1') == "None" and (session('jawabanP2') == "Silky" or session('jawabanP2') == "Scaly")))
        <div class="list-group-item">1. Apakah ada bau yang tercium dari jamur yang anda temukan? <strong>{{  session('jawabanP1') }}</strong></div>
        <div class="list-group-item">2. Bagaimana permukaan tangkai di atas cincin jamur? <strong>{{  session('jawabanP2') }}</strong></div>    
        <div class="list-group-item">3. Jarak antar gill pada jamur? <strong>{{  session('jawabanP4') }}</strong></div>    
        @endif
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <tr>
                <td>Beracun</td>
                <td>Keterangan</td>
            </tr>
            <tr>
        @if((session('jawabanP1') != "") and session('jawabanP1') != "None" and session('jawabanP2') == "" and session('jawabanP3') == "" and session('jawabanP4') == "")   
                @if(session('jawabanP1') == "Pugent")
                    <td>Tidak</td>
                    <td>Dapat dimakan, karena memiliki bau Pugent yang dimiliki oleh jamur jamur yang tidak beracun.</td>
				@endif
				@if(session('jawabanP1') == "Almond")
                    <td>Tidak</td>
                    <td>Dapat dimakan,karena memiliki bau Almond yang dimiliki oleh jamur jamur yang tidak beracun.</td>
				@endif
				@if(session('jawabanP1') == "Anise" )
                    <td>Tidak</td>
                    <td>Dapat dimakan,karena memiliki bau Anise yang dimiliki oleh jamur jamur yang tidak beracun.</td>
				@endif
				@if(session('jawabanP1') == "Foul") 
                    <td>Ya</td>
                    <td>Beracun, karena memiliki aroma busuk yang dimiliki oleh jamur beracun.</td>
				@endif
				@if(session('jawabanP1') == "Fishy")
                    <td>Ya</td>
                    <td>Beracun, karena memiliki aroma amis yang dimiliki oleh jamur beracun.</td>
				@endif
				@if(session('jawabanP1') == "Musty")
                    <td>Ya</td>
                    <td>Beracun, karena memiliki aroma apak yang dimiliki oleh jamur beracun.</td>
				@endif
				@if(session('jawabanP1') == "Spicy")
                    <td>Ya</td>
                    <td>Beracun, karena memiliki aroma pedas yang dimiliki oleh jamur beracun.</td>
				@endif
				@if(session('jawabanP1') == "Creosote")
                    <td>Ya</td>
                    <td>Beracun, karena memiliki aroma creosote yang dimiliki oleh jamur beracun.</td>
				@endif
        @endif
        @if(session('jawabanP1') != "" and session('jawabanP2') != "" and session('jawabanP2') == "Fibrous" and session('jawabanP3') == "" and session('jawabanP4') == "" and session('jawabanP1') == "None")
                @if(session('jawabanP1') == "None" and session('jawabanP2')  == "Fibrous") 
                    <td>Tidak</td>
                    <td>Dapat dimakan, karena tidak memiliki aroma yang khas serta permukaan tangkai berserabut.</td>
				@endif
        @endif
        @if(session('jawabanP1') != "" and session('jawabanP2') != ""  and session('jawabanP3') != "" and session('jawabanP2') == "Smooth" and session('jawabanP4') == "" and session('jawabanP1') == "None")
                @if(session('jawabanP1') == "None" and session('jawabanP2')  == "Smooth" and session('jawabanP3') == "Brown")
                    <td>Tidak</td>
                    <td>Dapat dimakan, karena tidak memiliki aroma yang khas serta permukaan tangkai yang licin dan warna dari tudung.</td>
				@endif
				@if(session('jawabanP1') == "None" and session('jawabanP2')  == "Smooth" and session('jawabanP3') == "Orange")
                    <td>Tidak</td>
                    <td>Dapat dimakan, karena tidak memiliki aroma yang khas serta permukaan tangkai yang licin dan warna dari tudung.</td>
				@endif
				@if(session('jawabanP1') == "None" and session('jawabanP2')  == "Smooth" and session('jawabanP3') == "Yellow")
                    <td>Tidak dekatahu</td>
                    <td></td>
				@endif
        @endif
        @if((session('jawabanP1') != "" and session('jawabanP2') != ""  and session('jawabanP3') != "" and session('jawabanP4') != "") and (session('jawabanP1') == "None" and session('jawabanP2') == "Smooth"  and session('jawabanP3') == "White"))
                @if(session('jawabanP1') == "None" and session('jawabanP2')  == "Smooth" and session('jawabanP3') == "White" and session('jawabanP4') == "Close")
                    <td>Tidak</td>
                    <td>Dapat dimakan, karena tidak memiliki aroma yang khas, permukaan tangkai yang licin, tudung yang berwarna putih dan jarak antar jamur yang berdekatan.</td>
                @endif    
                @if(session('jawabanP1') == "None" and session('jawabanP2')  == "Smooth" and session('jawabanP3') == "White" and session('jawabanP4') == "Crowded")
                    <td>Tidak</td>
                    <td>Dapat dimakan, Karena tidak memiliki aroma yang khas, permukaan tangkai yang licin, tudung yang berwarna putih dan jarak antar jamur yang crowded.</td>
				@endif
        @endif
        @if((session('jawabanP1') != "" and session('jawabanP2') != ""  and session('jawabanP4') != "" and session('jawabanP3') == "") and (session('jawabanP1') == "None" and (session('jawabanP2') == "Silky" or session('jawabanP2') == "Scaly")))
                @if(session('jawabanP1') == "None" and session('jawabanP2')  == "Silky" and session('jawabanP4') == "Close")
                    <td>Ya</td>
                    <td>Beracun, karena tidak memiliki aroma yang khas serta permukaan tangkai yang halus dan jarak antar jamur yang berdekatan.</td>
				@endif
				@if(session('jawabanP1') == "None" and session('jawabanP2')  == "Silky" and session('jawabanP4') == "Crowded")
                    <td>Tidak</td>
                    <td>Dapat dimakan, karena tidak memiliki aroma yang khas serta permukaan tangkai yang halus dan jarak antar jamur yang crowded.</td>
				@endif
				@if(session('jawabanP1') == "None" and session('jawabanP2')  == "Scaly" and session('jawabanP4') == "Crowded")
                    <td>Ya</td>
                    <td>Beracun, karena tidak memiliki aroma yang khas serta permukaan tangkai yang bersisik dan jarak antar jamur yang crowded.</td>
				@endif
				@if(session('jawabanP1') == "None" and session('jawabanP2')  == "Scaly" and session('jawabanP4') == "Close") 
                    <td>Tidak</td>
                    <td>Dapat dimakan, karena tidak memiliki aroma yang khas serta permukaan tangkai yang bersisik dan jarak antar jamur yang berdekatan.</td>
				@endif
        @endif
            </tr>
        </table>
        
        <p>
            <a class="btn btn-primary" href="{{ url('/batal') }}"><span class="glyphicon glyphicon-refresh"></span> Cek Lagi</a>
            <a class="btn btn-default" href="?" target="_blank"><span class="glyphicon glyphicon-print"></span> Cetak</a>
        </p>       
    </div>
</div>
@endsection