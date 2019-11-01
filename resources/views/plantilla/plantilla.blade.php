<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>  @yield('titulo','plantilla')  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">




    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <style type="text/css">

.registerinicio{
    /*background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    background: -webkit-linear-gradient(left, #020110, #00c6ff);
    background: -webkit-linear-gradient(left,#293437, #00c6ff);*/
    background: -webkit-linear-gradient(left,#3f7483, #0dc9ff);
    margin-top: 3%;
    /*padding: 3%; */
}

.register{
    /*background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    background: -webkit-linear-gradient(left, #020110, #00c6ff);
    background: -webkit-linear-gradient(left,#293437, #00c6ff);*/
    background: -webkit-linear-gradient(left,#3f7483, #0dc9ff);
    /*margin-top: 3%;*/
    padding: 3%;
}

.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 100%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}

@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}


.register .register-form .form-control {
   /* border-radius: 1rem;*/
}



.register-left1 img{
    margin-top: 0;
    margin-bottom: 0%;
    width: 20%;

}


.btncolorblanco {
    color: white !important;
    margin: 1px;
}


.container-fluid{
        width: 90% !important;
}



.fa {
    width: 20px;
}

.redondo {
    border-radius: 64px;
}
body {
background-color: #0f8bf41a;
font-family: 'Underdog', cursive;
}



footer {
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;

}

.footers a {color:#696969;}
.footers p {color:#696969;}
.footers ul {line-height:30px;}
#social-fb:hover {
     color: #3B5998;
     transition:all .001s;
 }
 #social-tw:hover {
     color: #4099FF;
     transition:all .001s;
 }
 #social-gp:hover {
     color: #d34836;
     transition:all .001s;
 }
 #social-em:hover {
     color: #f39c12;
     transition:all .001s;
 }

 .breadcrumb {
      background-color: #e9ecef00;
 }

#icono {
  width: 20%;

}


    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>

    <html lang="en">
        <head>
            <meta charset="utf-8">
            <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
            <title>Index</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">




            <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
            <style type="text/css">

        .registerinicio{
            /*background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            background: -webkit-linear-gradient(left, #020110, #00c6ff);
            background: -webkit-linear-gradient(left,#293437, #00c6ff);*/
            background: -webkit-linear-gradient(left,#3f7483, #0dc9ff);
            margin-top: 3%;
            /*padding: 3%; */
        }

        .register{
            /*background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            background: -webkit-linear-gradient(left, #020110, #00c6ff);
            background: -webkit-linear-gradient(left,#293437, #00c6ff);*/
            background: -webkit-linear-gradient(left,#3f7483, #0dc9ff);
            /*margin-top: 3%;*/
            padding: 3%;
        }

        .register-left{
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }
        .register-left input{
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }
        .register-right{
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }
        .register-left img{
            margin-top: 15%;
            margin-bottom: 5%;
            width: 100%;
            -webkit-animation: mover 2s infinite  alternate;
            animation: mover 1s infinite  alternate;
        }

        @-webkit-keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        .register-left p{
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }
        .register .register-form{
            padding: 10%;
            margin-top: 10%;
        }
        .btnRegister{
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }
        .register .nav-tabs{
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }
        .register .nav-tabs .nav-link{
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }
        .register .nav-tabs .nav-link:hover{
            border: none;
        }
        .register .nav-tabs .nav-link.active{
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }
        .register-heading{
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }


        .register .register-form .form-control {
           /* border-radius: 1rem;*/
        }



        .register-left1 img{
            margin-top: 0;
            margin-bottom: 0%;
            width: 20%;

        }


        .btncolorblanco {
            color: white !important;
            margin: 1px;
        }


        .container-fluid{
                width: 90% !important;
        }



        .fa {
            width: 20px;
        }

        .redondo {
            border-radius: 64px;
        }
        body {
        background-color: #0f8bf41a;
        font-family: 'Underdog', cursive;
        }



        footer {
           left:0px;
           bottom:0px;
           height:30px;
           width:100%;

        }

        .footers a {color:#696969;}
        .footers p {color:#696969;}
        .footers ul {line-height:30px;}
        #social-fb:hover {
             color: #3B5998;
             transition:all .001s;
         }
         #social-tw:hover {
             color: #4099FF;
             transition:all .001s;
         }
         #social-gp:hover {
             color: #d34836;
             transition:all .001s;
         }
         #social-em:hover {
             color: #f39c12;
             transition:all .001s;
         }

         .breadcrumb {
              background-color: #e9ecef00;
         }



        #icono {
          width: 20%;

        }
            </style>
            <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        </head>
        <body>


        <div class="container-fluid registerinicio">
                        <div class="row">
                            <div class="col-md-6 register-left register-left1">
                                <img src="http://www.idaipqroo.org.mx/wp-content/uploads/2018/06/proteccion-de-datos-personales-791x1024.png" alt=""/>
                            </div>
                            <div class="col-md-6 register-left">

                                <h3>Bienvenid@</h3>
                                <p>Por favor llena los datos correctamente en el sistema!</p>

                            </div>
                        </div>
        </div>

        <div class="container-fluid ">

         <br>
        <nav class="navbar navbar-light">
          <a class="navbar-brand"><img id="icono" class="img-responsive"
            src="https://imge.apk.tools/300/d/3/1/com.widesoft.guiatelefonica.png"></a>

          <ul class="nav flex-column text-center">
          <li class="nav-item">
            <span class="nav-link active">Bienvenido</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cerrar sesión</a>
          </li>
        </ul>

        </nav>

@yield('contenido')

</div>
@include('plantilla.footer', ['container' => 'container-fluid'])
</body>
</html>
