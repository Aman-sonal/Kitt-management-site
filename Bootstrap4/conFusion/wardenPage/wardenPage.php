<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warden Page</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="wardenPage.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>KIIT Management </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="mainpage.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

</head>

<body>
    <?php
       include "../partials/_dbconnect.php";
       include "../partials/_header.php";    
    ?>
    <div class="container-fluid">
        <div class="jumbotron">
        <?php 
                $sql= "SELECT * FROM `hostels` WHERE `hostel_name` ='$hname' ";
                $result= mysqli_query($conn, $sql);
        ?>
            <h1 class="display-4"><strong>Welcome Thapa!!</strong></h1>
            <hr class="my-4"> 
            <h1 class="display-6"><strong>Hostel: KP-6</strong></h1>
        </div>
        <table class="table table-striped complaint-table">
            <thead>
                <tr>
                <th scope="col">S no</th>
                <th scope="col">Complaint Description</th>
                <th scope="col">View Complaint</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql= "SELECT * FROM `complaint` WHERE `com_status` LIKE 'pending' AND `hostel` LIKE '$_name'";
                
                ?>
                <tr>
                <th scope="row">1</th>
                <td> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lore.</td>
                <td> <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    View
                    </button>
                </td>
                <td>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Not Completed</option>
                    <option value="1">Completed</option>
                    <option value="2">In Progress</option>
                    </select>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
          <div class="d-flex flex">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student Name</label>
            <input class="form-control" type="text" value="Aman Sonal" aria-label="Disabled input example" disabled readonly>
        </div>
        <div class="mb-3 mx-5">
                <label for="exampleInputPassword1" class="form-label">Attending Date</label>
                <input type="text" id="datepicker">
        </div>
          </div>
        <div class="d-flex flex">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Room Number</label>
                <input class="form-control" type="text" value="4c-235" aria-label="Disabled input example" disabled readonly>
            </div>
            <div class="mb-3 mx-4">
                <label for="exampleInputPassword1" class="form-label">Time Slot</label>
                <input class="form-control" type="text" value="11 AM to 2 PM" aria-label="Disabled input example" disabled readonly>
            </div>
        </div>    
        <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Complaint Description</label>
                <textarea  rows="4" cols="50">
                    At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
                </textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Additional Remark</label>
                <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
<script src="warden-operating-page.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS. -->
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</html>