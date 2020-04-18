@extends('backEnd.partials.header')

@section('title', 'Tambah Akun')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-lg">
            <!-- Default form register -->
      <form class="text-center border border-light p-5" action="{{ route('akun.store') }}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan Username" require>
            </div>
         </div>
         
         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="text" id="password" name="password" class="form-control" placeholder="Password"require>
            </div>
         </div>
         
         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <select class="form-control" id="id_level" name="id_level" class="form-control"placeholder="id level"require>
                  <option>1</option>
                  <option>2</option>
               </select>
            </div>
         </div>

         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="text" id="status" name="status" class="form-control" placeholder="Status">
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