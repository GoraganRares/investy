<?php

// require_once "../obiecte/autoloader.php";

class Idei extends Db {

    public function get_all_ideas() {

        $sql = "SELECT * FROM idei ORDER BY id DESC";
        $result = $this->connect()->query($sql);

        $flames = []; // idei promovate
        $regular = []; // idei nepromovate

        while ($row = $result->fetch()) {

            if ($row['flame'] == "da") {
                array_push($flames, $row);
            
            }else {
                
                array_push($regular, $row);
            
            }

        }

        foreach ($flames as $key => $value) {
            
            ?>
                <div class="row flame">

                    <div>
        
                        <div class="green_btn"> <img src="img/icons/flame.png" alt="Investy"> </div>

                    </div>
                    <div>Manea Victor</div>
                    <div><?php echo date("d/m/Y", strtotime($value['creat'])) ?></div>
                    <div><?php echo $value['titlu'] ?></div>
                    <div>
                        <!-- <div class="green_btn"> <img src="img/icons/verify.png" alt="Investy"> </div> -->
                        <div class="blue_btn" onclick="window.open('idee.php?id=<?php echo $value['id'] ?>', '_self')" > <img src="img/icons/paper-plane.png" alt="Investy"> </div>
                        <div class="blue_btn"> <img src="img/icons/share.png" data-investitor = '<?php echo $value['id'] ?>' alt="Investy"> </div>
                    </div>
                </div>
            <?php

        }

        foreach ($regular as $key => $value) {
            
            ?>
               <div class="row">

                    <div></div>
                    <div>Manea Victor</div>
                    <div><?php echo date("d/m/Y", strtotime($value['creat'])) ?></div>
                    <div><?php echo $value['titlu'] ?></div>
                    <div>
                        <!-- <div class="green_btn"> <img src="img/icons/verify.png" alt="Investy"> </div> -->
                        <div class="blue_btn" onclick="window.open('idee.php?id=<?php echo $value['id'] ?>', '_self')" > <img src="img/icons/paper-plane.png" alt="Investy"> </div>
                        <div class="blue_btn"> <img src="img/icons/share.png" data-investitor = '<?php echo $value['id'] ?>' alt="Investy"> </div>
                    </div>
                </div>
            <?php

        }

    }

    public function get_five_ideas() {

        $sql = "SELECT * FROM idei ORDER BY id DESC LIMIT 5";
        $result = $this->connect()->query($sql);

        $flames = []; // idei promovate
        $regular = []; // idei nepromovate

        while ($row = $result->fetch()) {

            if ($row['flame'] == "da") {
                array_push($flames, $row);
            
            }else {
                
                array_push($regular, $row);
            
            }

        }

        foreach ($flames as $key => $value) {
            
            ?>
            <div class="row flame">

                <div>
    
                    <div class="green_btn"> <img src="img/icons/flame.png" alt="Investy"> </div>

                </div>
                <div>Manea Victor</div>
                <div><?php echo $value['titlu'] ?></div>
                <div class="blue_btn" onclick="window.open('idee.php?id=<?php echo $value['id'] ?>', '_self')" > <img src="img/icons/paper-plane.png" alt="Investy"> </div>
                <div class="blue_btn"> <img src="img/icons/share.png" data-investitor = '<?php echo $value['id'] ?>' alt="Investy"> </div>
            </div>
            <?php

        }

        foreach ($regular as $key => $value) {
            
            ?>
            <div class="row">

                <div></div>
                <div>Popescu Andrei</div>
                <div><?php echo $value['titlu']; ?></div>
                <div class="blue_btn" onclick="window.open('idee.php?id=<?php echo $value['id'] ?>', '_self')" > <img src="img/icons/paper-plane.png" alt="Investy"> </div>
                <div class="blue_btn"> <img src="img/icons/share.png" data-investitor = '<?php echo $value['id'] ?>' alt="Investy"> </div>

            </div>
            <?php

        }

    }

    public function get_idea($id) {

        $sql = "SELECT * FROM idei WHERE id = '$id'";
        $result = $this->connect()->query($sql);
        $row = $result->fetch();

        $data = [];

        $data['idei'] = $row;

        $sql = "SELECT * FROM idei_first_full WHERE idee = '$id'";
        $result = $this->connect()->query($sql);
        $row = $result->fetch();

        $data['idei_full'] = $row;

        return($data);

    }

    public function get_investor_ideas($vkey) {

        $sql = "SELECT * FROM idei WHERE investitor LIKE '%$vkey%' ORDER BY id DESC";
        $result = $this->connect()->query($sql);

        $flames = []; // idei promovate
        $regular = []; // idei nepromovate

        while ($row = $result->fetch()) {

            if ($row['flame'] == "da") {
                array_push($flames, $row);
            
            }else {
                
                array_push($regular, $row);
            
            }

        }

        foreach ($flames as $key => $value) {
            
            ?>
                <div class="row flame">

                    <div>
        
                        <div class="green_btn"> <img src="img/icons/flame.png" alt="Investy"> </div>

                    </div>
                    <div>Manea Victor</div>
                    <div><?php echo date("d/m/Y", strtotime($value['creat'])) ?></div>
                    <div><?php echo $value['titlu'] ?></div>
                    <div>
                        <!-- <div class="green_btn"> <img src="img/icons/verify.png" alt="Investy"> </div> -->
                        <div class="blue_btn" onclick="window.open('idee.php?id=<?php echo $value['id'] ?>', '_self')" > <img src="img/icons/paper-plane.png" alt="Investy"> </div>
                        <div class="blue_btn"> <img src="img/icons/share.png" data-investitor = '<?php echo $value['id'] ?>' alt="Investy"> </div>
                    </div>
                </div>
            <?php

        }

        foreach ($regular as $key => $value) {
            
            ?>
               <div class="row">

                    <div></div>
                    <div>Manea Victor</div>
                    <div><?php echo date("d/m/Y", strtotime($value['creat'])) ?></div>
                    <div><?php echo $value['titlu'] ?></div>
                    <div>
                        <!-- <div class="green_btn"> <img src="img/icons/verify.png" alt="Investy"> </div> -->
                        <div class="blue_btn" onclick="window.open('idee.php?id=<?php echo $value['id'] ?>', '_self')" > <img src="img/icons/paper-plane.png" alt="Investy"> </div>
                        <div class="blue_btn"> <img src="img/icons/share.png" data-investitor = '<?php echo $value['id'] ?>' alt="Investy"> </div>
                    </div>
                </div>
            <?php

        }

    }

    // PRIMA ETAPA A IDEII

    public function post_first_idea( $titlu, $suma, $investitii, $stadiu, $activitati_cheie, $parteneri, $resurse_necesare, $canale_vanzari, $structura_costuri, $structura_vanzari, $promovata) {

        $vkey = $_COOKIE['user'];

        $sql = "INSERT INTO idei (titlu, client, flame) VALUES ('$titlu', '$vkey', '$promovata')";
        $result = $this->connect()->prepare($sql);

        if ( !$result->execute() ) return "A aparut o problema. Incearca iar";

        $sql = "SELECT id FROM idei WHERE client = '$vkey' ORDER BY id DESC LIMIT 1";
        $result = $this->connect()->query($sql);
        $row = $result->fetch();

        $idee = $row['id'];

        $sql = "INSERT INTO idei_first_full (idee, titlu, suma, investitii, stadiu, activitati_cheie, parteneri, resurse_necesare, canale_vanzari, structura_costuri, structura_vanzari, promovata) VALUES ('$idee', '$titlu', '$suma', '$investitii', '$stadiu', '$activitati_cheie', '$parteneri', '$resurse_necesare', '$canale_vanzari', '$structura_costuri', '$structura_vanzari', '$promovata')";
        $result = $this->connect()->prepare($sql);

        if ( !$result->execute() ) return "A aparut o problema. Incearca iar";

        return "Idea a fost depusa cu success";

    }

    // A DOUA ETAPA A IDEII

    public function post_second_idea($idee, $titlu, $domeniu, $locatie, $esenta, $generare_profit, $misiune, $obiective, $cifra_afacere, $profit, $angajati, $desfasurare, $recrutare, $alte_activitati, $administrator, $departamente, $alocare_buget, $fluxul_activitatii, $capital_disponibil, $echipament_extra, $descriere_produs, $descriere_avantaje, $descriere_dezavantaje, $despre_produs, $pret_unitar, $cantitate_anuala, $venituri_produs, $valoare_materie_prima, $alte_cheltuieli, $cheltuieli_externe, $cheltuieli_marfuri, $cheltuieli_personal, $cheltuieli_exploatare, $alte_cheltuieli_lunare) {

        $client = $_COOKIE['user'];

        $sql = "INSERT INTO idei_second_full (idee, titlu, client, domeniu, locatie, esenta, generare_profit, misiune, obiective, cifra_afacere, profit, angajati, desfasurare, recrutare, alte_activitati, administrator, departamente, alocare_buget, fluxul_activitatii, capital_disponibil, echipament_extra, descriere_produs, descriere_avantaje, descriere_dezavantaje, despre_produs, pret_unitar, cantitate_anuala, venituri_produs, valoare_materie_prima, alte_cheltuieli, cheltuieli_externe, cheltuieli_marfuri,cheltuieli_personal, cheltuieli_exploatare, alte_cheltuieli_lunare) VALUES ('$idee', '$titlu', '$client', '$domeniu', '$locatie', '$esenta', '$generare_profit', '$misiune', '$obiective', '$cifra_afacere', '$profit', '$angajati', '$desfasurare', '$recrutare', '$alte_activitati', '$administrator', '$departamente', '$alocare_buget', '$fluxul_activitatii', '$capital_disponibil', '$echipament_extra', '$descriere_produs', '$descriere_avantaje', '$descriere_dezavantaje' , '$despre_produs', '$pret_unitar', '$cantitate_anuala', '$venituri_produs', '$valoare_materie_prima', '$alte_cheltuieli', '$cheltuieli_externe', '$cheltuieli_marfuri', '$cheltuieli_personal', '$cheltuieli_exploatare', '$alte_cheltuieli_lunare')";

        $result = $this->connect()->prepare($sql);

        if ( !$result->execute() ) return "A aparut o problema. Incearca iar";

        return "Idea a fost depusa cu success in etapa a 2 a";

    }

    // TRIMITE IDEE

    public function send_idea ($id, $investitori) { // DE TRIMIS NOTIFICARE LA FIECARE PARTE IMPLICATA ( INVESTITORI, CLIENT )

        $sql = "UPDATE idei SET investitor = '$investitori' WHERE id = '$id'";
        $result = $this->connect()->prepare($sql);

        if ( !$result->execute() ) return "A aparut o problema. Incearca iar";

        return "Ai trimis ideea cu success";

    }

}

// $idei = new Idei;

// echo $idei->send_idea("8", "a8d26f8e2f9bcbb894bf99eab6d74853");

// echo $idei->post_second_idea("8", "Test" , "Test", "Test", "Test", "Test", "Test", "Test", "Test", "Test", "Test" , "Test" , "Test", "Test", "Test", "Test", "Test", "Test", "Test", "Test", "Test" , "Test" , "Test", "Test", "Test", "Test", "Test", "Test", "Test", "Test", "Test" , "Test" , "Test" , "Test");