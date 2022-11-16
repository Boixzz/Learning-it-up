<?php  
    if($_SESSION['UserID']!="")
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="/Learning it up/bootstrap/css/bootstrap.min.css">
    <script src="/Learning it up/bootstrap/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fasthand&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
        }
        p{
            font-family: 'Roboto', sans-serif;
        }
        .btn{
            color: #fff7e9;
        }
        .nav-link{
            text-decoration: none;
            color: #faf7f0;
        }
    </style>
</head>
<body>
    <div id="top" class="container-fluid" style="background-color: #c47aff; color: #faf7f0;">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm">
                <div class="container-fluid">
                    <p class="display-6 text-danger" style="font-family: 'Fasthand', cursive;">Learning it up</p>
                    <ul class="nav justify-content-end text-center" id="nav-bar-list">
                        <li class="nav-item" style="border-left: solid #3c4048 1px;">
                            <a class="nav-link" href="index.php?page=logout">Log out</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#profile">
                                    <?php
                                        echo @$_SESSION['Name'];
                                    ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">(
                                    <?php
                                        echo @$_SESSION['UserType'];
                                    ?>)
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-5">
                <canvas id="myChart1"></canvas>
            </div>
            <div class="col-sm-5">

            </div>
        </div>
    </div>

</body>
<script>
  const ctx = document.getElementById('myChart1');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
</html>
<?php
    }
    else{
        echo "Error 404! Page not found!!";
    }
?>