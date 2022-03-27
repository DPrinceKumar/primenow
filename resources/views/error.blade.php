<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Not Found</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@700&display=swap');
        *{
            margin: 0;padding: 0;box-sizing: border-box;
        }
        html{
            font-size: 63.5%
        }
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        h1{
            font-size: 35rem;
            font-family: 'Source Code Pro', monospace;
            z-index: 1;
            opacity: 0.3;
        }
        .warning{
            position: relative;
            top: 0%;
            width: 100%;
            font-size: 2rem;
            z-index: 99;
        }
        .info{
             position: absolute;
            bottom:20%; 
            right: 30%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .home{
            margin-top: 10rem;
        }

    </style>
</head>
<body>
    <h1>404</h1>
    <div class="warning">
        <div class="info">
            <h2>We can't find that page you are looking for </h2>
            <p>We recomend going back. We do apologise on this</p>
        </div>
    </div>
    <div class="home">
        <a href="/">Home</a>
    </div>
</body>
</html>