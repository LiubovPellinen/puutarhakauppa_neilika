<?php
include("navigointi.php");
include("viesti_pros.php");

?>

<div class="App">
    <div class="vertical-center">
        <div class="inner-block">
            <form action="" method="post">
                <h3>Voit ottaa meihin yhteyttä</h3>
                <?php echo $_emailErr; ?>
                <?php echo $_feefbackErr; ?>
                <?php echo $_feedbackSucsess; ?>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nimi</label>
                    <div class="col">
                        <input type="text" class="form-control" name="nimi" id="nimi" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Sähköposti</label>
                    <div class="col">
                        <input type="email" class="form-control" name="posti" id="posti" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Aihe</label>
                    <div class="col">
                        <input type="text" class="form-control" name="aihe" id="aihe" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Viesti</label>
                    <div class="col">
                        <textarea class="form-control" rows="5" name="k_viesti" id="k_viesti"></textarea>
                    </div>

                </div>

                <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">Ota yhteyttä
                </button>
            </form>
        </div>
    </div>
</div>
<?php
include("footer.php");

?>