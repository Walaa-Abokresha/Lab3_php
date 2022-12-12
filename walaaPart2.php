<?php


$students = [
    ['name' => 'Alaa','email' => 'ahmed@test.com','status' => 'Science'],

    ['name' => 'Shamy','email' => 'ali@test.com', 'status' => 'AAST'],

    ['name' => 'Youssef', 'email' => 'basem@test.com','status' => 'AAST'],

    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'Science'],

    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'AAST'],
           ];
        //    foreach($students as $row) 
        //    {
        //     if($row['status']=='Science') 
        //     { echo '<style type="text/css"> {color:red;} </style>';}
        //     }

            foreach($students as $row) {
                if($row['status']=='Science'){
                    echo "<tr  class= science style='color:red' >";
                }else{
            echo "<tr>";
                }}

?>
 <html>
<head lang="en">
        <link rel="stylesheet" href="lab3.css">
        <meta charset="UTF-8"/>
        <title> PHP class  </title>
        <meta name="description" content="Application"/>
        <style>
        .science{color:red};
        </style>
 </head>  
    <body>
     <table width="20%" >
        <thead>
            <h2 style="color: black;" > Application name: PHP class registration </h2>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Status</th>
            </tr> 
          
            <tr class ="science">
                <td> <?php echo $students[0]['name']; ?> </td>
                <td> <?php echo $students[0]['email']; ?> </td>
                <td style="color:red;" > <?php echo $students[0]['status']; ?> </td>
            </tr>
         
            <tr>
                <td> <?php echo $students[1]['name']; ?> </td>
                <td> <?php echo $students[1]['email']; ?> </td>
                <td> <?php echo $students[1]['status']; ?> </td>
            </tr>

            <tr>
                <td> <?php echo $students[2]['name']; ?> </td>
                <td> <?php echo $students[2]['email']; ?> </td>
                <td> <?php echo $students[2]['status']; ?> </td>
            </tr>

            <tr class ="science">
                <td> <?php echo $students[3]['name']; ?> </td>
                <td> <?php echo $students[3]['email']; ?> </td>
                <td style="color:red;" > <?php echo $students[3]['status']; ?> </td>
            </tr>

            <tr>
                <td> <?php echo $students[4]['name']; ?> </td>
                <td> <?php echo $students[4]['email']; ?> </td>
                <td> <?php echo $students[4]['status']; ?> </td>
            </tr>
     </table>

</body>
<html> 
