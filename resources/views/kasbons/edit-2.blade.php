<div class="row" id="form-entry-2">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row" >
                <label for="txtNameCard" class="col-lg-4 col-form-label">Nilai / DPP</label>
                <div class="col-lg-8">
                <div class="input-group">
                    <span class="input-group-text">Rp.</span>
                    <input  required parsley id="iddpp" type="number" class="form-control"  name="iddpp" onkeyup="add_number()" value="{{$kelengkapan->kasbon->iddpp}}" />
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
                        <input required parsley class="form-control input-numera" type="number" id="idppn" class="form-control"  name="idppn" value="{{$kelengkapan->kasbon->idppn}}" onkeyup="add_number()"/>
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
                            @if(old('pph', $kelengkapan->kasbon->id_jenis) == $pph->id)
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
                            <input required parsley class="form-control input-numera" type="number" id="idpph" class="form-control"  name="idpph" value="{{$kelengkapan->kasbon->idpph}}" onkeyup="add_number()"/>
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
                            <input class="form-control input-numer" id="total" name="total" disabled value="{{number_format($kelengkapan->kasbon->total)}}"/>
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
                        <input required parsley id="txtNameCard" name="sjn" type="text" class="form-control input-sj" data-parsley-minlength="17" value="{{$kelengkapan->kasbon->sjn}}">
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label  class="col-lg-4 col-form-label">Harga Jual Ke Customer</label>
                    <div class="col-lg-8">
                        <div class="input-group">
                            <span class="input-group-text">Rp.</span>
                            <input required parsley class="form-control input-num" name="harga_jual" value="{{$kelengkapan->kasbon->harga_jual}}" />
                        </div>
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtNameCard" class="col-lg-4 col-form-label">PO Vendor</label>
                    <div class="col-lg-8">
                        <input required parsley id="txtNameCard" name="po_vendor" type="text" class="form-control input-v" data-parsley-minlength="17" value="{{$kelengkapan->kasbon->po_vendor}}">
                    </div>
                </div><!--end form-group-->
            </div><!--end col-->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="txtNameCard" class="col-lg-4 col-form-label">PO Customer</label>
                    <div class="col-lg-8">
                        <input required parsley id="po_customer" name="po_customer" type="text" required parsley class="form-control" value="{{$kelengkapan->kasbon->po_customer}}">
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
      var second_number = parseFloat(document.getElementById("idppn").value);
      if (isNaN(second_number)) second_number = 0;
      var third_number = parseFloat(document.getElementById("idpph").value);
      if (isNaN(third_number)) third_number = 0;
      var result = first_number + second_number + third_number;
      document.getElementById("total").value = result;
    }
  </script>