# API Laravel para consumir dados TMDB

* Mais sobre Laravel - https://laravel.com/
* Fonte dos dados - TMDB API https://developers.themoviedb.org/3/getting-started/introduction

**Requisitos**

- PHP - https://www.php.net/
- Composer - https://getcomposer.org/
- Editor de codigo fonte - utilizei vs code https://code.visualstudio.com/ 

Após clonar o repositório, navegue para a pasta que criou e instale as seguintes dependências:

* composer install

* composer require guzzlehttp/guzzle:~6.0

**Para iniciar os testes**

Inicie um terminal 
* rode o comando **php artisan serve** 


**Para testes de rotas foi utilizado Insomnia**

https://insomnia.rest/download/

 **Rotas**
 
```
  /api/lancamentos
  /api/bemAvaliados
  /api/movie/(id movie)
  /api/video/(id movie)
  /api/generos
   
 
