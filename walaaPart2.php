<?php

$students = [ 
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'Science'], 
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'AAST'], 
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'AAST'], 
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'Science'], 
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'AAST'], 
];

echo '<table width="50%;" border="1px;">';

    echo '<h2 style="color: green;" >' .'Application name: PHP class registration' .'</h2>';
    echo '<tr>';
        echo '<th>'. 'Name' .'</th>';
        echo '<th>' .'E-mail'. '</th>';
        echo '<th>'. 'Status' .'</th>';
    echo '</tr>'; 

  

        foreach($students as $row=>$value){
            echo '<tr>';

            foreach($value as $row2 => $value2){
                if( $value2 == "Science" ) {
               echo '<td>'.'<span style="color: red;" >' .$value2. '</span>'.'</td>';
                }else{

                echo '<td>' .$value2. '</td>';
            }
        }
        echo '</tr>';
    }

    echo '</table>';

    ?>
