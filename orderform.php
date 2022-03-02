

<html>
    <head>
    <style>
        .resulttbl{
            border: 1px solid;
        }
    </style>    
    <script src = "https://code.jquery.com/jquery-2.1.3.min.js" type = "text/javascript" ></script>
    <script type="text/javascript">

        function addrow()
        {
            var row = $('[name="numrows"]:last').val();
            var i = parseInt(row)+1;;
            var table = document.getElementById("ordertable");
            var row = table.insertRow(i);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            cell1.innerHTML = '<input  type="hidden" name="numrows" value="'+i+'"/><button onclick="deleteRow(this)">x</button><input type="number" name="idval'+i+'" id="idval'+i+'" value="123" min="0"/>';
            cell2.innerHTML = '<input type="text" name="product'+i+'" id="product'+i+'" value="sample product"/>';
            cell3.innerHTML = '<select name="category'+i+'" id="category'+i+'"><option value="Mobile">Mobile</option></select>';
            cell4.innerHTML = '<input type="number" name="quantity'+i+'" id="quantity'+i+'" value="2" min="0"/>';
            cell5.innerHTML = '<label>Availability:</label> <input type="radio" name="availability'+i+'" id="yes'+i+'" value="Yes"/><label for="yes'+i+'">Yes</label><input type="radio" name="availability'+i+'" id="no'+i+'" value="No"/><label for="no'+i+'">No</label>';
            cell6.innerHTML = '<label>Discounts:</label> <input type="checkbox" name="discounts['+i+'][]" id="hdfcbank'+i+'" value="HDFC Bank"/> <label for="hdfcbank'+i+'">HDFC Bank</label><input type="checkbox" name="discounts['+i+'][]" id="sbibank'+i+'" value="SBI Bank" />  <label for="sbibank'+i+'">SBI Bank</label><input type="checkbox" name="discounts['+i+'][]" id="mastercard'+i+'" value="Master Card"/>  <label for="mastercard'+i+'">Master Card</label>';
            
        }

        function deleteRow(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("ordertable").deleteRow(i);
        }

        function resettable()
        {
            $('#orderfrm').trigger("reset");
        }

    </script>

    </head>
    <body>
        <center>
        <h1>Shopping List</h1>
        <form id="orderfrm" method="POST" action="orderform.php" enctype="multipart/form-data">
            <table id="ordertable">
                <?php 
                for($i=0;$i<=3;$i++)
                {
                    echo '<tr>
                            <input  type="hidden" name="numrows" value="'.$i.'"/>
                            <td><button onclick="deleteRow(this)">x</button><input type="number" name="idval'.$i.'" id="idval'.$i.'" value="123" min="0"/></td>
                            <td><input type="text" name="product'.$i.'" id="product'.$i.'" value="sample product"/></td>
                            <td>
                                <select name="category'.$i.'" id="category'.$i.'">
                                    <option value="Mobile">Mobile</option>                        
                                </select>
                            </td>
                            <td><input type="number" name="quantity'.$i.'" id="quantity'.$i.'" value="2" min="0"/></td>
                            <td>
                                <label>Availability:</label>
                                <input type="radio" name="availability'.$i.'" id="yes'.$i.'" value="Yes"/><label for="yes'.$i.'">Yes</label>
                                <input type="radio" name="availability'.$i.'" id="no'.$i.'" value="No"/><label for="no'.$i.'">No</label>
                            </td>
                            <td>
                                <label>Discounts:</label>
                                <input type="checkbox" name="discounts['.$i.'][]" id="hdfcbank'.$i.'" value="HDFC Bank"/> <label for="hdfcbank'.$i.'">HDFC Bank</label>
                                <input type="checkbox" name="discounts['.$i.'][]" id="sbibank'.$i.'" value="SBI Bank" />  <label for="sbibank'.$i.'">SBI Bank</label>
                                <input type="checkbox" name="discounts['.$i.'][]" id="mastercard'.$i.'" value="Master Card"/>  <label for="mastercard'.$i.'">Master Card</label>
                            </td>
                    </tr>';
            } ?>
        </table>
        <br></br> 
        <input type="button" value="Add" onclick="addrow()"/>
        <input type="submit"  name="submit" value="Submit" />
        <input type="button" value="Reset" onclick="resettable()"/>

        </form>
        </center>
    </body>

</html>


<?php
if(isset($_POST['submit']))
{
    echo '<center><table class="resulttbl">';
    echo '<tr class="resulttbl">
            <th class="resulttbl">ID</td>
            <th class="resulttbl">Product</td>
            <th class="resulttbl">Category</td>
            <th class="resulttbl">Qunatity</td>
            <th class="resulttbl">Availability</td>
            <th class="resulttbl">Discounts</td>
          </tr>';  
    $discount_arr = $_POST['discounts'];

   for($i=0;$i<=$_POST['numrows'];$i++)
    {
        if($_POST['idval'.$i] !='')
        {
            $availability = $_POST['availability'.$i] ? $_POST['availability'.$i]  : 'Yes';     

            $discounts = $discount_arr[$i];
            if(count($discounts)>0)
            {            
                $discount = implode(',',$discounts);
            }
            else
                $discount = 'NA';    
        
        
            echo ' <tr>
                    <td class="resulttbl">'.$_POST['idval'.$i].'</td>
                    <td class="resulttbl">'.$_POST['product'.$i].'</td>
                    <td class="resulttbl">'.$_POST['category'.$i].'</td>
                    <td class="resulttbl">'.$_POST['quantity'.$i].'</td>
                    <td class="resulttbl">'.$availability.'</td>
                    <td class="resulttbl">'.$discount.'</td>
                </tr>';   
        }        
    }
    echo '</table></center>';

}
?>





