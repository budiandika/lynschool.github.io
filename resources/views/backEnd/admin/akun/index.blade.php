@extends('backEnd.partials.header')

@section('title', 'Data Akun')

@section('content')
<div class="">
    <div class="row">
        <div class="col-lg">
            

        <a href="{{route('akun.create')}}" class="btn btn-primary my-3">
                <i class="fas fa-user-plus"></i>
                Tambah Akun
              </a>

            <table class="table table-striped table-hover table-bordered">
                  <thead class="thead-dark">
                    <tr class="">
                      <th scope="col">No</th>
                      <th scope="col">Username</th>
                      <th scope="col">Password</th>
                      <th scope="col">Id Level</th>
                      <th scope="col">Status</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($akun as $ak)
                        
                    <tr class="table-light">
                        <th scope="row"> {{ $loop->iteration }} </th>
                        <td>{{ $ak -> username }}</td>
                        <td>{{ $ak -> password }}</td>
                        <td>{{ $ak -> id_level }}</td>
                        <td>{{ $ak -> status }}</td>
                        <td>
                            <a href="{{ route('akun.edit', $ak->id) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                            
                            <form action="{{ route('akun.destroy', $ak->id ) }}" class=" d-inline" method="POST">
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

