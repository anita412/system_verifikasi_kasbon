
<div class="row" id="form-entry-vendor">
    <div class="row">
        <div class="col-md-6">
            <label class="">INVOICE</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dv_invoice" required parsley>
                    <option value="-" {{old('dv_invoice', $kelengkapan->dvendor->dv_invoice) == '-' ? 'selected': ''}}>-</option>
                    <option value="asli" {{old('dv_invoice', $kelengkapan->dvendor->dv_invoice) == 'asli' ? 'selected': ''}}>ASLI</option>
                    <option value="copy" {{old('dv_invoice', $kelengkapan->dvendor->dv_invoice) == 'copy' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="">KWITANSI</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dv_kwitansi" required parsley>
                <option value="-" {{old('dv_kwitansi', $kelengkapan->dvendor->dv_kwitansi) == '-' ? 'selected': ''}}>-</option>
                <option value="asli" {{old('dv_kwitansi', $kelengkapan->dvendor->dv_kwitansi) == 'asli' ? 'selected': ''}}>ASLI</option>
                <option value="copy" {{old('dv_kwitansi', $kelengkapan->dvendor->dv_kwitansi) == 'copy' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
    </div><!-- end row -->
    <div class="row">
        <div class="col-md-6">
            <label class="mt-3">PO VENDOR</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dv_povendor" required parsley>
                <option value="-" {{old('dv_povendor', $kelengkapan->dvendor->dv_povendor) == '-' ? 'selected': ''}}>-</option>
                <option value="asli" {{old('dv_povendor', $kelengkapan->dvendor->dv_povendor) == 'asli' ? 'selected': ''}}>ASLI</option>
                <option value="copy" {{old('dv_povendor', $kelengkapan->dvendor->dv_povendor) == 'copy' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">SJN VENDOR</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dv_sjnvendor" required parsley>
                <option value="-" {{old('dv_sjnvendor', $kelengkapan->dvendor->dv_sjnvendor) == '-' ? 'selected': ''}}>-</option>
                <option value="asli" {{old('dv_sjnvendor', $kelengkapan->dvendor->dv_sjnvendor) == 'asli' ? 'selected': ''}}>ASLI</option>
                <option value="copy" {{old('dv_sjnvendor', $kelengkapan->dvendor->dv_sjnvendor) == 'copy' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
    </div><!-- end row -->
    <div class="row">
        <div class="col-md-6">
            <label class="mt-3">PACKING LIST</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dv_packinglist" required parsley>
                <option value="-" {{old('dv_packinglist', $kelengkapan->dvendor->dv_packcinglist) == '-' ? 'selected': ''}}>-</option>
                <option value="asli" {{old('dv_packinglist', $kelengkapan->dvendor->dv_packcinglist) == 'asli' ? 'selected': ''}}>ASLI</option>
                <option value="copy" {{old('dv_packinglist', $kelengkapan->dvendor->dv_packcinglist) == 'copy' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">TEST REPORT</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dv_testreport" required parsley>
                <option value="-" {{old('dv_testreport', $kelengkapan->dvendor->dv_testreport) == '-' ? 'selected': ''}}>-</option>
                <option value="asli" {{old('dv_testreport', $kelengkapan->dvendor->dv_testreport) == 'asli' ? 'selected': ''}}>ASLI</option>
                <option value="copy" {{old('dv_testreport', $kelengkapan->dvendor->dv_testreport) == 'copy' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
    </div><!-- end row -->
    <div class="row">
        <div class="col-md-6">
            <label class="mt-3">BAPP/BAST</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dv_bapp" required parsley>
                <option value="-" {{old('dv_bapp', $kelengkapan->dvendor->dv_bapp) == '-' ? 'selected': ''}}>-</option>
                <option value="asli" {{old('dv_bapp', $kelengkapan->dvendor->dv_bapp) == 'asli' ? 'selected': ''}}>ASLI</option>
                <option value="copy" {{old('dv_bapp', $kelengkapan->dvendor->dv_bapp) == 'copy' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">LPBB</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dv_lppb" required parsley>
                <option value="-" {{old('dv_lppb', $kelengkapan->dvendor->dv_lppb) == '-' ? 'selected': ''}}>-</option>
                <option value="asli" {{old('dv_lppb', $kelengkapan->dvendor->dv_lppb) == 'asli' ? 'selected': ''}}>ASLI</option>
                <option value="copy" {{old('dv_lppb', $kelengkapan->dvendor->dv_lppb) == 'copy' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
    </div><!-- end row -->
    <div class="row mt-3">
        <div class="col-sm-12 text-end">
            <a href="{{ route('verifikator.edit',$kelengkapan->id) }}" type="button" onclick="form3()" class="btn btn-danger px-4">Previous</a> 
            <a href="#" type="button" onclick="form2()" class="btn btn-primary px-4">Next</a>      
        </div>
    </div>
</div>