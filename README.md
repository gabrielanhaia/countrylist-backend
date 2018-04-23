# countrylist-backend
Backend da listagem de países (Arizona)

# Tutorial de instalação

Acesse o diretório '/var/www' de seu sistema e clone o projeto:
```sh
git clone https://github.com/gabrielanhaia/countrylist-backend.git
```

Para subir a aplicação através de um container do docker execute:
```sh
docker-compose up -d
```
Com isso teremos um serviço rodando o *Apache* com suporte a PHP 7 e um container com o Mysql.

Para definir as configurações iniciais de nossa aplicação com o Laravel é necessário executar alguns comandos descritos a baixo, os comandos so executados no container do docker,

Instalação das dependências do composer:
```sh
docker exec -it arizona-app composer install
```

Geração de chave da aplicação:
```sh
docker exec -it arizona-app php artisan key:generate
```

Executando as migrations para criação da estrutura do banco de dados:
```sh
docker exec -it arizona-app php artisan migrate
```

Execução dos seeds para inserir os dados básicos do banco:
```sh
docker exec -it arizona-app php artisan db:seed --class=CountryListSeeder
```

Depois basta acessar 'localhost:8080' ou 'localhost:8080/api/country' para acesso a API.

Observações:
1. As pastas `storage` e `bootstrap/cache` devem estar com permissão de escrita liberada para que o Laravel possa escrever nelas.
