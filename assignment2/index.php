<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <style media="screen">
    * {
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      font-size: 100%; 
      vertical-align: baseline;
      background: transparent;
    }
    body{

      font-family: 'Times New Roman', sans-serif;



    }




    h1{

      font-size: 40px;

      background-image: linear-gradient(to left, #553c9a, #b393d3);

      color: transparent;

      background-clip: text;

      -webkit-background-clip: text;

      margin: 25px 40px;



    }

    table {


      border-collapse: collapse;

      border-radius: 3px;

      border:1px solid  #553c9a; 

      margin: 25px 40px;


    }

    label{

      font-size: 20px;
      padding : 5px;

    }


    th{
      padding: 12px 15px;
    }



    td {

      padding: 12px 15px;
    }

    form{



      padding: 12px 15px;

      margin: 25px 25px;

    }

    input{

      border : 1px solid #553c9a; 

      border-radius: 10px;
      padding : 5px;

      background-image: linear-gradient(to left, #553c9a, #b393d3);
      color:white;

    }
    tr:nth-child(even) {

      background-color: #F8F8F8;


    }


    .theader{


     color : white;

     background-image: linear-gradient(to left, #553c9a, #b393d3);
   }


   h2{
    text-align: center;

    padding: 20px;

    font-size:  60px;
    color: white;
    background-image: linear-gradient(to left, #553c9a, #b393d3);

    text-shadow: 3px 1px 2px black;

    opacity: 0.7;
  }
  input[type=submit]{
    margin-left:10px;
  }

  input[type=submit]:hover {
    box-shadow: rgba(80, 63, 205, 0.5) 0 1px 30px;
    transition-duration: .1s;
  }



</style>
</head>
<body>
  <h2>Assignment2 Tables</h2>
  <?php include 'connectToHosting.php';?>
  <?php



  $sql="SELECT * FROM Country";

  $res = $conn->query($sql);
  ?>

  <form method="POST" action="add_country.php">
    <label>Cname:</label><input type="text" name="cname">
    <label>population:</label><input type="text" name="population">
    <input type="submit" name="add_country" value="Add" >
  </form>

  <h1>Table Country</h1><table>
    <tr class="theader">
      <th>Cname</th>
      <th>population</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>

    <?php  

    while ($row = $res->fetch_assoc()) {

      $cname = $row["cname"];
      $population = $row["population"];
      ?>
      <tr>
        <td><?php echo $cname; ?></td>
        <td><?php echo $population; ?></td>
        <td>
          <a href="edit.country.php?id=<?php echo $cname;?>">Edit</a>
        </td>
        <td>
          <a href="delete_country.php?id=<?php echo $cname; ?>">Delete</a>
        </td>
      </tr>

      <?php  


    }



    echo '</table>';

    $sql="SELECT * FROM Discover";

    $res = $conn->query($sql);
    ?>
    <form method="POST" action="add_discover.php">
      <label>Cname:</label><input type="text" name="cname">
      <label>disease_code:</label><input type="text" name="disease_code">
      <label>first_enc_date:</label><input type="date" name="first_enc_date">
      <input type="submit" name="add_discover" value="Add" >
    </form>

    <h1>Table Discover</h1><table>
      <tr class="theader">
        <th>Cname</th>
        <th>disease_code</th>
        <th>first_enc_date</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>




      <?php  

      while ($row = $res->fetch_assoc()) {

        $cname = $row["cname"];
        $disease_code = $row["disease_code"];

        $id = [$cname,$disease_code];

        $first_enc_date = $row["first_enc_date"];
        
        ?>

        <tr>

          <td><?php echo $id[0]?></td>
          <td><?php echo $id[1]; ?></td>
          <td><?php echo $first_enc_date; ?></td>
          <td>
            <a href="edit.discover.php?id=<?php echo $cname."***".$disease_code;?>">Edit</a>
          </td>
          <td>
            <a href="delete_discover.php?id=<?php echo $cname."***".$disease_code;?>">Delete</a>
          </td>
        </tr>

        <?php 

      }

      echo '</table>';


      $sql="SELECT * FROM Disease";

      $res = $conn->query($sql);
      ?>

      <form method="POST" action="add_disease.php">
        <label>description:</label><input type="text" name="description">
        <label>disease_code:</label><input type="text" name="disease_code">
        <label>id:</label><input type="text" name="id">
        <label>pathogen:</label><input type="text" name="pathogen">
        <input type="submit" name="add_disease" value="Add" >
      </form>


      <h1>Table Disease</h1><table>
        <tr class="theader">
          <td>description</td>
          <td>disease_code</td>
          <td>id</td>
          <td>pathogen</td>
          <td>edit</td>
          <td>delete</td>
        </tr>

        <?php
        while ($row = $res->fetch_assoc()) {

          $description = $row["description"];
          $disease_code = $row["disease_code"];
          $id = $row["id"];
          $pathogen = $row["pathogen"];

          ?>
          <tr>

            <td><?php echo $description;?></td>
            <td><?php echo $disease_code; ?></td>
            <td><?php echo $id; ?></td>
            <td><?php echo $pathogen; ?></td>
            <td>
              <a href="edit.disease.php?id=<?php echo $disease_code;?>">Edit</a>
            </td>
            <td>
              <a href="delete_disease.php?id=<?php echo $disease_code;?>">Delete</a>
            </td>
          </tr>




          <?php

        }

        echo '</table>';


        $sql="SELECT * FROM DiseaseType";

        $res = $conn->query($sql);
        ?>


        <form method="POST" action="add_diseasetype.php">
          <label>id:</label><input type="text" name="id">
          <label>description:</label><input type="text" name="description">
          <input type="submit" name="add_diseasetype" value="Add" >
        </form>


        <h1>Table DiseaseType</h1><table>
          <tr class="theader">
            <td>id</td>
            <td>description</td>
            <td>edit</td>
            <td>delete</td>
          </tr>

          <?php


          while ($row = $res->fetch_assoc()) {


            $description = $row["description"];
            $id = $row["id"];
            ?>




            <tr>

             <td><?php echo $id;?></td>
             <td><?php echo $description; ?></td>
             <td>
              <a href="edit.diseasetype.php?id=<?php echo $id;?>">Edit</a>
            </td>
            <td>
              <a href="delete_diseasetype.php?id=<?php echo $id;?>">Delete</a>
            </td>
          </tr>

          <?php  
        }


        echo '</table>';

        $sql="SELECT * FROM Doctor";

        $res = $conn->query($sql);

        ?>

        <form method="POST" action="add_doctor.php">
          <label>degree:</label><input type="text" name="degree">
          <label>email:</label><input type="text" name="email">
          <input type="submit" name="add_doctor" value="Add" >
        </form>

        <h1>Table Doctor</h1><table>
          <tr class="theader">
            <td>degree</td>
            <td>email</td>
            <td>edit</td>
            <td>delete</td>
          </tr>



          <?php
          while ($row = $res->fetch_assoc()) {

            $degree = $row["degree"];
            $email = $row["email"];
            ?>

            <tr>

             <td><?php echo $degree;?></td>
             <td><?php echo $email; ?></td>
             <td>
              <a href="edit.doctor.php?id=<?php echo $email;?>">Edit</a>
            </td>
            <td>
              <a href="delete_doctor.php?id=<?php echo $email;?>">Delete</a>
            </td>
          </tr>


          <?php

        }

        echo '</table>';

        $sql="SELECT * FROM PublicServant";

        $res = $conn->query($sql);
        ?>

        <form method="POST" action="add_publicservant.php">
          <label>department:</label><input type="text" name="department">
          <label>email:</label><input type="text" name="email">
          <input type="submit" name="add_publicservant" value="Add" >
        </form>

        <h1>Table PublicServant</h1><table>
          <tr class="theader">
            <td>department</td>
            <td>email</td>
            <td>edit</td>
            <td>delete</td>
          </tr>

          <?php
          while ($row = $res->fetch_assoc()) {

            $department = $row["department"];
            $email = $row["email"];

            ?>

            <tr>

             <td><?php echo $department;?></td>
             <td><?php echo $email; ?></td>
             <td>
              <a href="edit.publicservant.php?id=<?php echo $email;?>">Edit</a>
            </td>
            <td>
              <a href="delete_publicservant.php?id=<?php echo $email;?>">Delete</a>
            </td>
          </tr>

          <?php
        }

        echo '</table>';

        $sql="SELECT * FROM Record";

        $res = $conn->query($sql);

        ?>
        <form method="POST" action="add_record.php">
          <label>email:</label><input type="text" name="email">
          <label>cname:</label><input type="text" name="cname">
          <br><br>
          <label>disease_code:</label><input type="text" name="disease_code">
          <label>total_deaths:</label><input type="text" name="total_deaths">
          <label>total_patients:</label><input type="text" name="total_patients">
          <input type="submit" name="add_record" value="Add" >
        </form>

        <h1>Table record</h1><table>
          <tr class="theader">
            <td>email</td>
            <td>cname</td>
            <td>disease_code</td>
            <td>total_deaths</td>
            <td>total_patients</td>
            <td>edit</td>
            <td>delete</td>
          </tr>
          <?php


          while ($row = $res->fetch_assoc()) {

            $cname = $row["cname"];
            $disease_code = $row["disease_code"];
            $total_deaths = $row["total_deaths"];
            $email = $row["email"];    
            $total_patients = $row["total_patients"];

            ?>
            <tr>

             <td><?php echo $email;?></td>
             <td><?php echo $cname; ?></td>
             <td><?php echo $disease_code; ?></td>
             <td><?php echo $total_deaths;?></td>
             <td><?php echo $total_patients; ?></td>
             <td>
              <a href="edit.record.php?id=<?php echo $email."***".$cname."***".$disease_code;?>">Edit</a>
            </td>
            <td>
              <a href="delete_record.php?id=<?php echo $email."***".$cname."***".$disease_code;?>">Delete</a>
            </td>
          </tr>

          <?php
        }

        echo '</table>';

        $sql="SELECT * FROM Specialize";

        $res = $conn->query($sql);
        ?>


        <form method="POST" action="add_specialize.php">
          <label>email:</label><input type="text" name="email">
          <label>id:</label><input type="text" name="id">
          <input type="submit" name="add_record" value="Add" >
        </form>

        <h1>Table Specialize</h1><table>
          <tr class="theader">
            <td>email</td>
            <td>id</td>
            <td>edit</td>
            <td>delete</td>
          </tr>

          <?php

          while ($row = $res->fetch_assoc()) {

            $email = $row["email"];
            $id = $row["id"];

            ?>
            <tr>

             <td><?php echo $email;?></td>
             <td><?php echo $id; ?></td>  
             <td>
              <a href="edit.specialize.php?id=<?php echo $id."***".$email;?>">Edit</a>
            </td>
            <td>
              <a href="delete_specialize.php?id=<?php echo $id."***".$email;?>">Delete</a>
            </td>
          </tr>
          
          <?php
        }

        echo '</table>';

        $sql="SELECT * FROM Users";

        $res = $conn->query($sql);
        ?>
        <form method="POST" action="add_users.php">
          <label>email:</label><input type="text" name="email">
          <label>name:</label><input type="text" name="name">
          <label>surname:</label><input type="text" name="surname">
          <br><br>
          <label>salary:</label><input type="text" name="salary">
          <label>phone:</label><input type="text" name="phone">
          <label>cname:</label><input type="text" name="cname">
          <input type="submit" name="add_users" value="Add" >
        </form>

        <h1>Table users</h1><table>
          <tr class="theader">
            <td>email</td>
            <td>name</td>
            <td>surname</td>
            <td>salary</td>
            <td>phone</td>
            <td>cname</td>
            <td>edit</td>
            <td>delete</td>
          </tr>

          <?php
          while ($row = $res->fetch_assoc()) {

            $cname = $row["cname"];
            $email = $row["email"];
            $name = $row["name"];
            $phone = $row["phone"];
            $salary = $row["salary"];
            $surname = $row["surname"];

            ?>

            <tr>

             <td><?php echo $email;?></td>
             <td><?php echo $name; ?></td> 
             <td><?php echo $surname;?></td>
             <td><?php echo $salary; ?></td>  
             <td><?php echo $phone;?></td>
             <td><?php echo $cname; ?></td>  
             <td>
              <a href="edit.users.php?id=<?php echo $email;?>">Edit</a>
            </td>
            <td>
              <a href="delete_users.php?id=<?php echo $email;?>">Delete</a>
            </td>
          </tr>

          <?php


        }

        echo '</table>';

        $conn->close();


        ?>
      </body>
      </html>
