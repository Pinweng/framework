<?php require_once __DIR__ . "/../../../App/Design/header.php"?>
<br><br><br><br>
<div id="registerform" class="container col col-6">
    <h1>Registriere Dich</h1>
    <br>
    <form method="post">
        <div class="row">
            <div class="mb-3 col col-6">
                <label for="firstname" class="form-label">Vorname</label>
                <input type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp" name="firstname">
                <div id="firstnameHelp" class="form-text">Gib deinen Vornamen ein.</div>
            </div>
            <div class="mb-3 col col-6">
                <label for="lastname" class="form-label">Nachname</label>
                <input type="text" class="form-control" id="lastname" aria-describedby="elastnameHelp" name=lastname>
                <div id="lastnameHelp" class="form-text">Gib deinen Nachnamen ein.</div>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" name="username">
                <div id="usernameHelp" class="form-text">Welchen Username möchtest du haben?</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">Gib deine E-Mail Adresse an.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp">
                <div id="passwordHelp" class="form-text">Gib deine Passwort an.</div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="send">Submit</button>
        <p style="color: red"><?php echo $fail?></p>
    </form>
</div>

<?php require_once __DIR__ . "/../../../App/Design/footer.php"?>