<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.map')}}" />
    <link rel="stylesheet" href="{{asset('css/connexion.css')}}" />
    <style> textarea { resize: none; } 
    
		.invalid-feedback{
            /* ATTENTION ATTENTION OBLIGATOIRE POUR LES FORMULAIRES AVEC MESSAGES $errors->first() **/
            display: block;
            /*  **/
		}
		</style>
    <title>GNBS IMMOBLIER</title>
    <link rel="icon" type="image/x-icon" href="storage/images/favico.png">
</head>
<body>
    <div class="form-group container">
        <h1>Log In</h1> 
        <div class="form-group">
            <p>{!! Form::open(['url'=>'/connect', "method"=> "POST"]) !!}</p>    
           <div class="menu">
                <p>{!! Form::text("login", null, ["placeholder"=>"Votre Login", "class"=> $errors->has('login')? " login form-control is-invalid": "form-control"]) !!}</p>
            
                <p>@if ($errors->has("login"))
                    <div class="invalid-feedback">{{$errors->first('login')}}</div>
                @endif</p>
            
                <p>{!! Form::password("password", ["class"=> $errors->has('password')? " pass form-control is-invalid": "form-control"]) !!}</p>
            
                <p>@if ($errors->has("password"))
                    <div class="invalid-feedback">{{$errors->first("password")}}</div>
                @endif</p>
            
            
                <p>{!! Form::submit("Connnexion",["class"=>"btn btn-primary submit"]) !!}</p>
           </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>
