<div class="row" id="form-entry-1">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Tanggal Masuk</label>
                <div class="col-lg-8">
                    <input class="form-control" name="tglmasuk" type="date" value="{{$tglmasuk}}" id="example-date-input">                
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Jam Masuk</label>
                <div class="col-lg-8">
                    <input class="form-control" type="time" name="jammasuk" value="{{$jamnow}}" id="example-time-input">
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtEmailAddressBilling" class="col-lg-4 col-form-label">No. Dokumen Sebelumnya</label>
                <div class="col-lg-8">
                    @if(isset($terakhir))
                    <input class="form-control" type="text" value="{{$terakhir->no_nonkasbon}}" aria-label="Disabled input example" name="doksebelumnya" disabled readonly>
                @else
                <input class="form-control" type="text" value="" aria-label="Disabled input example" name="doksebelumnya" disabled readonly>
                @endif
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtFirstNameShipping" class="col-lg-4 col-form-label">User</label>
                <div class="col-lg-8">
                    <input required parsley-type="text" class="form-control" value="{{ Auth::user()->name }}" id="username" name="username" disabled>
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
                <label for="txtNameCard" class="col-lg-4 col-form-label">Nama Vendor</label>
                <div class="col-lg-8">
                    <input  required parsley type="text" class="form-control" name ="namavendor">
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6 ">
            <div class="form-group row">
                <label for="txtNameCard" class="col-lg-4 col-form-label">No. Invoice</label>
                <div class="col-lg-8">
                    <input required parsley id="txtNameCard" name="noinvoice" type="text" class="form-control input-noi" data-parsley-minlength="10"> 
                    <script>
                        var cleave = new Cleave('.input-noi', {
                        delimiters: ['/'],
                        blocks: [3, 1, 4],
                        uppercase: true
                    });
                    </script>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtAddress1Billing" class="col-lg-4 col-form-label">Tujuan Pembayaran</label>
                <div class="col-lg-8">
                    <input id="tujuanpembayaran" name="tujuanpembayaran" class="form-control" required parsley></input>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="row mt-3">
            <div class="col-sm-12 text-end">
                <a href="#" type="button" onclick="form1()" class="btn btn-danger px-4">Previous</a> 
                <button type="submit" class="btn btn-primary px-4">Simpan</button>      
            </div>
        </div>
    </div>
</div>