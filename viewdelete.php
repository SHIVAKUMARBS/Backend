<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <style>
            table, th, td {
           border: 1px solid black;
           text-align: center;
}
            
        </style>
    </head>
    <body>
        <table style="width:100%">
  <tr>
    <th>1</th>
    <th>2</th> 
    <th>3</th>
    <th>4</th>
    <th>5</th> 
    <th>6</th>
    <th>7</th>
    <th>8</th> 
    <th>9</th>
    <th>10</th>
    <th>11</th>
  </tr>
  <?php
  //create connection
 $connect=mysqli_connect('localhost','root','','db_temp');
	
//check connection
 if(mysqli_connect_errno($connect))
 {
	echo 'Failed to connect to database: '.mysqli_connect_error();
}
else
	echo 'Connected Successfully!!';
						
$result=mysqli_query($connect,"select * from roombooking");

while($row=mysqli_fetch_array($result))
{
          $id=$row['Id'];
          $emp_id=$row['emp_id'];
          $room_id=$row['room_id'];
          $event=$row['event'];
          $booking_date=$row['booking_date'];
          $entry_time=$row['entry_time'];
          $exit_time=$row['exit_time'];
          $created_on=$row['created_on'];
          $dnt=$row['dnt'];

   echo "<tr data-id='$id'><td><button class='edit' data-id='$id'>Edit</button></td>"

           . "<td class='data'>
            <div data-id='$id'>$id</div>
          </td><td class='data'>
            <div data-id='$id'>$emp_id</div>
          </td><td class='data'>
            <div data-id='$id'>$room_id</div>
          </td><td class='data'>
            <div data-id='$id'>$event</div>
          </td>"

           . "<td class='data'>
            <div data-id='$id'>$id</div></td>
            <td class='data'><div data-id='$id'>$emp_id</div></td>
            <td class='data'><div data-id='$id'>$room_id</div></td>
            <td class='data'><div data-id='$id'>$event</div></td>"

           . "<td class='data'><div data-id='$id'>$booking_date</div></td>
           <td class='data'><div data-id='$id'>$entry_time</div></td>"

           . "<td class='data'> 
           <div data-id='$id'> $exit_time </div> </td>
           <td class='data'> <div data-id='$id'> $created_on </div> </td> 
           <td class='data'><div data-id='$id'>$dnt</div></td>"

           . "<td> <button class='delete' data-id='$id'> Delete </button> </td>"
           . "</tr> ";
          
 }  
  ?>
  
</table>
        <script>
        $(document).ready(function (){
          $('.delete').on('click',function (){
             var id=$(this).data('id');             
             $("div[data-id='" + id +"']").hide();
             
          });
          $('.edit').on('click',function (){
             var id=$(this).data('id');             
             $("div[data-id='" + id +"']").show();
          });
        });
        
        </script>
        
    </body>
</html>