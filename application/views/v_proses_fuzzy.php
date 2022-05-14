<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="mb-0 text-uppercase">Proses Fuzzy Sugeno</h6>
        <hr />

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">Pengujian Kualitas Udara</h5>
                        </div>
                        <p class="card-text">Pengujian Kualitas Udara Dapat Digunakan Setelah 30 Menit Setelah Alat
                            Dihidupkan</p> <button type="button" class="btn btn-success" id="btnCounter" disabled>Uji
                            Kualitas Udara <span id="count"></span></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nilai Average CO</th>
                                    <th>Nilai Average NO</th>
                                    <th>Nilai Fuzzy Sugeno </th>
                                    <th>Kualitas Udara</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($nilai_hasil as $rnilai_hasil) :
                                ?>
                                <tr class="text-center">
                                    <td><?= $no++; ?></td>
                                    <td><?= $rnilai_hasil->rata_nilai_co; ?></td>
                                    <td><?= $rnilai_hasil->rata_nilai_no; ?></td>
                                    <td><?= round($rnilai_hasil->hasil_fuzzy, 2) ; ?></td>
                                    <td>
                                        <?php
                                            if ($rnilai_hasil->hasil_fuzzy <= 50) {
                                                echo "Baik";
                                            } elseif ($rnilai_hasil->hasil_fuzzy <= 100) {
                                                echo "Sedang";
                                            } elseif ($rnilai_hasil->hasil_fuzzy <= 200) {
                                                echo "Tidak Sehat";
                                            } elseif ($rnilai_hasil->hasil_fuzzy <= 300) {
                                                echo "Sangat Tidak Sehat";
                                            } elseif ($rnilai_hasil->hasil_fuzzy <= 400) {
                                                echo "Berbahaya";
                                            }
                                            ?>
                                    </td>
                                </tr>
                                <?php endforeach;
                                ?>
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nilai Average CO</th>
                                    <th>Nilai Average NO</th>
                                    <th>Nilai Fuzzy Sugeno </th>
                                    <th>Kualitas Udara</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--end page wrapper -->

<script>
var spn = document.getElementById("count");
var btn = document.getElementById("btnCounter");

var count = 10; // Set count
var timer = null; // For referencing the timer

(function countDown() {
    // Display counter and start counting down
    spn.textContent = count;

    // Run the function again every second if the count is not zero
    if (count !== 0) {
        timer = setTimeout(countDown, 1000);
        count--; // decrease the timer
    } else {
        // Enable the button
        btn.removeAttribute("disabled");
        spn.textContent = "";
        $('#btnCounter').on('click', function(e) {
            e.preventDefault();
            window.location =
            "<?= base_url('Proses_fuzzy/fuzzyfikasi') ?>"; //redirect ke halaman berikutnya
        });
    }
}());
</script>