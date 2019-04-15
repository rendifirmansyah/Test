<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Kalkulator | Rendi Firmansyah</title>
</head>
<body>

    <div class="container">
        <div class="alert alert-primary" role="alert" style="margin-top: 50px;">
            <marquee>Pengoperasian Dihitung Sesuai Urutan Input Text !!</marquee> 
      </div>
      <div style="margin-top: 10%; margin-left: 25%;">
        <form action="" method="post">
          <div class="form-group">
            <div class="row">
                <input type="number" class="form-control col-md-6" id="ipx_1" name="input_1">
                <input type="checkbox" class="col-md-1" name="ck_1" value="true">
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <input type="number" class="form-control col-md-6" id="ipx_2" name="input_2">
                <input type="checkbox" class="col-md-1" name="ck_2" value="true">
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <input type="number" class="form-control col-md-6" id="ipx_3" name="input_3">
                <input type="checkbox" class="col-md-1" name="ck_3" value="true">
            </div>
        </div>
        <button class="btn btn-primary col-md-1" type="button" id="btn_tambah">+</button>
        <button class="btn btn-warning col-md-1" type="button" id="btn_kurang">-</button>
        <button class="btn btn-success col-md-1" type="button" id="btn_bagi">:</button>
        <button class="btn btn-danger col-md-1" type="button" id="btn_kali">x</button>
        <br><br>
        <div class="form-group">
            <div class="row">
                <input type="number" class="form-control col-md-2" name="status" readonly="" placeholder="Hasil ...">
            </div>
        </div>
    </form>
</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
    $("#btn_tambah").on("click",function(){
        //alert("hai");
        var value_1 = $('input[name="input_1"]').val();
        var value_2 = $('input[name="input_2"]').val();
        var value_3 = $('input[name="input_3"]').val();
        var ck_1    = $('input[name="ck_1"]').prop("checked");
        var ck_2    = $('input[name="ck_2"]').prop("checked");
        var ck_3    = $('input[name="ck_3"]').prop("checked");
        /*Hanya 1 Kotak*/
        if (ck_1 == true && ck_2 == false && ck_3 == false) {
            alert("Ceklis 2 Kotak atau lebih");
        }else if(ck_1 == false && ck_2 == true && ck_3 == false) {
            alert("Ceklis 2 Kotak atau lebih");
        }else if(ck_1 == false && ck_2 == false && ck_3 == true) {
            alert("Ceklis 2 Kotak atau lebih");
        }

        /*Operasi Hitung 2 Kotak*/
        else if(ck_1 == true && ck_2 == true && ck_3 == false) {
            var hasil = parseFloat(value_1)+parseFloat(value_2);
            $('input[name="status"]').val(hasil);
        }else if(ck_1 == true && ck_2 == false && ck_3 == true) {
            var hasil = parseFloat(value_1)+parseFloat(value_3);
            $('input[name="status"]').val(hasil);
        }else if(ck_1 == false && ck_2 == true && ck_3 == true) {
            var hasil = parseFloat(value_2)+parseFloat(value_3);
            $('input[name="status"]').val(hasil);
        }

        /*Operasi Hitung 3 Kotak*/
        else if(ck_1 == true && ck_2 == true && ck_3 == true) {
         var hasil = parseFloat(value_1)+parseFloat(value_2)+parseFloat(value_3);
         $('input[name="status"]').val(hasil);
     }

     /*Ceklis Kosong*/
     else if(ck_1 == false && ck_2 == false && ck_3 == false) {
        alert("Ceklis Minimal 2 Checkbox");
    }
});

    $("#btn_kurang").on("click",function(){
        //alert("hai");
        var value_1 = $('input[name="input_1"]').val();
        var value_2 = $('input[name="input_2"]').val();
        var value_3 = $('input[name="input_3"]').val();
        var ck_1    = $('input[name="ck_1"]').prop("checked");
        var ck_2    = $('input[name="ck_2"]').prop("checked");
        var ck_3    = $('input[name="ck_3"]').prop("checked");

        /*Hanya 1 Kotak*/
        if (ck_1 == true && ck_2 == false && ck_3 == false) {
            alert("Ceklis 2 Kotak atau lebih");
        }else if(ck_1 == false && ck_2 == true && ck_3 == false) {
            alert("Ceklis 2 Kotak atau lebih");
        }else if(ck_1 == false && ck_2 == false && ck_3 == true) {
            alert("Ceklis 2 Kotak atau lebih");
        }

        /*Operasi Hitung 2 Kotak*/
        else if(ck_1 == true && ck_2 == true && ck_3 == false) {
            var hasil = (value_1 - value_2);
            $('input[name="status"]').val(hasil);
        }else if(ck_1 == true && ck_2 == false && ck_3 == true) {
            var hasil = (value_1 - value_3);
            $('input[name="status"]').val(hasil);
        }else if(ck_1 == false && ck_2 == true && ck_3 == true) {
            var hasil = (value_2 - value_3);
            $('input[name="status"]').val(hasil);
        }

        /*Operasi Hitung 3 Kotak*/
        else if(ck_1 == true && ck_2 == true && ck_3 == true) {
            var hasil = (value_1 - value_2 - value_3);
            $('input[name="status"]').val(hasil);
        }

        /*Ceklis Kosong*/
        else if(ck_1 == false && ck_2 == false && ck_3 == false) {
         alert("Ceklis Minimal 2 Checkbox");
     }
 });

    $("#btn_bagi").on("click",function(){
        //alert("hai");
        var value_1 = $('input[name="input_1"]').val();
        var value_2 = $('input[name="input_2"]').val();
        var value_3 = $('input[name="input_3"]').val();
        var ck_1    = $('input[name="ck_1"]').prop("checked");
        var ck_2    = $('input[name="ck_2"]').prop("checked");
        var ck_3    = $('input[name="ck_3"]').prop("checked");

        /*Hanya 1 Kotak*/
        if (ck_1 == true && ck_2 == false && ck_3 == false) {
            alert("Ceklis 2 Kotak atau lebih");
        }else if(ck_1 == false && ck_2 == true && ck_3 == false) {
            alert("Ceklis 2 Kotak atau lebih");
        }else if(ck_1 == false && ck_2 == false && ck_3 == true) {
            alert("Ceklis 2 Kotak atau lebih");
        }

        /*Operasi Hitung 2 Kotak*/
        else if(ck_1 == true && ck_2 == true && ck_3 == false) {
            var hasil = (value_1 / value_2);
            $('input[name="status"]').val(hasil);
        }else if(ck_1 == true && ck_2 == false && ck_3 == true) {
            var hasil = (value_1 / value_3);
            $('input[name="status"]').val(hasil);
        }else if(ck_1 == false && ck_2 == true && ck_3 == true) {
            var hasil = (value_2 / value_3);
            $('input[name="status"]').val(hasil);
        }

        /*Operasi Hitung 3 Kotak*/
        else if(ck_1 == true && ck_2 == true && ck_3 == true) {
            var hasil = (value_1 / value_2 / value_3);
            $('input[name="status"]').val(hasil);
        }

        /*Ceklis Kosong*/
        else if(ck_1 == false && ck_2 == false && ck_3 == false) {
         alert("Ceklis Minimal 2 Checkbox");
     }
 });

    $("#btn_kali").on("click",function(){
        //alert("hai");
        var value_1 = $('input[name="input_1"]').val();
        var value_2 = $('input[name="input_2"]').val();
        var value_3 = $('input[name="input_3"]').val();
        var ck_1    = $('input[name="ck_1"]').prop("checked");
        var ck_2    = $('input[name="ck_2"]').prop("checked");
        var ck_3    = $('input[name="ck_3"]').prop("checked");

        /*Hanya 1 Kotak*/
        if (ck_1 == true && ck_2 == false && ck_3 == false) {
            alert("Ceklis 2 Kotak atau lebih");
        }else if(ck_1 == false && ck_2 == true && ck_3 == false) {
            alert("Ceklis 2 Kotak atau lebih");
        }else if(ck_1 == false && ck_2 == false && ck_3 == true) {
            alert("Ceklis 2 Kotak atau lebih");
        }

        /*Operasi Hitung 2 Kotak*/
        else if(ck_1 == true && ck_2 == true && ck_3 == false) {
            var hasil = (value_1 * value_2);
            $('input[name="status"]').val(hasil);
        }else if(ck_1 == true && ck_2 == false && ck_3 == true) {
            var hasil = (value_1 * value_3);
            $('input[name="status"]').val(hasil);
        }else if(ck_1 == false && ck_2 == true && ck_3 == true) {
            var hasil = (value_2 * value_3);
            $('input[name="status"]').val(hasil);
        }

        /*Operasi Hitung 3 Kotak*/
        else if(ck_1 == true && ck_2 == true && ck_3 == true) {
            var hasil = (value_1 * value_2 * value_3);
            $('input[name="status"]').val(hasil);
        }

        /*Ceklis Kosong*/
        else if(ck_1 == false && ck_2 == false && ck_3 == false) {
         alert("Ceklis Minimal 2 Checkbox");
     }
 });
</script>

</body>
</html>