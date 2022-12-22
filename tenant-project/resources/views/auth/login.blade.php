<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="{{ env('APP_URL') }}/css/login.css" />
    <script src="{{ env('APP_URL') }}/js/vue.js"></script>
    <script src="{{ env('APP_URL') }}/js/login.js"></script>
    @jquery
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
                    <button id="switch1" onclick="disableButton(1)">Solicitar acesso</button>
                </div>
            </div>
            <div class="signupMsg visibility">
                <div class="textcontent">
                    <p class="title">Já tem uma conta?</p>
                    <p>Faça login para acessar o conteúdo.</p>
                    <button id="switch2" onclick="disableButton(2)">Log in</button>
                </div>
            </div>
        </div>
        <!-- backbox -->

        <div class="frontbox">
            <div class="login">
                <h2>Acesso - {{$tenancy}}</h2>
                <div class="inputbox">
                    <input type="text" name="email" v-model="texto" placeholder="Email">
                    <input type="password" name="password" placeholder="password">
                </div>
                <p>Esqueceu sua senha?</p>
                <button>Entrar</button>
            </div>

            <div class="signup hide">
                <h2>Cadastro</h2>
                <form onsubmit="sendRegister()">
                    <div class="inputbox">
                        <input type="text" name="fullname" id="registerName" placeholder="Nome completo">
                        <input type="email" name="email" id="registerEmail" placeholder="Email">
                        <input type="phone" name="phone" id="registerPhone" placeholder="(00) 00000-0000">
                    </div>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
        <!-- frontbox -->
        <div id="app">
            <div id="snackbar">Some text some message..</div>
        </div>
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
    document.getElementById('registerPhone').addEventListener('input', function(e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });
    makeItRain();
</script>

<script>

    async function sendRegister() {
        event.preventDefault()
        let url = "/api/registration"
        let name = document.getElementById('registerName').value
        let email = document.getElementById('registerEmail').value
        let phone = document.getElementById('registerPhone').value

        let body = {
            "name": name,
            "email": email,
            "phone": phone
        }
        const call = await callFetch(body, url);
        console.log(call)
        myFunction(call.message)
        $("#switch2").click();
    }
</script>