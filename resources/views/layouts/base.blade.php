<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styleee.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<div class="wrapper">
    <header class="header">

        <div class="header__logo">
            <a href="/">TO DO LIST</a>
        </div>

    </header>
    @yield('content')
</div>
<script>
    $(document).ready(function (){
        const tasks = $('.items__card')
        const task_controll = $('.card__controll')
        task_controll.hide();
        tasks.on('mouseover',()=>{
            task_controll.show();
        }).on('mouseout',()=>{
            task_controll.hide();
        })
    })
</script>
</body>
</html>
