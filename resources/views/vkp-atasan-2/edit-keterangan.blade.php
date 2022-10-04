<div class="row"  id="form-entry-6">
    <div class="row">
        <div class="col-md-6">
            <label class="mt-3">Catatan</label>
            <textarea type="text" name="catatan" id="" class="form-control" required parsley>{{$pertanggungan->kasbon->kelengkapan->keterangan->catatan}}</textarea>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">STATUS</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="status" required parsley>
                @if($pertanggungan->verifikasipertanggungan->vkp == "Dalam Proses")
                <option value="" disabled selected hidden>Pilih</option>
                @endif
                    <option value="Revisi" {{old('status', $pertanggungan->verifikasipertanggungan->vkp) == 'Revisi' ? 'selected': ''}}>Minta Revisi</option>
                    <option value="Terverifikasi" {{old('status', $pertanggungan->verifikasipertanggungan->vkp) == 'Terverifikasi' ? 'selected': ''}}>Terverifikasi</option>
                    <option value="Ditolak" {{old('status', $pertanggungan->verifikasipertanggungan->vkp) == 'Ditolak' ? 'selected': ''}}>Tolak Ajuan</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
      <table class="table table-borderless mt-0" cellspacing="0">
        <thead>
          <tr>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($detail as $detail)
          <tr>
            <td>
                <label class="mb-1">Kekurangan</label>
                <input type="text" name="kekurangan[]" id="kekurangan" class="form-control" value="{{$detail->kekurangan}}" required parsley>
            </td>
            <td>
                <label class="mb-1">Tgl Kelengkapan</label>
                <input type="date" name="tgl_kelengkapan[]" id="" class="form-control"  value="{{$detail->tgl_kelengkapan}}">
            </td>
            <td><a href="javascript:;" class="btn btn-sm btn-outline-danger deleteRow mt-3">Delete</a></td>
        </tr>
        @endforeach
        </tbody>
      </table>
      <k> <a href="javascript:;" class="btn btn-outline-secondary btn-sm addRow" >
        <span class="fas fa-plus"></span> Add </a></k>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-end">
            <a href="#" type="button" onclick="form1()" class="btn btn-danger px-4">Previous</a>
            <button type="submit"  class="btn btn-primary px-4">Simpan</button>
        </div>
    </div>
    <script>
    $('k').on('click','.addRow', function(){
        var tr = '<tr>'+
            '<td>'+
                '<label class="mb-1">Kekurangan</label>'+
                '<input type="text" name="kekurangan[]" id="kekurangan" class="form-control" required parsley></td>'+
                '<td>'+
                '<label class="mb-1">Tgl Kelengkapan</label>'+
                '<input type="date" name="tgl_kelengkapan[]" id="" class="form-control"></td>'+
            '<td>'+  
                '<a href="javascript:;" class="btn btn-sm btn-outline-danger deleteRow mt-3"> <span class="far fa-trash-alt me-1"></span>Delete</a></td>'+
        '</tr>';
    
        $('tbody').append(tr);
    });
    
    $('tbody').on('click','.deleteRow', function(){
        $(this).parent().parent().remove();
    });
    
    </script>
    
                        

