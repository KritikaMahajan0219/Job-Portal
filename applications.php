<?php
include 'config.php';
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css\common.css">
    <title>Candidates Applied</title>
    <style>
        .content {
            padding: 80 50 50 230;
        }
    </style>
</head>

<body>
    <?php include 'header.php' ?>
    <div class="content">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Candidate's Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Year PassOut</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT `name`,`apply`,`year` FROM `candidates`";
                $result = mysqli_query($conn, $sql);
                $i = 0;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "
                                <tr>
                                    <td scope='row'>" . ++$i . "</td>
                                    <td>" . $row['name'] . "</td>
                                    <td>" . $row['apply'] . "</td>
                                    <td>" . $row['year'] . "</td>
                                </tr>";
                    }
                } else {
                    echo "";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>