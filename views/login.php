<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/login.css">
<div class="login">
    <div class="login_form">
        <h2>Acessar Minha Conta</h2>
        <form method="POST" action="">
            <input type="text" name="email" placeholder="E-mail">
            <input type="password" name="senha" placeholder="Senha">
            <button type="submit" name="entrar">Entrar</button>
        </form>
        <?php if(isset($_SESSION['erro_box'])): ?>
            <div class="erro_box"><?php echo $_SESSION['erro_box']; ?></div>
        <?php endif; ?>
        <a href="#">Cadastre-se</a>
    </div>
</div>