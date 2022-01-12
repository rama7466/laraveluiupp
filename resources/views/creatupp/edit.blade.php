@extends('layout.main')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('creatupp.index') }}"> Back</a>
        </div>
    </div>
</div>
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

      <!-- partial -->
    <form action="{{ route('creatupp.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')
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
                        <strong>DEPARTEMEN</strong>
                          <select class="form-control" name="departemen">
                            @foreach($departemen as $Kategori)
                            <option value="{{$Kategori->departemen}}">{{$Kategori->departemen}}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="form-group">
                        <strong>EMAIL MANAGER</strong>
                        <input name="manager_approval" class="form-control-plaintext" value="ramaaamam12233@gmail.com" id="exampleInputEmail3" placeholder="" readonly>
                    </div>
                    <div class="form-group">
                        <strong>EMAIL MANAGER APPROVAL1</strong>
                        <input type="text" name="email_manager_approval1" class="form-control-plaintext" value="ramaramdhani2112@gmail.com" id="exampleInputEmail3" placeholder="" readonly>
                    </div>
                    <div class="form-group">
                        <strong>PENGAJU</strong>
                        <input type="text" name="pengaju" class="form-control" id="exampleInputEmail3" placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>EMAIL PENGAJU</strong>
                        <input name="email_pengaju" class="form-control" id="ramaramdhani@gm" placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>KATEGORI PROSEDUR</strong>
                          <select class="form-control" name="kategori_prosedur">
                            @foreach($kategori_prosedur as $Ktprosedur)
                            <option value="{{$Ktprosedur->kategori_prosedur}}">{{$Ktprosedur->kategori_prosedur}}</option>
                            @endforeach
                          </select>
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
                    <div class="form-group">
                        <strong>SETELAH PERUBAHAN</strong>
                        <input type="text" name="setelah_perubahan" class="form-control" id="exampleInputEmail3" placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>SEBELUM PERUBAHAN</strong>
                        <input type="text" name="sebelum_perubahan" class="form-control" id="exampleInputEmail3" placeholder="">
                    </div>
                    <div class="form-group">
                        <strong>ALASAN</strong>
                        <input type="text" name="alasan" class="form-control" id="exampleInputEmail3" placeholder="">
                    </div>
                    <div class="form-group">
                      <strong>File upload</strong>
                      <input type="file" name="attachment_file" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload">
                      </div>
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
