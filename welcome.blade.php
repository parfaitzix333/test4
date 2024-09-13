<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/ecole/css/bootstrap.css">
    <style type="text/css">
        #logo {
            border: 4px solid blue;
            border-radius: 60px;
            box-shadow: 0px 10px 20px 10px rgb(38, 192, 159);
            width: 80%;
        }

        #footer {
            margin-bottom: 0px;
        }

        #annonce {
            box-shadow: 0 10px 20px 10px rgb(28, 172, 153);
            display: flex;
            justify-content: left;
        }

        #image {
            width: 40px;
        }

        #txt {
            font-family: 'times new roman';
            font-size: 20px;
        }
    </style>
</head>

<body class="container alert alert-info">
    <div class="container alert alert-info">
        @if (Route::has('login'))
            <div class="container alert alert-primary">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn"
                        style="border: 2px solid green; padding: 5px; background: linear-gradient(to left, white, grey, white); color: black; border-radius: 20px">Se
                        Connecter</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn"
                            style="border: 2px solid green; padding: 5px; background: linear-gradient(to left, white, grey, white); color: black; border-radius: 20px">Ouvrire
                            un compte</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    <div class="container alert alert-danger ml-5" style="display: flex;">
        <div>
            <!--le logo qui va afficher sur toutes les pages qui heritent de cette base-->
            <a href="#" target="blank">
                @if ($logo)
                    <img id="logo" src="{{ Storage::url($logo->logo) }}" alt="Logo" />
                @else
                    <h5>Logo manquant</h5>
                @endif
            </a>
        </div>
        <h1 class="container"
            style="font-family: 'Copperplate Gothic Bold';box-shadow: 0px 20px 16px 20px rgba(173, 65, 65, 0.336)">
            COMPLEX SCOLAIRE <strong> Saint
                ALPHONSE</strong></h1>
    </div>



    @if ($annonces)

        @foreach ($annonces as $an)
            <div id="annonce" class="container alert alert-info mt-5">
                <div class="container">
                    <p id="txt">🔻{{ $an->annonce }}</p>
                </div>
                <div class="container">
                    <a id="image" href="{{ Storage::url($an->photo) }}"><img src="{{ Storage::url($an->photo) }}"
                        alt="---" style="width: 90%;"></a>
                </div>
            </div>
        @endforeach
    @else
        <div id="annonce" class="container alert alert-info mt-5">
            <p>Aucune Annonce n'est disponible</p>
        </div>
    @endif


    <footer id="footer" class="container alert alert-dark m-bottom-0">
        Copyright &copy;
        <script>
            document.write(new Date().getFullYear());
        </script> Tous droits réservés à <a href="#" target="_blank">Parfait Zix</a>
    </footer>

</body>

</html>
