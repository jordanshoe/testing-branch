
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Tuition</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container">
        <div class="card w-50 mx-auto mt-5">
            <div class="card-head bg-dark text-center text-white">
                <h3>SCHOOL</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                    <select name="year" id="year" class="form-select text-muted">
                        <option value="" hidden>Year Level</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <input type="number" name="units" placeholder="Total Units" class="form-control">

                    <div class="form-group">
                        <input type="radio" value="yes" name="lab" id="yes">
                        <label for="yes">With Laboratory</label>
                        <input type="radio" value="no" name="lab" id="no">
                        <label for="no">No Laboratory</label>
                    </div>

                    <input type="submit" name="cal"  value="Calculate" class="btn btn-success w-100">
                    
                </form>
            </div>
            <!-- option 1 -->
            <div class="card-footer text-center">
                <?php
                    if(isset($_POST['cal'])){
                        include 'school.php';

                        $name = $_POST['name'];
                        $year = $_POST['year'];
                        $units = $_POST['units'];
                        $laboratory = $_POST['lab'];

                        $f1 = new School();
                        $f1->set_values($name, $year, $units, $laboratory);

                        echo "Total Tuition: " .number_format($f1->compute(),2);
                    }
                ?>
            </div>
            
        </div>
    </div>
    
    <?php
    //option 2
    // include 'school.php';
    // if(isset($_POST['cal'])){
    //     $name = $_POST['name'];
    //     $year = $_POST['year'];
    //     $units = $_POST['units'];
    //     $laboratory = $_POST['lab'];

    //     $f1 = new School();

    //     $f1->set_values($name, $year, $units, $laboratory);

    //     $display = $f1->unitsCal();

    //     echo "<div class='card-footer w-50 mx-auto text-center h-3'> Total tuition:$display</div>";


    // }
?>
    







<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</html>