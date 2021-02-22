<?php 

    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $userame = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $recoveryemail = $_POST['remail'];

    echo "Client name is: $firstName $lastName";
    echo "Client gebder is: $gender";
    echo "Client email is: $email";
    echo "Client user name is: $uname";
    echo "Client password is: $pwd"; 
    echo "Client recovery email is: $remail";
    


    if($_SERVER['REQUEST_METHOD'] == "POST") {

      if(empty($_POST['fname']) && empty($_POST['lname']) && empty($_POST['gender'])&& empty($_POST['email'])&& empty($_POST['uname'])&& empty($_POST['pwd'])&& empty($_POST['remail'])) 

      {
        echo "Please fill up the form properly";
      } 
      else {
    
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $userame = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $recoveryemail = $_POST['remail'];



        echo "Client name is: $firstName $lastName";
        echo "Client name is: $firstName $lastName";
        echo "Client gender is: $gender";
        echo "Client email is: $email";
        echo "Client user name is: $uname";
        echo "Client password is: $pwd"; 
        echo "Client recovery email is: $remail";
      }
    }
  ?>

</body># file-handling
# file-handling
