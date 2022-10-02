<div class="row"  id="form-entry-6">
    <div class="row">
        <div class="col-md-6">
            <label class="mt-3">Catatan</label>
            <textarea type="text" name="catatan" id="" class="form-control" required parsley>{{$kelengkapan->keterangan->catatan}}</textarea>
        </div> <!-- end col -->
        <div class="col-md-6">
            <label class="mt-3">STATUS</label>
            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="status" required parsley>
                    <option value="Revisi" {{old('status', $kelengkapan->status) == 'Revisi' ? 'selected': ''}}>Minta Revisi</option>
                    <option value="Terverifikasi" {{old('status', $kelengkapan->status) == 'Terverifikasi' ? 'selected': ''}}>Terverifikasi</option>
                    <option value="Ditolak" {{old('status', $kelengkapan->status) == 'Ditolak' ? 'selected': ''}}>Tolak Ajuan</option>
            </select>
        </div> <!-- end col -->
        <div class="col-md-6">
      <table class="table table-borderless mt-0">
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
            <td><a href="javascript:;" class="btn btn-outline-danger deleteRow mt-3"> <span class="far fa-trash-alt me-1"></span>Delete</a></td>
        </tr>
        @endforeach
        </tbody>
      </table>
      <k> <a href="javascript:;" class="btn btn-outline-secondary addRow" >
        <span class="fas fa-plus"></span> Add </a></k>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-end">
            <a href="#" type="button" onclick="form5()" class="btn btn-danger px-4">Previous</a>
            <button type="submit"  class="btn btn-primary px-4">Simpan</button>
        </div>
    </div>
    <script>
    $('k').on('click','.addRow', function(){
        var tr = '<tr>'+
            '<td>'+
                '<input type="text" name="kekurangan[]" id="kekurangan" class="form-control" required parsley></td>'+
            '<td>'+  
                '<a href="javascript:;" class="btn btn-outline-danger deleteRow"> <span class="far fa-trash-alt me-1"></span>Delete</a></td>'+
        '</tr>';
    
        $('tbody').append(tr);
    });
    
    $('tbody').on('click','.deleteRow', function(){
        $(this).parent().parent().remove();
    });
    
    </script>
    
                        

