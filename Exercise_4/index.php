<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $personName = $_POST["name"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Vlad Tereshchenko">
    <meta name="description" content="LEBLUE EXERCISE #4">
    <title>Exercise #4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<section class="welcome-section mt-5">
    <div class="container">
        <div class="col-md-8">
            <?php if (empty($personName)) { ?>
                <form action="" method="POST">
                    <div class="mb-4">
                        <label for="nameInput">Name</label>
                        <input type="text" name="name" class="form-control" id="nameInput" aria-describedby="nameHelp" placeholder="Enter name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            <?php } else { ?>
                <h2 class="alert alert-info" role="alert">Hello <?php echo $personName; ?></h2>
                <button type="submit" class="btn btn-primary" onclick='window.location = window.location.href;'>
                    One more
                </button>
            <?php } ?>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
