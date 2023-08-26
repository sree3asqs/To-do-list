<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name ="viewport" content="width=device-width, initial-scale=1.0">
  <link rel ="stylesheet" href="styles.css">
  <title>To-Do List</title>
</head>
<body>
    <div class ="main">
    <form action ="insert.php" method ="POST">
         <div class="todo-list">
            <h1>To-Do List</h1>
            <div class ="container">
                <input type ="text" name="list" id ="newTask" placeholder="Add a new task">
                <button>Add Task</button>
            </div>

        </div>
    </form>

    <?php
    include "config.php";
    $rawData=mysqli_query($con, "select * from todo ")
    ?>
    
    <ul id="taskList">
      <?php  
      while($row = mysqli_fetch_array($rawData)){
      ?>
      <li>
        
        <span><?php echo $row['list'] ?></span>
        <a href="delete.php? ID= <?php echo $row['id'] ?>" ><button class="delete-button">Delete</button></a>
      </li>
      <?php
      }
      ?>
    </ul>
</div>
</body>
</html>
