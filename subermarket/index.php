<?php
session_start();
$user_name = '';
$place = 0;
$quntam = 0;
$msg = '';
$total_after_discount = 0;
$dlevering = 0;
if (isset($_POST['submit'])) {
  $_SESSION['user_name'] = $_POST['user_name'];
  $_SESSION['place'] = $_POST['place'];
  $_SESSION['quntam'] = $_POST['quntam'];
  $user_name = $_SESSION['user_name'];
  $place = $_SESSION['place'];
  $quntam = $_SESSION['quntam'];
}

if (isset($_POST['receipt'])) {
  $user_name = $_SESSION['user_name'];
  $place = $_SESSION['place'];
  $quntam = $_SESSION['quntam'];
  $msg = '<table class="table">
  <thead>
    <tr>
      <th scope="col">prouduct name</th>
      <th scope="col">price</th>
      <th scope="col">Quntom</th>
      <th scope="col">sub total</th>
    </tr>
    </thead>
    <tbody>
  ';
  for ($i = 0; $i < $quntam; $i++) {
    $name = 'name' . $i;
    $price = 'price' . $i;
    $quntom = 'quntom' . $i;
    $_SESSION['sub_total'] += ($_POST[$price] * $_POST[$quntom]);
    $msg = $msg . ' <tr>
  <td>' . $_POST[$name] . '</td>
  <td>' . $_POST[$price] . '</td>
  <td>' . $_POST[$quntom] . '</td>
  <td>' . $_POST[$price] * $_POST[$quntom] . '</td>
</tr>';
  }
  $msg = $msg . '<tr class="thead-light">
<td></td>
<td></td>
<td>total</td>
<td >' . $_SESSION['sub_total'] . '</td>
</tr>
<tr></tbody></table>';
}
function discount()
{
  global $total_after_discount;
  if ($_SESSION['sub_total'] < 1000) {
    $total_after_discount = $_SESSION['sub_total'];
    return 0;
  } elseif ($_SESSION['sub_total'] > 1000 && $_SESSION['sub_total'] <= 3000) {
    $discount = $_SESSION['sub_total'] * .1;
    $total_after_discount = $_SESSION['sub_total'] - $discount;
    return $discount;
  } elseif ($_SESSION['sub_total'] > 3000 && $_SESSION['sub_total'] <= 4500) {
    $discount = $_SESSION['sub_total'] * .15;
    $total_after_discount = $_SESSION['sub_total'] - $discount;
    return $discount;
  } else {
    $discount = $_SESSION['sub_total'] * .2;
    $total_after_discount = $_SESSION['sub_total'] - $discount;
    return $discount;
  }
}
function dilevering()
{
  if ($_SESSION['place'] == 0) {
    return 'cairo';
  } elseif ($_SESSION['place'] == 30) {
    return 'Giza';
  } elseif ($_SESSION['place'] == 50) {
    return 'Alex';
  } else {
    return 'Other';
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
      <div class="col-3"></div>
      <div class="col-6 mt-5 text-center">
        <h3>suber market</h3>
        <form method="POST">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">user name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputEmail3" name="user_name" value="<?php echo $user_name ?>" placeholder="user name">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">place</label>
            <div class="col-sm-9">
              <select class="custom-select" name="place" value="giza" >
                <option value="0">cairo</option>
                <option value="30">giza</option>
                <option value="50">alex</option>
                <option value="100">other</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">quntam of product</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputEmail3" name="quntam" value="<?php echo $quntam ?>" placeholder="loan year">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-12">
              <button type="submit" name="submit" class="btn btn-primary col-12">enter prouduct</button>
            </div>
          </div>

        </form>
        <div class="col-12">
          <form class="form-inline col-12" method="post"><?php
                                                          if (isset($_SESSION['user_name'])) {
                                                            echo '<table class="table">
  <thead>
    <tr>
      <th scope="col">prouduct name</th>
      <th scope="col">price</th>
      <th scope="col">Quntom</th>
    </tr>
  </thead>
  </table>
  ';
                                                            for ($i = 0; $i < $quntam; $i++) {
                                                              echo '
      <tr>
      <div class="form-group mb-2 col-4">
        
        <input type="text" name ="name' . $i . '" class="form-control" id="inputPassword' . $i . '"  required>
      </div>
      
     
      <div class="form-group mb-2 col-4">

        <input type="number"name ="price' . $i . '"  class="form-control" id="inputPassword2' . $i . '"required >
      </div>
      <div class="form-group mb-2 col-4">
        <input type="number"name ="quntom' . $i . '"   class="form-control" id="inputPassword2' . $i . '" required>
      </div>
      
    
      ';
                                                            }
                                                            echo '   <button type="submit" name="receipt" class="btn btn-primary mb-2 col-12">receipt</button>
  </form>
 ';
                                                          }

                                                          echo $msg;
                                                          ?>
        </div>
        <?php
        if (isset($_POST['receipt'])) {
          echo '
<table class="table">
  <thead>
    <tr>
      <th scope="col">clint name</th>
      <th scope="col">' . $_SESSION['user_name'] . '</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">city</th>
      <td>' . dilevering() . '</td>
    </tr>
    <tr>
      <th scope="row">total</th>
      <td>' . $_SESSION['sub_total'] . '</td>
    </tr>
    <tr>
      <th scope="row"> discount</th>
      <td>' . discount() . '</td>
    </tr>
    <tr>
      <th scope="row">total after discount </th>
      <td>' . $total_after_discount . '</td>
    </tr>
    <th scope="row">dilevering </th>
      <td>' . $_SESSION['place'] . '</td>
    </tr>
    <thead>
    <tr>';
          $Net_total = $total_after_discount + $_SESSION['place'];
          echo '
      <th scope="col">Net total</th>
      <th scope="col">' . $Net_total . '</th>
    </tr>
  </thead>
  </tbody>
</table>';
          $_SESSION['sub_total'] = 0;
          $total_after_discount = 0;
        }
        ?>
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