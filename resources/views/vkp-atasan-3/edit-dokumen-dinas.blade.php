<div class="row" id="form-entry-5">
    <div class="row">
        <div class="col-md-6">
            <label class="mt-3">INVOICE / TICKET TRANSPORT</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dd_tickettransport" required parsley>
                <option value="-" {{old('dd_tickettransport', $pertanggungan->kasbon->kelengkapan->ddinas->dd_tickettransport) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dd_tickettransport', $pertanggungan->kasbon->kelengkapan->ddinas->dd_tickettransport) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dd_tickettransport', $pertanggungan->kasbon->kelengkapan->ddinas->dd_tickettransport) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">NOTA MAKAN</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dd_notamakan" required parsley>
                <option value="-" {{old('dd_notamakan', $pertanggungan->kasbon->kelengkapan->ddinas->dd_notamakan) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dd_notamakan', $pertanggungan->kasbon->kelengkapan->ddinas->dd_notamakan) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dd_notamakan', $pertanggungan->kasbon->kelengkapan->ddinas->dd_notamakan) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">BOARDING PASS</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dd_boardingpass" required parsley>
                <option value="-" {{old('dd_boardingpass', $pertanggungan->kasbon->kelengkapan->ddinas->dd_boardingpass) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dd_boardingpass', $pertanggungan->kasbon->kelengkapan->ddinas->dd_boardingpass) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dd_boardingpass', $pertanggungan->kasbon->kelengkapan->ddinas->dd_boardingpass) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">NOTA PENGINAPAN</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dd_notapenginapan" required parsley>
                <option value="-" {{old('dd_notapenginapan', $pertanggungan->kasbon->kelengkapan->ddinas->dd_notapenginapan) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dd_notapenginapan', $pertanggungan->kasbon->kelengkapan->ddinas->dd_notapenginapan) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dd_notapenginapan', $pertanggungan->kasbon->kelengkapan->ddinas->dd_notapenginapan) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">SPPD</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="dd_sppd" required parsley>
                <option value="-" {{old('dd_sppd', $pertanggungan->kasbon->kelengkapan->ddinas->dd_sppd) == '-' ? 'selected': ''}}>-</option>
                <option value="ASLI" {{old('dd_sppd', $pertanggungan->kasbon->kelengkapan->ddinas->dd_sppd) == 'ASLI' ? 'selected': ''}}>ASLI</option>
                <option value="COPY" {{old('dd_sppd', $pertanggungan->kasbon->kelengkapan->ddinas->dd_sppd) == 'COPY' ? 'selected': ''}}>COPY</option>
            </select>
        </div> <!-- end col -->
    </div><!-- end row -->
    <div class="row mt-3">
        <div class="col-sm-12 text-end">
            <a href="#" type="button" onclick="form4()" class="btn btn-danger px-4">Previous</a>
            <a href="#" type="button" onclick="form6()" class="btn btn-primary px-4">Next</a>
        </div>
    </div>
</div>