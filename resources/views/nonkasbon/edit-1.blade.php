<div class="row" id="form-entry-1">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtLastNameBilling" class="col-lg-4 col-form-label">NO KASBON</label>
                <div class="col-lg-8">
                    <input class="form-control" name="nokasbon" type="text" value="{{$kelengkapan->kasbon->nokasbon}}" disabled>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtLastNameBilling" class="col-lg-4 col-form-label">TANGGAL MASUK</label>
                    <div class="col-lg-8">
                        <div class="input-group">                                            
                            <span class="input-group-text"><i class="ti ti-calendar font-16"></i></span>
                        <input class="form-control" name="tglmasuk" type="date" value="{{$kelengkapan->kasbon->tglmasuk}}" id="example-date-input" disabled>
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
                    <input class="form-control" type="time" name="jammasuk" value="{{$kelengkapan->kasbon->jammasuk}}" id="example-time-input" disabled>
                    </div>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtEmailAddressBilling" class="col-lg-4 col-form-label">NO DOKUMEN SEBELUMNYA</label>
                <div class="col-lg-8">
                    <input class="form-control" type="text" value="{{$kelengkapan->kasbon->doksebelumnya}}" aria-label="Disabled input example" name="doksebelumnya" disabled>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->    
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtFirstNameShipping" class="col-lg-4 col-form-label" value="">USER</label>
                <div class="col-lg-8">
                    <input required parsley-type="text" class="form-control" value="{{$kelengkapan->kasbon->username}}" id="username" name="username" disabled>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtCompanyShipping" class="col-lg-4 col-form-label">UNIT</label>
                <div class="col-lg-8">
                    <input class="form-control" type="text" value="{{$kelengkapan->kasbon->unit->name}}" aria-label="Disabled input example" nama="id_unit" disabled>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtEmailAddressShipping" class="col-lg-4 col-form-label">KODE KASBON</label>
                <div class="col-lg-8">
                    <input class="form-control" type="text" value="{{$kelengkapan->kasbon->kodekasbon->name}}" aria-label="Disabled input example" id="kodekasbon" name="kodekasbon" disabled readonly>
                </div>
            </div><!--end form-group-->
        </div><!--end col--> 
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtCityShipping" class="col-lg-4 col-form-label">JENIS KASBON</label>
                <div class="col-lg-8">
                    <select required parsley class="form-select" id="floatingSelect" aria-label="Floating label select example" name="id_jenis">
                        <option value="" disabled selected hidden>Pilih Kasbon</option>
                        @foreach ($jenis as $jenis)
                        @if(old('jenis', $kelengkapan->kasbon->id_jenis) == $jenis->id)
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
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtStateProvinceShipping" class="col-lg-4 col-form-label">KURS</label>
                <div class="col-lg-8">
                    <select class="form-select"  id="floatingSelect" aria-label="Floating label select example" name="id_kurs" required parsley>
                        <option value="" disabled selected hidden>Pilih Kurs</option>
                        @foreach ($kurs as $kurs)
                        @if(old('kurs', $kelengkapan->nonkasbon->id_kurs) == $kurs->id)
                        <option value="{{$kurs->id}}" selected>{{$kurs->name}}</option>
                        @else
                        <option  value="{{$kurs->id}}" >{{$kurs->name}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtNameCard" class="col-lg-4 col-form-label">NAMA VENDOR</label>
                <div class="col-lg-8">
                    <input  required parsley type="text" class="form-control" name ="namavendor" value="{{$kelengkapan->kasbon->namavendor}}">
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
    <div class="row">
        <div class="col-md-6 ">
            <div class="form-group row">
                <label for="txtNameCard" class="col-lg-4 col-form-label">NO INVOICE</label>
                <div class="col-lg-8">
                    <input required parsley id="txtNameCard" name="noinvoice" type="text" class="form-control input-noi" data-parsley-minlength="10" value="{{$kelengkapan->kasbon->noinvoice}}"> 
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="form-group row">
            <label for="txtNameCard" class="col-lg-4 col-form-label">TUJUAN PEMBAYARAN</label>
            <div class="col-lg-8">
                <input  required parsley type="text" class="form-control" name ="tujuanpembayaran" value="{{$kelengkapan->kasbon->tujuanpembayaran}}">
            </div>
        </div><!--end form-group-->
    </div>
    <div class="row">
        <div class="col-sm-12 text-end">
            <button  type="submit"  class="btn btn-primary px-4">Simpan</button>      
        </div>
    </div>
</div>