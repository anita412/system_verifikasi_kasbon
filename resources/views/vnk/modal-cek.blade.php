
    
    <style>
        .left {
            text-align: left;
         
        }
        .left {
            text-align: left;
        }
        
    </style>
    <div class="modal fade bd-example-modal-lg multi-step" id="modalcek_{{$nonkasbon->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"  >
            <div class="modal-content" >
                <div class="modal-header">
                    <h4 class="modal-title step-1" data-step="1">Kasbon {{$nonkasbon->nokasbon}}</h4>
                    <h4 class="modal-title step-2" data-step="2">Verifikasi</h4>
                    <h4 class="modal-title step-3" data-step="3">Final Step</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body step-1" data-step="1" >
                    <div class="col-lg">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive shopping-cart">
                                    <table class="table mb-0" >
                                        <tbody >
                                            <tr>
                                                <td >
                                                     <p class=" align-middle mb-0 product-name">Tanggal Masuk</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$nonkasbon->tglmasuk->format('d-m-Y')}}</td>  
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Jam Masuk</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$nonkasbon->jammasuk}}</td>    
                                               <td>
                                                <p class=" align-middle mb-0 product-name">Jam Masuk</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>{{$nonkasbon->jammasuk}}</td>                                                      
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">No. Dok Sebelumnya</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$nonkasbon->doksebelumnya}}</td>     
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">User</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$nonkasbon->user->name}}</td>   
                                               <td>
                                                <p class=" align-middle mb-0 product-name">Unit</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>{{$nonkasbon->user->unit->name}}</td>                                                      
                                            </tr>
                                            <tr>
                                                <td>
                                                     <p class=" align-middle mb-0 product-name">Kode Kasbon</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$nonkasbon->kodekasbon}}</td>    
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Jenis Kasbon</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$nonkasbon->jenis}}</td>   
                                               <td>
                                                <p class=" align-middle mb-0 product-name">Kurs</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>{{$nonkasbon->kurs->code}}</td>                                                       
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Nama Vendor</p>
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$nonkasbon->namavendor}}</td>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">NO. Invoice</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$nonkasbon->noinvoice}}</td>  
                                               <td>
                                                <p class=" align-middle mb-0 product-name">Tujuan Pembayaran</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>Rp. {{$nonkasbon->tujuanpembayaran}}</td>     
                                            </tr>  
                                                             
                                        </tbody>
                                    </table>
                                </div><!--end re-table-->
                            </div>
                        </div>
                    </div>
                </div>
                <form  action="{{ route('vnk.store', $nonkasbon->id) }}" method="post" class="form-parsley" >
                <input value="{{$nonkasbon->id}}" class="text-muted mb-0" name="id" hidden>
                                {{ csrf_field() }}
                <div class="modal-body step-3" data-step="2">
                    <div class="row" style="margin-left:auto;margin-right:auto;">
                        <div class="col-md-6">
                            <div class="">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select" required>
                                    <option value=""  selected hidden>Pilih</option>
                                    <option value="Revisi">Minta Revisi</option>
                                    <option value="Terverifikasi">Terverifikasi</option>
                                    <option value="Ditolak">Tolak Ajuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="">
                                <label class="form-label">Catatan</label>
                               <textarea class="form-control" name="keterangan" required></textarea>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="modal-body step-2" data-step="3">
                        <table class="table  table-bordered table-sm t1">
                            <tbody>
                            <tr>
                                <th style="width: 70%">Dokumen</th>
                                <th>Quantity</th>
                                <th style="width: 0%" class="text-center"></th>
                            </tr>
                            <tr class="item">
                                <td><input name="dokumen[]" class="form-control" required parsley/></td></td>
                                <td><input name="nominal[]" class="qnty amount form-control" value="" required parsley /></td>
                                <td class="text-end">
                                    <button type="button" name="remove"  class="btn btn-sm btn-soft-danger btn-circle me-2" onclick="rowElim(this);"><i class="dripicons-trash" aria-hidden="true"></i></button></td>
                                
                                </tr>
                                <tfoot>
                                    <tr>
                                        <th class="text-center"><strong>TOTAL NOMINAL</strong></th>
                                        <th><input id="netto" readonly="readonly" class="form-control"  name="total" type="text" value=""></th>
                                        <th></th>
                                    </tr>
                                </tbody>
                                    </tfoot>
                        </table>
                        <a class="btn btn-success btn-sm addRow">Add New Row</a>
                        <br />
                    </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-danger step step-2" data-step="2" onclick="sendEvent('#demo-modal-3', 1)">Back</button>
                    <button type="button" class="btn btn-primary step step-1" data-step="1" onclick="sendEvent('#demo-modal-3', 2)">Next</button>
                    <button type="button" class="btn btn-danger step step-3" data-step="3" onclick="sendEvent('#demo-modal-3', 2)">Back</button>
                    <button type="submit" class="btn btn-primary step step-3" data-step="3" >Simpan</button>
                    <button type="button" class="btn btn-primary step step-2" data-step="2" onclick="sendEvent('#demo-modal-3', 3)">Next</button>
                </div>
                </form>
            </div>
        </div>
    </div><!--end modal-->
    <script>

        $(document).ready(function () {
        
            // $('k').on('click','.addRow', function(){
            //     var tr = '<tr>'+
            //         '<td>'+
            //             '<label class="mb-1">Catatan</label>'+
            //             '<input type="text" name="kekurangan[]" id="kekurangan" class="form-control" required parsley></td>'+
            //         '<td>'+  
            //             '<a href="javascript:;" class="btn btn-outline-danger btn-sm deleteRow mt-3"> <span class="far fa-trash-alt me-1"></span>Delete</a></td>'+
            //     '</tr>';
            
            //     $('tbody').append(tr);
            // });
        // function for adding a new row
        var r = 1;
        $('.addRow').click(function () {
            r++;
            $('.t1').append('<tr id="row' + r + '" class="item"><td><input class="form-control" name="dokumen[]" required parsley /></td><td><input  required parsley class="qnty amount form-control" name="nominal[]" /></td><td class="text-end"></button><button type="button" name="remove" id="' + r + '" class="btn btn-sm btn-soft-danger btn-circle me-2" onclick="rowElim(this);"><i class="dripicons-trash" aria-hidden="true"></i></button></td></tr>');
        });
        // remove row when X is clicked
        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
        // calculate everything
        $(document).on("keyup", ".amount", calcAll);
        //$(".amount").on("change", calcAll);
        });
        
        // function for calculating everything
        function calcAll() {
        // calculate total for one row
        
        $(".item").each(function () {
            var qnty = 0;
           
            if (!isNaN(parseFloat($(this).find(".qnty").val()))) {
                qnty = parseFloat($(this).find(".qnty").val());
            }
        
            total = qnty;
            $(this).find(".qnty").val(total);
        });
        
        // sum all totals
        var sum = 0;
        $(".qnty").each(function () {
            if (!isNaN(this.value) && this.value.length != 0) {
                sum += parseFloat(this.value);
            }
        });
        // show values in netto, steuer, brutto fields
        $("#netto").val(sum.toFixed());
        }
            </script>
        