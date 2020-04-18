@extends('backEnd.partials.header')

@section('title', 'Ubah Data Siswa')

@section('content')
<div class="">
   <div class="row">
      <div class="col-lg-8">
            <!-- Default form register -->
      <form class="border border-light p-5" action="{{ route('siswa.update', $siswa->id) }}" method="post" enctype="multipart/form-data">
         @method('patch')
         @csrf
         <div class="form-group">
            <label for="">NIS</label>
            <input type="text" id="nis" name="nis" class="form-control" value="{{ $siswa->nis }}"  placeholder="Masukkan NIS">
         </div>
         
         <div class="form-group">
            <label for="">Nama Lengkap</label>
               <input type="text" id="nama_siswa" name="nama_siswa" class="form-control" value="{{ $siswa->nama_siswa }}" placeholder="First name">
         </div>
         
         <div class="form-group">
            <label for="">Jenis Kelamin</label>
               <input type="text" id="jk" name="jk" class="form-control" value="{{ $siswa->jk }}" placeholder="Jenis Kelamin">
         </div>
         
         <div class="form-group">
            <label for="">Tanggal Lahir</label>
               <input type="date" id="tgl_lahir" name="tgl_lahir" value="{{ $siswa->tgl_lahir }}" class="form-control">
         </div>
         
         <div class="form-group">
            <label for="">Golongan Darah</label>
               <input type="text" id="gol_darah" name="gol_darah" class="form-control" value="{{ $siswa->gol_darah }}" placeholder="Golongan Darah">
         </div>

         <div class="form-group">
            <label for="">Agama</label>
               <input type="text" id="agama" name="agama" class="form-control" value="{{ $siswa->agama }}" placeholder="Pilih Agama">
         </div>

         <div class="form-row mb-4">
            <img width="150px" src="{{ asset($siswa->foto) }}">
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