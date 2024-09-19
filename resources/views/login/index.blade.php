<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Velas Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .image-container {
            width: 50%;
            background-image: url('https://vallarta.grandvelas.com/resourcefiles/faq-home-content-image/panoramica-grand-velas-vallarta.jpg?version=9052024154417');
            background-size: cover;
            background-position: center;
        }

        .form-container {
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .form-container img {
            height: 250px;
            width: 500px;
        }

        h2 {
            margin-bottom: 30px;
            color: black;
        }

        .input {
            background-color: transparent;
            padding: 10px 20px;
            border-color: gray;
            border-radius: 10px;
            margin-bottom: 30px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button {
            background-color: #947F5B;
            border-radius: 15px;
            border: none;
            color: white;
            padding: 15px 60px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #a89f88;
        }

        .error-message {
            color: red;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="image-container"></div>
        <div class="form-container">
            <img src="https://velasmeetingsmexico.com/app/uploads/2018/09/meetings_fam_gvrm_logo.png" alt="">
            <h2>Iniciar Sesión</h2>

            <!-- Contenedor para mensajes de error -->
            @if ($errors->any())
                <div class="error-message">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <a>{{ $error }}</a>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="loginForm" method="POST" action="{{ route('login') }}">
                @csrf
                <label for="colaboradorInput">Nro. Colaborador</label>
                <input type="text" id="colaboradorInput" name="num_colaborador" placeholder="Ej. 12345" class="input" required>
                <label for="passwordInput">Contraseña</label>
                <input type="password" id="passwordInput" name="contraseña" placeholder="Contraseña" class="input" required>
                <button type="submit" class="button">Entrar</button>
            </form>
        </div>
    </div>

    <script>
        // Detectar la tecla "Enter" en los campos de entrada
        document.querySelectorAll('#colaboradorInput, #passwordInput').forEach(input => {
            input.addEventListener('keypress', function(event) {
                if (event.key === 'Enter') {
                    event.preventDefault(); // Evita el envío normal
                    document.getElementById('loginForm').submit(); // Envía el formulario
                }
            });
        });
    </script>
</body>
</html>