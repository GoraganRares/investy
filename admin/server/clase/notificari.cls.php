<?php

class Notificari extends Db {

    public function get_four_notificacion () {

        $sql = "SELECT * FROM notificari LIMIT 4";
        $result = $this->connect()->query($sql);

        while ($row = $result->fetch()) {

            ?>
            <div class="row">

                <div class="name"><?php echo $row['titlu']?></div>
                <div class="blue_btn"> <img src="img/icons/paper-plane.png" alt="Investy"> </div>

            </div>
            <?php

        }

    }

    public function get_all_notificacion () {

        $sql = "SELECT * FROM notificari LIMIT 50";
        $result = $this->connect()->query($sql);

        while ($row = $result->fetch()) {
            
            ?>
            <div class="row">

                <div><?php echo date("d/m/Y", strtotime($row['creat'])) ?></div>
                <div><?php echo $row['titlu'] ?></div>
                <div>
                    <div class="blue_btn"> <img src="img/icons/arrow-down.svg" alt="Investy"> </div>
                </div>
                <div class="text">

                    <?php echo $row['descriere'] ?>

                </div>
            </div>
            <?php

        }

    }

}