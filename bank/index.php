<?php
$user_name='';
$loan_amount=0;
$loan_year=0;
$profit=0;
$loan_after=0;
$msg='';
if(isset($_POST['submit'])){
    $user_name=$_POST['user_name'];
    $loan_amount=$_POST['loan_amount'];
    $loan_year=$_POST['loan_year'];
    function profit(){
        global $loan_amount;
        global $loan_year;
        global$profit;
        if($loan_year<3&&$loan_year>0){
            $profit=($loan_amount*.1)*$loan_year;
            return $profit;
        }
        elseif($loan_year>=3){
            $profit=($loan_amount*.15)*$loan_year;
            return $profit;
            
    }
    else{return'loan year out of range';}
}
function loan_after(){
    global $loan_after;
    global $loan_amount;
    global $profit;
    if ($loan_amount<0){
        return 'loan can\'t be negative';
    }
    else{
        $loan_after=$loan_amount+$profit;
return $loan_after;
    }
}
function monthly(){
    global $loan_after;
    global $loan_year;
    $monthly=$loan_after/($loan_year*12);
    return $monthly;
}
$msg='<table class="table">
<thead>
  <tr>
    <th scope="col">interest rate</th>
    <th scope="col">loan amount</th>
    <th scope="col">monthly</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>'. profit().'</td>
    <td>'.loan_after().'</td>
    <td>'.monthly().'</td>
  </tr>
</tbody>
</table>';
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
              <div class="col-3" ></div>
              <div class="col-6 mt-5 text-center">
                  <h3>Bank</h3>
  <form method="POST">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">user name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputEmail3" name="user_name"  value="<?php echo $user_name ?>" placeholder="user name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">loan amount</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputEmail3" name="loan_amount" value="<?php echo $loan_amount ?>" placeholder="loan amount">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">loan year</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputEmail3" name="loan_year" value="<?php echo $loan_year ?>" placeholder="loan year">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-12">
      <button type="submit" name="submit" class="btn btn-primary col-12">calculate</button>
    </div>
  </div
  
</form>
<div class="col-12"><?php echo $msg;?></div>
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