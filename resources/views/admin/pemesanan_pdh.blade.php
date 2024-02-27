@extends('admin.layout.main')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                For more information about DataTables, please visit the <a target="_blank"
                    href="https://datatables.net">official DataTables documentation</a>.</p> -->

  <!-- Data Pemesanan PDH -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Data Pemesanan PDH</h6>
      <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal"
        data-target="#tambahdata">Tambah
        Data
        <i class="fas fa-fw fa-solid fa-plus"></i>
      </button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>NIM</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Angkatan</th>
              <th>No WA</th>
              <th>Ukuran</th>
              <th>Bukti Pembayaran</th>
              <th>Program Kerja</th>
              <th>Fitur</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Name</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Angkatan</th>
              <th>No WA</th>
              <th>Email</th>
              <th>Bukti Pembayaran</th>
              <th>Program Kerja</th>
              <th>Fitur</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>21416255201204</td>
              <td>Deni Rizki Agustian</td>
              <td>IF21B</td>
              <td>21</td>
              <td>089817846583</td>
              <td>L</td>
              <td><img src="img/hp.jpg" height="170"  alt="ini foto eror"></td>
              <td>Program Kerja</td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <button type="button" class="btn  btn-success border-0 btn-sm" data-toggle="modal"
                    data-target="#staticBackdrop">Edit <i
                      class="fas fa-fw fa-solid fa-pen-to-square"></i></button>

                  <button type="button" class="btn btn-danger border-0 btn-sm">Hapus <i
                      class="fas fa-fw fa-solid fa-trash-can"></i></button>
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
