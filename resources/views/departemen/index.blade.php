@extends('home')
@section('content')


 <!-- partial -->

 <div class="main-panel">
    <div class="content-wrapper">
        <a href={{ route('departemen.create') }}><button type="submit" class="btn btn-primary mr-2">CREATE</button></a>
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">DEVELOMEN</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                        <th>
                            <strong>
                                DEPARTEMEN
                            </strong>
                         </th>
                         <th>
                            <strong>
                                nama
                            </strong>
                         </th>
                         <th>
                            <strong>
                                EMAIL MANAGER
                            </strong>
                         </th>
                         <th>
                            <strong>
                                STATUS
                            </strong>
                         </th>
                    </tr>
                  </thead>
                    @foreach ($departemen as $dpr)
                    <tr>
                        <td>{{$dpr->departemen}}</td>
                        <td>{{$dpr->nama_manager}}</td>
                        <td>{{$dpr->email_manager}}</td>
                        <td><label class="badge badge-success">Active</label></td>
                    </tr>
                    @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>


@endsection
