<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Category</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form class="" action="{{{URL::to('/admin/create')}}}" method="post">
        <input type="text" name="catName" value="" placeholder="category Name">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>