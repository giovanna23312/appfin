<!doctype html>
<html lang="pt-br">

<head>
    <title>AppFin | @yield('titulo')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <main class="row">
        <div class="col-md-3 bg-warning vh-100">
            <div class="text-center">
            <i class="fa-solid fa-user fa-3x"></i>
                <p class="text-center fw-bold">
                    Olá Úsuario
                </p>
            </div>
            <ul class="nav flex-column">
         
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Seus Dados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Extrato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nova Entrada</a>
                </li>
                @yield('nav-complementar')
            </ul>

        </div>
        <div class="col-md-9">
            @yield('conteudo')

        </div>

    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>