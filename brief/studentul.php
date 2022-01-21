<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
      .container-fluid-sm ul li:hover{
        background-color:  #00C1FE
       }
      
    </style>
</head>
<body style="overflow-x:hidden; width: 100%; height: fit-content;">
    <div class="row align-items-start">

      <?php
        include 'sidebarpart.php';
      ?>

      <div class="col" style="padding: 0;width: 100%; background-color: #E5E5E5; height: 100vh;">

        <?php
          include 'navebar.php';
        ?>

        <div class="col px-5" id="row" style="background-color: #E5E5E5; ">
            <nav class="navbar navbar-light px-3" style="width: 100%;">
                <div class="container-fluid">
                  <a class="navbar-brand fw-bold">Students List</a>
                  <form class="d-flex">
                    <a class="me-5 mt-1" href="#"><img src="Vector.png" alt=""></a>
                    <button class="btn btn-outline-white text-white bg-info" type="submit">ADD NEW STUDENT</button>
                  </form>
                </div>
            </nav>
            
          <div class="container border-top border-2 m-2" style="width: 100%; height: auto; ">
            <div class="row  py-1 text-muted" style="font-size: 80%;">
              <div class="col"></div>
              <div class="col">Name</div>
              <div class="col">E-mail</div>
              <div class="col">Phone</div>
              <div class="col">Enroll Number</div>
              <div class="col" id="da">Date of admission</div>
              <div class="col"></div>
            </div>
            <?php
              include 'studentslist.php';
            ?>
         
            <div class="row bg-white rounded my-2 me-1" style="width: 100%;">
              <div class="col pb-2"><img src="people.png" alt="image"></div>
              <div class="col py-3">username</div>
              <div class="col py-3">user@email.com</div>
              <div class="col py-3">7305477760</div>
              <div class="col py-3">1234567305477760</div>
              <div class="col py-3">08-Dec, 2021</div>
              <div class="col text-end py-3">
                <a href="#"><img class="pe-2" src="modif.png" alt="icon"></a>
                <a href="#"><img src="poub.png" alt="icon"></a>
              </div>
            </div>
        </div>
      </div>
      <div id="cartes" class="container mt-3" style=" background-color: #E5E5E5;">
      <?php 
            include 'studentscard.php';
      ?>
      </div>
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>