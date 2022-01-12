@extends('home')
@section('content')


 <!-- partial -->

 <div class="main-panel">
    <div class="content-wrapper">
        <a href={{ route('uploadfile.create') }}><button type="submit" class="btn btn-primary mr-2">CREATE</button></a>
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">PROSEDUR</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                        <th>
                            <strong>
                               #
                            </strong>
                          </th>
                          <th>
                            <strong>
                               FILE
                            </strong>
                          </th>
                           <th>
                            <strong>
                              NAMA FILE
                            </strong>
                          </th>
                          <th width="245px">
                            <strong>
                              ACTION
                            </strong>
                          </th>
                    </tr>
                  </thead>
                   @foreach($tbl_upload as $item)
                    <tr>
                        <td>{{$item->upload_file}}</td>
                        <td>{{$item->email_app1}}</td>
                        <td>{{$item->email_app2}}</td>
                        <td>{{$item->email_app3}}</td>
                        <td><label class="badge badge-success">Active</label></td>
                    </tr>
                   @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>


@endsection
