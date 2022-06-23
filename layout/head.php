<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aesthetic Template">
    <meta name="keywords" content="Aesthetic, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?= $_SESSION["title"]  ?> | <?= APP_NAME ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>        
       
        #presentation{
        width: 480px;
        height: 120px;
        padding: 20px;
        margin: auto;
        background: #FFF;
        margin-top: 10px;
        box-shadow: 0 3px 15px -5px rgba(0,0,0,0.1); 
        transition: all 0.3s; 
        border-radius: 10px;
        
        h1{
            font-weight: 400;
        }
        
        h3{
            font-weight: 400;
            color: #666;
        }
        }

        #presentation:hover{
        box-shadow: 0 12px 28px -5px rgba(0,0,0,0.13);
        transition: all 0.3s;
        transform: translateZ(10px);
        }

        #floating-button{
        width: 55px;
        height: 55px;
        border-radius: 50%;
        background: #db4437;
        position: fixed;
        bottom: 30px;
        right: 30px;
        cursor: pointer;
        box-shadow: 0px 2px 10px rgba(0,0,0,0.2);
        }

        .plus{
        color: white;
        position: absolute;
        top: 0;
        display: block;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
        padding: 0;
        margin: 0;
        line-height: 55px;
        font-size: 38px;
        font-family: 'Roboto';
        font-weight: 300;
        animation: plus-out 0.3s;
        transition: all 0.3s;
        }

        #container-floating{
        position: fixed;
        width: 70px;
        height: 70px;
        bottom: 30px;
        right: 30px;
        z-index: 50px;
        }

        #container-floating:hover{
        height: 400px;
        width: 90px;
        padding: 30px;
        }

        #container-floating:hover .plus{
        animation: plus-in 0.15s linear;
        animation-fill-mode: forwards;
        }

        .edit{
        position: absolute;
        top: 0;
        display: block;
        bottom: 0;
        left: 0;
        display: block;
        right: 0;
        padding: 0;
        opacity: 0;
        margin: auto;
        line-height: 65px;
        transform: rotateZ(-70deg);
        transition: all 0.3s;
        animation: edit-out 0.3s;
        }

        #container-floating:hover .edit{
        animation: edit-in 0.2s;
        animation-delay: 0.1s;
        animation-fill-mode: forwards;
        }

        @keyframes edit-in{
            from {opacity: 0; transform: rotateZ(-70deg);}
            to {opacity: 1; transform: rotateZ(0deg);}
        }

        @keyframes edit-out{
            from {opacity: 1; transform: rotateZ(0deg);}
            to {opacity: 0; transform: rotateZ(-70deg);}
        }

        @keyframes plus-in{
            from {opacity: 1; transform: rotateZ(0deg);}
            to {opacity: 0; transform: rotateZ(180deg);}
        }

        @keyframes plus-out{
            from {opacity: 0; transform: rotateZ(180deg);}
            to {opacity: 1; transform: rotateZ(0deg);}
        }

        .nds{
        width: 40px;
        height: 40px;
        border-radius: 50%;
        position: fixed;
        z-index: 300;
        transform:  scale(0);
        cursor: pointer;
        }

        .nd1{
        background: #d3a411;
        right: 40px;
        bottom: 120px;
        animation-delay: 0.2s;
            animation: bounce-out-nds 0.3s linear;
        animation-fill-mode:  forwards;
        }

        .nd3{
        background: #3c80f6;
        right: 40px;
        bottom: 180px;
        animation-delay: 0.15s;
            animation: bounce-out-nds 0.15s linear;
        animation-fill-mode:  forwards;
        }

        .nd4{
        background: #ba68c8;
        right: 40px;
        bottom: 240px;
        animation-delay: 0.1s;
            animation: bounce-out-nds 0.1s linear;
        animation-fill-mode:  forwards;
        }

        @keyframes bounce-nds{
            from {opacity: 0;}
            to {opacity: 1; transform: scale(1);}
        }

        @keyframes bounce-out-nds{
            from {opacity: 1; transform: scale(1);}
            to {opacity: 0; transform: scale(0);}
        }

        #container-floating:hover .nds{
        
        animation: bounce-nds 0.1s linear;
        animation-fill-mode:  forwards;
        }

        #container-floating:hover .nd3{
        animation-delay: 0.08s;
        }
        #container-floating:hover .nd4{
        animation-delay: 0.15s;
        }
        #container-floating:hover .nd5{
        animation-delay: 0.2s;
        }

        .letter{
        font-size: 23px;
        font-family: 'Roboto';
        color: white;
        position: absolute;
        left: 0;
        right: 0;
        margin: 0;
        top: 0;
        bottom: 0;
        text-align: center;
        line-height: 40px;
        }

        .reminder{
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
        top: 0;
        bottom: 0;
        line-height: 40px;
        }

        .profile{
        border-radius: 50%;
        width: 40px;
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        right: 20px;
        }
    </style>
</head>