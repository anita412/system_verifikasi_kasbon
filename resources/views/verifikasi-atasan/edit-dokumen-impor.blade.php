<div class="row" id="form-entry-3">
    <div class="row">
        <div class="col-md-6">
            <label class="mt-3">PIB</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="di_pib" required parsley>
                <option value="-" {{old('di_pib', $kelengkapan->dimpor->di_pib) == '-' ? 'selected': ''}}>-</option>
                <option value="asli" {{old('di_pib', $kelengkapan->dimpor->di_pib) == 'asli' ? 'selected': ''}}>ASLI</option>
                <option value="copy" {{old('di_pib', $kelengkapan->dimpor->di_pib) == 'copy' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">BILL OF LADING / AWB</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="di_bl" required parsley>
                <option value="-" {{old('di_bl', $kelengkapan->dimpor->di_bl) == '-' ? 'selected': ''}}>-</option>
                <option value="asli" {{old('di_bl', $kelengkapan->dimpor->di_bl) == 'asli' ? 'selected': ''}}>ASLI</option>
                <option value="copy" {{old('di_bl', $kelengkapan->dimpor->di_bl) == 'copy' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">COM</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="di_com" required parsley>
                <option value="-" {{old('di_com', $kelengkapan->dimpor->di_com) == '-' ? 'selected': ''}}>-</option>
                <option value="asli" {{old('di_com', $kelengkapan->dimpor->di_com) == 'asli' ? 'selected': ''}}>ASLI</option>
                <option value="copy" {{old('di_com', $kelengkapan->dimpor->di_com) == 'copy' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">COO</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="di_coo" required parsley>
                <option value="-" {{old('di_coo', $kelengkapan->dimpor->di_coo) == '-' ? 'selected': ''}}>-</option>
                <option value="asli" {{old('di_coo', $kelengkapan->dimpor->di_coo) == 'asli' ? 'selected': ''}}>ASLI</option>
                <option value="copy" {{old('di_coo', $kelengkapan->dimpor->di_coo) == 'copy' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">INVOICE CUSTOM</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="di_invoicecustom" required parsley>
                <option value="-" {{old('di_invoicecustom', $kelengkapan->dimpor->di_invoicecustom) == '-' ? 'selected': ''}}>-</option>
                <option value="asli" {{old('di_invoicecustom', $kelengkapan->dimpor->di_invoicecustom) == 'asli' ? 'selected': ''}}>ASLI</option>
                <option value="copy" {{old('di_invoicecustom', $kelengkapan->dimpor->di_invoicecustom) == 'copy' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">INVOICE FREIGHT</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="di_sjncustom" required parsley>
                <option value="-" {{old('di_sjncustom', $kelengkapan->dimpor->di_sjncustom) == '-' ? 'selected': ''}}>-</option>
                <option value="asli" {{old('di_sjncustom', $kelengkapan->dimpor->di_sjncustom) == 'asli' ? 'selected': ''}}>ASLI</option>
                <option value="copy" {{old('di_sjncustom', $kelengkapan->dimpor->di_sjncustom) == 'copy' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
    </div>
    <div class="row mt-3">
        <div class="col-sm-12 text-end">
            <a href="#" type="button" onclick="form2()" class="btn btn-danger px-4">Previous</a> 
            <a href="#" type="button" onclick="form4()" class="btn btn-primary px-4">Next</a>      
        </div>
    </div>
</div>