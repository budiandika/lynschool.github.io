@extends('backEnd.partials.header')

@section('title', 'Tambah Kontak')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-lg">
            <!-- Default form register -->
      <form class="text-center border border-light p-5" action="{{ route('kontak.store') }}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <select class="form-control" id="type" name="type" class="form-control" require>
                  <option>alamat</option>
                  <option>email</option>
                  <option>no telpon</option>
                  <option>sosmed</option>
               </select>
            </div>
         </div>
         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="text" id="detail" name="detail" class="form-control" placeholder="Detail"require>
            </div>
         </div>
         
         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <select class="form-control" id="id_akun" name="id_akun" class="form-control"placeholder="id akun"require>
                  <option>1</option>
                  <option>2</option>
               </select>
            </div>
         </div>
         <!-- Sign up button -->
         <button class="btn btn-info my-4 btn-block col-lg-8" type="submit">Simpan</button>

</form>
<!-- Default form register -->
      </div>
   </div>
</div>
@endsection