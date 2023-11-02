@extends('layouts.app')

@section('title', 'coa')

@section('contents')

<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card shadow mb-4">
              <div class="card-header">
                <h3 class="card-title font-weight-bold">Data Perkiraan</h3>
                <div class="d-grid gap-3 d-md-flex justify-content-md-end mb-1">
                    <a href="{{route('coa.dft_perkiraan')}}" class="btn btn-warning  rounded" type="button">Daftar Perkiraan</a>
                    <a href="{{route('coa.perkiraan_penghubung')}}" class="btn btn-outline-danger rounded" type="button">Perkiraan Penghubung</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Button -->
                <div class="d-grid gap-6 d-md-flex justify-content-md-end mb-3">
                  </td>
                    <a href="{{ route('coa.setup_grub')}}" class="btn btn-warning rounded " type="button">Setup Grub</a>
                    <a href="{{ route('coa.tambah_perkiraan')}}" class="btn btn-success rounded" type="button">Tambah Perkiraan</a>
                </div>
                <table id="viewTable" class="table table-bordered  text-center" width="80%" cellspacing="0" >
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Akun</th>
                    <th>Grub</th>
                    <th>Sub Grub</th>
                    <th>Detail</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php($no = 1)
                  @foreach($data as $row)
                  <tr>
                    <th>{{$row->perkiraan}}</th>
                    <th>{{$row->deskripsi}}</th>
                    <th>{{$row->group}}</th>
                    <th>{{$row->group2}}</th>
                    <th>{{$row->group3}}</th>
                    <td>
                      <a href="{{ route('coa.edit',$row->id_coa)}}" class="btn btn-warning">Edit</a>
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td> 
                    
                  </tr>
                  @endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->
@endsection