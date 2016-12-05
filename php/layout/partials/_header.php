<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--make this dynamic later.. fetch headerMenu from DB-->
        <li class="<?php if($cPath === "index"){  echo "active";} ?>"><a href="index.php">index</a></li>
        <li class="<?php if($cPath === "pageOne"){echo "active";} ?>"><a href="index.php?pageOne">pageOne</a></li>
        <li class="<?php if($cPath === "pageTwo"){echo "active";} ?>"><a href="index.php?pageTwo">pageTwo</a></li>
      </ul>
    </div>
  </div>
</nav>