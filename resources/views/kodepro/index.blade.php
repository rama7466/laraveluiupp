@extends('home')
@section('content')


 <!-- partial -->

 <div class="main-panel">
    <div class="content-wrapper">
        <a href={{ route('kodepro.create') }}><button type="submit" class="btn btn-primary mr-2">CREATE</button></a>
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
                                kode prosedur
                             </strong>
                         </th>
                         <th>
                            <strong>
                                STATUS
                             </strong>
                         </th>
                    </tr>
                  </thead>
                    @foreach ($kodepro as $kdep)
                    <tr>
                        <td>{{$kdep->kode_prosedur}}</td>
                        <td><label class="badge badge-success">Active</label></td>
                    </tr>
                    @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>


@endsection
