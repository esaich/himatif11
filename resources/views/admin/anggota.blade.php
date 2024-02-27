@extends('admin.layout.main')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
  
  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                 <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                     For more information about DataTables, please visit the <a target="_blank"
                         href="https://datatables.net">official DataTables documentation</a>.</p> -->

  <!-- Data Anggota -->
  <div class="card shadow mb-4">
   <div class="card-header py-3 d-flex align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>
    <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal"
     data-target="#staticBackdrop">Tambah
     Data
     <i class="fas fa-fw fa-solid fa-plus"></i>
    </button>
   </div>
   <div class="card-body">
    <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
       <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Kelas</th>
        <th>Tangal Lahir</th>
        <th>No WA</th>
        <th>Email</th>
        <th>Jabatan</th>
        <th>Departemen</th>
        <th>Facebook</th>
        <th>Instagram</th>
        <th>Twiter</th>
        <th>Foto</th>
        <th>Fitur</th>
       </tr>
      </thead>
      <tfoot>
         <tr>
             <th>Nama</th>
             <th>NIM</th>
             <th>Kelas</th>
             <th>Tangal Lahir</th>
             <th>No WA</th>
             <th>Email</th>
             <th>Jabatan</th>
             <th>Departemen</th>
             <th>Facebook</th>
             <th>Instagram</th>
             <th>Twiter</th>
             <th>Foto</th>
             <th>Fitur</th>
         </tr>
        </tfoot>
      <tbody>
        @foreach($listAnggota as $anggota)
       <tr>
         <td> {{ $anggota->nama }} </td>
         <td> {{ $anggota->nim }} </td>
         <td> {{ $anggota->kelas }} </td>
         <!-- <td> {{ $anggota->angkatan }} </td> -->
         <td> {{ $anggota->tanggal_lahir }} </td>
         <td> {{ $anggota->no_wa }} </td>
         <td> {{ $anggota->email }} </td>
         <td> {{ $anggota->jabatan }} </td>
         <td> {{ $anggota->departement_id }} </td>
         <td> {{ $anggota->facebook }} </td>
         <td> {{ $anggota->twitter }} </td>
         <td> {{ $anggota->instagram }} </td>
         <!-- <td> {{ $anggota->tiktok }} </td> -->
         <!-- <td> {{ $anggota->lingkedin }} </td> -->
         <td> {{ $anggota->foto }} </td>
         <!-- <td> {{ $anggota->ksb_id }} </td> -->
         <td> 
             <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                 <button type="button" class="btn btn-success">Lihat</button>
                 <button type="button" class="btn btn-warning">Edit</button>
                 <button type="button" class="btn btn-danger">Hapus</button>
               </div>
         </td>
       </tr>
       @endforeach
       
      </tbody>
     </table>
    </div>
   </div>
  </div>

 </div>
 <!-- /.container-fluid -->

 @endsection