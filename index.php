<?php
  $servername = "localhost";
  $username = "root";
  $password = "";     

  try
  {
    $conn = new PDO("mysql:host=$servername; dbname=pract", $username, $password);
    echo "Подключение прошло успешно";
  }
  catch (PDOException $e)
  {
    echo "Сбой при подключении". $e->getMessage();
  }
?>
  

<!DOCTYPE html>
<html>
  <head>

    <title>Поисковая система</title>

    <style> 
      body {
      background-image: url("https://cojo.ru/wp-content/uploads/2022/12/neobychnyi-fon-2-2.webp");
      background-size: cover;
      color:#ccffff;
      }
      form {
      width:400px;
      margin:auto;
      margin-top: 250px;
      }
      input{
      padding:4px 10px;
      border:0;
      font-size:16px;
      }
      .search {
      width: 75%;
      }
      .submit{
      width: 70px;
      background-color: #1c87c9;
      color:#ffffff;
      }
    </style>
  </head>
  <body>  
    <h2>Поле поиска</h2>
    <form> 
      <input type="text" name="text" class="search" placeholder="Искать здесь">
      <input type="submit" name="submit" class="submit" value="Поиск">
    </form>
  </body>
</html>