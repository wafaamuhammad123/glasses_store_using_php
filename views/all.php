<?php
//pagination
//fl url brmelo next..wlw mwgoda hakhod el val bt3ha  wlw mesh mwgoda htb2a 0

$current_index = isset($_GET["next"]) && is_numeric($_GET["next"])? (int) $_GET["next"] : 0 ;
$next_index = ($current_index + __RECORDS_PER_PAGE__< 16) ? $current_index + __RECORDS_PER_PAGE__ :0; ;
$previous_index = ($current_index - __RECORDS_PER_PAGE__ > 0) ? $current_index - __RECORDS_PER_PAGE__ :0; 
$items = $db->Get_all_records_paginated(array () , $current_index);
?>

<div class="container">
<table >

<tr>
    <th>
        Item Id
    </th>

    <th>
        Name
    </th>

    <th>
        Details
    </th>
</tr>


<div class="items">
<?php
//this is how i do transfer from all products pg to the one product pg


// $index= $current_index;
foreach ($items as $item){

    echo "<tr><td>". $item["id"]."</td>";
      echo "<td>". $item["product_name"]."</td>";
        echo "<td> <a href ='".$_SERVER["PHP_SELF"]."?id=".$item["id"] ."'> view the item </a> </td> </tr>";
    //lma ados 3la more hitb3t fl url pk value
    // $index ++ ; 
            
}
?>





</table>

<button style="margin-left:34%">  <a href ="<?php echo $_SERVER["PHP_SELF"] . "?next=" .$next_index; ?>"  >next >> </a>

<button > <a href ="<?php echo $_SERVER["PHP_SELF"] . "?next=" .$previous_index; ?>" > << prev </a>
</div>




<html>
    <style>
        .container{
            
            background-color: #ddb0b0;
  margin-left: 350px;
  margin-right: 450px;
  padding: 20px;
  margin-top: 4%;

        }

table{
    line-height: 2;
  padding: 2px;
    padding-left: 2px;
  padding-left: 22%;
  font-size: 22px;


}

button{

background-color: #fff;
width: 120px;
height: 40px;
color: #801e1e;
font-size: 20px;
border-radius: 20px;

}










 

