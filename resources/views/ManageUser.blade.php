@extends('layouts.parent')

@section('judul','Manage User')

@section('konten')

    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Manage</h2>
          <h3>Manage My <span>User</span></h3>
        </div>
        <br><br>

        <div class="section-title" data-aos="zoom-in">
          <h2><a href="/User/cetak_pdf" class="btn-get-started scrollto" target="_blank">Cetak PDF</a></h2>
        </div>

        @foreach($User as $u)
        <div class="faq-list">
          <ul> 
            <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">{{$u->id}}. {{$u->name}}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                    <p>{{$u->email}}</p>
                    <img width="80px" src="{{$u->profil}}" class="img-fluid" alt="">
                    <div class="section-title" data-aos="zoom-in">
                        <h2><a href="/Useredit{{$u->id}}" class="btn-get-started scrollto">Edit</a></h2>
                        <h2><a href="/User/delete/{{$u->id}}" class="btn-get-started scrollto">Hapus</a></h2>
                    </div>
                </div>
            </li>
          </ul>
        </div>
        @endforeach
      </div>
    </section>
@endsection    