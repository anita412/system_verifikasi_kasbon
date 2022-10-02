<div class="row" id="form-entry-2">
    <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtFirstNameShipping" class="col-lg-4 col-form-label" >Nominal Kasbon</label>
                    <div class="col-lg-8">
                        <input id="txtFirstNameShipping" type="text" class="form-control" value="{{$kasbon->total}}" disabled>
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtLastNameShipping" class="col-lg-4 col-form-label" >No VKB Kasbon</label>
                    <div class="col-lg-8">
                        <input required parsley-type="text" class="form-control"  placeholder="nomor pembayaran kasbon"  name="novkbkasbon">    
                        <!-- <input id="txtLastNameShipping" name="txtLastNameShipping" type="text" class="form-control"> -->
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                    <div class="form-group row">
                        <label for="txtNameCard" class="col-lg-4 col-form-label" >Tanggal Jatuh Tempo</label>
                        <div class="col-lg-4">
                            <input required parsley class="form-control input-numera" type="number" id="idpph" class="form-control"  name="idpph" onkeyup="add_number()" value="{{$kasbon->haritempo}}" disabled/>
                        </div>
                      
                        <div class="col-lg-4">
                            <input required parsley class="form-control input-numera" type="date" id="idpph" class="form-control"  name="idpph" onkeyup="add_number()" value="{{$kasbon->tgltempo}}" disabled/>
                        </div>
                    </div><!--end form-group-->
                </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtCompanyShipping" class="col-lg-4 col-form-label" >Tanggal Bayar Ke User</label>
                    <div class="col-lg-8">
                        <input id="form-control" class="form-control" type="date" name="tglbayarkeuser" id="example-date-input">
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtStateProvinceShipping" class="col-lg-4 col-form-label">Nilai Pertanggung Jawaban</label>
                    <div class="col-lg-8">
                        <input id="txtStateProvinceShipping" name="nilaiptj" type="text" class="form-control">
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtCompanyShipping" class="col-lg-4 col-form-label" >Tgl Pertanggung Jawaban</label>
                    <div class="col-lg-8">
                        <input id="form-control" class="form-control" type="date" value="2022-09-10" id="example-date-input" name="tglptj">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtFirstNameBilling" class="col-lg-4 col-form-label" >Selisih Pertanggung Jawaban</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text"  arial-label="Disable input example"  name="selisihptj">
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtCityBilling" class="col-lg-4 col-form-label">No VKB Selisih Pertanggung Jawaban</label>
                    <div class="col-lg-8">
                        <input id="txtCityBilling"  type="text" class="form-control"  name="novkbselisihptj">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtStateProvinceBilling" class="col-lg-4 col-form-label">Nilai Pembayaran Selisih Pertanggung Jawaban</label>
                    <div class="col-lg-8">
                        <input id="txtStateProvinceBilling"  name="nilaiselisihptj" type="text" class="form-control">
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
            <div class="form-group row">
                <label for="txtStateProvinceBilling" class="col-lg-4 col-form-label" >Selisih Pertanggung Jawaban Akhir</label>
                <div class="col-lg-8">
                    <input id="txtStateProvinceBilling" name="selisihptjakhir" type="text" class="form-control">
                </div>
            </div><!--end form-group-->
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 text-end">
                <a href="#" type="button" onclick="form1()" class="btn btn-danger px-4">Previous</a> 
                <button type="submit" class="btn btn-primary px-4">Simpan</button>      
            </div>
        </div>
    </div><!-- end row -->
</div>