<!-- LOGIN/REGISTRATI-->
<div class="box">
<span class="close"><ion-icon name="close" class="icon-close"></ion-icon></span>
<!-- LOGIN -->
<div class="form-box login">
    <h2>Login</h2>
    <form action="../login/login.php" method="post" autocomplete="off">
        <input autocomplete="false" name="hidden" type="text" style="display:none;">
        <div class="input-box">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input type="email" name="email" required>
            <label>Email</label>
            <br>
        </div>
        <div class="input-box pass-login">
            <span class="icon"><ion-icon name="eye-off"></ion-icon></span>
            <input type="password" name="password"  required>
            <label>Password</label>
            <br>
        </div>
        <div class="ricorda">
            <label><input type="checkbox"></input> Ricordami</label>
            <a href="#">Password dimenticata?</a>
        </div>
        <button type="submit" name="submit" class="login-btn">Login</button>
        <div class="register">
            <p>Non hai un account? <a href="#" class="register-link">Registrati</a></p>
        </div>
    </form>
</div>

<!-- REGISTRATI -->
<div class="form-box registrati">
    <h2>Registrati</h2>
    <form action="../login/login.php" method="post" autocomplete="off">
        <input autocomplete="false" name="hidden" type="text" style="display:none;">
        <div>
            <div class="input-box">
                <span class="icon"><ion-icon name="document-text"></ion-icon></span>
                <input type="text" name="nome" required>
                <label>Nome</label>
                <br>
            </div>
        </div>

        <div class="input-box">
            <span class="icon"><ion-icon name="document-text"></ion-icon></span>
            <input type="text" name="cognome" required>
            <label>Cognome</label>
            <br>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input type="email" name="email" required>
            <label>Email</label>
            <br>
        </div>
        <div class="input-box pass-register">
            <span class="icon"><ion-icon name="eye-off"></ion-icon></span>
            <input type="password" name="password" required>
            <label>Password</label>
            <br>
        </div>
        <div class="input-box pass-register">
            <span class="icon"><ion-icon name="eye-off"></ion-icon></span>
            <input type="password" name="confirm-password" required>
            <label>Conferma Password</label>
            <br>
        </div>
        <div class="ricorda">
            <label><input type="checkbox"></input> Accetto i termini e condizioni</label>
        </div>
        <button type="submit" name="submit" class="login-btn">Registrati ora</button>
        <div class="register">
            <p>Hai già un account? <a href="#" class="login-link">Login</a></p>
        </div>
    </form>
</div>
</div>