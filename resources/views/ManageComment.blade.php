@extends('layouts.parent')

@section('judul','Manage Comment')

@section('konten')

    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Manage</h2>
          <h3>Manage My <span>Comment</span></h3>
        </div>
        <br><br>

        <div class="section-title" data-aos="zoom-in">
          <h2><a href="/Comment/cetak_pdf" class="btn-get-started scrollto" target="_blank">Cetak PDF</a></h2>
        </div>

        @foreach($Comment as $c)
        <div class="faq-list">
          <ul> 
            <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">{{$c->id}}. {{$c->name}}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                    <p>{{$c->title}}</p>
                    <p><em>{{$c->content}}</em></p>
                    <div class="section-title" data-aos="zoom-in">
                        <h2><a href="/Comment/delete/{{$c->id}}" class="btn-get-started scrollto">Hapus</a></h2>
                    </div>
                </div>
            </li>
          </ul>
        </div>
        @endforeach
      </div>
    </section>
@endsection    