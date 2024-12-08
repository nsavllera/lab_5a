

<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 5a Q2</title>
</head>
<body>
    <?php
       $students = [
        [
            'name'=> "Alice",
            'program' => 'BIP',
            'age' => 21
        ],
        [
            'name'=> "Bob",
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name'=> "Raju",
            'program' => 'BIT',
            'age' => 22
        ]
    ];
    ?>

    <style>
        table, th, td, tr{
            border: 1px solid black;
        }
    </style>
    
    <table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student) : ?>
        <tr>
            <td><?=$student['name']?></td>
            <td><?=$student['program']?></td>
            <td><?=$student['age']?></td>
        </tr>
       <?php endforeach;?> 
    </table>

</body>
</html>