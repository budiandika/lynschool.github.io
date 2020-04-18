@extends('backEnd.partials.header')

@section('title', 'Data Sekolah')

@section('content')
<div class="">
    <div class="row">
        <div class="col-lg">
            
          @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
    @endif

        <a href="{{route('sekolah.create')}}" class="btn btn-primary my-3">
                <i class="fas fa-user-plus"></i>
                Tambah Data
              </a>

            <table class="table table-striped table-hover table-bordered">
                <caption>Data Sekolah</caption>
                  <thead class="thead-dark">
                    <tr class="">
                      <th scope="col">No</th>
                      <th scope="col">Foto</th>
                      <th scope="col">Nama Sekolah</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">No telepon</th>
                      <th scope="col">Email</th>
                      <th scope="col">No Fax</th>
                      <th scope="col">Website</th>
                      <th scope="col">Visi</th>
                      <th scope="col">Misi</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($sekolah as $sk)
                        
                    <tr class="table-light">
                        <th scope="row"> {{ $loop->iteration }} </th>
                        <td><img width="50px" src="{{ asset($sk->foto) }}"></td>
                        <td>{{ $sk -> nama_sekolah }}</td>
                        <td>{{ $sk -> alamat }}</td>
                        <td>{{ $sk -> no_telpon }}</td>
                        <td>{{ $sk -> email }}</td>
                        <td>{{ $sk -> no_fax }}</td>
                        <td>{{ $sk -> website }}</td>
                        <td>{{ $sk -> visi }}</td>
                        <td>{{ $sk -> misi }}</td>
                        <td>
                            <a href="{{ route('sekolah.edit', $sk->id) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                            
                            <form action="{{ route('sekolah.destroy', $sk->id ) }}" class=" d-inline" method="POST">
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

