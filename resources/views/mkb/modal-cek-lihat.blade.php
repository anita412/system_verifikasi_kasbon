
    
    <style>
        .left {
            text-align: left;
         
        }
        .left {
            text-align: left;
        }
        
    </style>
    <div class="modal fade bd-example-modal-lg multi-step" id="modalceklihat_{{$kasbons->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl"  >
            <div class="modal-content" >
                <div class="modal-header">
                    <h4 class="modal-title step-1" data-step="1">Kasbon {{$kasbons->nokasbon}}</h4>
                    <h4 class="modal-title step-2" data-step="2">Verifikasi</h4>
                    <h4 class="modal-title step-3" data-step="3">Final Step</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body step-1" data-step="1" >
                    <div class="col-lg">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive shopping-cart">
                                    <table class="table dt-responsive" style="text-align:justify" >
                                        <tbody >
                                            <tr >
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">No Kasbon</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->nokasbon}}</td>  
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">NIP</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->user->nip}}</td>  
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Nama Vendor</p>
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->namavendor}}</td>                                      
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Tanggal Masuk</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->tglmasuk->format('m/d/Y')}}</td>     
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">User</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->user->name}}</td>  
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Tgl JTT</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{ $kasbons->tgltempo ? $kasbons->tgltempo->format('m/d/Y')  : '-' }}</td>                                                         
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Jam Masuk</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->jammasuk}}</td> 
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Unit</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->user->unit->name}}</td>  
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">No Invoice</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->noinvoice}}</td>                                             
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Kasbon</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->jeniskasbon}} </td>    
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Kurs</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->kurs->code}}</td> 
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">SPPH/KOI/LOI</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->spph}}</td>   
                                            </tr>  
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Kode Kasbon</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->kodekasbon->name}}</td>  
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Nilai/DPP</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->kurs->symbol}} {{number_format($kasbons->iddpp)}}</td>   
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">SJN</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{ $kasbons->sjn ?? '-' }}</td>                                              
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Jenis Kasbon</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->jenis->name}}</td>   
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">PPN</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->kurs->symbol}} {{number_format($kasbons->ppn)}}</td>  
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">No. PI (FOCUS)</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{ $kasbons->sjn ?? '-' }}</td>                                                        
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">PO Vendor</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->po_vendor}}</td>  
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">PPH</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>({{ $kasbons->pph->name ?? '' }}) {{$kasbons->kurs->symbol}} {{number_format($kasbons->idpph)}}</td>    
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Proyek</p>
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td style="width:30%">{{$kasbons->proyek}}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">PO Customer</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->po_customer}}</td>     
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Nominal Kasbon</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->kurs->symbol}} {{number_format($kasbons->total)}}</td>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Uraian</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->uraianpengguna}}</td>    
                                            </tr>    
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Bank</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->bank}}</td>    
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Nama Rekening</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->namarek}}</td>  
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Nomor Rekening</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$kasbons->norek}}</td>    
                                            </tr>  
                                        </tbody>
                                    </table>
                                </div><!--end re-table-->
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="modal-body step-2" data-step="3">
                                <div class="card">
                                    <div class="card-body">
                                <div class="table-responsive shopping-cart">
                                    <table style="text-align: left">
                                        <tbody>
                                          <tr>
                                              <td class="tm_border_top_0 tm_border_bottom" colspan="6" style="text-align: center"><b class="tm_primary_color">LEMBAR VERIFIKASI</b></td>
                                          </tr>
                                          <tr style="background-color: #dcecf7; color: black;">
                                            <td style="width: 5%;" class="tm_border_top_0 tm_border_right tm_gray_bg"><b class="tm_primary_color">No</b></td>
                                            <td style="width: 40%;text-align: center" class="tm_border_top_0 tm_gray_bg"><b class="tm_primary_color">DOKUMEN VENDOR</b></td>
                                            <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top_0 tm_gray_bg"><b class="tm_primary_color">KET</b></td>
                                            <td style="width: 5%;" class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">No</b></td>
                                            <td style="width: 40%;text-align: center" class="tm_border_top tm_gray_bg"><b class="tm_primary_color">DOKUMEN IMPOR</b></td>
                                            <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">KET</b></td>
                                          </tr>
                                          <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">1</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">INVOICE</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$kasbons->kelengkapan->dvendor->dv_invoice ?? ''}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">1</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">PIB </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$kasbons->kelengkapan->dimpor->di_pib ?? ''}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">2</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">KWITANSI</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$kasbons->kelengkapan->dvendor->dv_kwitansi ?? ''}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">2</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">BILL OF LADING / AWB </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$kasbons->kelengkapan->dimpor->di_bl ?? ''}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">3</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">KO (KONFIRMASI ORDER)</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$kasbons->kelengkapan->dvendor->dv_ko ?? ''}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">3</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">COM </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$kasbons->kelengkapan->dimpor->di_com ?? ''}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">4</b></td>
                                              <td style="width: 40%;" class=" ">PO VENDOR</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$kasbons->kelengkapan->dvendor->dv_povendor ?? ''}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">4</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">COO </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$kasbons->kelengkapan->dimpor->di_coo ?? ''}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">5</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">SJN VENDOR</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$kasbons->kelengkapan->dvendor->dv_sjnvendor ?? ''}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">5</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">INVOICE CUSTOM </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$kasbons->kelengkapan->dimpor->di_invoicecustom ?? ''}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">6</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">PACKING LIST</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$kasbons->kelengkapan->dvendor->dv_packcinglist ?? ''}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">6</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">INVOICE FREIGHT  </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$kasbons->kelengkapan->dimpor->di_sjncustom ?? ''}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">7</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">TEST REPORT</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$kasbons->kelengkapan->dvendor->dv_testreport ?? ''}}</td>
                                              <td style="background-color: #dcecf7; color: black; width: 5%;" class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">No</b></td>
                                              <td style="background-color: #dcecf7; color: black; width: 30%;text-align: center" class="tm_border_top tm_gray_bg"><b class="tm_primary_color">DOKUMEN PAJAK</b></td>
                                              <td style="background-color: #dcecf7; color: black; width: 10%;text-align: center"  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">KET</b></td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">8</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">BAPP / BAST</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$kasbons->kelengkapan->dvendor->dv_bapp ?? ''}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">1</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">KESESUAIAN FAKTUR </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$kasbons->kelengkapan->dpajak->dp_kesesuaianfaktur ?? ''}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">9</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">LPPB</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$kasbons->kelengkapan->dvendor->dv_lppb ?? ''}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">2</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">PAJAK PENGHASILAN </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$kasbons->kelengkapan->dpajak->dp_pajakpenghasilan ?? ''}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">10</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">SURAT PERMOHONAN PEMBAYARAN</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$kasbons->kelengkapan->dvendor->dv_spp ?? ''}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">3</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">SURAT NON PKP / SKB</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$kasbons->kelengkapan->dpajak->dp_suratnonpkp ?? ''}}</td>
                                           </tr>
                                           <tr style="background-color: #dcecf7; color: black;">
                                              <td style="width: 5%;" class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">No</b></td>
                                              <td style="width: 40%;text-align: center" class="tm_border_top tm_gray_bg"><b class="tm_primary_color">DOKUMEN CUSTOMER</b></td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top tm_gray_bg"><b class="tm_primary_color">KET</b></td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">No</b></td>
                                              <td style="width: 40%;text-align: center" class="tm_border_top tm_gray_bg"><b class="tm_primary_color">DOKUMEN DINAS</b></td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">KET</b></td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">1</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">MEMO INTERNAL/ NOTULEN RAPAT</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$kasbons->kelengkapan->dcustomer->dc_memointernal ?? ''}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">1</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">INVOICE/TIKET TRANSPORT</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$kasbons->kelengkapan->ddinas->dd_tickettransport ?? ''}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">2</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">SPPH </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$kasbons->kelengkapan->dcustomer->dc_spph ?? ''}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">2</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">NOTA MAKAN</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$kasbons->kelengkapan->ddinas->dd_notamakan ?? ''}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">3</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">KO (KONFIRMASI ORDER)</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$kasbons->kelengkapan->dcustomer->dc_ko ?? ''}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">3</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">BOARDING PASS</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$kasbons->kelengkapan->ddinas->dd_boardingpass ?? ''}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">4</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">LOI</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$kasbons->kelengkapan->dcustomer->dc_loi ?? ''}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">4</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">NOTA PENGINAPAN / HOTEL</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$kasbons->kelengkapan->ddinas->dd_notapenginapan ?? ''	}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">5</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">PO CUSTOMER</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$kasbons->kelengkapan->dcustomer->dc_invoicecustom ?? ''}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">5</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">SPPD</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$kasbons->kelengkapan->ddinas->dd_sppd ?? ''}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">6</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">SJN CUSTOMER</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$kasbons->kelengkapan->dcustomer->dc_sjncustom ?? ''}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">6</b></td>
                                              <td style="width: 40%;" class="tm_border_top ">LAPORAN DINAS</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$kasbons->kelengkapan->ddinas->dd_lapdinas ?? ''}}</td>
                                           </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                </div>
                                </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive shopping-cart">                                    
                                    <table class="table mb-0">
                                        <tbody >
                                            <tr  style="background-color: #dcecf7; color: black;text-align: center">
                                              <td><b class="tm_primary_color">No</b></td>
                                              <td><b class="tm_primary_color">KEKURANGAN DOKUMEN</b></td>
                                              <td><b class="tm_primary_color">DILENGKAPI TANGGAL</b></td>
                                            </tr>
                                            @if(isset($kasbons->kelengkapan->keterangan->keterangan_detail))
                                            @foreach ($kasbons->kelengkapan->keterangan->keterangan_detail as $detail)
                                            <tr >
                                                <td>{{$loop->iteration ?? ''}}</b></td>
                                                <td>{{$detail->kekurangan ?? '-'}}</b></td>
                                                <td>{{$detail->tgl_kelengkapan ?? '-'}}</b></td>
                                              </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table><!--end table-->
                                <div class="table-responsive shopping-cart" >
                                        <table >
                                            <tbody>
                                                <tr>
                                        <td>
                                            <h6>CATATAN :</h6>
                                        </td>
                                        <td class="text-dark"><strong>{{$kasbons->kelengkapan->keterangan->catatan ?? '-'}}</strong></td>
                                    </tr>  
                                </tbody>
                            </table>
                                </div>
                                </div><!--end total-payment-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
        
              
                 <div class="modal-footer">
                    <button type="button" class="btn btn-danger step step-2" data-step="2" onclick="sendEvent('#demo-modal-3', 1)">Back</button>
                    <button type="button" class="btn btn-primary step step-1" data-step="1" onclick="sendEvent('#demo-modal-3', 2)">Next</button>
                    <button type="button" class="btn btn-danger step step-3" data-step="3" onclick="sendEvent('#demo-modal-3', 2)">Back</button>
                </div>
            </div>
        </div>
    </div><!--end modal-->