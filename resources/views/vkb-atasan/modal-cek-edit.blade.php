
    
    <style>
        .left {
            text-align: left;
         
        }
        .left {
            text-align: left;
        }
        
    </style>
    <div class="modal fade bd-example-modal-lg multi-step" id="modalcekedit_{{$kasbon->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"  >
            <div class="modal-content" >
                <div class="modal-header">
                    <h4 class="modal-title step-1" data-step="1">Kasbon {{$kasbon->nokasbon}}</h4>
                    <h4 class="modal-title step-2" data-step="2">Verifikasi</h4>
                    <h4 class="modal-title step-3" data-step="3">Final Step</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body step-1" data-step="1" >
                    <div class="col-lg">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive shopping-cart">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                     <p class=" align-middle mb-0 product-name">Tanggal Masuk</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbon->tglmasuk->format('d-m-Y')}}</td>  
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Kasbon</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$kasbon->jeniskasbon}} </td>    
                                               <td>
                                                <p class=" align-middle mb-0 product-name">Jam Masuk</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>{{$kasbon->jammasuk}}</td>                                                      
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Dok Sebelumnya</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbon->doksebelumnya}}</td>     
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">User</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$kasbon->user->name}}</td>   
                                               <td>
                                                <p class=" align-middle mb-0 product-name">NIP</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>{{$kasbon->user->nip}}</td>                                                      
                                            </tr>
                                            <tr>
                                                <td>
                                                     <p class=" align-middle mb-0 product-name">Kode Kasbon</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbon->kodekasbon->name}}</td>    
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Jenis Kasbon</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$kasbon->jeniskasbon}}</td>   
                                               <td>
                                                <p class=" align-middle mb-0 product-name">Kurs</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>{{$kasbon->kurs->code}}</td>                                                       
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Proyek</p>
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbon->proyek}}</td>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Uraian</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$kasbon->uraianpengguna}}</td>  
                                               <td>
                                                <p class=" align-middle mb-0 product-name">Nilai/DPP</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>Rp. {{$kasbon->iddpp}}</td>     
                                            </tr>  
                                            <tr>
                                                <td>
                                                     <p class=" align-middle mb-0 product-name">PPN</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>Rp. {{$kasbon->ppn}}</td>  
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">PPH</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>({{$kasbon->pph->name}}) Rp. {{$kasbon->idpph}}</td>    
                                               <td>
                                                <p class=" align-middle mb-0 product-name">Nominal Kasbon</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>{{$kasbon->total}}</td>                                                      
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Tgl JTT</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbon->tgltempo->format('d-m-Y')}}</td>     
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">No Invoice</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$kasbon->noinvoice}}</td>   
                                               <td>
                                                <p class=" align-middle mb-0 product-name">SPPH/KOI/LOI</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>{{$kasbon->spph}}</td>                                                      
                                            </tr>
                                            <tr>
                                                <td>
                                                     <p class=" align-middle mb-0 product-name">PO Vendor</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbon->po_vendor}}</td>    
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">PO Customer</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$kasbon->po_customer}}</td>   
                                               <td>
                                                <p class=" align-middle mb-0 product-name">SJN</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>{{$kasbon->sjn}}</td>                                                       
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Harga Jual</p>
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbon->harga_jual}}</td>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Barang Dtg</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$kasbon->barang_datang->format('d-m-Y')}}</td>  
                                               <td>
                                                <p class=" align-middle mb-0 product-name">No. PI (FOCUS)</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>{{$kasbon->nopi}}</td>     
                                            </tr>                        
                                        </tbody>
                                    </table>
                                </div><!--end re-table-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div>

                {!! Form::model($kasbon, ['method' => 'PATCH','route' => ['vkb-atasan.update', $kasbon->id],'class' => 'form-parsley form-control']) !!}
                <input value="{{$kasbon->id}}" class="text-muted mb-0" name="id" hidden>
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
                            <div class="">
                                <label class="form-label">Catatan</label>
                               <textarea class="form-control" name="keterangan">{{$kasbon->keterangankasbon->keterangan}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger step step-2" data-step="2" onclick="sendEvent('#demo-modal-3', 1)">Back</button>
                    <button type="button" class="btn btn-primary step step-1" data-step="1" onclick="sendEvent('#demo-modal-3', 2)">Next</button>
                    <button type="button" class="btn btn-danger step step-3" data-step="3" onclick="sendEvent('#demo-modal-3', 2)">Back</button>
                    <button type="submit" class="btn btn-primary step step-2" data-step="3" >Simpan</button>
                </div>
                {!! Form::close() !!} 
            </div>
        </div>
    </div><!--end modal-->
