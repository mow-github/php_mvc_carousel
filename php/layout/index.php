<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="tut">
  <meta name="keywords" content="html5, css3, js, jquery, bootstrap 3">
  <meta name="author" content="Mats Wikmar">
  <title></title>
  <link rel="icon" href="img/bg_logo/favicon.ico">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <script src="js/jquery_bs3.min.js" defer></script>
  <script src="js/custom.js" defer></script>
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <?php  require "partials/_header.php" ?>
  <header class="fill">
    <div id="carousel1" class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">

        <?php  for($i=0; $i<count($pdata); $i++){ ?>
          <div class="item <?php  if($i == 0){ echo "active"; } ?>">
            <div class="fill"
                 style="background-image:url('<?php echo $pdata[$i]->srcOrg ?>');"
                 data-my-srcMini="<?php echo $pdata[$i]->srcMini ?>"
                 data-my-srcOrg="<?php echo $pdata[$i]->srcOrg ?>">
              <h3 class="text_over_bild"><?php echo $pdata[$i]->text ?></h3>
            </div>
          </div>
        <?php } ?>

      </div>
      <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </header>
  <h1>random text.. continues here..</h1>
</body>
</html>