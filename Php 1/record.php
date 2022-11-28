<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
</head>
<body>
    
    <table width="1000" border="1" align="center">
        <tr>
            <th>#</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Country</th>
            <th>State</th>
            <th>Address</th>
            <th>Last Updated</th>
            <th>Action</th>
        </tr>
        <?php
            require_once "lib/db.php";

            $records = $db->query("SELECT * FROM employee");

            $num = 1;

            while($record = $records->fetch_array())
            {
        ?>
            <tr>
                <td><?php echo $num;  ?></td>
                <td><?php echo $record['firstname']  ?></td>
                <td><?php echo $record['lastname']  ?></td>
                <td><?php echo $record['email']  ?></td>
                <td><?php echo $record['mobile']  ?></td>
                <td><?php echo $record['country']  ?></td>
                <td><?php echo $record['state']  ?></td>
                <td><?php echo $record['address']  ?></td>
                <td><?php echo $record['updated']  ?></td>
                <td>
                    <a href="#">Edit</a>
                    |
                    <a href="#">Delete</a>
                </td>
            </tr>
        <?php
        
        $num++;

            }

        ?>

    </table>

</body>
</html>