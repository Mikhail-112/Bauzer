<nav>
            <a href="KOSHELENKOV_M_YU_VD50-1-19_index.php" class="nav__logo">Bauz<strong>er</strong></a>
            <ul class="nav__menu">
                <li><a href="KOSHELENKOV_M_YU_VD50-1-19_programm.php">Программа</a></li>
                <li><a href="KOSHELENKOV_M_YU_VD50-1-19_treners.php">Наши тренеры</a></li>
                <?php if(isset($AUTH['role'])) :?>
                    <?php if($AUTH['role'] == '1') :?>
                    <li><a href="./admin.php">Админ</a></li>
                <?php else :?>
                    <li><a href="KOSHELENKOV_M_YU_VD50-1-19_about.php">О нас</a></li>
                <?php endif; ?>
                <?php endif; ?>
              
               
                <li><a href="KOSHELENKOV_M_YU_VD50-1-19_contacts.php">Контакты</a></li>
                <li><a href="KOSHELENKOV_M_YU_VD50-1-19_news.php">Новости</a></li>
            </ul>

            <?php if($AUTH) :?>
                <a href="./profile.php" class="auth">Профиль</a>
            <?php else :?>
                <a href="./login.php" class="auth" style="font-family: 'Montserrat'; font-size: 18px">Войти</a>
            <?php endif; ?>
            
</nav>