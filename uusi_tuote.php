<?php
include("navigointi.php");
if(isset($_SESSION['admin'])){
    if($_SESSION['admin'] == 0) {
     die();
     
    }} 

//include("tietokanta.php");
include("uusi_tuote_pros.php");

?>
<div class="App">
    <div class="vertical-center">
        <div class="inner-block">
            <form action="" method="post" enctype="multipart/form-data">

                <h3>Tuotetiedot</h3>
                <?php echo$productUploaded?>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tuotteen nimi</label>
                    <div class="col">
                        <input type="text" class="form-control" name="nimi" id="nimi" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Kuvaus</label>
                    <div class="col">
                        <input type="text" class="form-control" name="tuotekuvaus" id="tuotekuvaus" />
                    </div>
                </div>

                <div class="form-group row">
                    <?php echo$fileTooLarge; ?>
                    <?php echo $formatErr ?>
                    <?php echo$fileNotUpload?>
                    <?php echo$uploadErr?>
                    
                    <label class="col-sm-3 col-form-label" for="fileToUpload">Kuva</label>
                    <div class="col">
                   
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Hinta</label>
                    <div class="col">
                        <input type="text" class="form-control" name="tuotehinta" id="tuotehinta" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Kategoria</label>
                    <?php
                    $kategoriat = [];
                    $query = "SELECT kategoria FROM tuotekategoriat ORDER BY kategoria";
                    $tulokset = $yhteys->query($query);

                    if ($tulokset->num_rows > 0) {
                        while ($rivi = $tulokset->fetch_assoc()) {
                            $kategoriat[] = $rivi["kategoria"];
                        }
                    }
                    ?>
                    <div class="col">
                        <input list="ketegoriat" name="kategoria" id="kategoria" autocomplete="off">
                        <datalist id="ketegoriat">
                            <?php
                            foreach ($kategoriat as $k) {
                                echo "<option value=\"$k\">";
                            }
                            ?>
                        </datalist>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Uusi kstegoria</label>
                    <div class="col">
                        <input type="text" class="form-control" name="uusi_kategoria" id="uusi_kategoria" />
                    </div>
                </div>


                <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">Ladata
                </button>
            </form>
        </div>
    </div>
</div>
<?php
$yhteys->close();
?>
<?php
include("footer.php");

?>