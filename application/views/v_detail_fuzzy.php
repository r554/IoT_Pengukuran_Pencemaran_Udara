<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="mb-0 text-uppercase">Detail Proses Fuzzy Sugeno</h6>
        <hr />

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-0 text-uppercase">Proses Derajat Keanggotaan</h6>
                        <hr>
                        <table class="table table-hover col-md-15 table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align:center;" colspan="5">Gas CO</th>
                                    <th scope="col" style="text-align:center;" colspan="5">Gas NO</th>
                                </tr>
                                <tr>
                                    <th scope="col">Baik</th>
                                    <th scope="col">Sedang</th>
                                    <th scope="col">Tidak Sehat</th>
                                    <th scope="col">Sangat Tidak Sehat</th>
                                    <th scope="col">Berbahaya</th>
                                    <th scope="col">Baik</th>
                                    <th scope="col">Sedang</th>
                                    <th scope="col">Tidak Sehat</th>
                                    <th scope="col">Sangat Tidak Sehat</th>
                                    <th scope="col">Berbahaya</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td><?= $nilai_derajat['co_baik'] ?></td>
                                    <td><?= $nilai_derajat['co_sedang'] ?></td>
                                    <td><?= $nilai_derajat['co_tidak_sehat'] ?></td>
                                    <td><?= $nilai_derajat['co_sangat_tidak_sehat'] ?></td>
                                    <td><?= $nilai_derajat['co_berbahaya'] ?></td>

                                    <td><?= $nilai_derajat['no_baik'] ?></td>
                                    <td><?= $nilai_derajat['no_sedang'] ?></td>
                                    <td><?= $nilai_derajat['no_tidak_sehat'] ?></td>
                                    <td><?= $nilai_derajat['no_sangat_tidak_sehat'] ?></td>
                                    <td><?= $nilai_derajat['no_berbahaya'] ?></td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-0 text-uppercase">Nilai Rule</h6>
                        <hr>
                        <table class="table table-hover col-md-15 table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align:center;">R1</th>
                                    <th scope="col" style="text-align:center;">R2</th>
                                    <th scope="col" style="text-align:center;">R3</th>
                                    <th scope="col" style="text-align:center;">R4</th>
                                    <th scope="col" style="text-align:center;">R5</th>
                                    <th scope="col" style="text-align:center;">R6</th>
                                    <th scope="col" style="text-align:center;">R7</th>
                                    <th scope="col" style="text-align:center;">R8</th>
                                    <th scope="col" style="text-align:center;">R9</th>
                                    <th scope="col" style="text-align:center;">R10</th>
                                    <th scope="col" style="text-align:center;">R11</th>
                                    <th scope="col" style="text-align:center;">R12</th>
                                    <th scope="col" style="text-align:center;">R13</th>
                                    <th scope="col" style="text-align:center;">R14</th>
                                    <th scope="col" style="text-align:center;">R15</th>
                                    <th scope="col" style="text-align:center;">R16</th>
                                    <th scope="col" style="text-align:center;">R17</th>
                                    <th scope="col" style="text-align:center;">R18</th>
                                    <th scope="col" style="text-align:center;">R19</th>
                                    <th scope="col" style="text-align:center;">R20</th>
                                    <th scope="col" style="text-align:center;">R21</th>
                                    <th scope="col" style="text-align:center;">R22</th>
                                    <th scope="col" style="text-align:center;">R23</th>
                                    <th scope="col" style="text-align:center;">R24</th>
                                    <th scope="col" style="text-align:center;">R25</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $nilai_rule['rule_1'] ?></td>
                                    <td><?= $nilai_rule['rule_2'] ?></td>
                                    <td><?= $nilai_rule['rule_3'] ?></td>
                                    <td><?= $nilai_rule['rule_4'] ?></td>
                                    <td><?= $nilai_rule['rule_5'] ?></td>
                                    <td><?= $nilai_rule['rule_6'] ?></td>
                                    <td><?= $nilai_rule['rule_7'] ?></td>
                                    <td><?= $nilai_rule['rule_8'] ?></td>
                                    <td><?= $nilai_rule['rule_9'] ?></td>
                                    <td><?= $nilai_rule['rule_10'] ?></td>
                                    <td><?= $nilai_rule['rule_11'] ?></td>
                                    <td><?= $nilai_rule['rule_12'] ?></td>
                                    <td><?= $nilai_rule['rule_13'] ?></td>
                                    <td><?= $nilai_rule['rule_14'] ?></td>
                                    <td><?= $nilai_rule['rule_15'] ?></td>
                                    <td><?= $nilai_rule['rule_16'] ?></td>
                                    <td><?= $nilai_rule['rule_17'] ?></td>
                                    <td><?= $nilai_rule['rule_18'] ?></td>
                                    <td><?= $nilai_rule['rule_19'] ?></td>
                                    <td><?= $nilai_rule['rule_20'] ?></td>
                                    <td><?= $nilai_rule['rule_21'] ?></td>
                                    <td><?= $nilai_rule['rule_22'] ?></td>
                                    <td><?= $nilai_rule['rule_23'] ?></td>
                                    <td><?= $nilai_rule['rule_24'] ?></td>
                                    <td><?= $nilai_rule['rule_25'] ?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-0 text-uppercase">Proses Defuzzyfikasi</h6>
                        <hr>
                        <table class="table table-hover col-md-15 table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align:center;">ID</th>
                                    <th scope="col" style="text-align:center;">Average Nilai CO</th>
                                    <th scope="col" style="text-align:center;">Average Nilai NO</th>
                                    <th scope="col" style="text-align:center;">Hasil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td><?= $hasil['id_nilai_derajat'] ?></td>
                                    <td><?= $hasil['rata_nilai_co'] ?></td>
                                    <td><?= $hasil['rata_nilai_no'] ?></td>
                                    <td><?= $hasil['hasil_fuzzy'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--end page wrapper -->