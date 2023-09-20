<?php
    
    $con = mysqli_connect("localhost","root","","labourMitra",8111);

    if($con == false)
    {
        ?>
            <script>alert('Connection Error');</script>
        <?php
    }


?>
   