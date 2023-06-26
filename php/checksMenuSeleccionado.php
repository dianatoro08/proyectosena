<?php 
            if (!empty($_GET['menu_seleccionado'])) {
              ?>
              <input type="hidden" value="<?php echo $_GET['menu_seleccionado']?>" name="menu-seleccionado">
              <?php
              if ($_GET['menu_seleccionado'] == "Desayuno 1" || $_GET['menu_seleccionado'] == "Desayuno 2" || $_GET['menu_seleccionado'] == "Desayuno 3") {
                ?>    
        <br><br>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="servicio-seleccionado" name="servicio-desayuno" value="<?php echo $_GET['menu_seleccionado']?>" checked="checked">
                <label class="form-check-label" for="servicio-desayuno"><?php echo $_GET['menu_seleccionado']?></label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="servicio-almuerzo" name="servicio-almuerzo" value="Almuerzo">
          <label class="form-check-label" for="servicio-almuerzo">Almuerzo</label>
        </div>
        
        <div class="form-check">
        <input type="checkbox" class="form-check-input" id="servicio-cena" name="servicio-cena" value="Cena">
        <label class="form-check-label" for="servicio-cena">Cena</label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="servicio-habitacion" name="servicio-habitacion" value="servicio-habitacion">
          <label class="form-check-label" for="servicio-habitacion">Servicio a la habitación</label>
        </div> 
<?php
        }
        else if($_GET['menu_seleccionado'] == "Almuerzo 1" || $_GET['menu_seleccionado'] == "Almuerzo 2" || $_GET['menu_seleccionado'] == "Almuerzo 3"){
?>
        <br><br>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="servicio-desayuno" name="servicio-desayuno" value="desayuno">
          <label class="form-check-label" for="servicio-desayuno">Desayuno</label>
        </div>

        <div class="form-check">
                <input type="checkbox" class="form-check-input" id="servicio-seleccionado" name="servicio-almuerzo" value="<?php echo $_GET['menu_seleccionado']?>" checked="checked">
                <label class="form-check-label" for="servicio-almuerzo"><?php echo $_GET['menu_seleccionado']?></label>
                
        </div>
        
        <div class="form-check">
        <input type="checkbox" class="form-check-input" id="servicio-cena" name="servicio-cena" value="Cena">
        <label class="form-check-label" for="servicio-cena">Cena</label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="servicio-habitacion" name="servicio-habitacion" value="servicio-habitacion">
          <label class="form-check-label" for="servicio-habitacion">Servicio a la habitación</label>
        </div> 

<?php
    }
    else if($_GET['menu_seleccionado'] == "Cena 1" || $_GET['menu_seleccionado'] == "Cena 2" || $_GET['menu_seleccionado'] == "Cena 3"){
    {
?>
        <br><br>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="servicio-desayuno" name="servicio-desayuno" value="desayuno">
          <label class="form-check-label" for="servicio-desayuno">Desayuno</label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="servicio-almuerzo" name="servicio-almuerzo" value="Almuerzo">
          <label class="form-check-label" for="servicio-almuerzo">Almuerzo</label>
        </div>
        <div class="form-check">
                <input type="checkbox" class="form-check-input" id="servicio-seleccionado" name="servicio-cena" value="<?php echo $_GET['menu_seleccionado']?>" checked="checked">
                <label class="form-check-label" for="servicio-cena"><?php echo $_GET['menu_seleccionado']?></label>
                
        </div>

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="servicio-habitacion" name="servicio-habitacion" value="servicio-habitacion">
          <label class="form-check-label" for="servicio-habitacion">Servicio a la habitación</label>
        </div> 
<?php
    }
        }
            }
            else{
?>
           <div class="form-check">
          <input type="checkbox" class="form-check-input" id="servicio-desayuno" name="servicio-desayuno" value="desayuno">
          <label class="form-check-label" for="servicio-desayuno">Desayuno</label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="servicio-almuerzo" name="servicio-almuerzo" value="Almuerzo">
          <label class="form-check-label" for="servicio-almuerzo">Almuerzo</label>
        </div>
        
        <div class="form-check">
        <input type="checkbox" class="form-check-input" id="servicio-cena" name="servicio-cena" value="Cena">
        <label class="form-check-label" for="servicio-cena">Cena</label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="servicio-habitacion" name="servicio-habitacion" value="servicio-habitacion">
          <label class="form-check-label" for="servicio-habitacion">Servicio a la habitación</label>
        </div>
    <?php         
    }
?>
        