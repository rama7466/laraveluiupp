@extends('layout.main')
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<?php


?>
      <!-- partial -->
      <form action="{{ route('uppprocs.update',$creatupp->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">CREATE UPP</h4>
                  <form class="forms-sample">
                    <div class="form-group">
                        <strong>no upp</strong>
                        <input name="no_upp" class="form-control-plaintext" value="/UPP/PDQA/{{$today->toDateString();}}/00" id="exampleInputEmail3" placeholder="" readonly>
                    </div>
                     <div class="form-group">
                        <strong>TANGGALUPP</strong>
                        <input name="tanggal_upp" class="form-control-plaintext" value="{{$today}}" id="exampleInputEmail3" placeholder="" readonly>
                    </div>
                    <div class="form-group">
                        <strong>PENGAJU</strong>
                        <input type="text" name="pengaju" class="form-control" id="exampleInputEmail3" placeholder="">
                    </div>
                       <div class="form-group">
                        <strong for="inputState">KODE PRODUK</strong>
                        <select class="form-control" name="kode_prosedur">
                            @foreach($kode_prosedur as $Kodepro)
                            <option value="{{$Kodepro->kode_prosedur}}">{{$Kodepro->kode_prosedur}}</option>
                            @endforeach
                          </select>
                      </div>
                    <div class="form-group">
                        <strong>NAMA DOKUMEN</strong>
                        <input type="text" name="nama_dokumen" class="form-control" id="exampleInputEmail3" placeholder="jika prosedur eksist,pastikan nama file copy dari prosedur">
                    </div>
                    <div class="form">
                        <strong>TANGGAL BERLAKU</strong>
                        <input name="tanggal_permohonan_berlaku" class="form-control-plaintext" value="{{$today->addDays(5);}}" id="exampleInputEmail3" placeholder="" readonly>
                    </div>
                    <a href="{{ route('creatupp.index') }}"><button type="submit" class="btn btn-primary mr-2">Submit</button></a>
                    <a href="#"><button class="btn btn-light">Cancel</button></a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
