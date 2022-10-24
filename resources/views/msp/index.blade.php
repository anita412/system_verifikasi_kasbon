@extends('layout.master')
@section('title') Dashboard @endsection

@section('css')
<link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/plugins/huebee/huebee.min.css') }}" rel="stylesheet" type="text/css" />
@endsection


    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') IMST @endslot
            @slot('li_2') SP @endslot
            @slot('li_3') Monitoring @endslot
            @slot('title') Monitoring SP @endslot
        @endcomponent
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 b-round" role="alert">
            <strong>Well Done 👍</strong>{{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
       
    <style>
 .select2-container .select2-selection--single, .select2-container--default .select2-selection--single .select2-selection__rendered, .select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 35px;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 35px;
}
    </style>

 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="display: inline;">Monitoring SP</h4>
               
                <p class="text-muted mb-0">
                </p>
            </div><!--end card-header-->
                <div class="card-body">
                   
                    <div class="row mb-3">
                        <div class="col-sm">
                            <a href="{{ route('kasbonexport') }}" class="btn btn-sm btn-outline-primary">
                                <i data-feather="download" class="align-self-center icon-xs"></i>
                            </a>
                        </div>
                        <div class="col-sm-2">
                               <select class="select2 form-control status-dropdown" >
                                    <option value=""> All</option>
                                    <option value="Belum Jatuh Tempo"> Belum Jatuh Tempo</option>
                                    <option value="SP 1"> SP 1</option>
                                    <option value="SP 2"> SP 2</option>
                                    <option value="SP 3"> SP 3</option>
                                    <option value="PB SDM"> PB SDM</option>
                                    <option value="SEMUA SP & PB SDM"> SEMUA SP & PB SDM</option>
                                    <option value="CLOSE"> CLOSE</option>
                                </select>
                        </div>
                        <div class="col-sm-2 text-end">
                            <div class="input-group">
                                <span class="input-group-text"><i class="ti ti-calendar font-16"></i></span><input type="text" class="form-control pull-right datesearchbox"  id="datesearch" placeholder="Search by date range..">
                            </div>
                        </div>
                        {{-- <div class="col-sm-2 text-end">
                            <div class="input-group">
                                <input type="text" id="myInput">
                            </div>
                        </div> --}}
                       {{-- <div class="col-sm-2">
                           <div class="input-group">
                                <div class="input-group-text">From : </div>
                            <input type="text" class="form-control" id="min" name="min">
                            </div>
                        </div><!--end col-->
                        <div class="col-sm-2">
                            <div class="input-group">
                                <div class="input-group-text">To : </div>
                            <input type="text" class="form-control" id="max" name="max">
                            </div>
                        </div><!--end col--> --}}
                      
                        {{-- </div><!--end col--> --}}
                    </div><!--end row-->
                <table id="datatable2" class="table dt-responsive nowrap" >
                    <thead>
                    <tr>
                        <th>No Kasbon</th>
                        <th>Tanggal Masuk</th>
                        <th>User</th>
                        <th>Uraian Pengguna</th>
                        <th>Nominal Kasbon</th>
                        <th>PTJ</th>
                        <th>SP 1</th>
                        <th>SP 2</th>
                        <th>SP 3</th>
                        <th>MT SP</th>
                        <th>PB SDM</th>
                        <th style="width:0%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($kasbon as $kasbon)
                        @if(isset($kasbon->verifikasikasbon->status))
                        @if(isset($kasbon->monitoringsp->ptj))
                        @if($kasbon->verifikasikasbon->status == "Terverifikasi")
                    <tr>
                        <td>{{$kasbon->nokasbon}}</td>
                        <td>{{$kasbon->tglmasuk->format('d/m/Y')}}</td>
                        <td>{{$kasbon->user->name}}</td>
                        <td style="width: 10%">{{$kasbon->formatkasbon}}</td>
                        <td>Rp. {{number_format($kasbon->total)}}</td>
                        <td>{{$kasbon->monitoringsp->ptj}}</td>
                        <td>{{$kasbon->monitoringsp->sp1}}</td>
                        <td>{{$kasbon->monitoringsp->sp2}}</td>
                        <td>{{$kasbon->monitoringsp->sp3}}</td>
                        <td>{{$kasbon->monitoringsp->mts}}</td>
                        <td>{{$kasbon->monitoringsp->pbsdm}}</td>
                        <td style="text-align: center"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                        
                    </tr>
                    <div class="modal fade" id="exampleModalDanger_{{$kasbon->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalDanger1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div><!--end modal-header-->
                                <div class="modal-body">
                                        <div class="col-lg-12" style="text-align: center;">
                                            <h4>Are You Sure Want To Delete ?</h4> 
                                        </div><!--end col-->                                                 
                                </div><!--end modal-body-->
                                <div class="modal-footer">  
                                    <form action="{{ route('kasbon.destroy',$kasbon->id) }}" method="POST" style="display: inline">
                                    
                                        @method('delete')
                                        {{ csrf_field() }}                                                  
                                        <button type="submit" class="btn btn-soft-danger btn-sm">Yes</button>
                                    </form>  
                                    <button type="button" class="btn btn-soft-primary btn-sm" data-bs-dismiss="modal">Close</button>
                                </div><!--end modal-footer-->
                            </div><!--end modal-content-->
                        </div><!--end modal-dialog-->
                    </div><!--end modal-->
                    @endif
                    @endif
                    @endif
                    @endforeach
                    </tbody>
                   
                </table>
            </div>
        </div>
    </div> <!-- end col -->
       

@endsection
@section('script')
<script src="{{ URL::asset('assets/plugins/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/huebee/huebee.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/timepicker/bootstrap-material-datetimepicker.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/jquery.forms-advanced.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>\
<script src="{{ URL::asset('assets/js/app.js') }}"></script>
<script src="assets/plugins/tippy/tippy.all.min.js"></script>
<script src="assets/js/jquery.core.js"></script>
<script type="text/javascript"> 
 var start_date;
   var end_date;
   var DateFilterFunction = (function (oSettings, aData, iDataIndex) {
      var dateStart = parseDateValue(start_date);
      var dateEnd = parseDateValue(end_date);
      //Kolom tanggal yang akan kita gunakan berada dalam urutan 2, karena dihitung mulai dari 0
      //nama depan = 0
      //nama belakang = 1
      //tanggal terdaftar =2
      var evalDate= parseDateValue(aData[1]);
        if ( ( isNaN( dateStart ) && isNaN( dateEnd ) ) ||
             ( isNaN( dateStart ) && evalDate <= dateEnd ) ||
             ( dateStart <= evalDate && isNaN( dateEnd ) ) ||
             ( dateStart <= evalDate && evalDate <= dateEnd ) )
        {
            return true;
        }
        return false;
  });

  // fungsi untuk converting format tanggal dd/mm/yyyy menjadi format tanggal javascript menggunakan zona aktubrowser
  function parseDateValue(rawDate) {
      var dateArray= rawDate.split("/");
      var parsedDate= new Date(dateArray[1], parseInt(dateArray[1])-1, dateArray[0]);  // -1 because months are from 0 to 11   
      return parsedDate;
  }    

  $( document ).ready(function() {
    
  //konfigurasi DataTable pada tabel dengan id example dan menambahkan  div class dateseacrhbox dengan dom untuk meletakkan inputan daterangepicker
   var $dTable = $('#datatable2').DataTable({
    order: [[0, 'desc']],
    columnDefs: [
            {
                "targets": [6],
                "visible": true
            }
        ],
    "dom": "<'row'<'col-sm-4'l><'col-sm-5' <'datesearchbox'>><'col-sm-3'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-5'i><'col-sm-7'p>>"
   });

   //menambahkan daterangepicker di dalam datatables
//    $("div.datesearchbox").html('<div class="input-group"> <div class="input-group-addon"><i class="ti ti-calendar"></i></div><input type="text" class="form-control pull-right" id="datesearch" placeholder="Search by date range.."> </div>');
$('#myInput').on( 'keyup', function () {
    $dTable.search( this.value ).draw();
} );


$('.filter-checkbox').on('change', function(e){
      var searchTerms = []
      $.each($('.filter-checkbox'), function(i,elem){
        if($(elem).prop('checked')){
          searchTerms.push("^" + $(this).val() + "$")
        }
      })
      $dTable.column(1).search(searchTerms.join('|'), true, false, true).draw();
    });
  
    $('.status-dropdown').on('change', function(e){
      var status = $(this).val();
      $('.status-dropdown').val(status)
      console.log(status)
      //dataTable.column(6).search('\\s' + status + '\\s', true, false, true).draw();
      $dTable.column(6).search(status).draw();
    })  

   document.getElementsByClassName("datesearchbox")[0].style.textAlign = "right";

   //konfigurasi daterangepicker pada input dengan id datesearch
   $('#datesearch').daterangepicker({
      autoUpdateInput: false
    });

   //menangani proses saat apply date range
    $('#datesearch').on('apply.daterangepicker', function(ev, picker) {
       $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
       start_date=picker.startDate.format('DD/MM/YYYY');
       end_date=picker.endDate.format('DD/MM/YYYY');
       $.fn.dataTableExt.afnFiltering.push(DateFilterFunction);
       $dTable.draw();
    });

    $('#datesearch').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
      start_date='';
      end_date='';
      $.fn.dataTable.ext.search.splice($.fn.dataTable.ext.search.indexOf(DateFilterFunction, 1));
      $dTable.draw();
    });
  });
</script>
@endsection
