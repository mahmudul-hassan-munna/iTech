<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            height: 100vh;
            width: 100%;
            float: left;
        }

        .square {
            width: 10%;
            height: 10%;
            background: red;
            position: relative;
            animation: r 5s infinite;
            animation-delay: 2s;
        }

        @keyframes r {
            0% {
                background: red;
                left: 0px;
                top: 0px;
            }
            50% {
                background: blue;
                left: 90%;
                top: 90%;
            }
            100% {
                background: red;
                left: 0px;
                top: 0px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="square"></div>
</div>

</body>
</html>
