<div class="row" id="form-entry-1">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Tanggal Masuk</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="tglmasuk" type="date" value="{{$nonkasbon->tglmasuk}}" id="example-date-input" disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Jam Masuk</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="time" name="jammasuk" value="{{$nonkasbon->jammasuk}}" disabled>
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtEmailAddressBilling" class="col-lg-4 col-form-label">No. Dokumen Sebelumnya</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" value="{{$nonkasbon->doksebelumnya}}" aria-label="Disabled input example" name="doksebelumnya" disabled readonly>
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtFirstNameShipping" class="col-lg-4 col-form-label" value="">User</label>
                    <div class="col-lg-8">
                        <input required parsley-type="text" class="form-control" value="{{$nonkasbon->user->name}}" id="username" name="username" disabled>
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtCompanyShipping" class="col-lg-4 col-form-label">Unit</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" value="{{$nonkasbon->unit->name}}" aria-label="Disabled input example" nama="id_unit" disabled readonly>
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtEmailAddressShipping" class="col-lg-4 col-form-label">Kode nonkasbon</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" value="{{$nonkasbon->kodekasbon}}" aria-label="Disabled input example" id="kodekasbon" name="kodekasbon" disabled readonly>
                    </div>
                </div><!--end form-group-->
            </div><!--end col--> 
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtCityShipping" class="col-lg-4 col-form-label">Jenis nonkasbon</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" value="{{$nonkasbon->jenis}}" disabled readonly>
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtStateProvinceShipping" class="col-lg-4 col-form-label">Kurs</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" value="{{$nonkasbon->kurs}}" disabled readonly>                                       
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtNameCard" class="col-lg-4 col-form-label">Nama Vendor</label>
                    <div class="col-lg-8">
                        <input  required parsley type="text" class="form-control" name ="namavendor" value="{{$nonkasbon->namavendor}}">
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6 ">
                <div class="form-group row">
                    <label for="txtNameCard" class="col-lg-4 col-form-label">No. Invoice</label>
                    <div class="col-lg-8">
                        <input required parsley id="txtNameCard" name="noinvoice" type="text" class="form-control input-noi" data-parsley-minlength="10" value="{{$nonkasbon->noinvoice}}"> 
                        {{-- <script>
                            var cleave = new Cleave('.input-noi', {
                            delimiters: ['/'],
                            blocks: [3, 1, 4],
                            uppercase: true
                        });
                        </script> --}}
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtNameCard" class="col-lg-4 col-form-label">Tujuan Pembayaran</label>
                    <div class="col-lg-8">
                        <input  required parsley type="text" class="form-control" name ="tujuanpembayaran" value="{{$nonkasbon->tujuanpembayaran}}">
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
        </div>
     <div class="row mt-3">
        <div class="col-sm-12 text-end">
            <a href="{{route('vkb-atasan.index')}}" class="btn btn-danger">Cancel</a>  
            <a href="#" type="button" onclick="form2()" class="btn btn-primary px-4">Next</a>      
        </div>
    </div>
</div>
</div>