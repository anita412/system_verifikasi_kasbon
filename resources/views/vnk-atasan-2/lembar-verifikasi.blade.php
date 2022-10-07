<div class="row"  id="form-entry-3">
    <div>

            <table class="table  table-bordered table-sm t1">
                <tbody>
                <tr>
                    <th style="width: 70%">Dokumen</th>
                    <th>Quantity</th>
                    <th style="width: 0%" class="text-center"></th>
                </tr>
                <tr class="item">
                    <td><input name="dokumen[]" class="form-control" required parsley/></td></td>
                    <td><input name="nominal[]" class="qnty amount form-control" value="" required parsley /></td>
                    <td class="text-end">
                        <button type="button" name="remove"  class="btn btn-sm btn-soft-danger btn-circle me-2" onclick="rowElim(this);"><i class="dripicons-trash" aria-hidden="true"></i></button></td>
                    
                    </tr>
                    <tfoot>
                        <tr>
                            <th class="text-center"><strong>TOTAL NOMINAL</strong></th>
                            <th><input id="netto" readonly="readonly" class="form-control"  name="total" type="text" value=""></th>
                            <th></th>
                        </tr>
                    </tbody>
                        </tfoot>
            </table>
            <a class="btn btn-success btn-sm addRow">Add New Row</a>
            <br />
{{-- 
            <input type="submit" value="Submit">
            <input type="reset" value="Reset"> --}}
            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <a href="#" type="button" onclick="form1()" class="btn btn-primary px-4">Previous</a>      
                    <a href="#" type="button" onclick="form3()" class="btn btn-primary px-4">Next</a>  
                </div>
            </div>
    </div>
    

<script>

$(document).ready(function () {

    // $('k').on('click','.addRow', function(){
    //     var tr = '<tr>'+
    //         '<td>'+
    //             '<label class="mb-1">Catatan</label>'+
    //             '<input type="text" name="kekurangan[]" id="kekurangan" class="form-control" required parsley></td>'+
    //         '<td>'+  
    //             '<a href="javascript:;" class="btn btn-outline-danger btn-sm deleteRow mt-3"> <span class="far fa-trash-alt me-1"></span>Delete</a></td>'+
    //     '</tr>';
    
    //     $('tbody').append(tr);
    // });
// function for adding a new row
var r = 1;
$('.addRow').click(function () {
    r++;
    $('.t1').append('<tr id="row' + r + '" class="item"><td><input class="form-control" name="dokumen[]" required parsley /></td><td><input  required parsley class="qnty amount form-control" name="nominal[]" /></td><td class="text-end"></button><button type="button" name="remove" id="' + r + '" class="btn btn-sm btn-soft-danger btn-circle me-2" onclick="rowElim(this);"><i class="dripicons-trash" aria-hidden="true"></i></button></td></tr>');
});
// remove row when X is clicked
$(document).on('click', '.btn_remove', function () {
    var button_id = $(this).attr("id");
    $('#row' + button_id + '').remove();
});
// calculate everything
$(document).on("keyup", ".amount", calcAll);
//$(".amount").on("change", calcAll);
});

// function for calculating everything
function calcAll() {
// calculate total for one row

$(".item").each(function () {
    var qnty = 0;
   
    if (!isNaN(parseFloat($(this).find(".qnty").val()))) {
        qnty = parseFloat($(this).find(".qnty").val());
    }

    total = qnty;
    $(this).find(".qnty").val(total);
});

// sum all totals
var sum = 0;
$(".qnty").each(function () {
    if (!isNaN(this.value) && this.value.length != 0) {
        sum += parseFloat(this.value);
    }
});
// show values in netto, steuer, brutto fields
$("#netto").val(sum.toFixed());
}
    </script>

    
</div>
    
                        

