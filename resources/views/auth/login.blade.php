<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
   <div class="container">
        <div class="row block-6 mt-5">
          <div class="col-md-8 pr-md-4">
          	<h4 class="mb-4">Connexion</h4>
            <form action="{{ route("login") }}" method="POST">
                @csrf
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder=" Email">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="mot de passe">
              </div>
              <div class="form-group">
                <input type="submit" value="Se connecter" class="btn btn-primary py-3 px-5">
              </div>
            </form>

          </div>


        </div>>
   </div>
</body>
</html>
