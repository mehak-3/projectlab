<html>
    <head>
        <title>CUI Wah- @yield('title')</title>
    </head>
    <body>
        @section('header')
             <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2"style="background-color:purple">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c0/COMSATS_new_logo.jpg"height=100% width=50%>
            </div>  
            <div class="col-sm-10" style="background-color:purple">
            <h1 style="color:white"><b>COMSATS</b> UNIVERSITY ISLAMABAD, WAH CAMPUS</h1>
        </div>
        </div>
        @show
        @section('navbar')
         <div class="container-fluid">
        <div class="row">
                <div class="col-sm-3">
                    <a href="home.blade.php"><h1>Home</h1></a>
                </div>
                <div class="col-sm-3">
                    <a href="contact.blade.php"><h1>Contact</h1></a>      
                </div>
        </div>  
</div>

@show
    </body>
</html>