<h1>Проект "Rocinante Update"</h1><br>
<br>
<p>
С помощью GitHub Action - "Deploy_Drupal_9_site" происходит развертывания сайта на CMS Drupal 9
на AWS ec2 instance.
</p>
<p>
В директории "data" находится зашифрованные архив сайта и dump базы данных.
В директории "gpg" находится публичный gpg ключ, которым шифровались данные, а с
помощью данного action'а и переменной GPG_KEY данный ключ экспортируется для
рассшифровки данных.
</p>
<p>
Есть actions'ы - "Prepering", "Site", "Database". Это куски одного целого action'а -
"Deploy_Drupal_9_site"
</p>
<p>
Так же есть actions'ы с префиксом "exaple_". Они нужны для альтернативы.
</p>
<p>
Вот какие есть "секреты":
</p>
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
GPG_KEY - ключи для дешифрования данных;
GPG_PASSWORD - пароль к ключу;
</p>
<p>
Status of our Actions:
</p>
<img src="https://github.com/bochinskii/rocinante-update/workflows/Deploy_Drupal_9_site/badge.svg?branch=main"><br>
<br>
<p>
Так же есть 2-а Jenkinsfile'а:
- Jenkinsfile_v1
-  Jenkinsfile_v2.
Они выполняют похожую функцию как и GitHub Actions.
</p>
<p>
Все Jenkinsfile'ы делают одно и тоже. Разница состоит в том, что в Jenkinsfile_v1 -
мы используем ssh комманды из shell'а, а в Jenkinsfile_v2 - используем плагин - SSH Pipeline Steps
</p>
<p>
Так же, для копирования файлов архива сайта и dump'а базы данных, в обоих Jenkinsfile'ах
мы используем плагин - Publish Over SSH
</p>
<p>
Denis Bochinskii
</p>
