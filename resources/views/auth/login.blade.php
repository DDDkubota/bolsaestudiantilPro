
    
        <head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
  <title>Login</title>
</head>

        <!-- Session Status -->
        <body>
  <div class="main">
    <p class="sign" align="center">Bolsa estudiantil</p>
 
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                

                <x-input id="email" class="un " type="email" name="email" :value="old('email')" required autofocus placeholder="Correo" />
            </div>
        
   
            <!-- Password -->
            <div class="mt-4">
                

                <x-input id="password"  class="pass"
                                   align="center"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="Contraseña"/>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
              
                <button class="submit" align="center" type="submit"> {{ __('Ingresar') }}</button>
             
            </div>

        </form>
        <div class="flex items-center justify-end mt-4">
              
              <a  align="center" href="{{route('register')}}"> {{ __('Ingresar') }}</a>
           
          </div>
        </body>

</html>
