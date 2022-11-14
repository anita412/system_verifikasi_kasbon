
<div class="row" id="form-entry-1">
    <div class="row">
        <div class="col-md-6">
            <label class="">INVOICE</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dv_invoice" required parsley>
                    <option value="-" {{old('dv_invoice', $pertanggungan->kasbon->kelengkapan->dvendor->dv_invoice) == '-' ? 'selected': ''}}>-</option>
                    <option value="ASLI" {{old('dv_invoice', $pertanggungan->kasbon->kelengkapan->dvendor->dv_invoice) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                    <option value="COPY" {{old('dv_invoice', $pertanggungan->kasbon->kelengkapan->dvendor->dv_invoice) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="">KWITANSI</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dv_kwitansi" required parsley>
                <option value="-" {{old('dv_kwitansi', $pertanggungan->kasbon->kelengkapan->dvendor->dv_kwitansi) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dv_kwitansi', $pertanggungan->kasbon->kelengkapan->dvendor->dv_kwitansi) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dv_kwitansi', $pertanggungan->kasbon->kelengkapan->dvendor->dv_kwitansi) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
    </div><!-- end row -->
    <div class="row">
        <div class="col-md-6">
            <label class="mt-3">PO VENDOR</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dv_povendor" required parsley>
                <option value="-" {{old('dv_povendor', $pertanggungan->kasbon->kelengkapan->dvendor->dv_povendor) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dv_povendor', $pertanggungan->kasbon->kelengkapan->dvendor->dv_povendor) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dv_povendor', $pertanggungan->kasbon->kelengkapan->dvendor->dv_povendor) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">SJN VENDOR</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dv_sjnvendor" required parsley>
                <option value="-" {{old('dv_sjnvendor', $pertanggungan->kasbon->kelengkapan->dvendor->dv_sjnvendor) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dv_sjnvendor', $pertanggungan->kasbon->kelengkapan->dvendor->dv_sjnvendor) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dv_sjnvendor', $pertanggungan->kasbon->kelengkapan->dvendor->dv_sjnvendor) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
    </div><!-- end row -->
    <div class="row">
        <div class="col-md-6">
            <label class="mt-3">PACKING LIST</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dv_packinglist" required parsley>
                <option value="-" {{old('dv_packinglist', $pertanggungan->kasbon->kelengkapan->dvendor->dv_packcinglist) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dv_packinglist', $pertanggungan->kasbon->kelengkapan->dvendor->dv_packcinglist) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dv_packinglist', $pertanggungan->kasbon->kelengkapan->dvendor->dv_packcinglist) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">TEST REPORT</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dv_testreport" required parsley>
                <option value="-" {{old('dv_testreport', $pertanggungan->kasbon->kelengkapan->dvendor->dv_testreport) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dv_testreport', $pertanggungan->kasbon->kelengkapan->dvendor->dv_testreport) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dv_testreport', $pertanggungan->kasbon->kelengkapan->dvendor->dv_testreport) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
    </div><!-- end row -->
    <div class="row">
        <div class="col-md-6">
            <label class="mt-3">BAPP/BAST</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dv_bapp" required parsley>
                <option value="-" {{old('dv_bapp', $pertanggungan->kasbon->kelengkapan->dvendor->dv_bapp) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dv_bapp', $pertanggungan->kasbon->kelengkapan->dvendor->dv_bapp) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dv_bapp', $pertanggungan->kasbon->kelengkapan->dvendor->dv_bapp) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">LPBB</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dv_lppb" required parsley>
                <option value="-" {{old('dv_lppb', $pertanggungan->kasbon->kelengkapan->dvendor->dv_lppb) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dv_lppb', $pertanggungan->kasbon->kelengkapan->dvendor->dv_lppb) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dv_lppb', $pertanggungan->kasbon->kelengkapan->dvendor->dv_lppb) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
    </div><!-- end row -->
    <div class="row mt-3">
        <div class="col-sm-12 text-end">
            <a  type="button" onclick="form0()" class="btn btn-danger px-4">Previous</a> 
            <a href="#" type="button" onclick="form2()" class="btn btn-primary px-4">Next</a>      
        </div>
    </div>
</div>