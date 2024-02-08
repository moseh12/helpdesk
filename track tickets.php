<?php

require 'dbcon.php';

?>

<!DOCTYPE html>
<html lang="eng">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv"
      crossorigin="anonymous"
    />

    <title>View tickets</title>
  </head>
  <body>
    <div class="container">
      <div class="row>">
        <div class="col-md-12">
          <div class="card-header">
            <h4>
              TICKETS DETAILS
              <a href="create ticket.php" class="btn btn-primary float-right"
                >ticket add</a
              >
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>id number</th>
                  <th>name</th>
                  <th>email</th>
                  <th>phone</th>
                  <th>tickets</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "SELECT * FROM tickets";
                $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run)>0)
                {
foreach($query_run as $tickets)
{
 // echo $tickets['ticket'];
?>
<tr>
  <td><?= $tickets['id number']; ?></td>
  <td><?= $tickets['name']; ?></td>
  <td><?= $tickets['email']; ?></td>
  <td><?= $tickets['phone']; ?></td>
  <td><?= $tickets['tickets']; ?></td>
  <a href="" class="btn btn-danger btn-sm">View ticket</a>
  <a href="" class="btn btn-success btn-sm">Assign</a>
  <a href="" class="btn btn-success btn-sm">open</a>
  <a href="" class="btn btn-danger btn-sm">close</a>
  <a href="" class="btn btn-danger btn-sm">delete</a>
</tr>

<?php

}
                }
                else
                {
                      "echo <h5>No record found</h5>";
                }
                ?>
                <tr>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
