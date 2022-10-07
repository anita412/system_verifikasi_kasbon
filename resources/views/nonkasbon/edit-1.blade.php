<div class="row" id="form-entry-1">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtLastNameBilling" class="col-lg-4 col-form-label">NO KASBON</label>
                <div class="col-lg-8">
                    <input class="form-control" name="nokasbon" type="text" value="{{$nonkasbon->no_nonkasbon}}" disabled>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtLastNameBilling" class="col-lg-4 col-form-label">TANGGAL MASUK</label>
                    <div class="col-lg-8">
                        <div class="input-group">                                            
                            <span class="input-group-text"><i class="ti ti-calendar font-16"></i></span>
                        <input class="form-control" name="tglmasuk" type="date" value="{{$nonkasbon->tglmasuk}}" id="example-date-input" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtLastNameBilling" class="col-lg-4 col-form-label">JAM MASUK</label>
                <div class="col-lg-8">
                    <div class="input-group">                                            
                        <span class="input-group-text"><i class="ti ti-alarm-clock font-16"></i></span>
                    <input class="form-control" type="time" name="jammasuk" value="{{$nonkasbon->jammasuk}}" id="example-time-input" disabled>
                    </div>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtEmailAddressBilling" class="col-lg-4 col-form-label">NO DOKUMEN SEBELUMNYA</label>
                <div class="col-lg-8">
                    <input class="form-control" type="text" value="{{$nonkasbon->doksebelumnya}}" aria-label="Disabled input example" name="doksebelumnya" disabled>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->    
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtFirstNameShipping" class="col-lg-4 col-form-label" value="">USER</label>
                <div class="col-lg-8">
                    <input required parsley-type="text" class="form-control" value="{{$nonkasbon->user->name}}" id="username" name="username" disabled>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtCompanyShipping" class="col-lg-4 col-form-label">UNIT</label>
                <div class="col-lg-8">
                    <input class="form-control" type="text" value="{{$nonkasbon->unit->name}}" aria-label="Disabled input example" nama="id_unit" disabled>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtEmailAddressShipping" class="col-lg-4 col-form-label">KODE KASBON</label>
                <div class="col-lg-8">
                    <select class="form-control" id="tagskk" name="kodekasbon">
                        <option  selected >{{$nonkasbon->kodekasbon}}</option>
                        @foreach ($kodekasbon as $kodekasbon)
                        <option  value="{{$kodekasbon->name}}">{{$kodekasbon->name}}</option>
                        @endforeach
                      </select>
                      <script>
                      $("#tagskk").select2({
                        tags: true
                      });
                    </script>
                </div>
            </div><!--end form-group-->
        </div><!--end col--> 
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtCityShipping" class="col-lg-4 col-form-label">JENIS KASBON</label>
                <div class="col-lg-8">
                    <select class="form-control" id="tagsj" name="jenis">
                        <option  selected >{{$nonkasbon->jenis}}</option>
                        @foreach ($jenis as $jenis)
                        <option  value="{{$jenis->name}}">{{$jenis->name}}</option>
                        @endforeach
                      </select>
                      <script>
                      $("#tagsj").select2({
                        tags: true
                      });
                    </script>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtEmailAddressShipping" class="col-lg-4 col-form-label">No Invoice</label>
                <div class="col-lg-8">
                    <input class="form-control" type="text" value="{{$nonkasbon->noinvoice}}" aria-label="Disabled input example"  name="noinvoice" >
                </div>
            </div><!--end form-group-->
        </div><!--end col--> 
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtCityShipping" class="col-lg-4 col-form-label">Tujuan Pembayaran</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" value="{{$nonkasbon->tujuanpembayaran}}" name="tujuanpembayaran" required parsley>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtStateProvinceShipping" class="col-lg-4 col-form-label">KURS</label>
                <div class="col-lg-8">
                    <select class="form-control" id="tagsk" name="kurs">
                        <option  selected >{{$nonkasbon->kurs}}</option>
                        @foreach ($kurs as $kurs)
                        <option  value="{{$kurs->name}}">{{$kurs->name}}</option>
                        @endforeach
                      </select>
                      <script>
                      $("#tagsk").select2({
                        tags: true
                      });
                    </script>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtNameCard" class="col-lg-4 col-form-label">NAMA VENDOR</label>
                <div class="col-lg-8">
                    <select class="form-control" id="tags" name="namavendor">
                        <option  selected >{{$nonkasbon->namavendor}}</option>
                        @foreach ($namavendor as $namavendor)
                        <option  value="{{$namavendor->name}}">{{$namavendor->name}}</option>
                        @endforeach
                      </select>
                      <script>
                      $("#tags").select2({
                        tags: true
                      });
                    </script>
                </div>
            </div><!--end form-group-->
   

        
    <div class="row">
        <div class="col-sm-12 text-end">
            <button  type="submit"  class="btn btn-primary px-4">Simpan</button>      
        </div>
    </div>
</div>