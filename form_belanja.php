<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
    <title>Document</title>
</head>
<body>
    <form class="form-horizontal p-5 shadow"style="background-color:#f1f2f6;" method="POST" action="form_belanja.php">
        <div class="text-center">
            <h3 class="mb-5 text-primary text-mg">Form Belanja</h3>
        </div> 

        <div class="form-group row">
          <label class="col-4 col-form-label" for="costumer">Kostumer</label> 
          <div class="col-8">
            <input id="costumer" name="customer" value="" placeholder="Nama Kostumer" type="text" class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-4">Jenis Produk Pembelian</label> 
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
              <label for="radio_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Kulkas"> 
              <label for="radio_1" class="custom-control-label">Kulkas</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="MesiCuci"> 
              <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label for="text" class="col-4 col-form-label">Jumlah</label> 
          <div class="col-8">
            <input id="text" name="jumlah" value="" type="text" class="form-control">
          </div>
        </div> 

        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="proses" value='simpan' type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
      <?php
    $proses= $_POST['proses'];
    $customer= $_POST['customer'];
    $product= $_POST['produk'];
    $jumlah= $_POST['jumlah'];
    ?>

<div>
<form class="form-horizontal p-5 shadow"style="background-color:#f1f2f6;">
      <?php
    echo "</br>Nama customer : $customer 
          </br>Product : $product 
          </br>Jumlah : $jumlah"; 
         ?>


    <?php
        if($product == "TV"){
            echo "</br>Total Harga : ". 4200000 * $jumlah;
        }
        else if($product == "Kulkas"){
            echo "</br>Total Harga : ". 3100000 * $jumlah;
        }
        else {
            echo "</br>Total Harga : ". 3800000 * $jumlah;
        }
      ?>
</body>
</html>
<?php 

?>

