# README #

Este pacote contém todos os testes de api envolvendo o projeto do minhas-vendas

### Objetivo deste repositório? ###

* Testes de clientes, vendas, webhooks do minhas vendas
* 0.1
* (https://bitbucket.org/melhor-envio/minhas-vendas-tests/src/master/)

# Testes existentes #

## ClientsCest ##
*   
*   CadastrarError - Tenta cadastrar cliente com informação faltando, espera erro, POST /apps/clients
*   CadastrarClient - Verifica se um cadastro é realizado com Sucesso, POST /apps/clients
*   AtualizarClients - Verifica se um cadastro é realizado com Sucesso, PATCH /apps/clients/{id}
*   ConsultaClients - Verifica se uma consulta é realizada com Sucesso, GET /clients

## SalesCest ##
*   CadastrarVenda - Verifica se uma venda é cadastrada com sucesso, POST /sales
*   AtualizarVenda - Verifica se uma venda é atualizada com sucesso, POST /sales/{id}
*   ConsultarVenda - Verifica se uma consulta foi realizada com sucesso, GET /sales/{id}
*   SucessListaVendas - Verifica se a lista de vendas é consultada com sucesso, /GET /sales?(filter,sort,limit)
*   FailListaVendas - Verifica se os filtros estão corretos, /GET /sales?(filter,sort,limit)


## WebhooksCest ##




# Como rodar? #


* git clone git@bitbucket.org:melhor-envio/minhas-vendas-tests.git 
Vai clonar o repositório para a pasta, troque para o branch develop
* composer install 
Vai instalar as dependencias do composer para o uso do codeception

* Configuration
  Configure api.suite.yml para apontar o url(local/develop) onde está o minhas vendas a ser executado.
* Dependencies
  Não é necessario nenhuma instalação adicional. 
* Database configuration
Não é necessário nenhuma configuração de banco de dados além daquelas necessárias pelo minhas-vendas.

## Executando testes de API  ##

* ./vendor/bin/codecept run api 
Executa todos testes de api
* ./vendor/bin/codecept run api ExemploCest 
Executa um conjunto de testes exemplo
* ./vendor/bin/codecept run api ExemploCest:funcao
Executa um teste específico de um conjunto de testes
* ./vendor/bin/codecept run api ExemploCest:func
Executa todos os testes que tem o inicio func

* ./vendor/bin/codecept run api -vv
Deixam mais detalhadas as respostas
* ./vendor/bin/codecept run api -vvv
Ainda mais detalhadas
* ./vendor/bin/codecept run api --steps
Mostra o passo a passo dos testes
* Ao colocar --html gera um report html em _output com nome de report.html

Mais informações sobre funcionamento na Documentação.  

https://codeception.com/docs/01-Introduction

#  Escrevendo testes #
*  ./vendor/bin/codecept generate:cest (acceptance/api/unit/functional) (nomedoarquivo)


# Com quem eu falo? #


* Criador
Eduardo Fischer
* Time
Samuel Desconsi, Philippe Bachilli