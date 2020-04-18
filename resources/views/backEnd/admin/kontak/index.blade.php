@extends('backEnd.partials.header')

@section('title', 'Data Kontak')

@section('content')
<div class="">
    <div class="row">
        <div class="col-lg">
            
          @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
    @endif

        <a href="{{route('kontak.create')}}" class="btn btn-primary my-3">
                <i class="fas fa-user-plus"></i>
                Tambah Data
              </a>

            <table class="table table-striped table-hover table-bordered">
                <caption>Data Kontak</caption>
                  <thead class="thead-dark">
                    <tr class="">
                      <th scope="col">No</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Detail</th>
                      <th scope="col">Id Akun</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($kontak as $kt)
                        
                    <tr class="table-light">
                    <th scope="row"> {{ $loop->iteration }} </th>
                        <td>{{ $kt -> type }}</td>
                        <td>{{ $kt -> detail }}</td>
                        <td>{{ $kt -> id_akun }}</td>
                        <td>
                            <a href="{{ route('kontak.edit', $kt->id) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                            
                            <form action="{{ route('kontak.destroy', $kt->id ) }}" class=" d-inline" method="POST">
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

