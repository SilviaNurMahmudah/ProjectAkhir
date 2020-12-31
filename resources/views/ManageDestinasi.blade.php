@extends('layouts.parent')

@section('judul','Manage Destinasi')

@section('konten')

    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Manage</h2>
          <h3>Manage My <span>Destinasi</span></h3>
        </div>
        <br><br>
        
        <div class="section-title" data-aos="zoom-in">
          <h2><a href="/Destinasiadd" class="btn-get-started scrollto">Tambah Data</a></h2>
          <h2><a href="/Destinasi/cetak_pdf" class="btn-get-started scrollto" target="_blank">Cetak PDF</a></h2>
        </div>

        @foreach($Destinasi as $d)
        <div class="faq-list">
          <ul> 
            <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">{{$d->id}}. {{$d->title}}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                    <p>{{$d->jenis_wisata}}</p>
                    <p><em>{{$d->created_at}}</em></p>
                    <div class="section-title" data-aos="zoom-in">
                        <h2><a href="/Destinasiedit{{$d->id}}" class="btn-get-started scrollto">Edit</a></h2>
                        <h2><a href="/Destinasi/delete/{{$d->id}}" class="btn-get-started scrollto">Hapus</a></h2>
                    </div>
                </div>
            </li>
          </ul>
        </div>
        @endforeach
      </div>
    </section>
    

@endsection    