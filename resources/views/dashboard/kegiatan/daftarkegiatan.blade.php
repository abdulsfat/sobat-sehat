@extends('dashboard.layout.index')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Daftar Kegiatan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr class="text-center" >
                      <th>No</th>
                      <th>Nama Kegiatan</th>
                      <th>Lokasi</th>
                      <th>Penyelenggara</th>
                      <th>Jadwal</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    <tr>
                      <td>1.</td>
                      <td>Jalan Sehat</td>
                      <td>CFD Depok</td>
                      <td>
                          <div>Dinkes Depok</div>
                      </td>
                      <td><span>24 - 29 Januari 2024</span></td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="">Edit</a>
                        <a class="btn btn-danger btn-sm" href="">Delete</a>
                      </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Jalan Sehat</td>
                        <td>CFD Depok</td>
                        <td>
                            <div>Dinkes Depok</div>
                        </td>
                        <td><span>24 - 29 Januari 2024</span></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="">Edit</a>
                            <a class="btn btn-danger btn-sm" href="">Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Jalan Sehat</td>
                        <td>CFD Depok</td>
                        <td>
                            <div>Dinkes Depok</div>
                        </td>
                        <td><span>24 - 29 Januari 2024</span></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="">Edit</a>
                            <a class="btn btn-danger btn-sm" href="">Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Jalan Sehat</td>
                        <td>CFD Depok</td>
                        <td>
                            <div>Dinkes Depok</div>
                        </td>
                        <td><span>24 - 29 Januari 2024</span></td>
                        <td> 
                            <a class="btn btn-primary btn-sm" href="">Edit</a>
                            <a class="btn btn-danger btn-sm" href="">Delete</a>
                        </td>
                      </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection