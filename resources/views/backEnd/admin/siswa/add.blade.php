@extends('backEnd.partials.header')

@section('title', 'Tambah Data Siswa')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-lg">
            <!-- Default form register -->
      <form class="text-center border border-light p-5" action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="text" id="nis" name="nis" class="form-control" placeholder="Masukkan NIS">
            </div>
         </div>
         
         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="text" id="nama_siswa" name="nama_siswa" class="form-control" placeholder="First name">
            </div>
         </div>
         
         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="text" id="jk" name="jk" class="form-control" placeholder="Jenis Kelamin">
            </div>
         </div>
         
         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control">
            </div>
         </div>
         
         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="text" id="gol_darah" name="gol_darah" class="form-control" placeholder="Golongan Darah">
            </div>
         </div>

         <div class="form-row mb-4">
            <div class="col-lg-8">
               <!-- First name -->
               <input type="text" id="agama" name="agama" class="form-control" placeholder="Pilih Agama">
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