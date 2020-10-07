<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #myvideo{
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
            -ms-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            background: url(polina.jpg) no-repeat;
            background-size: cover;
}
    </style>
</head>
<body>
    <video width="320" height="240" controls  id='myvideo'autoplay="autoplay" loop="loop">
        <source src="{{ asset('error/error.mp4') }}" type="video/mp4">
        <source src="{{ asset('error/error.webm') }}" type="video/webm">


      Your browser does not support the video tag.
      </video>
</body>
<script>
    document.getElementById('myvideo').play();
</script>
</html>
