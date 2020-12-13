<html>

<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
  <title>Ingresa</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Bolsa estudiantil</p>
    <form class="form1" method="POST" action="{{ route('login') }}">






    
      <input class="un " type="text" align="center" id="email"  type="email" name="email" :value="old('email')" required autofocus placeholder="Correo">
      <input class="pass"  align="center" id="password" 
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="Contraseña">
     
      <button class="submit" align="center" type="submit">Ingresar</button>
     
            
    </form>    
    </div>
     
</body>

</html>