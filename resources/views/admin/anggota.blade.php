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
       <tr>
         <td>Gozali</td>
         <td>21416255201215</td>
         <td>IF21B</td>
         <td>17-06-2003</td>
         <td>083815906967</td>
         <td>if21.gozali@mhs.ubpkarawang.ac.id</td>
         <td>Ketua Departemen Penristek</td>
         <td>Penristek</td>
         <td>Facebook</td>
         <td>Instagram</td>
         <td>Twiter</td>
         <td>Foto</td>
         <td> 
             <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                 <button type="button" class="btn btn-success">Lihat</button>
                 <button type="button" class="btn btn-warning">Edit</button>
                 <button type="button" class="btn btn-danger">Hapus</button>
               </div>
         </td>
       </tr>
       <tr>
         <td>Gozali</td>
         <td>21416255201215</td>
         <td>IF21B</td>
         <td>17-06-2003</td>
         <td>083815906967</td>
         <td>if21.gozali@mhs.ubpkarawang.ac.id</td>
         <td>Ketua Departemen Penristek</td>
         <td>Penristek</td>
         <td>Facebook</td>
         <td>Instagram</td>
         <td>Twiter</td>
         <td>Foto</td>
         <td> 
             <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                 <button type="button" class="btn btn-success">Lihat</button>
                 <button type="button" class="btn btn-warning">Edit</button>
                 <button type="button" class="btn btn-danger">Hapus</button>
             </div>
         </td>
     </tr>
     <tr>
         <td>Gozali</td>
         <td>21416255201215</td>
         <td>IF21B</td>
         <td>17-06-2003</td>
         <td>083815906967</td>
         <td>if21.gozali@mhs.ubpkarawang.ac.id</td>
         <td>Ketua Departemen Penristek</td>
         <td>Penristek</td>
         <td>Facebook</td>
         <td>Instagram</td>
         <td>Twiterrrrr</td>
         <td> <img src="https://source.unsplash.com/100x100" alt="ini foto eror"></td>
         <td> 
             <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                 <button type="button" class="btn btn-success">Lihat</button>
                 <button type="button" class="badge badge-pill badge-success border-0" data-toggle="modal" data-target="#staticBackdrop">Edit <i class="fas fa-fw fa-solid fa-pen-to-square"></i></button>
                 
                 <button type="button" class="badge badge-pill badge-danger border-0">Hapus <i class="fas fa-fw fa-solid fa-trash-can"></i></button>
               </div>
         </td>
       </tr>
      </tbody>
     </table>
    </div>
   </div>
  </div>

 </div>
 <!-- /.container-fluid -->

 @endsection