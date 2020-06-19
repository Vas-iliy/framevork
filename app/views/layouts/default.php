<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="../../../public/bootstrap/css/bootstrap.min.css" rel="stileshet">

    <title>defoult</title>
</head>

<body>
<div class="container">
	<?foreach ($menu as $item):?>
        <a class="nav-link active" href="category/<?=$item['id']?>"><?=$item['title']?></a>
	<?endforeach;?>
    <h1>Hello, world!</h1>

    <?=$content?>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="/public/bootstrap/js/bootstrap.js"></script>
</body>
</html>
