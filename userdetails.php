<html lang=en>
<head>
        <style type="text/css">

        body{margin-top: 15px;
        }
       
          .btn {
                  border: 2px solid black;
                  background-color: skyblue;
                  color: black;
                  padding: 14px 28px;
                  font-size: 16px;
                  cursor: pointer;
                  margin: 5px;
                }
            
            .df:hover {
        color: white;
        font-size: 16px;
    background-color: #9dc5c3;
background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);

}

        </style>
      </head>

    <meta charset="utf-8">
    <title>User Details</title>
    <style>
    h1 {text-align: center;}
    </style>
    <h1 style="color:blue;"><marquee direction = "right">USER DETAILS</marquee></h1>
        <body>
        <script src="https://kit.fontawesome.com/a1ccd8a2f2.js" crossorigin="anonymous"></script>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="btn df" class="nav-link" href="index.php"><i class="fas fa-home"></i></a>
              </li>
        <Style>
        table {text-align: center;}
        table {font-size: 22px;}
        </Style>
        <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
        <center>
        <div class="container">
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                  
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" cellspacing="5" border="25" bgcolor="aquamarine" width="800">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2" bgcolor="powderblue">Id</th>
                            <th scope="col" class="text-center py-2" bgcolor="powderblue">Name</th>
                            <th scope="col" class="text-center py-2" bgcolor="powderblue">e-Mail</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    
                    </div>
                </div>
            </div> 
         </div>
        </center>
        </body>
</html>
