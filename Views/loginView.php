<?php include(__DIR__ . '/header.php'); ?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="./?login" method="POST" class="row g-3">
                        <h4>Connection</h4>
                        <div class="col-12">
                            <label>Login</label>
                            <input type="text" name="login" class="form-control" placeholder="Entrez votre login">
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="pwd" class="form-control" placeholder="Entrez votre mot de passe">
                        </div>
                        <div class="col-12">

                            <input type="submit" class="btn btn-dark float-end" value="Se connecter">                            
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">Pas encore inscrit? <a href="Views/signinView.php">S'inscrire</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</body>