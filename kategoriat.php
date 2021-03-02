<?php
include("navigointi.php");
?>

<div class="container">

    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="thumbnail">
                <a href="tuotteet.php?kategoria=1">
                <img src="photo/1.jpg" alt="kuva"style="width:100%" >
                <div class="caption">
                    <h4>Sisäkasvit</h4>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
                <a href="tuotteet.php?kategoria=2">   
                <img src="photo/ulkokasvit.jpg" alt="kuva"style="width:100%" >
                <div class="caption">
                <h4>Ulkokasvit</h4>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4 ">
            <div class="thumbnail">
                <a href="tuotteet.php?kategoria=3">
                <img src="photo/tyokalut.jpg" alt="kuva" style="width:100%">
                <div class="caption">
                    <h4>Työkalut</h4>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
                <a href="tuotteet.php?kategoria=4">   
                <img src="photo/hoito.jpg" alt="kuva" style="width:100%">
                <div class="caption">
                <h4>Kasvien hoito</h4>
                </div>
            </div>
        </div>

    </div>



</div>
<?php
include("footer.php");
?>




















_