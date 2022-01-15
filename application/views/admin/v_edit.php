<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>

<section class="content">
    <div class="container-fluid">

<div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
<form class="form-horizontal" method="POST" action="<?= BASE_URL('index.php?/Backend/update') ;?>">
                    <div>
                   
                  <div class="form-group row">
                    <label for="Nis" class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-6">
                      <input name="Nis" type="text" class="form-control" id="Nis" placeholder="<?= $edit->Nis; ?>">
                    </div>
                  </div>
                  <br>
                  <div class="form-group row">
                    <label for="Nama" class="col-sm-2 col-form-label">NAMA</label>
                    <div class="col-sm-6">
                      <input name="Nama" type="text" class="form-control" id="Nama" placeholder="<?= $edit->Nama; ?>">
                    </div>
                    </div>
                    <br>
                    <div class="form-group row">
                    <label for="Alamat" class="col-sm-2 col-form-label">ALAMAT</label>
                    <div class="col-sm-6">
                      <input name="Alamat" type="text" class="form-control" id="Alamat" placeholder="<?= $edit->Alamat; ?>">
                    </div>
                  </div>
                <!-- /.card-body -->
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  
                
                <!-- /.card-footer -->
                </div>
              </form>
              </div>
        </div>
    </div>
</div>   
            </div>
</section>
</body>
</html>