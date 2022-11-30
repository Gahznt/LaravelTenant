<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="{{ env('APP_URL') }}/css/login.css" />
    <script src="{{ env('APP_URL') }}/js/login.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$tenancy}} - Login CronoDesk</title>
</head>

<body>
    <div class="rain front-row"></div>
    <div class="rain back-row"></div>

    <div class="container">
        <div class="backbox">
            <div class="loginMsg">
                <div class="textcontent">
                    <p class="title">Ainda não tem uma conta?</p>
                    <p>Faça uma solicitação agora mesmo.</p>
                    <button id="switch1">Solicitar acesso</button>
                </div>
            </div>
            <div class="signupMsg visibility">
                <div class="textcontent">
                    <p class="title">Já tem uma conta?</p>
                    <p>Faça login para acessar o conteúdo.</p>
                    <button id="switch2">Log in</button>
                </div>
            </div>
        </div>
        <!-- backbox -->

        <div class="frontbox">
            <div class="login">
                <h2>Acesso - {{$tenancy}}</h2>
                <div class="inputbox">
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Senha">
                </div>
                <p>Esqueceu sua senha?</p>
                <button>Entrar</button>
            </div>

            <div class="signup hide">
                <h2>Registro</h2>
                <div class="inputbox">
                    <input type="text" name="fullname" placeholder="Nome completo">
                    <input type="text" name="email" placeholder="Email">
                    <input type="phone" name="phone" placeholder="Telefone">
                </div>
                <button>Enviar</button>
            </div>

        </div>
        <!-- frontbox -->
    </div>

    <svg class="svg-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="svg-waves__parallax">
            <use xlink:href="#gentle-wave" x="48" y="0"></use>
            <use xlink:href="#gentle-wave" x="48" y="3"></use>
            <use xlink:href="#gentle-wave" x="48" y="5"></use>
            <use xlink:href="#gentle-wave" x="48" y="7"></use>
        </g>
    </svg>
</body>

</html>

<script>
    var $loginMsg = $(".loginMsg"),
        $login = $(".login"),
        $signupMsg = $(".signupMsg"),
        $signup = $(".signup"),
        $frontbox = $(".frontbox");

    $("#switch1").on("click", function() {
        $loginMsg.toggleClass("visibility");
        $frontbox.addClass("moving");
        $signupMsg.toggleClass("visibility");

        $signup.toggleClass("hide");
        $login.toggleClass("hide");
    });

    $("#switch2").on("click", function() {
        $loginMsg.toggleClass("visibility");
        $frontbox.removeClass("moving");
        $signupMsg.toggleClass("visibility");

        $signup.toggleClass("hide");
        $login.toggleClass("hide");
    });

    // setTimeout(function() {
    //     $("#switch1").click();
    // }, 1000);

    // setTimeout(function() {
    //     $("#switch2").click();
    // }, 2000);
</script>

<script>
    var makeItRain = function() {
        //clear out everything
        $('.rain').empty();

        var increment = 0;
        var drops = "";
        var backDrops = "";

        while (increment < 100) {
            //couple random numbers to use for various randomizations
            //random number between 98 and 1
            var randoHundo = (Math.floor(Math.random() * (98 - 1 + 1) + 1));
            //random number between 5 and 2
            var randoFiver = (Math.floor(Math.random() * (5 - 2 + 1) + 2));
            //increment
            increment += randoFiver;
            //add in a new raindrop with various randomizations to certain CSS properties
            drops += '<div class="drop" style="left: ' + increment + '%; bottom: ' + (randoFiver + randoFiver - 1 + 100) + '%; animation-delay: 0.' + randoHundo + 's; animation-duration: 0.5' + randoHundo + 's;"><div class="stem" style="animation-delay: 0.' + randoHundo + 's; animation-duration: 0.5' + randoHundo + 's;"></div><div class="splat" style="animation-delay: 0.' + randoHundo + 's; animation-duration: 0.5' + randoHundo + 's;"></div></div>';
            backDrops += '<div class="drop" style="right: ' + increment + '%; bottom: ' + (randoFiver + randoFiver - 1 + 100) + '%; animation-delay: 0.' + randoHundo + 's; animation-duration: 0.5' + randoHundo + 's;"><div class="stem" style="animation-delay: 0.' + randoHundo + 's; animation-duration: 0.5' + randoHundo + 's;"></div><div class="splat" style="animation-delay: 0.' + randoHundo + 's; animation-duration: 0.5' + randoHundo + 's;"></div></div>';
        }

        $('.rain.front-row').append(drops);
        $('.rain.back-row').append(backDrops);
    }

    $('.splat-toggle.toggle').on('click', function() {
        $('body').toggleClass('splat-toggle');
        $('.splat-toggle.toggle').toggleClass('active');
        makeItRain();
    });

    $('.back-row-toggle.toggle').on('click', function() {
        $('body').toggleClass('back-row-toggle');
        $('.back-row-toggle.toggle').toggleClass('active');
        makeItRain();
    });

    $('.single-toggle.toggle').on('click', function() {
        $('body').toggleClass('single-toggle');
        $('.single-toggle.toggle').toggleClass('active');
        makeItRain();
    });

    makeItRain();
</script>