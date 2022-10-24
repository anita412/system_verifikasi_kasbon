
    
    <style>
        .left {
            text-align: left;
         
        }
        .left {
            text-align: left;
        }
        
    </style>
    <div class="modal fade bd-example-modal-lg multi-step" id="exampleModalDanger_{{$kasbon->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"  >
            <div class="modal-content" >
                <div class="modal-header">
                    <h4 class="modal-title step-1" data-step="1">Lihat Kasbon</h4>
                    <h4 class="modal-title step-2" data-step="2">Verifikasi</h4>
                    <h4 class="modal-title step-3" data-step="3">Final Step</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    
                </div>
                <div class="modal-body step-1" data-step="1" >
                    <table style="margin-left:auto;margin-right:auto;">
                        <tbody>
                          <tr>
                              <td class="tm_border_top_0 tm_border_bottom" colspan="11" style="text-align: center"><b class="tm_primary_color">LEMBAR VERIFIKASI</b></td>
                          </tr>
                          <tr>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">TANGGAL MASUK</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->tglmasuk->format('d-m-Y')}}</b></td>
                            <td style="width:0%" class="tm_border_top tm_gray_bg"><b class="tm_primary_color"></b></td>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">KASBON</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">RENCANA</b></td>
                            <td style="width:0%" class="tm_border_top tm_gray_bg"><b class="tm_primary_color"></b></td>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">JAM MASUK</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->jammasuk}}</b></td>
                           </tr>
                           <tr>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">DOK SEBELUMNYA</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->doksebelumnya}}</b></td>
                            <td style="width:0%" class="tm_border_top tm_gray_bg"><b class="tm_primary_color"></b></td>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">USER</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->user->name}}</b></td>
                            <td style="width:0%" class="tm_border_top tm_gray_bg"><b class="tm_primary_color"></b></td>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">NIP</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->user->nip}}</b></td>
                           </tr>
                           <tr>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">KODE KASBON</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->kodekasbon->name}}</b></td>
                            <td style="width:0%" class="tm_border_top tm_gray_bg"><b class="tm_primary_color"></b></td>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">JENIS KASBON</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->jenis->name}}</b></td>
                            <td style="width:0%" class="tm_border_top tm_gray_bg"><b class="tm_primary_color"></b></td>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">KURS</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->kurs->code}}</b></td>
                           </tr>
                           <tr>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">PROYEK</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->proyek}}</b></td>
                            <td style="width:0%" class="tm_border_top tm_gray_bg"><b class="tm_primary_color"></b></td>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">URAIAN PENGGUNAAN</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->uraianpengguna}}</b></td>
                            <td style="width:0%" class="tm_border_top tm_gray_bg"><b class="tm_primary_color"></b></td>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">NILAI/DPP</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->iddpp}}</b></td>
                           </tr>
                           <tr>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">PPN</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->idppn}}</b></td>
                            <td style="width:0%" class="tm_border_top tm_gray_bg"><b class="tm_primary_color"></b></td>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">PPH</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->pph->name}} Rp. {{$kasbon->idpph}}</b></td>
                            <td style="width:0%" class="tm_border_top tm_gray_bg"><b class="tm_primary_color"></b></td>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">NOMINAL KASBON</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">Rp. {{$kasbon->total}}</b></td>
                           </tr>
                           <tr>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">TGL JATUH TEMPO</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->tgltempo->format('d-m-Y')}}</b></td>
                            <td style="width:0%" class="tm_border_top tm_gray_bg"><b class="tm_primary_color"></b></td>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">No INVOICE</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->noinvoice}}</b></td>
                            <td style="width:0%" class="tm_border_top tm_gray_bg"><b class="tm_primary_color"></b></td>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">SPPH/KOI/LOI</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->spph}}</b></td>
                           </tr>
                           <tr>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">PO VENDOR</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->po_vendor}}</b></td>
                            <td style="width:0%" class="tm_border_top tm_gray_bg"><b class="tm_primary_color"></b></td>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">PO CUSTOMER</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->po_customer}}</b></td>
                            <td style="width:0%" class="tm_border_top tm_gray_bg"><b class="tm_primary_color"></b></td>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">SJN</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->sjn}}</b></td>
                           </tr>
                           <tr>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">HARGA JUAL</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->harga_jual}}</b></td>
                            <td style="width:0%" class="tm_border_top tm_gray_bg"><b class="tm_primary_color"></b></td>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">PERKIRAAN BRG DTG</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->barang_datang}}</b></td>
                            <td style="width:0%" class="tm_border_top tm_gray_bg"><b class="tm_primary_color"></b></td>
                            <td  class="tm_border_top tm_border_right tm_gray_bg"><b class="tm_primary_color">NO. PI (FOCUS)</b></td>
                            <td  class="tm_border_left tm_border_top tm_gray_bg"><b class="tm_primary_color">:</b></td>
                            <td class="tm_border_top tm_gray_bg"><b class="tm_primary_color">{{$kasbon->nopi}}</b></td>
                           </tr>
                      </table>
                     
                </div>

                {!! Form::model($kasbon, ['method' => 'PATCH','route' => ['vkb.update', $kasbon->id],'class' => 'form-parsley form-control']) !!}
                <input value="{{$kasbon->id}}" class="text-muted mb-0" name="id" hidden>
                                {{ csrf_field() }}
                <div class="modal-body step-2" data-step="3">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Dokumen Vendor</h4>
                                </div><!--end card-header-->
                                <div class="card-body">
                                        <div class="row">
                                                <div class="col-md-2">
                                                    <label class="form-label">INVOICE</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_invoice" id="dv_invoice1" value="ASLI" required>
                                                        <label class="form-check-label" for="dv_invoice1">
                                                            ASLI
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_invoice" id="dv_invoice2" value="COPY">
                                                        <label class="form-check-label" for="dv_invoice2">
                                                            COPY
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_invoice" id="dv_invoice2" value="-" >
                                                        <label class="form-check-label" for="dv_invoice2">
                                                            -
                                                        </label>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-2">
                                                    <label class="form-label">KWITANSI</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_kwitansi" id="dv_kwitansi1" value="ASLI" required>
                                                        <label class="form-check-label" for="dv_kwitansi1">
                                                            ASLI
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_kwitansi" id="dv_kwitansi2" value="COPY">
                                                        <label class="form-check-label" for="dv_kwitansi2">
                                                            COPY
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_kwitansi" id="dv_kwitansi2" value="-" >
                                                        <label class="form-check-label" for="dv_kwitansi2">
                                                            -
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">PO VENDOR</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_povendor" id="dv_povendor1" value="ASLI" required>
                                                        <label class="form-check-label" for="dv_povendor1">
                                                            ASLI
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_povendor" id="dv_povendor2" value="COPY">
                                                        <label class="form-check-label" for="dv_povendor2">
                                                            COPY
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_povendor" id="dv_povendor2" value="-" >
                                                        <label class="form-check-label" for="dv_povendor2">
                                                            -
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">SJN VENDOR</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_sjnvendor" id="dv_sjnvendor1" value="ASLI" required>
                                                        <label class="form-check-label" for="dv_sjnvendor1">
                                                            ASLI
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_sjnvendor" id="dv_sjnvendor2" value="COPY">
                                                        <label class="form-check-label" for="dv_sjnvendor2">
                                                            COPY
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_sjnvendor" id="dv_sjnvendor2" value="-" >
                                                        <label class="form-check-label" for="dv_sjnvendor2">
                                                            -
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">PACKING LIST</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_packinglist" id="dv_packinglist1" value="ASLI" required>
                                                        <label class="form-check-label" for="dv_packinglist1">
                                                            ASLI
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_packinglist" id="dv_packinglist2" value="COPY">
                                                        <label class="form-check-label" for="dv_packinglist2">
                                                            COPY
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_packinglist" id="dv_packinglist2" value="-" >
                                                        <label class="form-check-label" for="dv_packinglist2">
                                                            -
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">TEST REPORT</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_testreport" id="dv_testreport1" value="ASLI" required>
                                                        <label class="form-check-label" for="dv_testreport1">
                                                            ASLI
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_testreport" id="dv_testreport2" value="COPY">
                                                        <label class="form-check-label" for="dv_testreport2">
                                                            COPY
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_testreport" id="dv_testreport2" value="-" >
                                                        <label class="form-check-label" for="dv_testreport2">
                                                            -
                                                        </label>
                                                    </div>
                                                </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                                <div class="col-md-2">
                                                    <label class="form-label">BAPP/BAST</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_bapp" id="dv_bapp1" value="ASLI" required>
                                                        <label class="form-check-label" for="dv_bapp1">
                                                            ASLI
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_bapp" id="dv_bapp2" value="COPY">
                                                        <label class="form-check-label" for="dv_bapp2">
                                                            COPY
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_bapp" id="dv_bapp2" value="-" >
                                                        <label class="form-check-label" for="dv_bapp2">
                                                            -
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">LPBB</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_lppb" id="dv_lppb1" value="ASLI" required>
                                                        <label class="form-check-label" for="dv_lppb1">
                                                            ASLI
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_lppb" id="dv_lppb2" value="COPY">
                                                        <label class="form-check-label" for="dv_lppb2">
                                                            COPY
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dv_lppb" id="dv_lppb2" value="-" >
                                                        <label class="form-check-label" for="dv_lppb2">
                                                            -
                                                        </label>
                                                    </div>
                                                </div>
                                        </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Dokumen Impor</h4>
                                </div><!--end card-header-->
                                <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="form-label">PIB</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_pib" id="di_pib1" value="ASLI" required>
                                                    <label class="form-check-label" for="di_pib1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_pib" id="di_pib2" value="COPY">
                                                    <label class="form-check-label" for="di_pib2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_pib" id="di_pib2" value="-" >
                                                    <label class="form-check-label" for="di_pib2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">AWB</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_bl" id="di_bl1" value="ASLI" required>
                                                    <label class="form-check-label" for="di_bl1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_bl" id="di_bl2" value="COPY">
                                                    <label class="form-check-label" for="di_bl2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_bl" id="di_bl2" value="-" >
                                                    <label class="form-check-label" for="di_bl2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">COM</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_com" id="di_com1" value="ASLI" required>
                                                    <label class="form-check-label" for="di_com1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_com" id="di_com2" value="COPY">
                                                    <label class="form-check-label" for="di_com2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_com" id="di_com2" value="-" >
                                                    <label class="form-check-label" for="di_com2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">COO</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_coo" id="di_coo1" value="ASLI" required>
                                                    <label class="form-check-label" for="di_coo1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_coo" id="di_coo2" value="COPY">
                                                    <label class="form-check-label" for="di_coo2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_coo" id="di_coo2" value="-" >
                                                    <label class="form-check-label" for="di_coo2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">INVOICE CUSTOM</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_invoicecustom" id="di_invoicecustom1" value="ASLI" required>
                                                    <label class="form-check-label" for="di_invoicecustom1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_invoicecustom" id="di_invoicecustom2" value="COPY">
                                                    <label class="form-check-label" for="di_invoicecustom2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_invoicecustom" id="di_invoicecustom2" value="-" >
                                                    <label class="form-check-label" for="di_invoicecustom2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">SJN CUSTOM</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_sjncustom" id="di_sjncustom1" value="ASLI" required>
                                                    <label class="form-check-label" for="di_sjncustom1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_sjncustom" id="di_sjncustom2" value="COPY">
                                                    <label class="form-check-label" for="di_sjncustom2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="di_sjncustom" id="di_sjncustom2" value="-" >
                                                    <label class="form-check-label" for="di_sjncustom2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Dokumen Customer</h4>
                                </div><!--end card-header-->
                                <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="form-label">MEMO INTERNAL</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_memointernal" id="dc_memointernal1" value="ASLI" required>
                                                    <label class="form-check-label" for="dc_memointernal1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_memointernal" id="dc_memointernal2" value="COPY">
                                                    <label class="form-check-label" for="dc_memointernal2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_memointernal" id="dc_memointernal2" value="-" >
                                                    <label class="form-check-label" for="dc_memointernal2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">SPPH</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_spph" id="dc_spph1" value="ASLI" required>
                                                    <label class="form-check-label" for="dc_spph1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_spph" id="dc_spph2" value="COPY">
                                                    <label class="form-check-label" for="dc_spph2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_spph" id="dc_spph2" value="-" >
                                                    <label class="form-check-label" for="dc_spph2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">KO</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_ko" id="dc_ko1" value="ASLI" required>
                                                    <label class="form-check-label" for="dc_ko1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_ko" id="dc_ko2" value="COPY">
                                                    <label class="form-check-label" for="dc_ko2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_ko" id="dc_ko2" value="-" >
                                                    <label class="form-check-label" for="dc_ko2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">LOI</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_loi" id="dc_loi1" value="ASLI" required>
                                                    <label class="form-check-label" for="dc_loi1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_loi" id="dc_loi2" value="COPY">
                                                    <label class="form-check-label" for="dc_loi2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_loi" id="dc_loi2" value="-" >
                                                    <label class="form-check-label" for="dc_loi2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">PO CUSTOMER</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_invoicecustom" id="dc_invoicecustom1" value="ASLI" required>
                                                    <label class="form-check-label" for="dc_invoicecustom1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_invoicecustom" id="dc_invoicecustom2" value="COPY">
                                                    <label class="form-check-label" for="dc_invoicecustom2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_invoicecustom" id="dc_invoicecustom2" value="-" >
                                                    <label class="form-check-label" for="dc_invoicecustom2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">SJN CUSTOMER</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_sjncustom" id="dc_sjncustom1" value="ASLI" required>
                                                    <label class="form-check-label" for="dc_sjncustom1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_sjncustom" id="dc_sjncustom2" value="COPY">
                                                    <label class="form-check-label" for="dc_sjncustom2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dc_sjncustom" id="dc_sjncustom2" value="-" >
                                                    <label class="form-check-label" for="dc_sjncustom2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Dokumen Pajak</h4>
                                </div><!--end card-header-->
                                <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label">KESESUAIAN FAKTUR</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dp_kesesuaianfaktur" id="dp_kesesuaianfaktur1" value="ASLI" required>
                                                    <label class="form-check-label" for="dp_kesesuaianfaktur1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dp_kesesuaianfaktur" id="dp_kesesuaianfaktur2" value="COPY">
                                                    <label class="form-check-label" for="dp_kesesuaianfaktur2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dp_kesesuaianfaktur" id="dp_kesesuaianfaktur2" value="-" >
                                                    <label class="form-check-label" for="dp_kesesuaianfaktur2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">PAJAK PENGHASILAN</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dp_pajakpenghasilan" id="dp_pajakpenghasilan1" value="ASLI" required>
                                                    <label class="form-check-label" for="dp_pajakpenghasilan1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dp_pajakpenghasilan" id="dp_pajakpenghasilan2" value="COPY">
                                                    <label class="form-check-label" for="dp_pajakpenghasilan2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dp_pajakpenghasilan" id="dp_pajakpenghasilan2" value="-" >
                                                    <label class="form-check-label" for="dp_pajakpenghasilan2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">SURAT NON PKB</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dp_suratnonpkp" id="dp_suratnonpkp1" value="ASLI" required>
                                                    <label class="form-check-label" for="dp_suratnonpkp1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dp_suratnonpkp" id="dp_suratnonpkp2" value="COPY">
                                                    <label class="form-check-label" for="dp_suratnonpkp2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dp_suratnonpkp" id="dp_suratnonpkp2" value="-" >
                                                    <label class="form-check-label" for="dp_suratnonpkp2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                          
                                        </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Dokumen Dinas</h4>
                                </div><!--end card-header-->
                                <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="form-label">TICKET TRANSPORT</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dd_tickettransport" id="dd_tickettransport1" value="ASLI" required>
                                                    <label class="form-check-label" for="dd_tickettransport1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dd_tickettransport" id="dd_tickettransport2" value="COPY">
                                                    <label class="form-check-label" for="dd_tickettransport2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dd_tickettransport" id="dd_tickettransport2" value="-" >
                                                    <label class="form-check-label" for="dd_tickettransport2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">NOTA MAKAN</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dd_notamakan" id="dd_notamakan1" value="ASLI" required>
                                                    <label class="form-check-label" for="dd_notamakan1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dd_notamakan" id="dd_notamakan2" value="COPY">
                                                    <label class="form-check-label" for="dd_notamakan2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dd_notamakan" id="dd_notamakan2" value="-" >
                                                    <label class="form-check-label" for="dd_notamakan2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">BOARDING PASS</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dd_boardingpass" id="dd_boardingpass1" value="ASLI" required>
                                                    <label class="form-check-label" for="dd_boardingpass1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dd_boardingpass" id="dd_boardingpass2" value="COPY">
                                                    <label class="form-check-label" for="dd_boardingpass2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dd_boardingpass" id="dd_boardingpass2" value="-" >
                                                    <label class="form-check-label" for="dd_boardingpass2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">NOTA PENGINAPAN</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dd_notapenginapan" id="dd_notapenginapan1" value="ASLI" required>
                                                    <label class="form-check-label" for="dd_notapenginapan1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dd_notapenginapan" id="dd_notapenginapan2" value="COPY">
                                                    <label class="form-check-label" for="dd_notapenginapan2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dd_notapenginapan" id="dd_notapenginapan2" value="-" >
                                                    <label class="form-check-label" for="dd_notapenginapan2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">SPPD</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dd_sppd" id="dd_sppd1" value="ASLI" required>
                                                    <label class="form-check-label" for="dd_sppd1">
                                                        ASLI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dd_sppd" id="dd_sppd2" value="COPY">
                                                    <label class="form-check-label" for="dd_sppd2">
                                                        COPY
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="dd_sppd" id="dd_sppd2" value="-" >
                                                    <label class="form-check-label" for="dd_sppd2">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                            
                                        </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div>
                    </div> <!-- end row --> 
    

                    {{-- <table style="margin-left:auto;margin-right:auto;">
                        <tbody>
                          <tr>
                              <td class="tm_border_top_0 tm_border_bottom" style=""><b class="tm_primary_color">DOKUMEN VENDOR</b></td>
                          </tr>
                          <tr>
                            <td  class="tm_border_top tm_border_right tm_gray_bg">  
                                <label for="contactMethod">INVOICE :</label>
                                <p>
                                  Asli <input type="radio" name="contactMethod" id="contactMethodEmail" value="Email" required="">
                                  Copy <input type="radio" name="contactMethod" id="contactMethodPhone" value="Phone">
                                  - <input type="radio" name="contactMethod" id="stripMethodPhone" value="strip">
                                </p>
                              </td>
                              <td  class="tm_border_top tm_border_right tm_gray_bg">  
                                <label for="contactMethod">KWITANSI :</label>
                                <p>
                                  Asli <input type="radio" name="coMethod" id="coMethodEmail" value="Email" required="">
                                  Copy <input type="radio" name="coMethod" id="coMethodPhone" value="Phone">
                                  - <input type="radio" name="coMethod" id="strithodPhone" value="strip">
                                </p>
                              </td>
                              
                              <td  class="tm_border_top tm_border_right tm_gray_bg">  
                                <label for="contactMethod">PO VENDOR :</label>
                                <p>
                                  Asli <input type="radio" name="sdf" id="sdfEmail" value="Email" required="">
                                  Copy <input type="radio" name="sdf" id="sdfPhone" value="Phone">
                                  - <input type="radio" name="sdf" id="strithodPhone" value="strip">
                                </p>
                              </td>
                           </tr>
                           <tr>
                            <td  class="tm_border_top tm_border_right tm_gray_bg">  
                                <label for="contactMethod">Preferred Contact Method *:</label>
                                <p>
                                  Asli <input type="radio" name="cc" id="ccEmail" value="Email" required="">
                                  Copy <input type="radio" name="cc" id="ccPhone" value="Phone">
                                  - <input type="radio" name="cc" id="stripMethodPhone" value="strip">
                                </p>
                              </td>
                              <td style="width: 5%"></td>
                              <td  class="tm_border_top tm_border_right tm_gray_bg">  
                                <label for="contactMethod">Preferred Contact Method *:</label>
                                <p>
                                  Asli <input type="radio" name="cd" id="cdEmail" value="Email" required="">
                                  Copy <input type="radio" name="cd" id="cdPhone" value="Phone">
                                  - <input type="radio" name="cd" id="strithodPhone" value="strip">
                                </p>
                              </td>
                              
                              <td  class="tm_border_top tm_border_right tm_gray_bg">  
                                <label for="contactMethod">Preferred Contact Method *:</label>
                                <p>
                                  Asli <input type="radio" name="sdfs" id="sdfsEmail" value="Email" required="">
                                  Copy <input type="radio" name="sdfs" id="sdfsPhone" value="Phone">
                                  - <input type="radio" name="sdfs" id="strithodPhone" value="strip">
                                </p>
                              </td>
                           </tr>
                          
                      </table> --}}
                </div>

                <div class="modal-body step-3" data-step="2" >
                    <div class="row" style="margin-left:auto;margin-right:auto;">
                        <div class="col-md-3">
                            <div class="mt-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select" required>
                                    <option value=""  selected hidden>Pilih</option>
                                    <option value="Revisi">Minta Revisi</option>
                                    <option value="Terverifikasi">Terverifikasi</option>
                                    <option value="Ditolak">Tolak Ajuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <table class="table table-borderless mt-0">
                                    <thead>
                                      <tr>
                                        <th></th>
                                        <th></th>
                                      </tr>
                                    </thead>
                                   <qy > <tbody id="tbod">
                                      <tr>
                                        <td>
                                            <label class="mb-1">Kekurangan</label>
                                            <input type="text" name="kekurangan[]" id="kekurangan" class="form-control" required parsley>
                                        </td>
                                        <td>
                                            <label class="mb-1">Tgl Kelengkapan</label>
                                            <input type="date" name="tgl_kelengkapan[]" id="" class="form-control" required>
                                        </td>
                                        <td><a href="javascript:;" class="btn btn-outline-danger btn-sm deleteRow mt-3"> <span class="far fa-trash-alt me-1"></span>Delete</a></td>
                                    </tr>
                                    </tbody> </qy>
                                  </table>
                                  <k> <a href="javascript:;" class="btn btn-outline-secondary addRow btn-sm" >
                                    <span class="fas fa-plus"></span> Add </a></k>
                            </div>
                        </div>
                       
                    </div>
                </div>
               
            
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger step step-2" data-step="2" onclick="sendEvent('#demo-modal-3', 1)">Back</button>
                    <button type="button" class="btn btn-primary step step-1" data-step="1" onclick="sendEvent('#demo-modal-3', 2)">Next</button>
                    <button type="button" class="btn btn-danger step step-3" data-step="3" onclick="sendEvent('#demo-modal-3', 2)">Back</button>
                    <button type="submit" class="btn btn-primary step step-3" data-step="3" >Simpan</button>
                    <button type="button" class="btn btn-primary step step-2" data-step="2" onclick="sendEvent('#demo-modal-3', 3)">Next</button>
                </div>
                {!! Form::close() !!} 
            </div>
        </div>
    </div><!--end modal-->

    <script>
        $('k').on('click','.addRow', function(){
            var tr = '<tr>'+
                '<td>'+
                    '<label class="mb-1">Kekurangan</label>'+
                    '<input type="text" name="kekurangan[]" id="kekurangan" class="form-control" required parsley></td>'+
                    '<td>'+
                    '<label class="mb-1">Tgl Kelengkapan</label>'+
                    '<input type="date" name="tgl_kelengkapan[]" id="" class="form-control" required></td>'+
                '<td>'+  
                    '<a href="javascript:;" class="btn btn-sm btn-outline-danger deleteRow mt-3"> <span class="far fa-trash-alt me-1"></span>Delete</a></td>'+
            '</tr>';
        
            $('#tbod').append(tr);
        });
        
        $('#tbod').on('click','.deleteRow', function(){
            $(this).parent().parent().remove();
        });
        
        </script>