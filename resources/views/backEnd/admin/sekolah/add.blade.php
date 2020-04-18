@extends('backEnd.partials.header')

@section('title', 'Tambah Data Sekolah')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-lg">
            <!-- Default form register -->
      <form class="text-center border border-light p-5" action="{{ route('sekolah.store') }}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="text" id="nama_sekolah" name="nama_sekolah" class="form-control" placeholder="Masukkan Nama Sekolah">
            </div>
         </div>
         
         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat Sekolah">
            </div>
         </div>
         
         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="text" id="no_telpon" name="no_telpon" class="form-control" placeholder="No telepon">
            </div>
         </div>
         
         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="text" id="email" name="email" class="form-control" placeholder="Email">
            </div>
         </div>
         
         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="text" id="no_fax" name="no_fax" class="form-control" placeholder="No Fax">
            </div>
         </div>

         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="text" id="website" name="website" class="form-control" placeholder="Website">
            </div>
         </div>

         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="text" id="visi" name="visi" class="form-control" placeholder=" visi">
            </div>
         </div>

         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="text" id="misi" name="misi" class="form-control" placeholder="misi">
            </div>
         </div>
         
         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="file" id="foto" name="foto" class="form-control">
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