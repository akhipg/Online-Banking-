<?php

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$telnum = filter_input(INPUT_POST, 'telnum');
$emailid = filter_input(INPUT_POST, 'emailid');
$feedback = filter_input(INPUT_POST, 'feedback');

if (!empty($firstname))
    {
        if (!empty($lastname))
           {
              
            $server="localhost";
            $username="root";
            $password="";
            $db="online_banking";
            
            $conn=mysqli_connect($server,$username,$password,$db);
              
  
            if (mysqli_connect_error())
              {
                    die('Connect Error ('. mysqli_connect_errno() .') '
                    . mysqli_connect_error());
              }

            else
              {
                    $sql = "INSERT INTO form (firstname, lastname, telnum, emailid, feedback)
                    values ('$firstname','$lastname', '$telnum', '$emailid', '$feedback')";
                    if ($conn->query($sql))
                    {
                      echo "New record is inserted sucessfully";
                    }

                    else
                     {
                        echo "Error: ". $sql ."
                        ". $conn->error;
                     }
                    $conn->close();
              }

            }

        else
          {
            echo "Last name should not be empty";
            die();
          }
     }
           
else
  {
    echo "Firstname should not be empty";
    die();
  }

?>