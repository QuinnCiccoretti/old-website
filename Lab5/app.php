<?php
   //////////////////////////
   $tableCreated = FALSE;
   //////////////////////////
   $host        = "host=ec2-174-129-223-35.compute-1.amazonaws.com";
   $port        = "port=5432";
   $dbname      = "dbname=da681a2ij30ae9";
   $credentials = "user=wsriqgpezbffma password=CDwlj8yVgkD7K6ymi2S0arVWwV";
   $name = $_GET["name"];
   $email = $_GET["email"];
   $favartist = $_GET["favartist"];
   $kendrick = $_GET["kendrick"];
   // echo "\nTest: Name:" . $name . " Email: " . $email . " FavArtist: " . $favartist . " Kendrick?: " . $kendrick . "\n";
    $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
    //   echo "Opened database successfully\n";
     
   }

    $sql1 =<<<EOF
      CREATE TABLE IF NOT EXISTS song (
       ID serial PRIMARY KEY,
       name VARCHAR (255) NOT NULL,
       email VARCHAR (255) NOT NULL,
       favartist VARCHAR (255) NOT NULL,
       kendrick VARCHAR (255) NOT NULL,
       description VARCHAR (255),
       rel VARCHAR (50)
      );
EOF;

      $ret1 = pg_query($db, $sql1);
      if(!$ret1){
         echo pg_last_error($db);
      } else {
        //  echo "Table created successfully\n";
      }

   $sql2 =<<<EOF
      INSERT INTO song (name, email, favartist, kendrick)
      VALUES
       ('$name','$email','$favartist','$kendrick');
EOF;

   $ret2 = pg_query($db, $sql2);
   if(!$ret2){
      echo pg_last_error($db);
   } else {
    //   echo "Records created successfully\n";
      
   }
      $sql3 =<<<EOF
      SELECT * FROM song;
EOF;

   $ret3 = pg_query($db, $sql3);
   if(!$ret3){
      echo pg_last_error($db);
      exit;
   }
   $start =<<<EOF
<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
        <title>Rap</title>
        <script type="text/javascript">
            window.onload= function(){
          $("#main").hide();
          $("#main").fadeIn();
        }
        </script>
        <style type="text/css">
            body{
                text-align: center;
                margin:auto;
                background-image:url("http://gwydir.demon.co.uk/jo/tess/optical4.gif");
                background-repeat:repeat;
                font-family: 'Inconsolata', monospace;
                font-size: 50px;
            }
            #main{
                text-align: center;
                margin:auto;
                width: 80%;
                background-color: rgba(214,34, 172,.75);
                color: white;
            }
            .qinput{
                height: 50px;
                width: 25%;
                margin: 20px;
            }
            #sub{
        background-color: black; /* Green */
          border: 2px solid white;
          color: white;
          padding: 15px 32px;
          height: 9%;
          width: 14%;
          text-align: center;
          text-decoration: none;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
          transition: height .5s, width .5s, color .5s, background-color .5s;
          }
          #sub:hover{
            height: 9%;
              width: 16%;
              background-color: white; /* Green */
              border: 2px solid black;
              color: black;
          }
        </style>
    </head>
    <body>
        <div id = "main">
        <form action="app.php" method = "get" autocomplete="on">
            Name: <input class ="qinput" type="text" name="name"><br>
            E-mail: <input class ="qinput" type="text" name="email"><br>
            Favorite Song And Artist: <input class ="qinput" type="text" name="favartist"><br>
            What do you think of Kendrick Lamar?<input class ="qinput" type="text" name="kendrick"><br>
            <input id = "sub" type="submit"><br>
            Table Values: <br>
EOF;
   while($row = pg_fetch_row($ret3)){
      
      $str =  "<span style=\"border-radius: 30px 15px; border-color:red;border-style: solid; border-width: 3px;\">Name: </span>". $row[1] . "\t";
      $str =  $str . "<span style=\"border-color:red;border-style: solid; border-width: 3px;\">Email: </span>". $row[2] . "\t";
      $str =  $str . "<span style=\"border-color:red;border-style: solid; border-width: 3px;\">Favorite Song, Artist: </span>". $row[3] . "\t";
      $str =  $str . "<span style=\"border-color:red;border-style: solid; border-width: 3px;\">Thoughts on Kendrick: </span>". $row[4] . "\t<br>";
      $rotho =<<<EOF
      <div style =
      "border-radius: 15px 50px;
       border-style: solid;
       border-color: purple;
       border-width:10px;
       background: #73AD21;
       padding: 10px;"
       >$str</div>
EOF;
      $start = $start . $rotho;
   }
   $end = <<<EOF
   </form>
        </div>
    </body>
</html>
EOF;
   $start = $start . $end;
   echo $start;
//   echo "Table access done successfully\n";

?>