<?php
    $html = "";
    if ($_POST["tipoSeleccionado"]=="Almoco") {
        $html = '
        <option value="12:00">12:00 PM</option>
        <option value="12:30">12:30 PM</option>
        <option value="13:00">01:00 PM</option>
        <option value="13:30">01:30 PM</option>
        <option value="14:00">02:00 PM</option>
        <option value="14:30">02:30 PM</option>
        <option value="15:00">03:00 PM</option>
        ';  
    }
    if ($_POST["tipoSeleccionado"]=="Jantar") {
        $html = '
        <option value="17:00">05:00 PM</option>
        <option value="17:30">05:30 PM</option>
        <option value="18:00">06:00 PM</option>
        <option value="18:30">06:30 PM</option>
        <option value="19:00">07:00 PM</option>
        <option value="19:30">07:30 PM</option>
        <option value="20:00">08:00 PM</option>
        <option value="20:30">08:30 PM</option>
        <option value="21:00">09:00 PM</option>
        <option value="21:30">09:30 PM</option>
        <option value="22:00">10:00 PM</option>
        <option value="22:30">10:30 PM</option>
        <option value="23:00">11:00 PM</option>
        ';  
    }
    echo $html; 
?>
