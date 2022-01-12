@extends('layout.main')
<form action="{{ route('kodepro.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"></h4>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputName1">KODE prosedur</label>
                  <input type="text" name="kode_prosedur" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <a href="{{ route('kodepro.index') }}"><button type="submit" class="btn btn-primary mr-2">Submit</button></a>
                <a href="#"><button class="btn btn-light">Cancel</button></a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

