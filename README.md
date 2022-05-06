<h1>Проект "Rocinante Update"</h1><br>
<br>
<p>
В директории "site" проекта находится сайт на CMS Drupal 9.
В диретории "db" находится сжатый dump базы дынных данного сайта.
</p>
<p>
С помощью GitHub Action - Deploy_archive_v2 (Deploy_archive) происходит заливка актуальных файлов сайта на определенный AWS Instance.
</p>
<p>
С помощью GitHub Action - Deploy_db_v2 (Deploy_db) происходит заливка актуальной базы данных сайта на определенный AWS Instance.
</p>
<p>
Вот какие есть "секреты":
</p>
CONFIG_IN_PHP - файл config.ini.php для MyPHP Admin;<br>
DB_CONFIG_ADD - часть файла settings.php отвечающий за базу данных;<br>
<br>
GH_ACTION_ACCESS_KEY_ID - ключ доступа к AWS;<br>
GH_ACTION_SECRET_ACCESS_KEY - секретный ключ для доступа к AWS;<br>
<br>
MYSQL_ADMIN_USER - имя mysql администратора;<br>
MYSQL_ADMIN_USER_PASS - пароль mysql администратора;<br>
<br>
MYSQL_DRUPAL_DB - имя базы данных сайта;<br>
MYSQL_DRUPAL_USER - имя пользователя к базе данных сайта;<br>
MYSQL_DRUPAL_USER_PASS - пароль к базу данных сайта;<br>
<br>
SITE_DIR - префикс директории с сайтом;<br>
<br>
SSH_KEY - приватный ssh ключ;<br>
SSH_PORT - кастомный ssh порт;<br>
<br>
<p>
Status of our Actions:
</p>
<img src="https://github.com/bochinskii/rocinante-update/workflows/Deploy_archive/badge.svg?branch=main"><br>
<img src="https://github.com/bochinskii/rocinante-update/workflows/Deploy_db/badge.svg?branch=main"><br>
<img src="https://github.com/bochinskii/rocinante-update/workflows/Deploy_archive_v2/badge.svg?branch=main"><br>
<img src="https://github.com/bochinskii/rocinante-update/workflows/Deploy_db_v2/badge.svg?branch=main"><br>
<br>
<p>
Denis Bochinskii
</p>
