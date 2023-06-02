<?php 
$title = get_field('title');
$content = get_field('content');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

<?php
wp_head();
?>

</head>
<body>
<div class="flex">
    <div class="pb-4 bg-pink text-40">
        <h1>Welcome to Rustic Ranch!</h1>
    </div>

    <div class="pb-4 bg-pink">
        <h1><?= $title ?></h1>
    </div>
    <div class="frontpagecontent">
        <h1 class="text-pink text-40 bg-slate-600"><?= $content ?></h1>
    </div>
</div>
   
</body>
</html>
