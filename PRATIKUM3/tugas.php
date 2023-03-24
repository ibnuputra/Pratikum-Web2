<?php

require_once 'header.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <h2>Form Registrasi</h2>
        <br>
        <form method="POST">
            <form>
                <div class="form-group row">
                    <label for="NIM" class="col-4 col-form-label">NIM</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-adn"></i>
                                </div>
                            </div>
                            <input id="NIM" name="NIM" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama " class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                            <input id="nama " name="nama " type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Jenis Kelamin</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jenis klamin" id="jenis klamin_0" type="radio" class="custom-control-input" value="laki">
                            <label for="jenis klamin_0" class="custom-control-label">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jenis klamin" id="jenis klamin_1" type="radio" class="custom-control-input" value="Perempuan">
                            <label for="jenis klamin_1" class="custom-control-label">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="parodi" class="col-4 col-form-label">Program Studi</label>
                    <div class="col-8">
                        <select id="parodi" name="parodi" class="custom-select">
                            <option value="SI">Sistem Informasi</option>
                            <option value="TI">Teknik Informasi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Checkboxes</label>
                    <div class="col-8">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="checkbox" id="checkbox_0" type="checkbox" class="custom-control-input" value="CSS">
                            <label for="checkbox_0" class="custom-control-label">CSS</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="checkbox" id="checkbox_1" type="checkbox" class="custom-control-input" value="Html">
                            <label for="checkbox_1" class="custom-control-label">Html</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="checkbox" id="checkbox_2" type="checkbox" class="custom-control-input" value="Java scrip">
                            <label for="checkbox_2" class="custom-control-label">Java scrip</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="checkbox" id="checkbox_3" type="checkbox" class="custom-control-input" value="RWD Bootsrap">
                            <label for="checkbox_3" class="custom-control-label">RWD Bootstrap</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="checkbox" id="checkbox_4" type="checkbox" class="custom-control-input" value="python">
                            <label for="checkbox_4" class="custom-control-label">Python</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="checkbox" id="checkbox_5" type="checkbox" class="custom-control-input" value="java">
                            <label for="checkbox_5" class="custom-control-label">Java</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="checkbox" id="checkbox_6" type="checkbox" class="custom-control-input" value="PHP">
                            <label for="checkbox_6" class="custom-control-label">PHP</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label>
                    <div class="col-8">
                        <select id="domisili" name="domisili" class="custom-select">
                            <option value="Jakarta">Jakarta</option>
                            <option value="depok">Depok</option>
                            <option value="bogor">Bogor</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="email" name="email" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            <table class="table table-bordered">
                <tr class="table-warning text-uppercase">
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis kelamin</th>
                    <th>Domisili</th>
                    <th>Program Studi</th>
                    <th>Skill Programing</th>
                    <th>Skor</th>
                    <th>Predikat</th>
                </tr>

                <?php
                if (isset($_POST['submit'])) {
                    $nim = $_POST['nim'];
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $jenis_kelamin = $_POST['jenis_kelamin'];
                    $domisili = $_POST['domisili'];
                    $program_studi = $_POST['program_studi'];
                    $skill_user = $_POST['skill'];
                    $skor_user = 0;
                    $predikat = "";
                    foreach ($skill_user as $skor) {
                        $skor_user += $skills[$skor];
                    };
                    if ($skor_user >= 100) {
                        $predikat = "Sangat Baik";
                    } else if ($skor_user >= 60 && $skor_user < 100) {
                        $predikat = "Baik";
                    } else if ($skor_user >= 40 && $skor_user < 60) {
                        $predikat = "Cukup";
                    } else if ($skor_user > 0 && $skor_user < 40) {
                        $predikat = "Kurang";
                    } else if ($skor_user == 0) {
                        $predikat = "Tidak Memadai";
                    }
                  }
                ?>
                    <tr>
                        <td><?= $nim; ?></td>
                        <td><?= $nama; ?></td>
                        <td><?= $email; ?></td>
                        <td><?= $jenis_kelamin; ?></td>
                        <td><?= $domisili; ?></td>
                        <td><?= $program_studi; ?></td>
                        <td><?php foreach ($skill_user as $skill) {
                                echo $skill . " ";
                            }; ?></td>
                        <td><?= $skor_user; ?></td>
                        <td><?= $predikat; ?></td>
                    </tr>
                <?php  ?>
            </table>
    </div>

</body>

</html>