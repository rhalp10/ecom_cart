<nav class="navbar navbar-inverse " data-spy="affix" data-offset-top="197">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index"><span class="glyphicon glyphicon-shopping-cart"></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index">Home</a></li>
        <li><a href="products">Products</a></li>
        <li><a href="contact">Contact</a></li>
        <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart (<?php 
          if (isset($_SESSION['item_cart_count'])) {
           
          echo $_SESSION['item_cart_count'];
          }
          ?>)<span class="caret"></span></a>
        <ul class="dropdown-menu " style="width: 450px;">
          <div id="showcart"></div>
        </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>  Account
        <span class="caret"></span></a>
        <ul class="dropdown-menu " >
          <?php 
          if (isset($cus_ID)) {
           ?>

          <li><a data-toggle="modal" data-target="#setting">Setting</a></li>
          <li><a data-toggle="modal" data-target="#logout">Logout</a></li>
           <?php
          }
          else{
            ?>

          <li><a type="button" data-toggle="modal" data-target="#modal_login">Login</a></li>
          <li><a type="button" data-toggle="modal" data-target="#modal_register">Sign-up</a></li>
            <?php
          }
          ?>
      </li>
      </ul>
    </div>
  </div>
</nav>