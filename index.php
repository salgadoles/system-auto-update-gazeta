<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style> <
        body {
            background-color: #f2f2f2;
        }
        .login{ 
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;    
            display: flex;  
        }
    </style>

</head>
<body>  
   <div class="login">
     <div class="container">
        <div class="row-lg-4 offset-lg-4">
            <div class="card ">  
                <div class="card-header"> <h3>Login</h3></div>
          <div class="card-body">  
           <form action="login.php" method="POST">
                <div>
                    <div class="mb-3">
                        <label>usuario</label>
                        <input type="text" name= "usuario" class="form-control">
                    </div>
                </div>
                <div>
                    <div class="mb-3">
                        <label>senha</label>
                        <input type="password" name= "senha" class="form-control">
                    </div>
                </div>
                <div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
                 </div>
        </div>
    </div>
</div>
</body>
</html>

     