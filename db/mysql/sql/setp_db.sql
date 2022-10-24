create database wp_test_db;
create user 'wp_user'@'%' identified with mysql_native_password by 'Wordpress1!';
grant all privileges on wp_test_db.* to 'wp_user'@'%';