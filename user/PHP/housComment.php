<?php

    // include dirname(__DIR__)."/../Database/dataProcessor.php";

    ?>
    
    <script type="text/javascript" src= "./Assets/js/lib/moment/moment.min.js"></script>

    <script>

        function countHousr(dateTime) {
            var now = new moment(new Date());

            var minutes = (now.diff(dateTime, "minutes"));
            var housr = (now.diff(dateTime, "housr"));
            var day = (now.diff(dateTime, "days"));

            console.log(minutes, housr, day);
        }

        countHousr(02/04/2022);

    </script>
    <?php
?>