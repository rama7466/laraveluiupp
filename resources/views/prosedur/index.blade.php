@extends('welcome')
@section('content')

<!-- partial -->
     <div class="main-panel">
       <div class="content-wrapper">
         <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
             <div class="card">
               <div class="card-body">
                <form>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <strong for="inputState">DEPARTEMEN</strong>
                            <select class="form-control" name="departemen">
                                @foreach($departemen as $Kategori)
                                <option value="{{$Kategori->departemen}}">{{$Kategori->departemen}}</option>
                                @endforeach
                              </select>
                       </div>>
                      <div class="form-group col-md-3">
                        <strong for="inputState">KATEGORI PRODUK</strong>
                        <select class="form-control" name="kategori_prosedur">
                            @foreach($kategori_prosedur as $Ktprosedur)
                            <option value="{{$Ktprosedur->kategori_prosedur}}">{{$Ktprosedur->kategori_prosedur}}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="form-group col-md-4">
                        <strong for="inputState">NAMA DAN KODE PRODUK</strong>
                        <select class="form-control" name="kode_prosedur">
                            @foreach($kode_prosedur as $Kodepro)
                            <option value="{{$Kodepro->kode_prosedur}}">{{$Kodepro->kode_prosedur}}{{$Kodepro->nama_prosedur}}</option>
                            @endforeach
                          </select>
                      </div>
                    </div>
                  </form>
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
                           no.revisi
                            </strong>
                         </th>
                         <th>
                            <strong>
                            tanggal revisi
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
                           <th>
                               <strong>
                                   Tanggal berlaku
                               </strong>
                           </th>
                       </tr>
                     </thead>
                     @foreach ($crupp as $key=>$crupp)
                     <tr>
                       <td>{{ $crupp->no_upp}}{{++$i}}</td>
                       <td>{{ $crupp->departemen}}</td>
                       <td>{{ $crupp->kategori_prosedur}}</td>
                       <td>{{ $crupp->kode_prosedur}}{{ $crupp->nama_prosedur}}</td>
                       <td>{{ $crupp->nama_dokumen}}</td>
                       <td>{{ $crupp->no_upp}}</td>
                       <td>{{ $crupp->tanggal_permohonan_berlaku}}</td>
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
