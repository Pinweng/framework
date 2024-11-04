<?php require_once __DIR__ . "/../../../App/Design/header.php";?>

<br><br><br><br><br>

<div id="registerform" class="container col col-6">
  <h1>Registiere Dich</h1>
  <br>
  
  <form method="post">

    <div class="row">

    <div class="mb-3 col col-6">
      <label for="firstname" class="form-label">Vorname</label>
      <input type="text" class="form-control" id="firstname" aria-describedby="emailHelp"  name="firstname">
      <div id="firstnameHelp" class="form-text">Bitte geben Sie ihren Vornamen ein.</div>
    </div>

    <div class="mb-3 col col-6">
      <label for="lastname" class="form-label">Nachname</label>
      <input type="text" class="form-control" id="lastname" aria-describedby="emailHelp"  name="lastname">
      <div id="lastnameHelp" class="form-text">Bitte geben Sie ihren Nachnamen ein.</div>
    </div>

    <div class="mb-3" >
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" aria-describedby="emailHelp"  name="username">
      <div id="usernameHelp" class="form-text">Bitte geben Sie einen Usernamen ein.</div>
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Emailadresse</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="email">
      <div id="emailHelp" class="form-text">Bitte geben Sie eine gültige Emailadresse an.</div>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp">
      <div id="passwordHelp" class="form-text">Bitte geben Sie ein Password ein.<div>
    </div>

    </div>
    <br>

    <button type="submit" class="btn btn-primary" name="submit" value="send">Senden</button >
    
    <p style="color: red"><?php echo $fail ?></p>
  </form>
</div>


<?php require_once __DIR__ . "/../../../App/Design/footer.php"; ?>