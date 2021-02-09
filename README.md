 
 # Instruções
* Com o terminal aberto na pasta do projeto, executar o comando: composer install
* Com o terminal aberto na pasta do projeto, executar o comando: php -r "file_exists('.env') || copy('.env.example', '.env');"
* Com o terminal aberto na pasta do projeto, executar o comando: php artisan key:generate
* Com o terminal aberto na pasta do projeto, executar o comando: php artisan serve

 # Rotas no Postman

* CLique no botão abaixo para importar a collection com as rotas postman 

   [![Run in Postman](https://run.pstmn.io/button.svg)](https://app.getpostman.com/run-collection/ebb9120f8fe4c9d6b9b9)

* As rotas foram criadas no endereço http://localhost:8000, caso você esteja utilizando outro endereço ou porta é só substituir as urls no postman

## Respostas
1. Http status code 200 "Sucesso"

## Exceções

1. ✅ Retorna erro **404** recurso não encontrado
2. ✅ Retorna erro **405** se o verbo http estiver incorreto
3. ✅ Retorna erro **422** se um parametro obrigatório não for passado ou não atenda as regras de validação
4. ✅ Retorna erro **500** erro interno no servidor

## License

[MIT license](https://opensource.org/licenses/MIT).