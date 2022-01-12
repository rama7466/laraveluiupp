@extends('home')
@section('content')


 <!-- partial -->

 <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"></h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                        <th>
                            <strong>
                           no upp
                            </strong>
                         </th>
                         <th>
                            <strong>
                                tanggal upp
                            </strong>
                        </th>
                        <th>
                            <strong>
                                pengaju
                            </strong>
                          </th>
                          <th>
                            <strong>
                                nama dan kode prosedur
                             </strong>
                         </th>
                         <th>
                            <strong>
                                nama dokumen
                             </strong>
                         </th>
                         <th>
                            <strong>
                                tanggal permohonan berlaku
                             </strong>
                          </th>
                          <th width="245px">
                            <strong>
                                action
                             </strong>
                          </th>
                    </tr>
                  </thead>
                  @foreach ($crupp as $key=>$crupp)
                    <tr>
                        <td>{{ $crupp->no_upp}}{{++$i}}</td>
                        <td>{{ $crupp->tanggal_upp}}</td>
                        <td>{{ $crupp->pengaju}}</td>
                        <td>{{ $crupp->kode_prosedur}}{{ $crupp->nama_prosedur}}</td>
                        <td>{{ $crupp->nama_dokumen}}</td>
                        <td>{{ $crupp->tanggal_permohonan_berlaku}}</td>
                        <td>

                            <a href="formprocs"><button type="button" class="btn btn-success btn-rounded btn-icon">
                            <i class="mdi mdi-briefcase-check"></i>
                          </button></a>
                          <button type="button" class="btn btn-danger btn-rounded btn-icon">
                            <i class="mdi mdi-cached"></i>
                          </button>
                          <button type="button" class="btn btn-info btn-rounded btn-icon">
                            <i class="mdi mdi-delete-forever"></i>
                          </button></td>
                    </tr>
                    @endforeach
                </table>

              </div>
            </div>
          </div>
        </div>

@endsection
