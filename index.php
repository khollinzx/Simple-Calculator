<?php

require_once('Class/CalculatorActions.php');

$getAnswer = new CalculatorActions();

$answer = 0;
$value1 = 0;
$value2 = 0;

if (isset($_POST['submit'])) {
  extract($_POST);

  $answer = $getAnswer->performCalculation($value1, $value2, $symbol);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">

    <div class="main-panel">
      <!-- Navbar -->
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-lg-offset-6">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs- ">
                      <span class="nav-tabs-title text-center">Simple Calculator</span>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div>
                      <form method="POST">
                        <table class="table">
                          <tbody>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                  <input type="number" name="value1" value="<?php echo $value1; ?>" placeholder="Enter an Integer Value" class="form-control" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                  <input type="number" name="value2" value="<?php echo $value2; ?>" placeholder="Enter an Integer Value" class="form-control" required>
                                </div>
                              </div>
                            </div>
                            <h3>Pick an Operator</h3>
                            <tr>
                              <td>
                                <div>
                                  <input type="radio" name="symbol" value="+" required> + (Addition)
                                </div>
                              </td>
                              <td>
                                <div>
                                  <input type="radio" name="symbol" value="-" required> - (Subtraction)
                                </div>
                              </td>
                              <td>
                                <div>
                                  <input type="radio" name="symbol" value="/" required> / (Division)
                                </div>
                              </td>
                              <td>
                                <div>
                                  <input type="radio" name="symbol" value="*" required> * (Multiplication)
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                              <h4 class=""> Answer: <?php echo $answer ?> </h4>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <button type="submit" name="submit" class="btn btn-primary pull-right">= (Answer)<div class="ripple-container"></div></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>