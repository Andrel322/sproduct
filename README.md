SyProduct
=========

A Laravel project created on August 09, 2017, 18:01 pm.

Utilizado PHP7.0, Laravel 5.4, Composer, Node 6.10, Eloquent ORM, SQLite 

=== Configurando o Database ===

1) Criar o DB do projeto, com o comando "touch database/database.sqlite"

2) Configurar o arquivo .env, copiando o arquivo .env.example e trocando seu nome para .env. O configurar e trocar as informações do DB por "DB_CONNECTION=sqlite
                       DB_DATABASE=/absolute/path/to/database/database.sqlite"

3) Criar as tabelas atraves do Migrate, pelo comando "php artisian migrate"

4) Adicionar os dados as tabelas para teste do projeto, pelo comando "php artisian db:seed"

5) Rodar a aplicação, atráves do comando "php artisian serve"
