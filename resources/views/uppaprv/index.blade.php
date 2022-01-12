@extends('home')
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
                                tanggal upp
                            </strong>
                        </th>
                         <th>
                            <strong>
                                departemen
                            </strong>
                         </th>
                         <th>
                            <strong>
                                pengaju
                            </strong>
                          </th>
                          <th>
                            <strong>
                                email pengaju
                            </strong>
                          </th>
                          <th>
                            <strong>
                                manager approval 1
                            </strong>
                          </th>
                          <th>
                            <strong>
                                email manager approval1
                            </strong>
                          </th>
                          <th>
                            <strong>
                               kategori prosedur
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
                                sebelum perubahan
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
                                attachment file user
                             </strong>
                         </th>
                         <th>
                            <strong>
                                attachment file master
                             </strong>
                         </th>
                         <th>
                            <strong>
                                tanggal approval pic 1
                             </strong>
                          </th>
                          <th>
                            <strong>
                                email approval pic 2
                             </strong>
                          </th>
                          <th>
                            <strong>
                                tanggal approval pic 2
                             </strong>
                          </th>
                          <th>
                            <strong>
                                email approval pic 3
                             </strong>
                          </th>
                          <th>
                            <strong>
                                tanggal approval pic 3
                             </strong>
                          </th>
                       </tr>
                     </thead>
                     @foreach ($crupp as $key=>$crupp)
                     <tr>
                       <td>{{ $crupp->no_upp}}{{++$i}}</td>
                       <td>{{ $crupp->tanggal_upp}}</td>
                       <td>{{ $crupp->departemen}}</td>
                       <td>{{ $crupp->pengaju}}</td>
                       <td>{{ $crupp->email_pengaju}}</td>
                       <td>{{ $crupp->manager_approval}}</td>
                       <td>{{ $crupp->email_manager_approval1}}</td>
                       <td>{{ $crupp->kategori_prosedur}}</td>
                       <td>{{ $crupp->kode_prosedur}}{{ $crupp->nama_prosedur}}</td>
                       <td>{{ $crupp->nama_dokumen}}</td>
                       <td>{{ $crupp->sebelum_perubahan }}</td>
                       <td>{{ $crupp->setelah_perubahan }}</td>
                       <td>{{ $crupp->alasan}}</td>
                       <td>{{ $crupp->attachment_file}}</td>
                       <td>{{ $crupp->tanggal_permohonan_berlaku}}</td>
                     </tr>
                     @endforeach
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
