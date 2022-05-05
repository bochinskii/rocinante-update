<h1>Проект "Rocinante Update"</h1><br>
<br>
<p>
В директории "site" находится сайт на CMS Drupal 9.
В диретории "db" ноходится dump базы дынных данного сайта.
</p>
<p>
С помощью GitHub Action происходит "заливка" сайта на AWS Instance.
Deploy_archive "заливает" файлы сайта на ec2 instance.
Deploy_db "заливает" дамп базы данных на ec2 instance.
Action'ы запускается вручную.
</p>
<p>
Вот какие есть "секреты":
</p>
CONFIG_IN_PHP - файл config.ini.php для MyPHP Admin;<br>
DB_CONFIG_ADD - часть файла settings.php отвечающий за базу данных;<br>
GH_ACTION_ACCESS_KEY_ID - ключ доступа к AWS;<br>
GH_ACTION_SECRET_ACCESS_KEY - секретный ключ для доступа к AWS;<br>
MYSQL_ADMIN_USER - имя mysql администратора;<br>
MYSQL_ADMIN_USER_PASS - пароль mysql администратора;<br>
MYSQL_DRUPAL_DB - имя базы данных сайта;<br>
MYSQL_DRUPAL_USER - имя пользователя к базе данных сайта;<br>
MYSQL_DRUPAL_USER_PASS - пароль к базу данных сайта;<br>
SITE_DIR - префикс директории с сайтом;<br>
SSH_KEY - приватный ssh ключ;<br>
SSH_PORT - кастомный ssh порт;<br>
<br>
<p>
Status of our Actions:
</p>
<img src="https://github.com/bochinskii/rocinante-update/workflows/Deploy_archive/badge.svg?branch=main"><br>
<img src="https://github.com/bochinskii/rocinante-update/workflows/Deploy_db/badge.svg?branch=main"><br>
<p>
Denis Bochinskii
</p>
