@extends('backEnd.partials.header')

@section('title', 'Ubah Data Wali')

@section('content')
<div class="">
   <div class="row">
      <div class="col-lg-8">
            <!-- Default form register -->
      <form class="border border-light p-5" action="{{ route('sekolah.update', $sekolah->id) }}" method="post" enctype="multipart/form-data">
         @method('patch')
         @csrf
         <div class="form-group">
            <label for="">Nama Sekolah</label>
            <input type="text" id="nama_sekolah" name="nama_sekolah" class="form-control" value="{{ $sekolah->nama_sekolah }}"  placeholder="Masukkan Nama Sekolah">
         </div>
         
         <div class="form-group">
            <label for="">Alamat</label>
               <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $sekolah->alamat }}" placeholder="Alamat">
         </div>
         
         <div class="form-group">
            <label for="">No Telepon</label>
               <input type="text" id="no_telpon" name="no_telpon" class="form-control" value="{{ $sekolah->no_telpon }}" placeholder="no telpon">
         </div>
         
         <div class="form-group">
            <label for="">Email</label>
               <input type="text" id="email" name="email" class="form-control" value="{{ $sekolah->email }}" placeholder="email">
         </div>
         
         <div class="form-group">
            <label for="">No Fax</label>
               <input type="text" id="no_fax" name="no_fax" class="form-control" value="{{ $sekolah->no_fax }}" placeholder="no fax">
         </div>

         <div class="form-group">
            <label for="">Website</label>
               <input type="text" id="website" name="website" class="form-control" value="{{ $sekolah->website }}" placeholder="website">
         </div>

         <div class="form-group">
            <label for="">Visi</label>
               <input type="text" id="visi" name="visi" class="form-control" value="{{ $sekolah->visi }}" placeholder="visi">
         </div>

         <div class="form-group">
            <label for="">Misi</label>
               <input type="text" id="misi" name="misi" class="form-control" value="{{ $sekolah->misi }}" placeholder="misi">
         </div>

         <div class="form-row mb-4">
            <img width="150px" src="{{ asset($sekolah->foto) }}">
            <div class="col-lg-4">
               <!-- First name -->
               <input type="file" id="foto" name="foto">
            </div>
         </div>

         <!-- Sign up button -->
         <div class="form-group">
            <button class="btn btn-info my-4 btn-block col-lg" type="submit">Simpan</button>
         </div>

</form>
<!-- Default form register -->
      </div>
   </div>
</div>
@endsection