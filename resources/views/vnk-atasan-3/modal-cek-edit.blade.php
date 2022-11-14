
    
    <style>
        .left {
            text-align: left;
         
        }
        .left {
            text-align: left;
        }
        
    </style>
    <div class="modal fade bd-example-modal-lg multi-step" id="modalcekedit_{{$nonkasbon->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"  >
            <div class="modal-content" >
                <div class="modal-header">
                    <h4 class="modal-title step-1" data-step="1">Non Kasbon {{$nonkasbon->np_nokasbon}}</h4>
                    <h4 class="modal-title step-2" data-step="2">Verifikasi</h4>
                    <h4 class="modal-title step-3" data-step="3">Final Step</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body step-1" data-step="1" >
                    <div class="col-lg">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive shopping-cart">
                                    <table class="table mb-0" style="text-align:left">
                                        <tbody >
                                            <tr>
                                                <td >
                                                     <p class=" align-middle mb-0 product-name">Tanggal Masuk</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$nonkasbon->tglmasuk->format('m/d/Y')}}</td>  
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Jam Masuk</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$nonkasbon->jammasuk}}</td>    
                                               <td>
                                                <p class=" align-middle mb-0 product-name">Tujuan Pembayaran</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>{{$nonkasbon->tujuanpembayaran}}</td>                                                          
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
                                               
                                            </tr>  
                                                             
                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                                <div class="table-responsive shopping-cart">
                                    <table class="table  table-bordered table-sm t1">
                                        <tbody>
                                        <tr>
                                            <th style="width: 70%">Dokumen</th>
                                            <th>Nominal</th>
                                            {{-- <th style="width: 0%" class="text-center"></th> --}}
                                        </tr>
                                        @foreach ($nonkasbon->dokumennk->dokumennkd as $item)
                                            
                                        
                                        <tr class="item">
                                            <td>{{$item->dokumen}}</td>
                                            <td>Rp. {{number_format($item->nominal)}}</td>
                                            {{-- <td class="text-end"> --}}
                                                {{-- <button type="button" name="remove"  class="btn btn-sm btn-soft-danger btn-circle me-2" onclick="rowElim(this);"><i class="dripicons-trash" aria-hidden="true"></i></button></td> --}}
                                            </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th class="text-center"><strong>TOTAL NOMINAL</strong></th>
                                                    <th>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Rp. {{number_format($nonkasbon->dokumennk->total)}}</span>
                                                       </th>
                                                    </div>
                                                    {{-- <th></th> --}}
                                                </tr>
                                            </tfoot>
                                    </table>
                                </div><!--end re-table-->
                            </div>
                        </div>
                    </div>
                </div>
                 
                
                {!! Form::close() !!} 
            </div>
        </div>
    </div><!--end modal-->
