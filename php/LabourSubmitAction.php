
  <?php
   include '../dbcon.php';

   if (isset($_POST['submit'])) {
     //fetching uploaded files name
     $filename = $_FILES["labourImg"]["name"];
     //fetching uploaded temperory file address
     $tmpname = $_FILES["labourImg"]["tmp_name"];
     //File size
     $size = $_FILES["labourImg"]["size"];
     //putting the address on which we wanted to put our image
     $folder = "../labourImages/".$filename;
     $folder_exe = "labourImages/".$filename;
     if ($size > 100000) {
       ?>
       <script type="text/javascript">
         alert('Image more than 100KB is not allowed ! Please Compress The Image !');
       </script>
       <?php
       echo "<script> window.location.href = '../homePanel.php'; </script>";
     }
     else {
       //moving image from temperory file to the file which we puted
       move_uploaded_file($tmpname,$folder);

       // Fething labour's data
       $name =$_POST['labourName'];
       $desc = $_POST['labourDesc'];
       $phone = $_POST['labourPhone'];
       $adhar = $_POST['labourAadhar'];

        $INSERT_QUERY = "INSERT INTO `labour_details` (`name`,`phone`,`info`,`aadhar`,`img`) 
        VALUES ('$name','$phone','$desc','$adhar','$folder_exe')";

       //firing the $query
       $res = mysqli_query($con,$INSERT_QUERY);
       if(!$res){
         ?>
         <script type="text/javascript">
           alert('Data inserted not Successful !');
         </script>
         <?php
       }
       else {
        ?>
         <script type="text/javascript">
           alert('Labour Added Successful !');
         </script>
         <?php
         echo "<script> window.location.href = '../admin/index.php'; </script>";
       }
     }
   }

  ?>
