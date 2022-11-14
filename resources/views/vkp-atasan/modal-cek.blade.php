
    
    <style>
        .left {
            text-align: left;
         
        }
        .left {
            text-align: left;
        }
        
    </style>
    <div class="modal fade bd-example-modal-lg multi-step" id="modalcek_{{$pertanggungan->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"  >
            <div class="modal-content" >
                <div class="modal-header">
                    <h4 class="modal-title step-1" data-step="1">Kasbon {{$pertanggungan->kasbon->nokasbon}}</h4>
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
                                                <td>{{$pertanggungan->kasbon->tglmasuk->format('m/d/Y')}}</td>  
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Kasbon</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$pertanggungan->kasbon->jeniskasbon}} </td>    
                                               <td>
                                                <p class=" align-middle mb-0 product-name">Jam Masuk</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>{{$pertanggungan->kasbon->jammasuk}}</td>                                                      
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Dok Sebelumnya</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$pertanggungan->kasbon->doksebelumnya}}</td>     
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">User</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$pertanggungan->kasbon->user->name}}</td>   
                                               <td>
                                                <p class=" align-middle mb-0 product-name">NIP</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>{{$pertanggungan->kasbon->user->nip}}</td>                                                      
                                            </tr>
                                            <tr>
                                                <td>
                                                     <p class=" align-middle mb-0 product-name">Kode Kasbon</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$pertanggungan->kasbon->kodekasbon->name}}</td>    
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Jenis Kasbon</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$pertanggungan->kasbon->jeniskasbon}}</td>   
                                               <td>
                                                <p class=" align-middle mb-0 product-name">Kurs</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>{{$pertanggungan->kasbon->kurs->code}}</td>                                                       
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Proyek</p>
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$pertanggungan->kasbon->proyek}}</td>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Uraian</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$pertanggungan->kasbon->uraianpengguna}}</td>  
                                               <td>
                                                <p class=" align-middle mb-0 product-name">Nilai/DPP</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>Rp. {{number_format($pertanggungan->kasbon->iddpp)}}</td>     
                                            </tr>  
                                            <tr>
                                                <td>
                                                     <p class=" align-middle mb-0 product-name">PPN</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>Rp. {{number_format($pertanggungan->kasbon->idppn)}}</td>  
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">PPH</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>({{$pertanggungan->kasbon->pph->name}}) Rp. {{number_format($pertanggungan->kasbon->idpph)}}</td>    
                                               <td>
                                                <p class=" align-middle mb-0 product-name">Nominal Kasbon</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>Rp. {{number_format($pertanggungan->kasbon->total)}}</td>                                                      
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Tgl JTT</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$pertanggungan->kasbon->tgltempo->format('m/d/Y')}}</td>     
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">No Invoice</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$pertanggungan->kasbon->noinvoice}}</td>   
                                               <td>
                                                <p class=" align-middle mb-0 product-name">SPPH/KOI/LOI</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>{{$pertanggungan->kasbon->spph}}</td>                                                      
                                            </tr>
                                            <tr>
                                                <td>
                                                     <p class=" align-middle mb-0 product-name">PO Vendor</p> 
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>{{$pertanggungan->kasbon->po_vendor}}</td>    
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">PO Customer</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$pertanggungan->kasbon->po_customer}}</td>   
                                               <td>
                                                <p class=" align-middle mb-0 product-name">SJN</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>{{$pertanggungan->kasbon->sjn}}</td>                                                       
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Harga Jual</p>
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>Rp. {{number_format($pertanggungan->kasbon->harga_jual)}}</td>
                                                <td>
                                                    <p class=" align-middle mb-0 product-name">Barang Dtg</p> 
                                               </td>
                                               <td>
                                                   :
                                               </td>
                                               <td>{{$pertanggungan->kasbon->barang_datang->format('m/d/Y')}}</td>  
                                               <td>
                                                <p class=" align-middle mb-0 product-name">No. PI (FOCUS)</p> 
                                           </td>
                                           <td>
                                               :
                                           </td>
                                           <td>{{$pertanggungan->kasbon->nopi}}</td>     
                                            </tr>                        
                                        </tbody>
                                    </table>
                                </div><!--end re-table-->
                                <br>
                                <div class="table-responsive shopping-cart">
                                    <table>
                                        <tbody>
                                          <tr>
                                              <td class="tm_border_top_0 tm_border_bottom" colspan="6" style="text-align: center"><b class="tm_primary_color">LEMBAR VERIFIKASI</b></td>
                                          </tr>
                                          <tr>
                                            <td style="width: 5%;" class="tm_border_top_0 tm_border_right tm_gray_bg"><b class="tm_primary_color">No</b></td>
                                            <td style="width: 30%;text-align: center" class="tm_border_top_0 tm_gray_bg"><b class="tm_primary_color">DOKUMEN VENDOR</b></td>
                                            <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top_0 tm_gray_bg"><b class="tm_primary_color">KET</b></td>
                                            <td style="width: 5%;" class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">No</b></td>
                                            <td style="width: 30%;text-align: center" class="tm_border_top tm_gray_bg"><b class="tm_primary_color">DOKUMEN IMPOR</b></td>
                                            <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">KET</b></td>
                                          </tr>
                                          <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">1</b></td>
                                              <td style="width: 30%;" class="tm_border_top ">INVOICE</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dvendor->dv_invoice}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">1</b></td>
                                              <td style="width: 30%;r" class="tm_border_top ">PIB </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dimpor->di_pib}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">2</b></td>
                                              <td style="width: 30%;" class="tm_border_top ">KWITANSI</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dvendor->dv_kwitansi}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">2</b></td>
                                              <td style="width: 30%;r" class="tm_border_top ">BILL OF LADING / AWB </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dimpor->di_bl}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">3</b></td>
                                              <td style="width: 30%;" class="tm_border_top ">KO (KONFIRMASI ORDER)</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top"></td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">3</b></td>
                                              <td style="width: 30%;r" class="tm_border_top ">COM </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dimpor->di_com}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">4</b></td>
                                              <td style="width: 30%;" class=" ">PO VENDOR</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dvendor->dv_povendor}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">4</b></td>
                                              <td style="width: 30%;r" class="tm_border_top ">COO </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dimpor->di_coo}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">5</b></td>
                                              <td style="width: 30%;" class="tm_border_top ">SJN VENDOR</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dvendor->dv_sjnvendor}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">5</b></td>
                                              <td style="width: 30%;r" class="tm_border_top ">INVOICE CUSTOM </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dimpor->di_invoicecustom}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">6</b></td>
                                              <td style="width: 30%;" class="tm_border_top ">PACKING LIST</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dvendor->dv_packcinglist}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">6</b></td>
                                              <td style="width: 30%;r" class="tm_border_top ">INVOICE FREIGHT  </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dimpor->di_sjncustom}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">7</b></td>
                                              <td style="width: 30%;" class="tm_border_top ">TEST REPORT</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dvendor->dv_testreport}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">No</b></td>
                                              <td style="width: 30%;text-align: center" class="tm_border_top tm_gray_bg"><b class="tm_primary_color">DOKUMEN PAJAK</b></td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">KET</b></td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">8</b></td>
                                              <td style="width: 30%;" class="tm_border_top ">BAPP / BAST</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dvendor->dv_bapp}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">1</b></td>
                                              <td style="width: 30%;r" class="tm_border_top ">KESESUAIAN FAKTUR </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dpajak->dp_kesesuaianfaktur}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">9</b></td>
                                              <td style="width: 30%;" class="tm_border_top ">LPPB</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dvendor->dv_lppb}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">2</b></td>
                                              <td style="width: 30%;r" class="tm_border_top ">PAJAK PENGHASILAN </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dpajak->dp_pajakpenghasilan}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">10</b></td>
                                              <td style="width: 30%;" class="tm_border_top ">SURAT PERMOHONAN PEMBAYARAN</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top"></td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">3</b></td>
                                              <td style="width: 30%;r" class="tm_border_top ">SURAT NON PKP / SKB</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dpajak->dp_suratnonpkp}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">No</b></td>
                                              <td style="width: 30%;text-align: center" class="tm_border_top tm_gray_bg"><b class="tm_primary_color">DOKUMEN CUSTOMER</b></td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top tm_gray_bg"><b class="tm_primary_color">KET</b></td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">No</b></td>
                                              <td style="width: 30%;text-align: center" class="tm_border_top tm_gray_bg"><b class="tm_primary_color">DOKUMEN DINAS</b></td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">KET</b></td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">1</b></td>
                                              <td style="width: 30%;" class="tm_border_top ">MEMO INTERNAL/ NOTULEN RAPAT</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dcustomer->dc_memointernal}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">1</b></td>
                                              <td style="width: 30%;r" class="tm_border_top ">INVOICE/TIKET TRANSPORT</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$pertanggungan->kasbon->kelengkapan->ddinas->dd_tickettransport}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">2</b></td>
                                              <td style="width: 30%;" class="tm_border_top ">SPPH </td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dcustomer->dc_spph}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">2</b></td>
                                              <td style="width: 30%;r" class="tm_border_top ">NOTA MAKAN</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$pertanggungan->kasbon->kelengkapan->ddinas->dd_notamakan}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">3</b></td>
                                              <td style="width: 30%;" class="tm_border_top ">KO (KONFIRMASI ORDER)</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dcustomer->dc_ko}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">3</b></td>
                                              <td style="width: 30%;r" class="tm_border_top ">BOARDING PASS</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$pertanggungan->kasbon->kelengkapan->ddinas->dd_boardingpass}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">4</b></td>
                                              <td style="width: 30%;" class="tm_border_top ">LOI</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dcustomer->dc_loi}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">4</b></td>
                                              <td style="width: 30%;r" class="tm_border_top ">NOTA PENGINAPAN / HOTEL</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$pertanggungan->kasbon->kelengkapan->ddinas->dd_notapenginapan	}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">5</b></td>
                                              <td style="width: 30%;" class="tm_border_top ">PO CUSTOMER</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dcustomer->dc_invoicecustom}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">5</b></td>
                                              <td style="width: 30%;r" class="tm_border_top ">SPPD</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top">{{$pertanggungan->kasbon->kelengkapan->ddinas->dd_sppd}}</td>
                                           </tr>
                                           <tr>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">6</b></td>
                                              <td style="width: 30%;" class="tm_border_top ">SJN CUSTOMER</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_right tm_border_top">{{$pertanggungan->kasbon->kelengkapan->dcustomer->dc_sjncustom}}</td>
                                              <td style="width: 5%;" class="tm_border_top tm_border_right"><b class="tm_primary_color">6</b></td>
                                              <td style="width: 30%;r" class="tm_border_top ">SURAT TUGAS DINAS</td>
                                              <td style="width: 10%;text-align: center"  class="tm_border_left tm_border_top"></td>
                                           </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <br>
                                <div class="table-responsive shopping-cart">
                                    <table class="table mb-0">
                                        <tbody >
                                            <tr>
                                              <td><b class="tm_primary_color">No</b></td>
                                              <td><b class="tm_primary_color">KEKURANGAN DOKUMEN</b></td>
                                              <td><b class="tm_primary_color">DILENGKAPI TANGGAL</b></td>
                                            </tr>
                                            @foreach ($pertanggungan->kasbon->kelengkapan->keterangan->keterangan_detail as $detail)
                                            <tr>
                                                <td>{{$loop->iteration}}</b></td>
                                                <td>{{$detail->kekurangan}}</b></td>
                                                <td>{{$detail->tgl_kelengkapan}}</b></td>
                                              </tr>
                                            @endforeach
                                        </tbody>
                                    </table><!--end table-->
                                </div>
                                <div class="table-responsive shopping-cart">
                                        <table>
                                            <tbody>
                                                <tr>
                                        <td>
                                            <h6>CATATAN :</h6>
                                        </td>
                                        <td class="text-dark"><strong></strong></td>
                                    </tr>  
                                </tbody>
                            </table>
                                </div>
                                </div><!--end total-payment-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <form  action="{{ route('vkp-atasan.store', $pertanggungan->id) }}" method="post" class="form-parsley" >
                <input value="{{$pertanggungan->id}}" class="text-muted mb-0" name="id" hidden>
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
                               <textarea class="form-control" name="keterangan" >{{$pertanggungan->kasbon->keterangankasbon->keterangan}}</textarea>
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
                    </form>
            </div>
        </div>
    </div><!--end modal-->
