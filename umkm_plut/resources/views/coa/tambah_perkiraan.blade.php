@extends('layouts.app')

@section('title', 'tambah perkiraan')

@section('contents')
<form action="{{route('coa.tambah_perkiraan.simpan')}}" method="post">
  @csrf
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
               <h3 class="card-title">Isi Data Perkiraan</h3>
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               <div class="row">
                   <!-- /.form-group -->
                   <div class="row col-md-14 form-group">
                                   <label class="col-sm-5 text-left control-label col-form-label" for="">Grup Perkiraan</label>
                                   <div class="row col-md-10">
                                         <button type="button" class="btn btn-outline-success col ml-1 mt-1 bt-sg activeA btn01" style="min-width:170px; max-width:170px" id="" data-value="01.">01. AKTIVA</button>
                                         <button type="button" class="btn btn-outline-success col ml-1 mt-1 bt-sg btn02" style="min-width:170px; max-width:170px" id="" data-value="02.">02 HUTANG</button>
                                         <button type="button" class="btn btn-outline-success col ml-1 mt-1 bt-sg btn03" style="min-width:170px; max-width:170px" id="" data-value="03.">03 MODAL</button>
                                         <button type="button" class="btn btn-outline-success col ml-1 mt-1 bt-sg btn04" style="min-width:170px; max-width:170px" id="" data-value="04.">04. PENDAPATAN</button>
                                         <button type="button" class="btn btn-outline-success col ml-1 mt-1 bt-sg btn05" style="min-width:170px; max-width:170px" id="" data-value="05.">05. HPP</button>
                                         <button type="button" class="btn btn-outline-success col ml-1 mt-1 bt-sg btn06" style="min-width:170px; max-width:170px" id="" data-value="06.">06. BIAYA</button>
                                         <button type="button" class="btn btn-outline-success col ml-1 mt-1 bt-sg btn07" style="min-width:170px; max-width:170px" id="" data-value="07.">07. PENDAPATAN LAIN</button>
                                         <button type="button" class="btn btn-outline-success col ml-1 mt-1 bt-sg btn08" style="min-width:170px; max-width:170px" id="" data-value="08.">08. BIAYA LAIN</button>
                                       </div>
                                   </div>                                
                               </div>
               
                     <div class="row ">
                           <div class="col-18 col-sm-8">
                         <div class="form-group m-6 d-flex">
                   
                           </div>
                   <div class="row">
                      <div class="col-18 col-sm-4 form-group">
                           <label class="col-sm text-left control-label col-form-label" for="">Nomor Akun</label>
                               <div class="row col-sm-10 d-flex">
                                   <div class="row col-md-5">
                                       <input class="form-control" type="text" name="data-value" id="id_coa" value="01." readonly>
                                           </div>
                                           <div class="row col-md-9">
                                               <input class="form-control" type="text" name="perkiraan" value="/data-value" id="perkiraan" required>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col col-sm-5 form-group">
                                       <label class="col-sm text-left control-label col-form-label" for="">Nama Akun</label>
                                           <div class="row col-md-12">
                                           <input class="form-control" type="text" name="nama" value="<?=@$detail->nama?>" id="" required>
                                       </div>
                                   </div>
   
                                   <div class="col col-sm-3 form-group">
                                       <label class="col-sm text-left control-label col-form-label" for="">Link</label>
                                       <div class="row col-md-12">
                                           <input class="form-control" type="text" name="link" value="<?=@$detail->link?>" id="">
                                       </div>
                                   </div>
                               </div>
   
                               <div class="form-group">
                                   <label class="col-sm-4 text-left control-label col-form-label" for="">Tingkat Nomor Perkiraan</label>
                                   <div class="row col-lg-12">
                                       <input class="form-control" type="hidden" name="grup" id="kode_grup" value="AKTIVA" readonly>
                                       <div class="btn-group justify-content-md-center" role="group" aria-label="Basic example" required>
                                         <button type="button" class="btn btn-outline-success activeA btnG" style="min-width:120px">GRUP</button>
                                         <button type="button" class="btn btn-outline-success btnSG" style="min-width:120px">SUB GRUP</button>
                                         <button type="button" class="btn btn-outline-success btnD" style="min-width:120px">DETAIL</button>
                                       </div>
                                     </div>
                                     <div class="row">
                                        <div class="col col-sm-4 form-group selG" style="display: none" id="">
                                            <label name="" class="col-sm text-left control-label col-form-label" for="">Sub Grup</label>
                                            <div class="row col-md-12">
                                                <select class="form-control grup" type="text" name="subgrup" value="<?=@$detail->grup?>">
                                                <option value="" disabled selected>- Pilih Sub Grup Perkiraan -</option>
                                                  <!-- belum ada -->
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col col-sm-4 form-group selSG" style="display: none" id="">
                                            <label class="col-sm text-left control-label col-form-label" for="">Detail</label>
                                            <div class="row col-md-12">
                                            <select class="form-control subgrup" type="text" name="detail" value="<?=@$detail->subgrup?>" id="">
                                                <option value="" disabled selected>- Pilih Detail Perkiraan -</option>
                                                   <!-- belum ada -->
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                   
                                   </div>

                                   </div> 
                                   <button type="submit" class="btn btn-primary btn-md col-md-12" value="simpan">SIMPAN</button>
                               </div>
                              </div>     
                              
                            </div>
                       </div>
                  </div>
                 <!-- /.col -->
                
               </div>
               <!-- /.row -->
             </div>
          </div>
       </section>
    </div>
</form>
 
@endsection