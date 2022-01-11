@extends('master')
 
<!-- memberikan judul di tab sesuai dengan judul artikel yang sedang dibaca -->
@section('title')
{{ $article->judul }}
@endsection
 
<!-- menampilkan gambar, judul, dan isi artikel -->
@section('main')
<div class="col-md-7 col-sm-12 mb-5 bg-white p-0">
    <img src="https://image.freepik.com/free-photo/old-cement-wall-texture_1149-1280.jpg" class="card-img-top" alt="gambar" >
    <div class="p-4">
        <h2>{{ $article->judul }}</h2>
        <p class="mt-5">{!!nl2br(str_replace(" ", " &nbsp;", $article->deskripsi))!!} </p>
    </div>
</div>
@endsection
 
<!-- menampilkan tombol kembali ke halaman utama -->
@section('sidebar')
<div class="col-md-4 offset-md-1 col-sm-12 bg-white p-4 h-100">
   <center> 
        <a href="/"> 
            <button class="btn btn-info text-white w-100">Kembali</button> 
        </a>
        
    </center>
    
</div>
@endsection