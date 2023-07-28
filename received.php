<?php
$ticketNum = rand(4578, 312899);

?>

<html>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<title>Contact form</title>
</head>


<body style="background-color: #2b3035;">
    <div class="card " data-bs-theme="dark">
        <div class="alert alert-success" role="alert">
            Message sent successfully
        </div>
        <div class="card-body">
            <h5 class="card-title">Your message: </h5>
            <p class="card-text">Your ticket number is:
                <?php echo $ticketNum; ?>
            </p>
            <p class="card-text">Name:
                <?php echo $_POST['name']; ?> <br>
            </p>
            <p class="card-text">Email:
                <?php echo $_POST['email']; ?> <br>
            </p>
            <p class="card-text">Reason:
                <?php echo $_POST['reason']; ?> <br>
            </p>
            <p class="card-text">Message:
                <?php echo $_POST['textarea']; ?> <br>
            </p>
            <a href="index.php" class="btn btn-primary">Back</a>
        </div>
    </div>
</body>
</html>