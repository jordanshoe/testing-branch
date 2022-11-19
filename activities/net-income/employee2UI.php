<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Net Income</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50 mx-auto">
        <form action="" method="post">
            <input type="text" name="name" class="form-control" placeholder="Last Name , First Name">
            <label for="position">Position</label>
            <select name="position" id="position" class="form-select text-muted" >
                <option value="" hidden>Select Position</option>
                <option value="admin">Admin</option>
                <option value="staff">Staff</option>
            </select>
            <div>
                <span>Civil Status</span><br>
                <input type="radio" name="civil_status" value="single" id="single">
                <label for="single">Single</label>
                <input type="radio" name="civil_status" value="married" id="married">
                <label for="married">Married</label>
            </div>
            <label for="emp-status" class="form-label">Employment Status</label>
            <select name="emp_status" id="emp_status" class="form-select text-muted">
                <option value="" hidden>Select Status</option>
                <option value="con">Contractual</option>
                <option value="pro">Probationary</option>
                <option value="reg">Regular</option>
            </select>
            <label for="" class="form-label">#of Hours Worked</label>
            <input type="number" name="hours" class="form-control">
            <input type="submit" name="compute" value="Compute" class="btn btn-success mt-3 w-100">

        </form>
    </div>


    <?php
        if(isset($_POST['compute'])){
            require "employee2.php";

            $n = $_POST['name'];
            $p = $_POST['position'];
            $cs = $_POST['civil_status'];
            $es = $_POST['emp_status'];
            $h = $_POST['hours'];

            $s = new Salary($n, $p, $cs, $es, $h);
            $s->gross();
            $s->get_name();
            $s->net();
        }
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>