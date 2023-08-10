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
    <title>Document</title>
    <style>
        .jumbotron {
            background-image: url('img/register-bg.jpg');
            color: #a2dbfa;
            width: 100%;
            padding: 130 60 60 230;
            margin-bottom: 20px;
        }
        .body {
            /* padding: 30 30 30 230; */
            display: flex;
            flex-wrap: wrap;
        }
        .card {
            margin: 20px;
            padding: 10px;
            width: 450px;
            border: 1px solid #398ab9;
        }
        .card:hover {
            transform: scale(1.05);
            /* box-shadow: 5px 5px 3px 5px #97d2ec; */
        }
        .card-title,
        .card-subtitle {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>JOB PORTAL</h1>
            <p>Best Jobs availabe matching your skills.</p>
        </div>
        <div class="row">
            <?php
            $sql = "SELECT `id`,`cname`,`position`,`Jdesc`,`skills`,`CTC`  FROM `cjobs`";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                        <div class= "body">
                            <div class="card">
                                <div class="card-body card-head">
                                    <h4 class="card-title" style="">' . $row['position'] . '</h4>
                                    <div class="card-details">
                                        <h5 class="card-subtitle">' . $row['cname'] . '</h5> <br>
                                        <p class="card-text">' . $row['Jdesc'] . '</p>
                                        <p class="card-text"><b>Skills Required : </b>' . $row['skills'] . '</p>
                                        <h6 class="card-text"><b>CTC :</b> <small><i class="fa fa-indian-rupee-sign"></i></small> ' . $row['CTC'] . '</h6>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#applyForJobModal" aria-expanded="false">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
            } else {
                echo "";
            }
            ?>
        </div>
    </div>
    <div class="modal fade" id="applyForJobModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apply For Job</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Applicant's Name:</label>
                            <input type="text" class="form-control" id="recipient-name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Applying For:</label>
                            <input type="text" class="form-control" id="recipient-name" name="applying">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Qualification:</label>
                            <input type="text" class="form-control" id="qual">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Year PassOut:</label>
                            <input type="text" class="form-control" id="year">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" name="apply">Apply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>