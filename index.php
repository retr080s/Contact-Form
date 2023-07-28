<html>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact form</title>

<head>

<body style="background-color: #2b3035;">
    <h1 class="text-light">Contact Form</h1>
    <form action="received.php" method="post" data-bs-theme="dark">
        <div class="mb-3" >
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
        </div>
        <select class="form-select" aria-label="Default select example" name="reason">
            <option selected>Contact reason</option>
            <option value="query">Query</option>
            <option value="feedback">Feedback</option>
            <option value="complaint">Complaint</option>
            <option value="other">Other</option>
        </select>
        <br>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                name="textarea"></textarea>
            <label for="floatingTextarea">Leave your message</label>
        </div>
        <br>
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
    <?php
    //echo $_POST['name'];
    //echo $_POST['email'];
    //echo $_POST['reason'];
    //echo $_POST['textarea'];
    ?>


</body>
</head>

</html>