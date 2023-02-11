<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name</th>
      <th scope="col">Birthday</th>
      <th scope="col">Hobby</th>
      <th scope="col">Email</th>
      <th scope="col">phone Number</th>
      <th scope="col">Subject</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $fname = $_POST['fname'] ?? "";
    $lname = $_POST['lname'] ?? ""; 
    $fullname = $fname .= " ". $lname ?? "";
    $birthday = $_POST['birthday'] ?? "";
    $email = $_POST['email'] ?? "";
    $phn = $_POST['phn'] ?? "";
    $subject = $_POST['subject'] ?? "";
    $hobby = $_POST["hobby"] ?? "";
    // $football= $_POST['football'] ?? "";
    // $hocky= $_POST['hocky'] ?? "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // echo $cricket .= " ";
        // echo $football .= " ";
        // echo $hocky .= " ";
        // echo "<pre>";
        // print_r($_POST);
     
     $number= 0;
    
    ?>
    <tr>
      <th scope="row"><?php echo ++$number; ?> </th>
      <td><?php echo $fullname; ?></td>
      <td><?php echo $birthday; ?></td>
      <td><?php 
      if(isset($_POST['hobby'])){
        foreach($_POST['hobby'] as $value){
            echo $value . " ";
        }
      }
      
      ?></td>
      <td><?php echo $email ;?></td>
      <td><?php echo $phn ; ?></td>
      <td><?php echo $subject ; ?></td>
    </tr>
    <?php
    
    }
    
    
    ?>
    
  </tbody>
</table>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>