<?php

class Investitori extends Db {

    public function get_five_investors() {

        $sql = "SELECT * FROM accounts WHERE rol = 'investitor' LIMIT 5";
        $result = $this->connect()->query($sql);

        while ($row = $result->fetch() ) {

            ?>
            <div class="row">

                <div class="avatar" > <img src="<?php echo $row['poza'] ?>"> </div>
                <div class="name"><?php echo $row['nume'] ?> <br> <img src="img/icons/location.svg" alt="Investy"> <?php echo $row['locatie'] ?> </div>
                <div class="blue_btn" onclick="window.open('investitor.php?vkey=<?php echo $row['vkey'] ?>', '_self')" > <img src="img/icons/paper-plane.png" alt="Investy"> </div>

            </div>
            <?php

        }

    }

    public function get_all_investors() {

        $sql = "SELECT * FROM accounts WHERE rol = 'investitor'";
        $result = $this->connect()->query($sql);

        while ($row = $result->fetch() ) {

            ?>
            <div class="row">

                <div class="avatar">
                    <img src="<?php echo $row['poza'] ?>">
                </div>
                <div> <?php echo $row['nume'] ?> </div>
                <div><img src="img/icons/location.svg"> <?php echo $row['locatie'] ?></div>
                <div>Idei trimise: 7</div>
                <div>
                    <div class="blue_btn" onclick="window.open('investitor.php?vkey=<?php echo $row['vkey'] ?>', '_self')" > <img src="img/icons/paper-plane.png" alt="Investy"> </div>
                </div>
            </div>
            <?php

        }

    }

    public function get_investor($vkey) {

        $sql = "SELECT * FROM accounts WHERE rol = 'investitor' AND vkey = '$vkey'";
        $result = $this->connect()->query($sql);
        $row = $result->fetch();

        $data = [];

        $data['user'] = $row;
        $data['idei'] = [];

        $sql = "SELECT * FROM idei WHERE investitor = '$vkey'";
        $result = $this->connect()->query($sql);
        
        while ($row = $result->fetch()) {

            array_push( $data['idei'], $row );

        }

        $data["trimise"] = count($data['idei']);
        $data["acceptate"] = 0;
        $data["refuzate"] = 0;

        foreach ($data['idei'] as $key => $value) {
            if ( $value['stare'] == "acceptata" ) $data["acceptate"] += 1;
            if ( $value['stare'] == "refuzata" ) $data["refuzate"] += 1;
        }

        return $data;

    }

    public function get_popup_investors() {

        $sql = "SELECT * FROM accounts WHERE rol = 'investitor'";
        $result = $this->connect()->query($sql);

        while ($row = $result->fetch() ) {

            ?>

            <div class="row">

                <div>
                    <div class="avatar"><img src="<?php echo $row['poza'] ?>" ></div>

                    <div class="text">

                        <h4><?php echo $row['nume'] ?></h4>
                        <p> <img src="img/icons/location.svg" > <?php echo $row['locatie'] ?></p>

                    </div>
                </div>

                <div class="check" data-investitor = "<?php echo $row['vkey'] ?>">

                    <img src="img/icons/check.png">

                </div>

            </div>

            <?php

        }

    }

}

