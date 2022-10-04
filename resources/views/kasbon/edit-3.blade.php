<div class="row" id="form-entry-3">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtNameCard" class="col-lg-4 col-form-label">Nama Vendor</label>
                <div class="col-lg-8">
                    <input  required parsley type="text" class="form-control" name ="namavendor" value="{{$kasbon->namavendor}}">
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row POC">
                <label for="txtNameCard" class="col-lg-4 col-form-label">Tanggal Jatuh Tempo</label>
                <div class="col-lg-4">
                    <input id="txtNameCard"  type="number" class="form-control" name="haritempo" value="{{$kasbon->haritempo}}">
                </div>
                <div class="col-lg-4">
                    <input required parsley-type="text" class="form-control"  type="date"  id="example-date-input" name="tgltempo" value="{{$kasbon->tgltempo}}">    
                </div>
                </div><!--end form-group-->
            </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-md-6 ">
            <div class="form-group row">
                <label for="txtNameCard" class="col-lg-4 col-form-label">No. Invoice</label>
                <div class="col-lg-8">
                    <input required parsley id="txtNameCard" name="noinvoice" type="text" class="form-control input-noi" data-parsley-minlength="10" value="{{$kasbon->noinvoice}}"> 
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtNameCard" class="col-lg-4 col-form-label">SPPH/KOI/LOI</label>
                <div class="col-lg-8">
                    <input required parsley id="txtNameCard" name="spph" type="text" class="form-control input-koi" data-parsley-minlength="20" value="{{$kasbon->spph}}">
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtNameCard" class="col-lg-4 col-form-label">Perkiraan Barang Datang</label>
                <div class="col-lg-8">
                    <input required parsley id="txtNameCard" name="barang_datang" type="date" class="form-control" required parsley value="{{$kasbon->barang_datang}}">
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtNameCard" class="col-lg-4 col-form-label">No. PI (FOCUS)</label>
                <div class="col-lg-8">
                    <input required parsley id="txtNameCard" name="nopi" type="text" class="form-control input-pi" data-parsley-minlength="17" value="{{$kasbon->nopi}}">
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
    </div>
        <div class="row">
                <div class="col-sm-12 text-end">
                    <a href="#" type="button" onclick="form2()" class="btn btn-danger px-4">Previous</a> 
                    <button  type="submit"  class="btn btn-primary px-4">Simpan</button>      
                </div>
            </div>
    </div>