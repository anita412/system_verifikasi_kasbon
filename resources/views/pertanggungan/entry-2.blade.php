<div class="row" id="form-entry-2">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtFirstNameShipping" class="col-lg-4 col-form-label" >Nominal Kasbon</label>
                <div class="col-lg-8">
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                    <input required parsley class="form-control input-numera" type="number" id="nominalkasbon" class="form-control"  name="nominalkasbon" onkeyup="add_number()" value="{{$kasbon->total}}" disabled/>
                    </div>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtLastNameShipping" class="col-lg-4 col-form-label" >No VKB Kasbon</label>
                <div class="col-lg-8">
                    <input required parsley-type="text" class="form-control" value="{{$kasbon->nopi}}" name="novkbkasbon" disabled>    
                    <!-- <input id="txtLastNameShipping" name="txtLastNameShipping" type="text" class="form-control"> -->
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtNameCard" class="col-lg-4 col-form-label" >Tanggal Jatuh Tempo</label>
                    <div class="col-lg-4">
                        <input id="txtNameCard"  type="number" class="form-control" name="haritempo" value="{{$kasbon->haritempo}}" disabled>
                    </div>
                    <div class="col-lg-4">
                        <input required parsley-type="text" class="form-control"  type="date"  id="example-date-input" name="tgltempo" value="{{$kasbon->tgltempo->format('Y-m-d')}}" disabled>    
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
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                    <input required parsley class="form-control input-numera" type="number" id="nilaiptj" name="nilaiptj" class="form-control" onkeyup="add_number()"/>
                    </div>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtCompanyShipping" class="col-lg-4 col-form-label" >Tgl Pertanggung Jawaban</label>
                <div class="col-lg-8">
                    <input id="form-control" class="form-control" type="date" id="example-date-input" name="tglptj">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtFirstNameBilling" class="col-lg-4 col-form-label" >Selisih Pertanggung Jawaban</label>
                <div class="col-lg-8">
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                    <input class="form-control input-numer" id="selisihptj" name="selisihptj" disabled/>
                    </div>
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
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                    <input id="txtStateProvinceBilling"  name="nilaiselisihptj" type="text" class="form-control">
                    </div>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
        <div class="form-group row">
            <label for="txtStateProvinceBilling" class="col-lg-4 col-form-label" >Selisih Pertanggung Jawaban Akhir</label>
            <div class="col-lg-8">
                <div class="input-group">
                    <span class="input-group-text">Rp.</span>
                <input id="txtStateProvinceBilling" name="selisihptjakhir" type="text" class="form-control">
                </div>
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
<input type="date" name="tgl_sp1"  value="" hidden>    
<input type="date" name="tgl_sp2" value=""   hidden>  
<input type="date" name="tgl_sp3"  value="" hidden>  
<input type="date" name="tgl_mts"  value="" hidden>  
<input type="date" name="tgl_pbsdm" value=""  hidden>  
<script>
    function add_number() {
      var first_number = parseFloat(document.getElementById("nilaiptj").value);
      if (isNaN(first_number)) first_number = 0;
      var second_number = parseFloat(document.getElementById("selisihptj").value);
      if (isNaN(second_number)) second_number = 0;
      var third_number = parseFloat(document.getElementById("nominalkasbon").value);
      if (isNaN(third_number)) third_number = 0;
      var result =  third_number - first_number;
      document.getElementById("selisihptj").value = result;
    }
  </script>