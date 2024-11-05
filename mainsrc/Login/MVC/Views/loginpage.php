<?php require_once __DIR__ . "/../../../App/Design/header.php";?>
<br> <br> <br>

<div id="registerform" class="container col col-6">
    <h1>Log dich ein</h1>
    <br>
    <form method="post">
        <div class="row">
            <div class="mb-3  col col-8">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Bitte geben Sie ihre Email ein.</div>
            </div>

            <div class="mb-3 col col-8">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp">
                <div id="passwordHelp" class="form-text">Bitte geben Sie ihr Password ein.</div>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Senden</button>

    </form>
</div>
<?php require_once __DIR__ . "/../../../App/Design/header.php";?>