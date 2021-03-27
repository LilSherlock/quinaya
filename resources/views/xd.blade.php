<!-- resources/views/auth/register.blade.php -->
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
        <!-- Validation Errors -->
<div class="maincontainer centered">
    <input type="checkbox" id="flip" class="fu center-block" style="opacity:0;">
    <div class="thecard " id="thecard">


        <div class="cardfront">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1 class="center-block title login-title">Login</h1>
                <div class="input-text">
                    
                    <div class="center-block">
                        <input type="text" name="email" value="{{ old('email') }}" placeholder="email" class="input-control">
                    </div>
                    
                    <div class="center-block">
                        <input type="password" name="password" placeholder="password" class="input-control">
                    </div>
                    
                    <div class="center-block">
                        <button type="submit">login</button>
                    </div>
                    <h4><label for="flip" class="center-block">¿aun no eres usuario?</label></h4>
                </div>
                <div class="error">
                    <x-auth-validation-errors class="mx-auto" :errors="$errors" style="color:rgb(126, 71, 71); margin: auto;"/>
                </div>
            </form>
        </div>
        
        
        <div class="cardback">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1 class="center-block title">Registro</h1>
                <div class="input-text">
                    <div class="center-block">
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="name" class="input-control" >
                    </div>
                    <div class="center-block">
                        <input type="text" name="email" value="{{ old('email') }}" placeholder="email" class="input-control" >
                    </div>
                    <div class="center-block">
                        <input type="text" name="phone" value="{{ old('phone') }}" placeholder="phone" class="input-control" >
                    </div>
                
                    
                    <div class="center-block">
                        <input type="password" name="password" placeholder="password" class="input-control" >
                    </div>
                    
                    <div class="center-block">
                        <input type="password" name="password_confirmation" placeholder="confirm password" class="input-control" >
                    </div>
                
                    <div class="center-block">
                        <button type="submit">Register</button>
                    </div>
                    <h4><label for="flip" class="center-block">¿Ya eres usuario?</label></h4>
                </div>
                <div class="error">
                    <x-auth-validation-errors class="mx-auto" :errors="$errors" style="color:rgb(126, 71, 71); margin: auto; padding: 2;"/>
                </div>
            </form>
        </div>

    </div>
</div>