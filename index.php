<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

        #footer{
             display: none;
        }

        h1 {
            position: relative;
            text-align: center;
        }

        p {
            position: relative;
            text-align: center;
        }

        div {
            position: relative;
            text-align: center;
            margin: auto;   
        }

        select {
            width: calc(30% - 10px);
            padding: 7px 0;
        }

        button {
            width: calc(30% - 10px);
            
        }
        .radioLeft input{
         text-align: left;
          display:inline;
        }
 
    </style>
    <title>PDO Toets Herkansing</title>
  </head>
  <body>
   

  <header >
    <h1>Maak je eigen burrito</h1>
   
    <form action="./create.php" method="post">
    <div class="container mt-5">
     <br>
        <div class="position-item">
            <div class="center col-12 col-sm-6 name-item">
                <p3 style="margin:auto;">Burritoformaat<span class="required"></span></p3>
                <br>
                <label for="InputBodenformaat" class="form-label"></label>
                <select id="burritoformaat" name="burritoformaat" class="form-control"required>
                    <option value="">Maak je keuze</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                    <option value="25">30</option>
                </select>
            </div>
            <br>
        <div class="position-item">
            <div class="center col-12 col-sm-6 name-item">
                <p style="margin:auto;">Saus<span class="required"></span></p>
                <label for="InputSaus" class="form-label"></label>
                <select id="saus" name="saus" class="form-control"required>
                    <option value="">Maak je keuze</option>
                    <option value="salsacrudo">Salsa Crudo</option>
                    <option value="salsaverde">Salsa verde</option>
                    <option value="salsaroja">Salsa roja</option>
                    <option value="créme fraiche">Créme fraiche</option>
                </select>
            </div>
        <br>
        <div class="radioLeft">
        <p style="margin:auto;">Bonen<span class="required"></span></p>
             <label for="InputBonen" class="form-label"></label>
            <input type="radio" id="kidneybonen" name="bonen" value="kidneybonen">
            <label for="kidneybonen">kidney Bonen</label><br>
            <input type="radio" id="zwartebonen" name="bonen" value="zwartebonen">
            <label for="zwartebonen">Zwarte Bonen</label><br>
            <input type="radio" id="bruinebonen" name="bonen" value="bruinebonen">
            <label for="bruinebonen">Bruine Bonen</label> 
        </div>
        <br>
        <div class="radioLeft">
        <p style="margin:auto;">Rijst<span class="required"></span></p>
        <label for="InputRijst" class="form-label"></label>
            <input type="checkbox" id="witterijst" name="rijst[]" value="witterijst">
            <label for="witterijst"> Witte Rijst</label><br>
            <input type="checkbox" id="zwarterijst" name="rijst[]" value="zwarterijst">
            <label for="zwarterijst"> Zwarte Rijst</label><br>
            <input type="checkbox" id="bruinerijst" name="rijst[]" value="bruinerijst">
            <label for="bruinerijst"> Bruine Rijst</label><br><br>    
        </div>

            <div class="btn-block">
            <input type="submit" name="submit" value="Versturen">

            </div>
    </form>
    </div>

    <br>
  </header>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
