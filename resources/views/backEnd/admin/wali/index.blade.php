@extends('backEnd.partials.header')

@section('title', 'Data Wali')

@section('content')
<div class="">
    <div class="row">
        <div class="col-lg">
            
          @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
    @endif

        <a href="{{route('wali.create')}}" class="btn btn-primary my-3">
                <i class="fas fa-user-plus"></i>
                Tambah Data
              </a>

            <table class="table table-striped table-hover table-bordered">
                <caption>Data Wali Siswa</caption>
                  <thead class="thead-dark">
                    <tr class="">
                      <th scope="col">No</th>
                      <th scope="col">Foto</th>
                      <th scope="col">No Ktp</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">tgl_lahir</th>
                      <th scope="col">gol_darah</th>
                      <th scope="col">Agama</th>
                      <th scope="col">Wali Murid</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($wali as $wl)
                        
                    <tr class="table-light">
                        <th scope="row"> {{ $loop->iteration }} </th>
                        <td><img width="50px" src="{{ asset($wl->foto) }}"></td>
                        <td>{{ $wl -> no_ktp }}</td>
                        <td>{{ $wl -> nama_wali }}</td>
                        <td>{{ $wl -> jk }}</td>
                        <td>{{ $wl -> tgl_lahir }}</td>
                        <td>{{ $wl -> gol_darah }}</td>
                        <td>{{ $wl -> agama }}</td>
                        <td>{{ $wl -> type_wali }}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i></i></a>
                            <a href="{{ route('wali.edit', $wl->id) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                            
                            <form action="{{ route('wali.destroy', $wl->id ) }}" class=" d-inline" method="POST">
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

