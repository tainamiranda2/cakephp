## assunto - instalação 
### tenha ao menos php 7.4 e composer 2 instalado

### composer create-project --prefer-dist cakephp/app:~4.0 my_app_name

## rodar o servidor
### cake server php - S localhost:8000

## conexao com banco de dados
### config - Datasources, nome do banco, senha e banco em si
# assunto - migration - tabela no banco
###  bin/cake bake  migration Users
### criando campos:  bin/cake  migrations migrate

## criando classes seed  com vlaores fakes par ao banco

###  bin/cake bake seed USer 
# assunto -rotas 
## 
# assunto - controllers 
##   $routes->connect('/about', ['controller'=>'About', 'action' => 'index']);
## criando controller - bin/cake  bake controller Home
# assunto - views
## php bin/cake.php bake template Papel index,edit ou add
# assunto - templates
## 
# table 

# entity