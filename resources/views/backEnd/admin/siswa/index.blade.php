@extends('backEnd.partials.header')

@section('title', 'Data Siswa')

@section('content')
<div class="">
    <div class="row">
        <div class="col-lg">
            
          @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
    @endif
    

        <a href="{{route('siswa.create')}}" class="btn btn-primary my-3">
                <i class="fas fa-user-plus"></i>
                Tambah Data
              </a>
              <form class="form-inline d-flex justify-content md-form form-sm active-purple-2 mt-2" style="float:right" method="GET" action="/siswa">
              <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
                aria-label="Search">
              <i class="fas fa-search" aria-hidden="true"></i>
              </form><br>
            <table class="table table-striped table-hover table-bordered">
                <caption>Data Siswa</caption>
                  <thead class="thead-dark">
                    <tr class="">
                      <th scope="col">No</th>
                      <th scope="col">Foto</th>
                      <th scope="col">NIS</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Tanggal Lahir</th>
                      <th scope="col">Gol Darah</th>
                      <th scope="col">Agama</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($siswa as $sw)
                        
                    <tr class="table-light">
                        <th scope="row"> {{ $loop->iteration }} </th>
                        <td><img width="50px" src="{{ asset($sw->foto) }}"></td>
                        <td>{{ $sw -> nis }}</td>
                        <td>{{ $sw -> nama_siswa }}</td>
                        <td>{{ $sw -> jk }}</td>
                        <td>{{ $sw -> tgl_lahir }}</td>
                        <td>{{ $sw -> gol_darah }}</td>
                        <td>{{ $sw -> agama }}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i></i></a>
                            <a href="{{ route('siswa.edit', $sw->id) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                            
                            <form action="{{ route('siswa.destroy', $sw->id ) }}" class=" d-inline" method="POST">
                              @method('delete')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>           
                    @endforeach
                  </tbody>
                </table>


        </div>
    </div>
</div>
@endsection

