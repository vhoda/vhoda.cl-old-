<!--                                                       
            ,---,                                       
            ,--.' |                    ,---,              
            |  |  :       ,---.      ,---.'|              
       .---.:  :  :      '   ,'\     |   | :              
     /.  ./|:  |  |,--. /   /   |    |   | |   ,--.--.    
   .-' . ' ||  :  '   |.   ; ,. :  ,--.__| |  /       \   
  /___/ \: ||  |   /' :'   | |: : /   ,'   | .--.  .-. |  
  .   \  ' .'  :  | | |'   | .; :.   '  /  |  \__\/: . .  
   \   \   '|  |  ' | :|   :    |'   ; |:  |  ," .--.; |  
    \   \   |  :  :_:,' \   \  / |   | '/  ' /  /  ,.  |  
     \   \ ||  | ,'      `----'  |   :    :|;  :   .'   \ 
      '---" `--''                 \   \  /  |  ,     .-./ 
                                   `----'    `--`---'       http://vhoda.cl/  -->

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:description" content="¿quien soy?... No lo sé" />
    <!--assets-->
    <title>vhoda⠀</title>
    <link rel="icon" href="assets/apple.gif" type="image/gif">
    <script src="index.js"></script>
    <script src="assets/title.js"></script>
    <link rel="stylesheet" href="estilos.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!---icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!--sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--jquery-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--googleFonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!--btn btnDiscord-->
    <script>
        function discord() {
            swal({
                title: "vhoda#0001 or 'vhoda'",
                button: ": )",
            });
        }
    </script>
    <style>
        .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #000000;
            transition: opacity 0.99s, visibility 2s;
        }

        .loader--hidden {
            opacity: 0;
            visibility: hidden;
        }

        .loader::after {
            content: "";
            width: 55px;
            height: 55px;
            border: 10px solid #684c69;
            border-top-color: #330026;
            border-radius: 50%;
            animation: loading 1s ease infinite;
        }

        @keyframes loading {
            from {
                transform: rotate(0turn);
            }

            to {
                transform: rotate(1turn);
            }
        }
    </style>
    <script>
        window.addEventListener("load", () => {
            const loader = document.querySelector(".loader");

            loader.classList.add("loader--hidden");

            loader.addEventListener("transitionend", () => {
                document.body.removeChild(loader);
            });
        });
    </script>
</head>

<body style="background-color:black; font-family: Inter, sans-serif;" class="user-select-none">
    <!--loader-->
    <div class="loader"></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="text-center">
        <img src="assets/original.gif" class="rounded-circle object-fit-cover border shadow" width="190" height="190">
    </div>
    <br>
    <!--titulo-->
    <h1 class="fw-bolder text-center text-white">
        vhoda
        <p class="text-center fw-light" style="font-size: 14px;">full stack web dev</p>
    </h1>

    <!--btns-->
    <div class="text-center">
        <a target="_blank" href="https://youtube.com/vhodita" data-bs-toggle="tooltip" data-bs-placement="top"
            data-bs-title="YouTube"><i class="bi bi-youtube text-white col-md-2 col-xs-6"
                style="font-size: 1.5rem;"></i></a>&nbsp;
        <a target="_blank" href="https://github.com/vhoda" data-bs-toggle="tooltip" data-bs-placement="top"
            data-bs-title="Github"><i class="bi bi-github text-white" style="font-size: 1.5rem;"></i></a>&nbsp;
        <a target="_blank" href="https://twitter.com/vhodita" data-bs-toggle="tooltip" data-bs-placement="top"
            data-bs-title="Twitter"><i class="bi bi-twitter text-white" style="font-size: 1.5rem;"></i></a>&nbsp;
        <a href="#" onclick="discord()" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Discord"><i
                class="bi bi-discord text-white" style="font-size: 1.5rem;"></i></a>&nbsp;
        <a target="_blank" href="https://instagram.com/vhodita" data-bs-toggle="tooltip" data-bs-placement="top"
            data-bs-title="Instagram"><i class="bi bi-instagram text-white" style="font-size: 1.5rem;"></i></a>&nbsp;
        <br>
        <br>
    </div>
    <!--tooltip-->
    <script type="text/javascript">
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>

</body>

</html>
<!---vhoda~2024-->