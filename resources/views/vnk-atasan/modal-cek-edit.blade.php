
    
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
                    <h4 class="modal-title step-1" data-step="1">Non Kasbon {{$nonkasbon->nokasbon}}</h4>
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
                                </div><!--end re-table-->
                            </div>
                        </div>
                    </div>
                    <b> Catatan : {{$nonkasbon->keterangannonkasbon->keterangan}} </b>

                </div>

                    {!! Form::model($nonkasbon, ['method' => 'PATCH','route' => ['vnk-atasan.update', $nonkasbon->id],'class' => 'form-parsley form-control']) !!}
                <input value="{{$nonkasbon->id}}" class="text-muted mb-0" name="id" hidden>
                                {{ csrf_field() }}
                <div class="modal-body step-2" data-step="3">
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
                            <div>
                                <label class="form-label">Catatan</label>
                               <textarea class="form-control" name="keterangan" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="modal-footer" >
                    <button type="button"  style = "display: flex; justify-content: flex-end" class="btn btn-danger step step-2" data-step="2" onclick="sendEvent('#demo-modal-3', 1)">Back</button>
                    <button type="button"  style = "display: flex; justify-content: flex-end" class="btn btn-primary step step-1" data-step="1" onclick="sendEvent('#demo-modal-3', 2)">Next</button>
                    <button type="button"   style = "display: flex; justify-content: flex-end" class="btn btn-danger step step-3" data-step="3" onclick="sendEvent('#demo-modal-3', 2)">Back</button>
                    <button type="submit"  style = "display: flex; justify-content: flex-end" class="btn btn-primary step step-2" data-step="3" >Simpan</button>
                </div>
                {!! Form::close() !!} 
            </div>
        </div>
    </div><!--end modal-->
