<div class="row" id="form-entry-4">
    <div class="row">
        <div class="col-md-6">
            <label class="mt-3">KESESUAIN FAKTUR</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dp_kesesuaianfaktur" required parsley>
                <option value="-" {{old('dp_kesesuaianfaktur', $kelengkapan->dpajak->dp_kesesuaianfaktur) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dp_kesesuaianfaktur', $kelengkapan->dpajak->dp_kesesuaianfaktur) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dp_kesesuaianfaktur', $kelengkapan->dpajak->dp_kesesuaianfaktur) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">PAJAK PENGHASILAN</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dp_pajakpenghasilan" required parsley>
                <option value="-" {{old('dp_pajakpenghasilan', $kelengkapan->dpajak->dp_pajakpenghasilan) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dp_pajakpenghasilan', $kelengkapan->dpajak->dp_pajakpenghasilan) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dp_pajakpenghasilan', $kelengkapan->dpajak->dp_pajakpenghasilan) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">SURAT NON PKP/SKB</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dp_suratnonpkp" required parsley>
                <option value="-" {{old('dp_suratnonpkp', $kelengkapan->dpajak->dp_suratnonpkp) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dp_suratnonpkp', $kelengkapan->dpajak->dp_suratnonpkp) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dp_suratnonpkp', $kelengkapan->dpajak->dp_suratnonpkp) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
    </div><!-- end row -->
    <div class="row mt-3">
        <div class="col-sm-12 text-end">
            <a href="#" type="button" onclick="form3()" class="btn btn-danger px-4">Previous</a> 
            <a href="#" type="button" onclick="form5()" class="btn btn-primary px-4">Next</a>      
        </div>
    </div>
</div>