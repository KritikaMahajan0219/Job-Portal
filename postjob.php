<?php
include 'config.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css\common.css">
    <style>
        .content {
            margin-left: 200px;
            padding: 65px 16px;
            height: 100%;
        }
    </style>
    <title>postJob</title>
</head>
<body>
    <?php include 'header.php' ?>
    <!-- Page content -->
    <div class="content">
        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Post a Job
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="Company Name" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="" name="cname">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPosition" class="form-label">Position</label>
                        <input type="text" class="form-control" id="exampleInputPosition" name="position">
                    </div>
                    <div class="mb-3">
                        <label for="JobDesc" class="form-label">Job Description</label>
                        <textarea id="JobDesc" class="form-control" cols="30" rows="10" name="Jdesc"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="skills" class="form-label">Skills Required</label>
                        <input type="text" class="form-control" id="skills" name="skills">
                    </div>
                    <div class="mb-3">
                        <label for="CTC" class="form-label">CTC</label>
                        <input type="text" class="form-control" id="CTC" name="CTC">
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>

        <!-- Table -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">CTC</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT `cname`,`position`,`CTC` FROM `cjobs`";
                $result = mysqli_query($conn, $sql);
                $i = 0;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        echo "
                            
                            <tr>
                                <td>" . ++$i . "</td>
                                <td>" . $row['cname'] . "</td>
                                <td>" . $row['position'] . "</td>
                                <td>" . $row['CTC'] . "</td>
                            </tr>";
                    }
                } else {
                    echo "";
                }
                ?>
            </tbody>
        </table>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>