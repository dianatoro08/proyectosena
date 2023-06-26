<?php include "../php/session.php";?>
<!DOCTYPE html>
<html>
</head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRDhotel</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
<body>
  <?php include('menuOpciones.php'); ?>
<?php if($_SESSION["rol"] == 1){ ?>
  <main>
    <table>
      <tr>
        <th>Desayuno</th>
        <th>Almuerzo</th>
        <th>Cena</th>
      </tr>
      <tr>
        <td>
        <br>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../img/Desayuno1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Desayuno 1</h5>
                <p class="card-text">Tostadas con mantequilla y mermelada.</p>
                <input type="button" class="btn btn-primary" onclick="window.location.href='formularioRe.php?menu_seleccionado=Desayuno 1'" value="Pedir" >
            </div>
        </div>
        </td>
        <td>
        <br>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../img/Almuerzo1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Almuerzo 1</h5>
                <p class="card-text">Ensalada de pollo con aderezo de mostaza</p>
                <input type="button" class="btn btn-primary" onclick="window.location.href='formularioRe.php?menu_seleccionado=Almuerzo 1'"  value="Pedir">
            </div>
        </div>
          
        </td>
        <td>
        <br>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../img/Cena1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Cena 1</h5>
                <p class="card-text">Salmon a la parrilla con verduras al horno</p>
                <input type="button" class="btn btn-primary" onclick="window.location.href='formularioRe.php?menu_seleccionado=Cena 1'"  value="Pedir">
            </div>
        </div>
        </td>
      </tr>

      <tr>
        <td>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../img/Desayuno2.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Desayuno 2</h5>
                <p class="card-text">Cereal con leche y frutas</p>
                <input type="button" class="btn btn-primary" onclick="window.location.href='formularioRe.php?menu_seleccionado=Desayuno 2'"  value="Pedir">
            </div>
        </div>
        </td>
        <td>
        <br>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../img/Almuerzo2.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Almuerzo 2</h5>
                <p class="card-text">Panini de jamón y queso con papas fritas</p>
                <input type="button" class="btn btn-primary" onclick="window.location.href='formularioRe.php?menu_seleccionado=Almuerzo 2'"  value="Pedir">
            </div>
        </div>
        </td>
        <td>
        <br>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../img/Cena2.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Cena 2</h5>
                <p class="card-text">Pasta con salsa de tomate y albóndigas</p>
                <input type="button" class="btn btn-primary" onclick="window.location.href='formularioRe.php?menu_seleccionado=Cena 2'"  value="Pedir">
            </div>
        </div>          
        </td>
      </tr>
      <tr>
        <td>
        <br>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../img/Desayuno3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Desayuno 3</h5>
                <p class="card-text">Huevos revueltos con tocino y pan tostado</p>
                <input type="button" class="btn btn-primary" onclick="window.location.href='formularioRe.php?menu_seleccionado=Desayuno 3'"  value="Pedir">
            </div>
        </div>
        </td>
        <td>
        <br>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../img/Almuerzo3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Almuerzo 3</h5>
                <p class="card-text">Wrap de pollo con aguacate y ensalada</p>
                <input type="button" class="btn btn-primary" onclick="window.location.href='formularioRe.php?menu_seleccionado=Almuerzo 3'"  value="Pedir">
            </div>
        </div>          
        </td>
        <td>
        <br>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../img/Cena3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Cena 3</h5>
                <p class="card-text">Pizza de vegetales con masa integral</p>
                <input type="button" class="btn btn-primary" onclick="window.location.href='formularioRe.php?menu_seleccionado=Cena 3'" value="Pedir">
            </div>
        </div>          
        </td>
        </form>
      </tr>     
    </table>
  </main>
  <?php }elseif($_SESSION["rol"] == 2){ ?>
        <button class="btn btn-success" name="registro" onclick="window.location.href='consultarReserva.php'">Consultar Reserva Comidas</button>

  <?php } ?>
</body>
</html>
