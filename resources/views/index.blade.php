@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<div class="container">
    <div class="page-header">
        <h2 class="entry-title">Sistem Pakar Identifikasi jamur yang dapat dimakan atau beracun menggunakan metode <i>Decision Tree</i> </h2>
    </div>
    <div class="entry-body">
        <p></p>
        <p>Situs ini akan membantu Anda mengidentifikasi jamur yang Anda temukan, dengan menjawab beberapa pertanyaan di bawah ini</p>
    </div>
    <div class="mulai">
        <a class="btn btn-success" href="{{ url('pertanyaan1') }}">Mulai</a>
    </div>
</div>


@endsection