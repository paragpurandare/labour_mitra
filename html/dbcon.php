<?php
    
    $con = mysqli_connect("localhost","root","","projectparag",3307);

    if($con == false)
    {
        ?>
            <script>alert('Connection Error');</script>
        <?php
    }


?>
