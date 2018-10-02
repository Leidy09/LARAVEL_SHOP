<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= <div class="container">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
    </script>
    <title>LRSTORE</title>
</head>
<style>
    body{
        background-image: url("https://png.pngtree.com/element_origin_min_pic/17/08/21/c2bd4a405f866a787dad3e4e0c95c3b4.jpg ");
    }
    form{

        padding: 50px;
        position: relative;
        left: 25%;
    }
    h1{
        text-align:center;
       
    }
    
    </style>
</head>

<body>
<form action="action_page.php">

    <div class="container">
  <h1>CONTACTO</h1>

<form action="" >
  <div class="col-xs-12 col-md-8 ">
   
    <div class="form-group col-xs-12 col-md-8 ">
      <label for="First Name">First Name:</label>
      <input type="First Name" class="form-control" id="First Name" placeholder="Your First Name" name="First Name">
    </div>

    <div class="form-group col-xs-12 col-md-8 ">
      <label for="lastname">Last Name:</label>
      <input type="lastname" class="form-control" id="lastname" placeholder=" Your lastname " name="lastname">
    </div>

    <div class="form-group col-xs-12 col-md-8 ">
      <label for="adress">Adress</label>
      <input type="adress" class="form-control" id="adress" placeholder=" Your adress " name="adress">
    </div>
    <div class="form-group col-xs-12 col-md-8 col-ms-8 ">
      <label for="card">Number Card</label>
      <input type="card" class="form-control" id="card" placeholder=" Your Card Number " name="card">
    </div>

     <div class="row ">
              <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font" > Expiry Month</span>
                  <input type="text" class="form-control" placeholder="MM" />
              </div>
         <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font" >  Expiry Year</span>
                  <input type="text" class="form-control" placeholder="YY" />
              </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font" >  CCV</span>
                  <input type="text" class="form-control" placeholder="CCV" />
              </div>
              <div class="well">
  <div id="datetimepicker1" class="input-append date">
    <input data-format="dd/MM/yyyy hh:mm:ss" type="text"></input>
    <span class="add-on">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      </i>
    </span>
  </div>
</div>

     <div class="form-group col-xs-12 col-md-8 ">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Your email" name="email">
    </div>
   
    <div class="form-group col-xs-12 col-md-8 ">
      <label for="Phone">Phone:</label>
      <input type="Phone" class="form-control" id="Phone" placeholder=" Your Phone " name="lastname">
    </div>
    
    <button type="submit" class="btn btn-success btn-responsive col-xs-12 col-md-3 ">Submit</button>
  </div>
</form>


</body>
</html>


