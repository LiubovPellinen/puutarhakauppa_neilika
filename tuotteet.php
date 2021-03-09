<?php
//include("tietokanta.php");
include("navigointi.php");
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}

$no_of_records_per_page = 3;
$offset = ($pageno - 1) * $no_of_records_per_page;

$kategoria_id = $_GET['kategoria'];

$total_pages_sql = "SELECT COUNT(*) AS count FROM tuotteet WHERE kategoria_id=$kategoria_id ";
$result = $yhteys->query($total_pages_sql);
$total_rows = $result->fetch_object()->count;
$total_pages = ceil($total_rows / $no_of_records_per_page);

$query = "SELECT * FROM tuotteet WHERE kategoria_id=$kategoria_id limit $no_of_records_per_page offset $offset";
$tulokset = $yhteys->query($query);
if ($tulokset->num_rows > 0) { ?>
    <div class="container">
        <div class="row">
            <?php
            while ($rivi = $tulokset->fetch_assoc()) { ?>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo $rivi["tuote_kuva"] ?>" alt="kuva">
                        <div class="caption">
                            <p><?php echo  $rivi["tuote_nimi"]; ?></p>
                        </div>

                    </div>
                </div>
        <?php
            }
        }
        ?>
        </div>

        <ul class="pagination">
            <li class="<?php if ($pageno <= 1) {
                            echo 'disabled';
                        } ?>"><a href="?pageno=1&kategoria=<?= $kategoria_id ?>">First</a></li>
            <li class="<?php if ($pageno <= 1) {
                            echo 'disabled';
                        } ?>">
                <a href="<?php if ($pageno <= 1) {
                                echo '#';
                            } else {
                                echo "?pageno=" . ($pageno - 1);
                            } ?>&kategoria=<?= $kategoria_id ?>"></i>Prev</a>
            </li>
            <li class="<?php if ($pageno >= $total_pages) {
                            echo 'disabled';
                        } ?>">
                <a href="<?php if ($pageno >= $total_pages) {
                                echo '#';
                            } else {
                                echo "?pageno=" . ($pageno + 1);
                            } ?>&kategoria=<?= $kategoria_id ?>">Next</a>
            </li>
            <li class="<?php if ($pageno >= $total_pages) {
                            echo 'disabled';
                        } ?>"><a href="?pageno=<?php echo $total_pages; ?>&kategoria=<?= $kategoria_id ?>">Last</a></li>
        </ul>
    </div>
    <?php
    include("footer.php");
    ?>