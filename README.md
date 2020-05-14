# Laravel Udemy
## Curso laravel

Curso de Laravel cadastro

# Instruções pacotes node_modules

Instale com *npm install NOME*

## Instalando Jquery 
npm install jquery


## Instalando Bootstrap 
npm install bootstrap

## Configurando webpack.mix.js

No **webpack.mix.js** coloque *npm run dev*

```
mix
	.sass('resources/views/scss/style.scss', 'public/site/style.css')
	.scripts('node_modules/jquery/dist/jquery.js', 'public/site/jquery.js')
	.scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/site/bootstrap.js');	
```
# JSON
## Convertendo para JSON
Comandos:
 *json_encode()*
 *toJson()*
 
```
$cats = Categoria::all();
return json_encode($cats);
```
```
$prods = Produto::all();
return $prods->toJson();
```
## JQUERY
A funcção será executada após o HTML ser completamente carregado
```
$(function(){
    carregarCategorias();
    carregarProdutos();        
});
```