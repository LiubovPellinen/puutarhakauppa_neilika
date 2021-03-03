<?php
include("navigointi.php");
?>
<div class="page-header">
  <h2>
    Tervetuloa Puutarhaliike Neilikan kotisivuille!<br>
      Meiltä löydät sekä sisä- että ulkokasvit ja kaiken tarvitsemasi kasvien hoitoon.
  </h2>
</div>
<div id="carousel" class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="photo/xmas1.jpg" alt="newYear">
        <div class="carousel-caption">
          <h3>2.1.2021</h3>
          <h4>Hyvää uutta vuotta! Uuden vuoden kunniaksi myymälöissämme upeita tarjouksia</h4>
        </div>
      </div>


      <div class="item">
        <img src="photo/joulukukat-1.jpg" alt="joulukukat">
        <div class="carousel-caption">
        <h3>14.12.2020</h3>
          <h4> Joulukukat edullisesti meiltä. Myymälöissämme myös kattava ja edullinen valikoima
            joulukuusia.</h4>
        </div>
      </div>

      <div class="item">
        <img src="photo/tyokalut.jpg" alt="Tyokalut">
        <div class="carousel-caption">
        <h3>1.9.2020</h3>
          <h4>Nyt on hyvä aika aloittaa puutarhan valmistelu talven lepokautta varten. Meiltä löydät
            kaikki työkalut ja tarvikkeet.</h4>
        </div>
      </div>


           <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  
  <?php

  include("footer.php");

  ?>