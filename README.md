# Medicinae Scraper Worker

## Requisitos

- Docker

## Buildar e Executar Docker

`docker-compose up --build` para buildar e executar containers.

## Entrar no Container e Instalar Projeto

`docker-compose exec -u www-data php-fpm bash` para entrar no container do php como usuário normal.

Copiar o `.env.example` para o `.env`

`composer install` para instalar as dependencias do projeto.

`php artisan migrate --seed` para criar tabelas e inserir dados.



## Como utilizar

Você deve acessar o ambiente atraves da URL: http://medicinae-scraper-challenge.localhost/

Clicar no no link no canto superior esquerdo com o nome de Login.

Existe 2 usuários um usuario com o retorno dos dados do lotes na propria página e o 
outro com os dados dos lotes em arquivos.

## Usuários

Usuario: rick@gmail.com

Senha: rickandmorty

Descrição: Tela permite download de 3 arquivos 1 de cada tipo com as listagens de lotes.

------------------------------------------------------------------------
Usuario: rick@gmail.com

Senha: rickandmorty

Descrição: Tela exibe uma tabela com a listagens de lotes.
