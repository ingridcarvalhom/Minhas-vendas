# README #

Este pacote contém todos os testes de api envolvendo o projeto do minhas-vendas
Para mais informações sobre o minhas vendas procure a documentação dele no bitbucket.
Atenção aos tokens de acesso. Sales e Clients utilizam o de usuário. Webhooks utilizam o de plataforma.


### Objetivo deste repositório? ###

* Testes de clientes, vendas, webhooks do minhas vendas
* 0.1
* (https://bitbucket.org/melhor-envio/minhas-vendas-tests/src/master/)

# Testes existentes #

## ClientsCest ##
*   CreateClientMissingField - Cadastra Clientes faltando Campos POST /clients
*   CreateClient - Verifica se um cadastro é realizado com Sucesso, POST /clients
*   UpdateClient - Verifica se um cadastro é realizado com Sucesso, PATCH /apps/clients/{id}
*   CheckClient - Verifica se uma consulta é realizada com Sucesso, GET /clients
*   CheckClientById - Verifica Consulta Client por Id GET /clients

## SalesCest ## 
*   CadastrarVenda - Verifica se uma venda é cadastrada com sucesso, POST /sales
*   AtualizarVenda - Verifica se uma venda é atualizada com sucesso, POST /sales/{id}
*   ConsultarVenda - Verifica se uma consulta foi realizada com sucesso, GET /sales/{id}
*   SucessListaVendas - Verifica se a lista de vendas é consultada com sucesso, GET /sales?(filter,sort,limit)
*   FiltroVendas - Verifica alguns dos filtros estão corretos, GET /sales?(amount/customer/receiver/invoice)
*   FiltroClientId - Verifica o filtro de client por Id GET /sales?filter[ client ]={id}
*   FiltroStatus - Verifica o filtro de status GET /sales?filter[ status ]={created/archived/canceled/deleted}
*   FiltroSort - Verifica a ordenação está correta GET /sales?sort={id/created_at/updated_at/deleted_at}
*   Limit - WIP- Verifica limite de vendas GET /limit
*   FailListaVendas - Verifica se filtro funciona com vendas nao inexistentes {amount/customer/receiver/invoice}
*   DeleteAllSales - Apaga todas as vendas

## WebhooksCest ##
*   FailTokenUsuario - Verifica se autenticação está funcionando
*   ConsultaWebhooks - Consulta GET /apps/webhooks
*   ListarWebhooks - Listar tipos de webhooks - GET /apps/webhooks/models
*   CadastrarWebhooks - Testa cadastro de webhook - POST /apps/webhooks
*   ApagarWebhook - Testa apagar webhook - DELETE 
*   AtualizaWebhook - Atualizar webhook - PUT /apps/webhooks/{id}



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