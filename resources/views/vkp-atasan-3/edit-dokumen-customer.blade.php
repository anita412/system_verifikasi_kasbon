
<div class="row" id="form-entry-2">
    <div class="row">
        <div class="col-md-6">
            <label class="mt-3">MEMO INTERNAL / NOTULENSI RAPAT</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dc_memointernal" required parsley>
                <option value="-" {{old('dc_memointernal', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_memointernal) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dc_memointernal', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_memointernal) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dc_memointernal', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_memointernal) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">SPPH</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dc_spph" required parsley>
                <option value="-" {{old('dc_spph', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_spph) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dc_spph', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_spph) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dc_spph', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_spph) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">KO (KONFIRMASI ORDER)</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dc_ko" required parsley>
                <option value="-" {{old('dc_ko', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_ko) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dc_ko', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_ko) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dc_ko', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_ko) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">LOI</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dc_loi" required parsley>
                <option value="-" {{old('dc_loi', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_loi) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dc_loi', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_loi) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dc_loi', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_loi) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">PO CUSTOMER</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dc_invoicecustom" required parsley>
                <option value="-" {{old('dc_invoicecustom', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_invoicecustom) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dc_invoicecustom', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_invoicecustom) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dc_invoicecustom', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_invoicecustom) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">SJN CUSTOMER</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dc_sjncustom" required parsley>
                <option value="-" {{old('dc_sjncustom', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_sjncustom) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dc_sjncustom', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_sjncustom) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dc_sjncustom', $pertanggungan->kasbon->kelengkapan->dcustomer->dc_sjncustom) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
    </div><!-- end row -->
    <div class="row mt-3">
        <div class="col-sm-12 text-end">
            <a href="#" type="button" onclick="form1()" class="btn btn-danger px-4">Previous</a> 
            <a href="#" type="button" onclick="form3()" class="btn btn-primary px-4">Next</a>      
        </div>
    </div>
</div>