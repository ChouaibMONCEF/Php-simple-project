<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../View/login.css">

    <title>Login</title>
</head>
<body>
<form method="POST" action="http://localhost/Sebelta/admin/login">
   <div class="container mt-5">
      <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card px-5 py-5" id="form1">
                <div class="form-data">
                    <div class="forms-inputs mb-4"> <span>Username</span> <input autocomplete="off" type="text" name="username">
                    </div>
                    <div class="forms-inputs mb-4"> <span>Password</span> <input autocomplete="off" type="password" name="pswrd">
                    </div>
                    <div class="mb-3"> <button type="submit" class="btn btn-dark w-100">Login</button> </div>
                </div>
            </div>
         </div>
       </div>
    </form>
</div>
</body>
</html>