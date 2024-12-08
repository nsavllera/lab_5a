<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 5a Q1</title>
</head>
<body>
    <?php
        $name = "NURULAINA NISA BINTI SAHANUAN";
        $matricNumber = "AI220179";
        $course = "SOFTWARE ENGINEERING";
        $yearOfStudy = "YEAR 3";
        $address = "1, JALAN SUBANG 4, TAMAN KOBENA, 81200, JOHOR BAHRU, JOHOR";
    ?>

    <style>
        table, td, tr{
            border: 1px solid black;
        }
    </style>
    
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matricNumber"?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo "$yearOfStudy"?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"?></td>
        </tr>
    </table>

</body>
</html>