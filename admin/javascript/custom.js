/**
 * Created by deepakc on 14/04/15.
 */

var rowNumber = 1;

function delete_currentissue(id)
{

    var r = confirm("Are you sure want to delete?");
    if(r == true)
    {

        $('.hidden_div').load('delete_currentissue.php','id='+id);

    }

}


function delete_editorialboard(id)
{
    var r = confirm("Are you sure want to delete?");
    if(r == true)
    {

       $('.hidden_div').load('delete_editorialboard.php','id='+id);

    }

}

function delete_client(id)
{
    var r = confirm("Are you sure want to delete?");
    if(r == true)
    {

       $('.hidden_div').load('delete_client.php','id='+id);

    }

}

function edit_category(id)
{

       $('.hidden_div').load('edit_category.php','id='+id);

}

function add_product(tableID)
{


    var table = document.getElementById(tableID);

    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);

//    var cell1 = row.insertCell(0);
//    var element1 = document.createElement("input");
//    element1.type = "checkbox";
//    element1.name="chkbox[]";
//    cell1.appendChild(element1);

    var cell1 = row.insertCell(0);
    cell1.innerHTML = "<input type='text'  name='qty[]' placeholder='Qty' class='form-control'>";

    var cell2 = row.insertCell(1);
    cell2.innerHTML = "<input type='text' name='product_description[]' placeholder='Product Description' class='form-control'>";

    var cell3 = row.insertCell(2);
    cell3.innerHTML = "<input type='text'  name='amount_each[]' placeholder='Amount Each' class='form-control'/>";

    var cell4 = row.insertCell(3);
    cell4.innerHTML =  "<input type='text'  name='amount[]' placeholder='Amount' class='form-control'/>";

    var cell5 = row.insertCell(4);
    cell5.innerHTML =  "<span onclick=del_product("+rowCount+")>Remove</span>";

    //alert(rowCount);
        $('#row_count').val(rowCount);

}

function del_product(row_id)
{

    dataTable.deleteRow(row_id);

    var rowCount = dataTable.rows.length;
    rowCount--;
    alert(rowCount);
    $('#row_count').val(rowCount);
}




