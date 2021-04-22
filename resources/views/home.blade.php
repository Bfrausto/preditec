<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preditec</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="media/favicon.png" >
    <script src="https://kit.fontawesome.com/3fd1b9fc4b.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
        html {
            scroll-behavior: smooth;
        }
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
        body{
            font-family: 'Roboto', sans-serif;
        }
        ::-webkit-scrollbar {
            width: 10px;
            background :rgb(234,235,239);
        }
        ::-webkit-scrollbar-thumb {
            background: #888; 
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555; 
        }
        #navbar{
            background-color: rgb(0,123,255);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: row;
            position: fixed;
            top: 0;
            width: 100%;
            
        }
        #navtext{
            height: 70px;
            /* background-color: rgb(234,235,239); */
            display: flex;
            align-items: center;
            flex-direction: row;
            
        }
        #navtext h1{
            font-size:30px;
            margin:25px;
            color:whitesmoke;
        }

        .nav a{
            font-size:20px;
            color: whitesmoke;
            text-decoration: none;
            padding: 25px 15px;
        }

        .nav a:hover{
            color: black;
            background-color:rgb(187, 187, 189);
        }


        .search-container button {
            float: right;
            padding: 6px 10px;
            background: whitesmoke;
            font-size: 17px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            height: 42px;
        }

        .search-container input[type=text] {
            width: 500px;
            height: 30px;
            padding: 6px;
            font-size: 17px;
            border: none;
            border-radius: 4px;

        }

        #icons{

            height:100%;
            display: flex;
            justify-content: ;
            flex-direction: row;
        }
        #icons a{
            margin: 10px;
            font-size:40px;
            text-decoration: none;
            color:whitesmoke;
        }
        #icons p{
            margin: 15px;
            font-size:25px;
            text-decoration: none;
            color:whitesmoke;
        }
        #hrnav{
            position: fixed;
            top: 70px;
            width: 100%;
            border-top: 1px solid rgb(205,208,214);
        }
        #presentation{
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: row;
            background-color: rgb(234,235,239);
        }

        #presentation img{
            margin: 80px 40px;
            width: 400px;
            border-radius: 50px;
            margin-top: 130px;
        }
        
        .textp h1{
            font-size: 50px;
            margin: 15px 0px;
            color: rgb(65,65,66);
        }
        .textp {
            width:460px;
            height:115px;
            font-size: 25px;
            text-align: justify;
            margin-bottom: 100px;
        }
        .card{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 75px 0px; 
        }

        #about h1{
            margin-bottom: 50px ;
            font-size: 40px;
            color: rgb(234,235,239);
        }
        #about{
            background-color: rgb(65,65,66);
        }
        .container-a img{
            width: 250px;
            height: 250px;
            border-radius: 600px;
            margin: 10px 40px;
        }
        .container-a p{
            font-size: 32px;
            width:350px;
            margin: 10px 40px 10px 0px; 
            color:rgb(118,119,122);
        }

        .container-a {
            display: flex;
            align-items: center;
        }
        #hobbies{
            background-color:rgb(187, 187, 189);
        }
        #hobbies h1{
            margin-bottom: 50px ;
            font-size: 40px;
            padding: 15px;
            border-radius: 10px;
            background-color:whitesmoke;
        }

        .container-h p{
            padding: 20px;
        }

        .container-h {
            width: 1200px;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: row;
            align-items:center;
            justify-content: space-around;
            font-size: 25px;
            background-color:whitesmoke;
        }
        .card-cont-h{
            width:300px;
            display: flex;
            flex-direction: column;
            align-items:center;
        }
        .card-cont-h i{
            margin-bottom:10px;
            font-size:150px;
        }

        #aptitude h1{
            width: 100%;
            font-size: 40px;
            padding: 10px;
            border-radius: 10px;
            background-color:rgb(216, 216, 216);
        }
        .container-ap {
            width: 1200px;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items:center;
            background-color:whitesmoke;
        }

        .container-ap p{
            padding: 20px;
            font-size:23px;
            font-weight:bold;
            
            width:150px;
        }
        #p1{
            width:350px;
            font-size:22px;
        }

        .card-cont-ap{
            border-radius: 10px;
            background-color:rgb(212, 212, 212);
            display: flex;
            width:100%;
            flex-direction: row;
            align-items:center;
            justify-content: space-between;
        }
        .card-cont-ap img{
            height:200px;
            width:300px;
            margin:10px;
            font-size:150px;
            border-radius:10px;
        }
        .row-col{
            background-color:rgb(255, 255, 255);
        }


        #projects{
            width:100%;
            padding:20px 0px;
            background-color: rgb(65,65,66);
        }
        .card-pro{
            display: flex;
            width:100%;
            flex-direction: row;
            align-items:center;
            justify-content: space-evenly;
        }
        .container-pro{
            padding: 50px 270px;
            color: white;
        }
        .gallery {
            background-color:rgb(211, 211, 211);
            border: 1px solid #ccc;
            border-radius:10px;
            padding: 2px;
            width: 350px;
            display: flex;
            flex-direction: column;
            align-items:center;
        }


        .gallery img {
            width: 350px;
            height: 100px;
            border-radius: 10px;
            height: auto;
        }

        .desc {
            padding: 15px;
            text-align: justify;
        }




    </style>
</head>
<body>
    
    <div id="navbar">
        <div id ="navtext">
            <h1>PrediTec</h1>
            <div class="nav"><a href="#presentation">Home</a></div>
            <div class="nav"><a href="#topics">Topics</a></div>
            <div class="nav"><a href="#trending">Trending</a></div>
            <div class="nav"><a href="#news">News</a></div>
            <div class="nav"><a href="#about">About</a></div>
            <!-- <div class="nav"><a href="#home">Experience</a></div> -->
        </div>

        <div class="search-container">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
        </div>

        <div id="icons">
            @if ($mensaje)
                <p >{{$mensaje}}</p>
                <a class="fas fa-sign-out-alt" href="{{ url('login') }}"></a>
            @else
                <a class="fas fa-user" href="{{ url('login') }}"></a>
            @endif
            <a class="fab fa-facebook-square" href="https://www.facebook.com" target="_blank"></a>
        </div>
    </div>
    <hr id="hrnav">
    <div id="presentation">
        <div class = "textp">
            <h1>Bienvenido a PrediTec</h1>
            <p >
                La herramienta de predicciones de tendencias
                number one del market <br> 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus accusamus ab, 
                quos eaque nihil, autem inventore laborum magnam impedit alias 
                consequatur voluptate ad ullam debitis unde quidem, quisquam aliquam hic?
            </p>
        </div>
        <img src="{{asset('images/logo.png')}}" alt="foto de perfil">
    </div>

    <div id="trending" class="card">
        <div class="container-ap">  
            <h1>Trending Topic</h1>
        </div>
        <div class="container-ap">
            <div class="card-cont-ap row-col" >
                <img src="{{asset('images/sistemas.jpg')}}">
                <p>Amazon Web Services</p>
                <p id='p1'> 
                    Amazon Web Services (AWS) a cloud computing platform which 
                    provides the mix of services such as IaaS, PaaS and SaaS which 
                    helps in cloud infrastructure, Platform, and Software.
                </p>
            </div>
            <div class="card-cont-ap">
                <img src="{{asset('images/interfaz.png')}}">
                <p>Storytelling</p>
                <p id='p1'> 
                    Storytelling with scroll-triggered animation Typography itself 
                    can build a strong visual hierarchy. As an extremely crucial 
                    element of UI, it plays a major role in creating an excellent 
                    user experience.
                </p>
            </div>
            <div class="card-cont-ap row-col" >
                <img src="{{asset('images/database.jpg')}}">
                <p>Business intelligence</p>
                <p id='p1'> 
                    Business intelligence:
                    We now know how to store and manipulate data – Oracle, DB2, SQL server 
                    – they are all good, robust engines.
                    So now we are looking at ways to extract information from the data. 
                    That's what BI does.
                </p>
            </div>
            <div class="card-cont-ap">
                <img src="{{asset('images/redes.jpg')}}">
                <p>SD-WAN Becoming Common</p>
                <p id='p1'> 
                    SD-WAN Becoming Common
                    Over the course of the last decade, cloud providers, SaaS and IaaS solutions, 
                    and mobile computing have come to challenge the traditional notion 
                    of boundary-driven networking.
                </p>
            </div>
        </div>
    </div>

    
    <div id="about" class="card">
        <h1>About.</h1>
        <div class="container-a">
            <img src="{{asset('images/foto1.jpg')}}" alt="Brian"> 
            <img src="{{asset('images/foto2.jpg')}}" alt="Fercho">
            <img src="{{asset('images/foto3.jpg')}}" alt="Guillermo">
            <img src="{{asset('images/foto4.jpg')}}" alt="Oscar">
        </div>
</div>
</body>
</html>