<!DOCTYPE html>
<html>
   <head>
    <title>Demo PHP MVC</title>
  </head>
  <body>
    <a href="/">home</a>
    <a href="/index.php?controller=posts&action=index">List posts</a>
    <a href="/index.php?controller=users&action=index">List users</a>
    <p><?= @$content ?></p>
  </body>
</html>
