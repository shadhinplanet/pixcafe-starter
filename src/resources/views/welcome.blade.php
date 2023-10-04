<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixcafe Starter</title>

    <style>
        a {
            display: inline-block;
            padding: 5px 10px;
            background: #000;
            color: #fff;
            text-decoration: none;
            letter-spacing: 1px;
            margin: 0px 5px;
            cursor: pointer;
        }
    </style>
</head>

<body style="margin: 0; padding:0">
    <div class=""
        style="height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
            style="position: absolute;
        left: 0;
        top: 0;
        width: 100%;">
            <path fill="#0099ff" fill-opacity="1"
                d="M0,128L40,122.7C80,117,160,107,240,112C320,117,400,139,480,165.3C560,192,640,224,720,224C800,224,880,192,960,160C1040,128,1120,96,1200,112C1280,128,1360,192,1400,224L1440,256L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
            </path>
        </svg>
        <div class="" style="text-align: center;position: relative; z-index:9">
            <h2>Welcome</h2>
            <div class="">
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
            style="position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;">
            <path fill="#0099ff" fill-opacity="1"
                d="M0,128L40,122.7C80,117,160,107,240,112C320,117,400,139,480,165.3C560,192,640,224,720,224C800,224,880,192,960,160C1040,128,1120,96,1200,112C1280,128,1360,192,1400,224L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </div>
</body>

</html>
