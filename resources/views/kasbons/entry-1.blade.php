<div class="row" id="form-entry-1">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtLastNameBilling" class="col-lg-4 col-form-label">No Kasbon</label>
                <div class="col-lg-8">
                    <input class="form-control" name="nokasbon" type="text" value="{{$nomer}}" disabled>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Kasbon Rencana / Realisasi</label>
                <div class="col-lg-8">
                    <select required parsley class="form-select" aria-label="Default select example"  id="jeniskasbon"  name="jeniskasbon" >
                        <option value="" disabled selected hidden>Pilih Kasbon</option>
                        <option value="Kasbon Realisasi">Kasbon Realisasi</option>
                        <option value="Kasbon Rencana">Kasbon Rencana</option>
                    </select>
                </div>                
            </div><!--end form-group-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Tanggal Masuk</label>
                <div class="col-lg-8">
                    <input class="form-control" name="tglmasuk" type="date" value="{{$tglmasuk}}" id="example-date-input">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Jam Masuk</label>
                <div class="col-lg-8">
                    <input class="form-control" type="time" name="jammasuk" value="{{$jamnow}}" id="example-time-input">
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
    </div>
    <div class="row">  
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtEmailAddressBilling" class="col-lg-4 col-form-label">No. Dokumen Sebelumnya</label>
                <div class="col-lg-8">
                    <input class="form-control" type="text" value="{{$terakhir->nokasbon}}" aria-label="Disabled input example" name="doksebelumnya" disabled readonly>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtFirstNameShipping" class="col-lg-4 col-form-label" value="">User</label>
                <div class="col-lg-8">
                    <input required parsley-type="text" class="form-control" value="{{ Auth::user()->name }}" id="username" name="username" disabled>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtLastNameShipping" class="col-lg-4 col-form-label">NIP</label>
                <div class="col-lg-8">
                    <input class="form-control" type="text" value="{{ Auth::user()->nip }}" aria-label="Disabled input example" nama="nip" disabled readonly>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtCompanyShipping" class="col-lg-4 col-form-label">Unit</label>
                <div class="col-lg-8">
                    <input class="form-control" type="text" value="{{ Auth::user()->unit->name }}" aria-label="Disabled input example" nama="id_unit" disabled readonly>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
    </div>
    <div class="row">   
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtEmailAddressShipping" class="col-lg-4 col-form-label">Kode Kasbon</label>
                <div class="col-lg-8">
                    <select class="form-select"  id="floatingSelect" aria-label="Floating label select example" name="id_kodekasbon" required parsley>
                        <option value="" disabled selected hidden>Pilih Kode Kasbon</option>
                        @foreach ($kodekasbon as $kodekasbon)
                        <option  value="{{$kodekasbon->id}}">{{$kodekasbon->name}}</option>
                        @endforeach
                    </select>
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
                        <option  value="{{$jenis->id}}">{{$jenis->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div><!--end form-group-->
        </div><!--end col--> 
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtStateProvinceShipping" class="col-lg-4 col-form-label">Kurs</label>
                <div class="col-lg-8">
                    <select class="form-select"  id="floatingSelect" aria-label="Floating label select example" name="id_kurs" required parsley>
                        <option value="" disabled selected hidden>Pilih Kurs</option>
                        @foreach ($kurs as $kurs)
                        <option  value="{{$kurs->id}}">{{$kurs->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtCityShipping" class="col-lg-4 col-form-label">Proyek</label>
                <div class="col-lg-8">
                    <input id="proyek" name="proyek" type="text" class="form-control" required>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtAddress1Billing" class="col-lg-4 col-form-label">Uraian Penggunaan</label>
                <div class="col-lg-8">
                    <textarea id="uraianpengguna" name="uraianpengguna" rows="4" class="form-control" required parsley></textarea>
                </div>
            </div><!--end form-group-->
        </div><!--end col--> 
    </div>
    <div class="row">
        <div class="col-sm-12 text-end">
            <a href="#" type="button" onclick="form2()" class="btn btn-primary px-4">Next</a>      
        </div>
    </div>
</div>