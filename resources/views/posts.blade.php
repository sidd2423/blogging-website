<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My blog </title>
</head>
<link rel = "stylesheet" href="/app.css">
<bodylogout>
<headerlogout>

    <form action = "{{ route('userLogin') }}"method="post">
        <logoutbutton type="submit">Logout</logoutbutton>
    </form>

</bodylogout>
</headerlogout>
<body>
 <?php foreach ($posts as $post) : ?>
    <article>
        <h1><a href="/posts/<?= $post->slug ?>">
        <?= $post->title; ?>
        </a>
         </h1>

        <div>

        <?=$post->excerpt; ?>
  
         </div>
    </article>
    
    <?php endforeach; ?>

</body>

