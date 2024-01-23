<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My blog </title>
</head>
<link rel = "stylesheet" href="/app.css">

<body>
    <article>
    <h1 style="color:#0D98BA ;"> <?=$post->title; ?></h1>

    <div>
        <?=$post->body;?>
    </div>
    </article>
    
    <a href = "/"> Go Back</a>  
    
</body><?php /**PATH C:\xampp\htdocs\laravelBlog\resources\views/post.blade.php ENDPATH**/ ?>