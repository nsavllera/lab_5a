

<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function multiplication($y){
            $z=[];
            for($x= 1; $x<= 12; $x++){
                $z[]=[
                    'no' => $x,
                    'multiplier' => $y,
                    'answer' => $x * $y,
                ];
            
            }  
            return $z;  
        }
        $z = multiplication(2);
    
    ?>

    <style>
        table, th, td, tr{
            border: 1px solid black;
        }
    </style>
    
    <table>
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php foreach($z as $result):?>
        <tr>
            <td><?=$result['no']?></td>
            <td><?=$result['multiplier']?></td>
            <td><?=$result['answer']?></td>
        </tr>
       <?php endforeach;?> 
    </table>

</body>
</html>