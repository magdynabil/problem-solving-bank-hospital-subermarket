<?php 
$cleanliness=$_GET['cleanliness'];
$prices=$_GET['prices'];
$nursing=$_GET['nursing'];
$doctor=$_GET['doctor'];
$calmness=$_GET['calmness'];
$phone=$_GET['submit'];
$sum=$cleanliness+$prices+$nursing+$doctor+$calmness;
function clean(){
    global $cleanliness;
    if($cleanliness==0){
        echo 'bad';

    }
    elseif($cleanliness==3){
        echo 'good';

    }
    elseif($cleanliness==5){
        echo 'very good';

    }
    elseif($cleanliness==10){
        echo 'Excellent';

    }


}
function prices(){
    global $prices;
    if($prices==0){
        echo 'bad';

    }
    elseif($prices==3){
        echo 'good';

    }
    elseif($prices==5){
        echo 'very good';

    }
    elseif($prices==10){
        echo 'Excellent';

    }


}
function nursing(){
    global $nursing;
    if($nursing==0){
        echo 'bad';

    }
    elseif($nursing==3){
        echo 'good';

    }
    elseif($nursing==5){
        echo 'very good';

    }
    elseif($nursing==10){
        echo 'Excellent';

    }


}
function doctor(){
    global $doctor;
    if($doctor==0){
        echo 'bad';

    }
    elseif($doctor==3){
        echo 'good';

    }
    elseif($doctor==5){
        echo 'very good';

    }
    elseif($doctor==10){
        echo 'Excellent';

    }


}
function calmness(){
    global $calmness;
    if($calmness==0){
        echo 'bad';

    }
    elseif($calmness==3){
        echo 'good';

    }
    elseif($calmness==5){
        echo 'very good';

    }
    elseif($calmness==10){
        echo 'Excellent';

    }


}
function rusult(){
    global $sum;
    global $phone;
    if($sum<25){
echo'<div class="alert alert-danger" role="alert">
we will call you '.$phone.'
</div>';
    }
    else{
        echo'<div class="alert alert-success" role="alert">
       thank you
      </div>
      ';
    }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <div class="row">
  <div class="col-12 mt-5 text-center">
  <h3>result</h3>
 
  <table class="table">
  <thead>
    <tr>
      <th scope="col">question</th>
      <th scope="col"> result</th>
     

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Are you satisfied with the level of cleanliness?</th>
      <td> 
      <?php
      clean();
      ?>
      </td>
    </tr>
    <tr>
      <th scope="row">Are you satisfied with the service prices?</th>
      <td> <?php
      prices();
      ?></td>
    </tr>
    <tr>
      <th scope="row">Are you satisfied with the nursing service?</th>
      <td> <?php
      nursing();
      ?></td>
    </tr>
    <tr>
      <th scope="row">Are you satisfied with the level of the doctor?</th>
      <td> 
 <?php
      doctor();
      ?></td>
    </tr>
    <tr>
      <th scope="row">Are you satisfied with the calmness in the hospital?</th>
      <td><?php
      calmness();
      ?>
</td>

    </tr>
  </tbody>
  </div >
</table>
<div class="col-12"><?php rusult();?></div>

</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
