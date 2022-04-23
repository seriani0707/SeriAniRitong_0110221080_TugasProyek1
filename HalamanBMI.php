<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Pasien</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="warna.css">
    <title>Seri Ani Ritonga</title>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-5">Form Pasien</h2>
<form action="HalamanBMI.php" method="GET">
  <div class="form-group row">
    <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-8">
      <input id="berat" name="berat" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="umur" class="col-4 col-form-label">Umur</label> 
    <div class="col-8">
      <input id="umur" name="umur" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Laki Laki" required="required"> 
        <label for="jenis_kelamin_0" class="custom-control-label">Laki Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Perempuan" required="required"> 
        <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<hr>

<?php require_once "classBMI.php"; ?>

<div class="container">
    <h2 class="text-center mb-5">Data BMI Pasien</h2>
    <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Gender</th>
      <th scope="col">Umur</th>
      <th scope="col">Berat(kg)</th>
      <th scope="col">Tinggi(cm)</th>
      <th scope="col">Nilai BMI</th>
      <th scope="col">Status BMI</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $nomor = 1;
      foreach ($ar_pasien as $pasien){
        echo '<tr><td>' . $nomor . '</td>';
        echo '<td>' . $pasien['nama'] . '</td>';
        echo '<td>' . $pasien['kelamin'] . '</td>';
        echo '<td>' . $pasien['umur'] . '</td>';
        echo '<td>' . $pasien['berat'] . '</td>';
        echo '<td>' . $pasien['tinggi'] . '</td>';
        $BMI = $pasien["berat"] / (($pasien["tinggi"] / 100) ** 2);
        echo '<td>' . number_format($BMI, 1) . '</td>';
        $status = new bmiPasien();
        echo $status->statusBMI($BMI);
        echo '</tr>';
        $nomor++;
      }
      ?>
  </tbody>
</table>
    
</body>
</html>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

    </div>
<?php

include_once 'footer.php';
?>