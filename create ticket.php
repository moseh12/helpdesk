<!doctype html>
<html lang="eng" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>مرحبًا بالعالم!</title>
  </head>
  <body>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ticket add
                            <a href="index.php" class="btn btn-danger float-end">BACK</a> 
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

<div class="mb-3">
    <label>USERNAME</label>
    <input type="text" name="name" class="form-control">
</div>
<div class="mb-3">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
</div>
<div class="mb-3">
    <label>Phone</label>
    <input type="text" name="phone" class="form-control">
</div>
<div class="mb-3">
    <label>ticket</label>
    <input type="text" name="ticket" class="form-control">
</div>
<div class="mb-3">
    
    <button type="submit" name="save_ticket" class="btn btn-primary">Submit ticket</button>
</div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  </body>
</html>
