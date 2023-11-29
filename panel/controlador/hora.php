<?php
    $html = "";
    if ($_POST["tipoSeleccionado"]=="Almoco") {
        $html = '
        <option value="12:00 PM">12:00</option>
        <option value="12:30 PM">12:30</option>
        <option value="01:00 PM">13:00</option>
        <option value="01:30 PM">13:30</option>
        <option value="02:00 PM">14:00</option>
        <option value="02:30 PM">14:30</option>
        <option value="03:00 PM">15:00</option>
        ';  
    }
    if ($_POST["tipoSeleccionado"]=="Jantar") {
        $html = '
        <option value="05:00 PM">17:00</option>
        <option value="05:30 PM">17:30</option>
        <option value="06:00 PM">18:00</option>
        <option value="06:30 PM">18:30</option>
        <option value="07:00 PM">19:00</option>
        <option value="07:30 PM">19:30</option>
        <option value="08:00 PM">20:00</option>
        <option value="08:30 PM">20:30</option>
        <option value="09:00 PM">21:00</option>
        <option value="09:30 PM">21:30</option>
        <option value="10:00 PM">22:00</option>
        <option value="10:30 PM">22:30</option>
        <option value="11:00 PM">23:00</option>
        ';  
    }
    echo $html; 
?>