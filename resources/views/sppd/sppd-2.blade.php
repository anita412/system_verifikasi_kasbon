<div class="row" id="form-entry-2">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtNameCard" class="col-lg-4 col-form-label">No</label>
                <div class="col-lg-8">
                    <input  required parsley type="text" class="form-control" name ="no">
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtNameCard" class="col-lg-4 col-form-label">Nama</label>
                <div class="col-lg-8">
                    <input  required parsley type="text" class="form-control" name ="nama">
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtNameCard" class="col-lg-4 col-form-label">NIP</label>
                <div class="col-lg-8">
                    <input  required parsley type="text" class="form-control" name ="nip">
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtNameCard" class="col-lg-4 col-form-label">Departemen</label>
                <div class="col-lg-8">
                    <input  required parsley type="text" class="form-control" name ="departemen">
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtNameCard" class="col-lg-4 col-form-label">Tujuan/Instansi</label>
                <div class="col-lg-8">
                    <input  required parsley type="text" class="form-control" name ="tujuan">
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6 ">
            <div class="form-group row">
                <label for="txtNameCard" class="col-lg-4 col-form-label">No. Kontrak</label>
                <div class="col-lg-8">
                    <input required parsley id="txtNameCard" name="no_kontrak" type="text" class="form-control input-nok" data-parsley-minlength="10"> 
                    <script>
                        var cleave = new Cleave('.input-nok', {
                        prefix: 'KA',
                        delimiter: '/',
                        blocks: [3, 1, 2, 2],
                        uppercase: true
                    });
                    </script>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtNameCard" class="col-lg-4 col-form-label">Kasbon Dinas</label>
                <div class="col-lg-8">
                    <input required parsley id="txtNameCard" name="kasbon_dinas" type="text" class="form-control input-koi" data-parsley-minlength="10">
                    <script>
                        var cleave = new Cleave('.input-koi', {
                        prefix: 'PPK',
                        delimiter: '/',
                        blocks: [3, 1, 2, 2],
                        uppercase: true
                    });
                    </script>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
    </div>
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Tanggal Berangkat</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="tglmasuk" type="date" value="" id="example-date-input">
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Tanggal Pulang</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="tglmasuk" type="date" value="" id="example-date-input">
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtNameCard" class="col-lg-4 col-form-label">Hari</label>
                    <div class="col-lg-8">
                        <input  required parsley type="text" class="form-control" name ="hari">
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtNameCard" class="col-lg-4 col-form-label">Kurs</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="kurs" type="text" value="" disabled>
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtNameCard" class="col-lg-4 col-form-label">Rate</label>
                    <div class="col-lg-8">
                        <input required parsley class="form-control input-rate" name="rate" />
                        <script>
                            var cleaveNumeral = new Cleave('.input-rate', {
                            numeral: true,
                            numeralThousandsGroupStyle: 'thousand'
                            });
                        </script>
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtNameCard" class="col-lg-4 col-form-label">Uang Lumpsum</label>
                    <div class="col-lg-8">
                        <input required parsley class="form-control input-rate" name="uang_lumpsum" />
                        <script>
                            var cleaveNumeral = new Cleave('.input-lumpsum', {
                            numeral: true,
                            numeralThousandsGroupStyle: 'thousand'
                            });
                        </script>
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
        </div>
            <div class="row">
                    <div class="col-sm-12 text-end">
                        <a href="#" type="button" onclick="form1()" class="btn btn-danger px-4">Previous</a> 
                        <button  type="submit"  class="btn btn-primary px-4">Simpan</button>      
                    </div>
                </div>
        </div>