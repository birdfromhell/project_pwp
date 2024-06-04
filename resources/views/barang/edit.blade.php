@extends('main') 
@section('title','Data Barang')
@section('breadcrumbs') 
<main id="main" class="main">  
    <div class="pagetitle"> 
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./anggotas">Master Data</a></li>
            <li class="breadcrumb-item active">Data Barang</li>
          </ol>
        </nav>
      </div>  
        <section  class="section dashboard">
          <div class="col-12">
            <div class="row">  
                <div class="card top-selling overflow-auto">  
                    <div class="content mt-3">
                        <div class="animated fadeIn">
                       
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                     
                                <div class="card-header"> 
                                 <table width="100%"  class="fa fa-text-height" aria-hidden="true"   border="0" cellpadding="0" cellspacing="0"   class="fa fa-align-center" > 
                                 <tr>
                                  <td><h5 class="card-title">Ubah Data Barang</span></h5></td>
                                  <td> 
                                     <div align="right"><a href="{{ url('./barang')}}" class="btn btn-success btn-sm" >
                                      <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a> 
                                    </div> 
                                  </td> 
                                   </tr>
                                 </table>

                                 <div class="col-12">
                                    <div class="card recent-sales overflow-auto">
                                    <div class="card-body">  
                                        <form action="{{ url('barang/' .$barang->kode_barang) }}" method="post"  enctype="multipart/form-data">
                                    
                                            @method('put')
                                            {{ csrf_field() }}
                                            <div class="row mb-3">
                                              <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                                              <div class="col-sm-10">
                                                  <input type="text" class="form-control"  readonly  value="{{ old('kode_barang',$barang->kode_barang) }}"  name="kode_barang"  required autofocus>
                                              </div>
                                            </div> 
                                            <div class="row mb-3">
                                              <label for="nik" class="col-sm-2 col-form-label">Nama Barang</label>
                                              <div class="col-sm-10">
                                                  <input type="text" class="form-control" value="{{ old('nama_barang',$barang->nama_barang) }}"  name="nama_barang"  required autofocus>
                                              </div>
                                            </div> 
                                            <div class="row mb-3">
                                              <label for="nik" class="col-sm-2 col-form-label">Satuan</label>
                                              <div class="col-sm-10">
                                                  <input type="text" class="form-control" value="{{ old('satuan',$barang->satuan) }}"  name="satuan"  required autofocus>
                                              </div>
                                            </div>
                                            <div class="row mb-3">
                                              <label for="nik" class="col-sm-2 col-form-label">Stok</label>
                                              <div class="col-sm-10">
                                                  <input type="text" class="form-control" value="{{ old('stok',$barang->stok) }}"  name="stok"  required autofocus>
                                              </div>
                                            </div>
                                            <div class="row mb-3">
                                              <label for="nik" class="col-sm-2 col-form-label">Harga Jual</label>
                                              <div class="col-sm-10">
                                                  <input type="text" class="form-control" value="{{ old('harga_jual',$barang->harga_jual) }}"  name="harga_jual"  required autofocus>
                                              </div>
                                            </div>
                                            <div class="row mb-3">
                                              <label for="nik" class="col-sm-2 col-form-label">Id Jenis</label>
                                              <div class="col-sm-10">
                                                  <input type="text" class="form-control" value="{{ old('id_jenis',$barang->id_jenis) }}"  name="id_jenis"  required autofocus>
                                              </div>
                                            </div>
                                            <div class="row mb-3">
                                              <label for="nik" class="col-sm-2 col-form-label">User Id</label>
                                              <div class="col-sm-10">
                                                  <input type="text" class="form-control" value="{{ old('user_id',$barang->user_id) }}"  name="user_id"  required autofocus>
                                              </div>
                                            </div>
                   
                             
                                              <button type="submit" class="btn btn-success" style="font-size:16px"><span class="bi bi-pencil-square green-color"> Update </span></button>
                             
                                           </form> 
                                            </div> 
                                        </div> 
                                    </div>
                                </div>
                                     
                                 
                                  </div>
                           
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
      </section> 
</main> 
@endsection