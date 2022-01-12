@extends('layout.main')
<form action="{{ route('uploadfile.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">CREATE UPP</h4>
              <form method="post" action="{{route('berkas.store')}}" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
              <label>Pilih Berkas Gambar</label>
              <input name="berkas" type="file" class="form-control @error('berkas') is-invalid @enderror" required autofocus>
              @error('berkas')
              <div class="invalid-feedback">
               <strong>{{ $message }}</strong>
              </div>
              @enderror
                  </div>
                  <button class="mt-3 btn btn-primary btn-block " type="submit">Upload</button>
               </form>

                <div class="form-group">
                  <label for="exampleInputName1">email app1</label>
                  <input type="text" name="email_app1" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">email app2</label>
                  <input type="text" name="email_app2" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">email app3</label>
                  <input type="text" name="email_app3" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <a href="{{ route('uploadfile.index') }}"><button type="submit" class="btn btn-primary mr-2">Submit</button></a>
                <a href="#"><button class="btn btn-light">Cancel</button></a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

