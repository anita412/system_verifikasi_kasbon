<div class="row" id="form-entry-2">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row" >
                <label for="txtNameCard" class="col-lg-4 col-form-label">Nilai / DPP</label>
                <div class="col-lg-8">
                <div class="input-group">
                    <span class="input-group-text">Rp.</span>
                    <input  required parsley id="iddpp" type="number" class="form-control"  name="iddpp" onkeyup="add_number()" value="{{$kasbon->iddpp}}" />
                    </div>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="col-md-6">
            <div class="form-group row">
                <label for="txtNameCard" class="col-lg-4 col-form-label">PPN</label>
                <div class="col-lg-8">
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                        <input required parsley class="form-control" type="number" id="idppn" class="form-control"  name="idppn" value="{{$kasbon->idppn}}" disabled/>
                    </div>
                    </div>
                </div>
            </div><!--end form-group-->
        </div><!--end col-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtNameCard" class="col-lg-4 col-form-label">PPH</label>
                    <div class="col-lg-4">
                        <select required parsley class="form-select" id="floatingSelect" aria-label="Floating label select example" value="id_pph" name="id_pph">
                            <option value="" disabled selected hidden>Pilih PPH</option>
                            @foreach ($pph as $pph)
                            @if(old('pph', $kasbon->id_jenis) == $pph->id)
                            <option value="{{$pph->id}}" selected>{{$pph->name}}</option>
                            @else
                            <option  value="{{$pph->id}}" >{{$pph->name}}</option>
                            @endif
                            @endforeach
                            </select>
                    </div>
                    <div class="col-lg-4">
                        <div class="input-group">
                            <span class="input-group-text">Rp.</span>
                            <input required parsley class="form-control input-numera" type="number" id="idpph" class="form-control"  name="idpph" value="{{$kasbon->idpph}}" onkeyup="add_number()"/>
                        </div>
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtNameCard" class="col-lg-4 col-form-label">Nominal Kasbon</label>
                    <div class="col-lg-8">
                        <div class="input-group">
                            <span class="input-group-text">Rp.</span>
                            <input class="form-control input-numer" id="total" name="total" disabled value="{{number_format($kasbon->total)}}"/>
                        </div>
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtNameCard" class="col-lg-4 col-form-label">SJN</label>
                    <div class="col-lg-8">
                        <input  id="sjn" name="sjn" type="text" class="form-control input-sj" data-parsley-minlength="17" value="{{$kasbon->sjn}}">
                        {{-- <script>
                            var cleave = new Cleave('.input-sj', {
                            prefix: 'SJIMST',
                            delimiter: '/',
                            blocks: [6, 4, 5],
                            uppercase: true
                        });
                        </script> --}}
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label  class="col-lg-4 col-form-label">Harga Jual Ke Customer</label>
                    <div class="col-lg-8">
                        <div class="input-group">
                            <span class="input-group-text">Rp.</span>
                            <input  class="form-control input-num" name="harga_jual" id="harga_jual" value="{{$kasbon->harga_jual}}" />
                        </div>
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtNameCard" class="col-lg-4 col-form-label">PO Vendor</label>
                    <div class="col-lg-8">
                        <input required parsley id="txtNameCard" name="po_vendor" type="text" class="form-control input-v" data-parsley-minlength="17" value="{{$kasbon->po_vendor}}">
                        {{-- <script>
                            var cleave = new Cleave('.input-v', {
                            prefix: 'POIMST',
                            delimiter: '/',
                            blocks: [6, 4, 5],
                            uppercase: true
                        });
                        </script> --}}
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtNameCard" class="col-lg-4 col-form-label">PO Customer</label>
                    <div class="col-lg-8">
                        <input required parsley id="po_customer" name="po_customer" type="text" required parsley class="form-control" value="{{$kasbon->po_customer}}">
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtNameCard" class="col-lg-4 col-form-label">Nama Vendor</label>
                    <div class="col-lg-8">
                        <select class="select2 form-control" id="tags" name="namavendor">
                            <option value="{{$kasbon->namavendor}}">{{$kasbon->namavendor}}</option>
                            @foreach ($namavendor as $namavendor)
                            <option  value="{{$namavendor->name}}">{{$namavendor->name}}</option>
                            @endforeach
                          </select>
                          <script>
                          $("#tags").select2({
                            tags: true
                          });
                        </script>
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            {{-- <div class="col-md-6">
                <div class="form-group row POC">
                    <label for="txtNameCard" class="col-lg-4 col-form-label">Tanggal Jatuh Tempo</label>
                    <div class="col-lg-4">
                        <input id="txtNameCard"  type="number" class="form-control" name="haritempo" value="{{$kasbon->haritempo}}">
                    </div>
                    <div class="col-lg-4">
                        <input required parsley-type="text" class="form-control"  type="date"  id="example-date-input" name="tgltempo" value="{{$kasbon->tgltempo->format('Y-m-d')}}">    
                    </div>
                    </div><!--end form-group-->
                </div><!--end col--> --}}
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
                    <label for="txtNameCard" class="col-lg-4 col-form-label">No. PI (FOCUS)</label>
                    <div class="col-lg-8">
                        <input  id="nopi" name="nopi" type="text" class="form-control input-pi" data-parsley-minlength="17" value="{{$kasbon->nopi}}">
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtNameCard" class="col-lg-4 col-form-label">Perkiraan Barang Datang</label>
                    <div class="col-lg-8">
                        <input required parsley id="txtNameCard" name="barang_datang" type="date" class="form-control" required parsley value="{{$kasbon->barang_datang->format('Y-m-d')}}" disabled>
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
           
        </div>
        <div class="row">
            <div class="col-sm-12 text-end">
                <a href="#" type="button" onclick="form1()" class="btn btn-danger px-4">Previous</a> 
                <a href="#" type="button" onclick="form3()" class="btn btn-primary px-4">Next</a>      
            </div>
        </div>
</div>

<script>
    function add_number() {
      var first_number = parseFloat(document.getElementById("iddpp").value);
      if (isNaN(first_number)) first_number = 0;
      var third_number = parseFloat(document.getElementById("idpph").value);
      if (isNaN(third_number)) third_number = 0;
      var ppn = (11/100)*first_number;
      document.getElementById("idppn").value = ppn;
      var result = first_number + ((11/100)*first_number) - third_number;
      document.getElementById("total").value = result;
    }
  </script>