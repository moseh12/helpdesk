<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin.css" />
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />

    <!-- Optional theme -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
      crossorigin="anonymous"
    />

    <!-- Latest compiled and minified JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header class="header">
      <a href="">Admin Dashboard</a>
      <div class="logout">
        <a href="logout.php" class="btn btn-primary">logout</a>
      </div>
    </header>
    <aside>
      <ul>
        <li>
          <a href=" track tickets.php"> track tickets</a>
        </li>
        <li>
          <a href="open tickets.php">open tickets</a>
        </li>
        <li>
          <a href="pending tickets.php">pending tickets</a>
        </li>
        <li>
          <a href="solved tickets.php">solved tickets</a>
        </li>
        <li>
          <a href="unassigned tickets.php">unassigned tickets</a>
        </li>
        <li>
          <a href="closed tickets.php">closed tickets</a>
        </li>
        <li>
          <a href=" ticket details.php">ticket details</a>
        </li
      </ul>
    </aside>
    <div class="content">
      <h1>WELCOME TO THE ADMIN PANEL</h1>
      <P>
        We are honoured to have you as our agent. Our work as agents is to
        ensure that our customers are satisfied and in time.<br />
        We have added an accordion and a dropdown menu inside the side
        navigations. Click on both to understand how they differ from each
        other. The accordion will push down the content as the dropdown lays
        over the content.</P
      >
    </div>
  </body>
</html>
