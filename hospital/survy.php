<?php $pone=$_POST['phone'];?>
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
  <h3>survey</h3>
 
  <table class="table">
  <thead>
    <tr>
      <th scope="col">question</th>
      <th scope="col">Bad</th>
      <th scope="col">Good</th>
      <th scope="col">Very Good</th>
      <th scope="col">Excellent</th>

    </tr>
  </thead>
  <tbody>
  <form method="$_POST" action="rusult.php">
  <div class="form-group">
    <tr>
      <th scope="row">Are you satisfied with the level of cleanliness?</th>
      <td> <div class="form-check">
  <input class="form-check-input" type="radio" name="cleanliness" id="exampleRadios1" value="0" required >
</div></td>
<td> <div class="form-check">
  <input class="form-check-input" type="radio" name="cleanliness" id="exampleRadios2" value="3" >
</div></td>
<td> <div class="form-check">
  <input class="form-check-input" type="radio" name="cleanliness" id="exampleRadios3" value="5" >
</div></td>
<td> <div class="form-check">
  <input class="form-check-input" type="radio" name="cleanliness" id="exampleRadios4" value="10" >
</div></td>
    </tr>
    <tr>
      <th scope="row">Are you satisfied with the service prices?</th>
      <td> <div class="form-check">
  <input class="form-check-input" type="radio" name="prices" id="exampleRadios5" value="0" required>
</div></td>
<td> <div class="form-check">
  <input class="form-check-input" type="radio" name="prices" id="exampleRadios6" value="3" >
</div></td>
<td> <div class="form-check">
  <input class="form-check-input" type="radio" name="prices" id="exampleRadios7" value="5" >
</div></td>
<td> <div class="form-check">
  <input class="form-check-input" type="radio" name="prices" id="exampleRadios8" value="10" >
</div></td>
    </tr>
    <tr>
      <th scope="row">Are you satisfied with the nursing service?</th>
      <td> <div class="form-check">
  <input class="form-check-input" type="radio" name="nursing" id="exampleRadios9" value="0"required >
</div></td>
<td> <div class="form-check">
  <input class="form-check-input" type="radio" name="nursing" id="exampleRadios10" value="3" >
</div></td>
<td> <div class="form-check">
  <input class="form-check-input" type="radio" name="nursing" id="exampleRadios11" value="5" >
</div></td>
<td> <div class="form-check">
  <input class="form-check-input" type="radio" name="nursing" id="exampleRadios12" value="10" >
</div></td>
    </tr>
    <tr>
      <th scope="row">Are you satisfied with the level of the doctor?</th>
      <td> <div class="form-check">
  <input class="form-check-input" type="radio" name="doctor" id="exampleRadios13" value="0"required >
</div></td>
<td> <div class="form-check">
  <input class="form-check-input" type="radio" name="doctor" id="exampleRadios14" value="3" >
</div></td>
<td> <div class="form-check">
  <input class="form-check-input" type="radio" name="doctor" id="exampleRadios20" value="5" >
</div></td>
<td> <div class="form-check">
  <input class="form-check-input" type="radio" name="doctor" id="exampleRadios15" value="10" >
</div></td>
    </tr>
    <tr>
      <th scope="row">Are you satisfied with the calmness in the hospital?</th>
      <td> <div class="form-check">
  <input class="form-check-input" type="radio" name="calmness" id="exampleRadios16" value="0" required>
</div></td>
<td> <div class="form-check">
  <input class="form-check-input" type="radio" name="calmness" id="exampleRadios17" value="3" >
</div></td>
<td> <div class="form-check">
  <input class="form-check-input" type="radio" name="calmness" id="exampleRadios18" value="5" >
</div></td>
<td> <div class="form-check">
  <input class="form-check-input" type="radio" name="calmness" id="exampleRadios19" value="10" >
</div></td>

    </tr>
  </tbody>
  </div >
</table>

<button type="submit" name="submit" class="btn btn-primary mb-2 col-12 " value="<?php echo $pone;?>">submit</button>

</form>
</div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>