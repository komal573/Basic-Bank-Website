<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 .center {
            width:350px;
            height:350px;
            position: fixed;
            background-color: white;
            top: 40%;
            left: 45%;
            right: 60%;
            margin-top: -100px;
            margin-left: -100px;
        }
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: right;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.btn {
                  border: 2px solid red;
                  background-color: aquamarine;
                  color: black;
                  padding: 14px 28px;
                  font-size: 16px;
                  cursor: auto;
                  margin: 0px;
                }
            
            .df:hover {
        color: purple;
        font-size: 16px;
    background-color: #9dc5c3;
background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);

}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 100%) {
  .column {
    width: 100%;
    display: circle;
  }
}
</style>
</head>
<h1><center><font size="50px" color="blue">Description Of My Project</font></center></h1>
<body>
<script src="https://kit.fontawesome.com/a1ccd8a2f2.js" crossorigin="anonymous"></script>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="btn df" class="nav-link" href="index.php"><i class="fas fa-home"></i></a>
              </li>
    <div class="card">
    <div class="center">
      <img src="img/basicc.png" alt="Moupriya" style="width:100%">
      <img src="img/Sparkslogo.png" alt="Moupriya" style="width:25%">
      <div class="container">
      <style>
      h2 {font-family:'Comic Sans MS', 'Chalkboard SE', 'Comic Neue', sans-serif; }
      
      </style>
        <h2>Moupriya Das</h2>
        <p class="title">Student Intern</p>
        <p>A Web Application used to transfer money between multiple users this project have some dummy users to show how the basic banking system work.</p>
        <p><i class="fas fa-envelope-square"> moupriya.das@stu.adamasuniversity.ac.in</i></p>
        </div>
      </div>
  </div>
 </body>
</html>
