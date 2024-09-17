<?php
    $pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USERNAME, PASSWORD);

    $sql = $pdo->prepare("SELECT * from adm");
    $sql->execute();
    $adm = $sql->fetchAll();

    // Vai ter direcionamento no footer???
?>
<footer>
    <img src="<?php echo INCLUDE_PATH; ?>/assets/img/logotipo.png" class="logotipo">

    <div class="footer-container">
        <ul>
            <label>FEMININO</label>
            <li>Tênis</li>
            <li>Camisa de time</li>
            <li>Conjuntos</li>
        </ul>

        <ul>
            <label>MASCULINO</label>
            <li>Tênis</li>
            <li>Camisa de time</li>
            <li>Conjuntos</li>
        </ul>

        <ul>
            <label>INFANTIL</label>
            <li>Tênis</li>
            <li>Camisa de time</li>
            <li>Conjuntos</li>
        </ul>

        <ul>
            <label>CONTATO</label>
            <li><?php echo $adm[0]['telefone']; ?></li>
            <li><?php echo $adm[0]['email']; ?></li>
        </ul>

        <ul>
            <a href="<?php echo INCLUDE_PATH?>/footer.php"><label>SOBRE MIM</label></a>
            <p>Na NalinSports, somos apaixonados por esportes e comprometidos em oferecer o que há de melhor em equipamentos esportivos, desde roupas e calçados até acessórios, sempre buscando a satisfação do cliente.</p>
        </ul>

        <ul>
            <label>ME SIGA</label>
            <div>
                <i class="fab fa-instagram" onclick="window.location.href = 'https://www.instagram.com/nalin_sports/'"></i>
                <i class="fab fa-facebook-f" onclick="window.location.href = 'https://www.facebook.com/profile.php?id=61555426726204&locale=pt_BR'"></i>
            </div>
        </ul>
    </div>
</footer>