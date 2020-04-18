@extends('backEnd.partials.header')

@section('title', 'Ubah Data Wali')

@section('content')
<div class="">
   <div class="row">
      <div class="col-lg-8">
            <!-- Default form register -->
      <form class="border border-light p-5" action="{{ route('wali.update', $wali->id) }}" method="post" enctype="multipart/form-data">
         @method('patch')
         @csrf
         <div class="form-group">
            <label for="">No Ktp</label>
            <input type="text" id="no_ktp" name="no_ktp" class="form-control" value="{{ $wali->no_ktp }}"  placeholder="Masukkan NIS">
         </div>
         
         <div class="form-group">
            <label for="">Nama Lengkap</label>
               <input type="text" id="nama_wali" name="nama_wali" class="form-control" value="{{ $wali->nama_wali }}" placeholder="First name">
         </div>
         
         <div class="form-group">
            <label for="">Jenis Kelamin</label>
               <input type="text" id="jk" name="jk" class="form-control" value="{{ $wali->jk }}" placeholder="Jenis Kelamin">
         </div>
         
         <div class="form-group">
            <label for="">Tanggal Lahir</label>
               <input type="date" id="tgl_lahir" name="tgl_lahir" value="{{ $wali->tgl_lahir }}" class="form-control">
         </div>
         
         <div class="form-group">
            <label for="">Golongan Darah</label>
               <input type="text" id="gol_darah" name="gol_darah" class="form-control" value="{{ $wali->gol_darah }}" placeholder="Golongan Darah">
         </div>

         <div class="form-group">
            <label for="">Agama</label>
               <input type="text" id="agama" name="agama" class="form-control" value="{{ $wali->agama }}" placeholder="Pilih Agama">
         </div>

         <div class="form-group">
            <label for="">Wali Murid</label>
               <input type="text" id="type_wali" name="type_wali" class="form-control" value="{{ $wali->type_wali }}" placeholder="Pilih Agama">
         </div>

         <div class="form-row mb-4">
            <img width="150px" src="{{ asset($wali->foto) }}">
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