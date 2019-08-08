<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>     
  </head>
  <body>
    <h1>Tasks</h1>
    <ul>
      <?php foreach($tasks as $task) : ?>
        <li><strong>Description: </strong><?= $task->description?></li>
        <li><strong>Status: </strong><?= $task->completed ? '✅' : 'Incomplete' ?></li>
        <br>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
