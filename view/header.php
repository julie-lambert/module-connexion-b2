<header>
                <?php if(empty($_SESSION['login'])) : ?>
                    <a href="connexion.php" id="connexion">Se connecter</a>
                    <a href="inscription.php" id="inscription">S'inscrire</a>
                <?php elseif($_SESSION['login']=='adminN1337$') : ?>
                    <h3>Bienvenue <?php echo $_SESSION['login']; ?></h3>
                    <a href="admin.php">Gestion utilisateurs</a>
                    <a href="../view/profil.php">Profil</a>
                    <a href="../controller/deconnexion.php" id="deconnexion">Déconnexion</a>
                <?php else : ?>
                    <h3>Bienvenue <?php echo $_SESSION['login']; ?></h3>
                    <a href="./view/profil.php">Profil</a>
                    <a href="../controller/deconnexion.php" id="deconnexion">Déconnexion</a>
                <?php endif; ?>
	</header>