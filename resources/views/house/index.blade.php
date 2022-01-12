@extends('welcome')
@section('content')

<!-- partial -->
     <div class="main-panel">
       <div class="content-wrapper">
         <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
             <div class="card">
               <div class="card-body">
                 <div class="table-responsive">
                   <table class="table table-striped">
                     <thead>
                       <tr>
                         <th>
                             <strong>
                           no upp
                             </strong>
                         </th>
                         <th>
                            <strong>
                            departemen
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
                           seebelum perubahan
                            </strong>
                         </th>
                         <th>
                            <strong>
                            setelah perubahan
                            </strong>
                          </th>
                          <th>
                            <strong>
                            alasan
                            </strong>
                          </th>
                          <th>
                            <strong>
                            attachment file
                            </strong>
                          </th>
                       </tr>
                       @foreach ($crupp as $key=>$crupp)
                       <tr>
                         <td>{{ $crupp->no_upp}}{{++$i}}</td>
                         <td>{{ $crupp->departemen}}</td>
                         <td>{{ $crupp->kode_prosedur}}</td>
                         <td>{{ $crupp->nama_dokumen}}</td>
                         <td>{{ $crupp->sebelum_perubahan }}</td>
                         <td>{{ $crupp->setelah_perubahan }}</td>
                         <td>{{ $crupp->alasan}}</td>
                         <td>{{ $crupp->attachment_file}}</td>
                       </tr>
                       @endforeach
                     </thead>
                   </table>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <!-- row end -->
         <!-- row end -->
       </div>
<!-- content-wrapper ends -->
@endsection
