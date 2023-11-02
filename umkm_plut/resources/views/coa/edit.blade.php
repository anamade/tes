@extends('layouts.app')

@section('title', 'Edit perkiraan')

@section('contents')
<!--  -->
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Edit Data Perkiraan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
                <!-- /.form-group -->
                <div class="row col-md-8 form-group">
                                                               
                 </div>
                  <div class="row col-md-12 ">
                   <div class="col-18 col-sm-8">
                  <div class="form-group m-10 d-flex">
                
                  </div>
                 <div class="row">
                   <div class="col col-sm-4 form-group">
                        <label class="col-sm text-left control-label col-form-label" for="">Nomor Akun</label>
                            <div class="row col-sm-10 d-flex">
                                <div class="row col-md-10 text-center">
                                    <!-- <input class="form-control" type="text" name="kode" id="id_coa" value="{{$coa->id_coa}}" readonly> -->
                                        </div>
                                        <div class="row col-md-9">
                                            <input class="form-control" type="text" name="akun" value="{{$coa->perkiraan}}" id="addNa kun" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-sm-5 form-group">
                                    <label class="col-sm text-left control-label col-form-label" for="">Nama Akun</label>
                                        <div class="row col-md-12">
                                        <input class="form-control" type="text" name="nama" value="{{$coa->group}}" id="" required>
                                    </div>
                                </div>
                             
                                <div class="col col-sm-3 form-group">
                                    <label class="col-sm text-left control-label col-form-label" for="">Link</label>
                                    <div class="row col-md-12">
                                        <input class="form-control" type="text" name="link" value="{{$coa->link}}" id="">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="col-sm-4 text-left control-label col-form-label" for="">Tingkat Nomor Perkiraan</label>
                                <div class="row col-lg-12">
                                    <input class="form-control" type="hidden" name="grup" id="id_coa" value="{{$coa->perkiraan}}" readonly>
                                    <div class="btn-group justify-content-md-center" role="group" aria-label="Basic example" required>
                                      <button type="button" class="btn btn-outline-success activeA btnG" style="min-width:120px">GRUP</button>
                                      <button type="button" class="btn btn-outline-success btnSG" style="min-width:120px">SUB GRUP</button>
                                      <button type="button" class="btn btn-outline-success btnD" style="min-width:120px">DETAIL</button>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col col-sm-4 form-group selG" style="display: none" id="subgrub">
                                       <h5>Sub Grub</h5>>
                                        <div class="row col-md-12">
                                            <option value="#" disabled selected>- Pilih Sub Grup Perkiraan -</option>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                   <li><a class="dropdown-item" href="#">Another action</a></li>
                                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                 </ul>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                          </div>
                        
                        </div>
                    <button type="submit" class="btn btn-primary btn-md col-md-12" value="simpan">SIMPAN</button>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
  </div>
 </section>
 </div>
</form>
@endsection