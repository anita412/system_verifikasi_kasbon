
<div class="row" id="form-entry-1">
    <div class="row">
    <div class="col-md-6">
        <div class="form-group row">
            <label for="txtLastNameBilling" class="col-lg-4 col-form-label">No Kasbon</label>
                <div class="col-lg-8">
                    <input class="form-control" name="nokasbon" type="text" value="{{$kasbon->nokasbon}}" disabled>
                </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Tanggal Masuk</label>
                    <div class="col-lg-8">
                        <div class="input-group">                                            
                            <span class="input-group-text"><i class="ti ti-calendar font-16"></i></span>
                        <input class="form-control" name="tglmasuk"  value="{{$kasbon->tglmasuk->format('d-m-Y')}}" id="example-date-input" disabled>
                    </div>
                </div>
            </div>
        </div>
    <div class="col-md-6">
        <div class="form-group row">
            <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Jam Masuk</label>
            <div class="col-lg-8">
                <div class="input-group">                                            
                    <span class="input-group-text"><i class="ti ti-alarm-clock font-16"></i></span>
                <input class="form-control" type="time" name="jammasuk" value="{{$kasbon->jammasuk}}" id="example-time-input" disabled>
                </div>
            </div>
        </div><!--end form-group-->
    </div><!--end col-->
    </div>
    <div class="row">
    <div class="col-md-6">
        <div class="form-group row">
            <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Kasbon Rencana / Realisasi</label>
            <div class="col-lg-8">
                <input class="form-control" type="text" value="{{$kasbon->jeniskasbon}}" >
            </div>                
        </div><!--end form-group-->
    </div><!--end col-->
    <div class="col-md-6">
            <div class="form-group row">
                <label for="txtFirstNameShipping" class="col-lg-4 col-form-label" value="">User</label>
                <div class="col-lg-8">
                    <input required parsley-type="text" class="form-control" value="{{$kasbon->user->name}}" id="username" name="username" disabled>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group row">
            <label for="txtLastNameShipping" class="col-lg-4 col-form-label">NIP</label>
            <div class="col-lg-8">
                <input class="form-control" type="text" value="{{$kasbon->nip}}" aria-label="Disabled input example" nama="nip" disabled>
            </div>
        </div><!--end form-group-->
    </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtCompanyShipping" class="col-lg-4 col-form-label">Unit</label>
                <div class="col-lg-8">
                    <input class="form-control" type="text" value="{{$kasbon->unit->name}}" aria-label="Disabled input example" nama="id_unit" disabled>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group row">
            <label for="txtEmailAddressBilling" class="col-lg-4 col-form-label">No. Dokumen Sebelumnya</label>
            <div class="col-lg-8">
                <input class="form-control" type="text" value="{{$kasbon->doksebelumnya}}" aria-label="Disabled input example" name="doksebelumnya" disabled>
            </div>
        </div><!--end form-group-->
    </div><!--end col-->
    <div class="col-md-6">
            <div class="form-group row">
                <label for="txtEmailAddressShipping" class="col-lg-4 col-form-label">Kode Kasbon</label>
                <div class="col-lg-8">
                    <input class="form-control" type="text" value="{{$kasbon->kodekasbon->name}}" aria-label="Disabled input example" id="kodekasbon" name="kodekasbon" disabled readonly>
                </div>
            </div><!--end form-group-->
        </div><!--end col--> 
</div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtStateProvinceShipping" class="col-lg-4 col-form-label">Kurs</label>
                <div class="col-lg-8">
                    <select class="form-control" id="kurs" name="id_kurs">
                        <option value="" disabled selected hidden>Pilih Kurs</option>
                        @foreach ($kurs as $rate)
                        @if(old('kurs', $kasbon->id_kurs) == $rate->id)
                        <option value="{{$rate->id}}" selected>{{$rate->symbol}} - {{$rate->code}}</option>
                        @else
                        <option  value="{{$rate->id}}" >{{$rate->symbol}} - {{$rate->code}}</option>
                        @endif
                        @endforeach
                      </select>
                      <script>
                      $("#kurs").select2({
                        kurs: true
                      });
                    </script>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtCityShipping" class="col-lg-4 col-form-label">Proyek</label>
                <div class="col-lg-8">
                    <input id="proyek" name="proyek" type="text" class="form-control" value="{{$kasbon->proyek}}" required>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtAddress1Billing" class="col-lg-4 col-form-label">Uraian Penggunaan</label>
                <div class="col-lg-8">
                    <textarea id="uraianpengguna" name="uraianpengguna" rows="4" class="form-control" required parsley value="">{{$kasbon->uraianpengguna}}</textarea>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtCityShipping" class="col-lg-4 col-form-label">Jenis Kasbon</label>
                <div class="col-lg-8">
                    <select required parsley class="form-select" id="floatingSelect" aria-label="Floating label select example" name="id_jenis">
                        <option value="" disabled selected hidden>Pilih Kasbon</option>
                        @foreach ($jenis as $jenis)
                        @if(old('jenis', $kasbon->id_jenis) == $jenis->id)
                        <option value="{{$jenis->id}}" selected>{{$jenis->name}}</option>
                        @else
                        <option  value="{{$jenis->id}}" >{{$jenis->name}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        
    </div>
    <div class="row">
        <div class="col-sm-12 text-end">
            <a href="{{route('kasbon.index')}}" type="button" class="btn btn-danger px-4">Back</a>      
            <a href="#" type="button" onclick="form2()" class="btn btn-primary px-4">Next</a>      
        </div>
    </div>
</div>