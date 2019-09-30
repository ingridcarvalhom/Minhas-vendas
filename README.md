# README #

Este pacote contém todos os testes de api envolvendo o projeto do minhas-vendas
Para mais informações sobre o minhas vendas procure a documentação dele no bitbucket.
Atenção aos tokens de acesso. Sales e Clients utilizam o de usuário. Webhooks utilizam o de plataforma.


### Objetivo deste repositório? ###

* Testes de clientes, vendas, webhooks do minhas vendas
* 1.0
* (https://bitbucket.org/melhor-envio/minhas-vendas-tests/src/master/)

# Testes existentes #

## ClientsCest ##
*   CreateClientContract - Verifica se um cadastro é realizado com Sucesso, POST /clients
*   CreateClientMissingField - Cadastra Clientes faltando Campos POST /clients
*   UpdateClient - Verifica se um cadastro é realizado com Sucesso, PATCH /apps/clients/{id}
*   CheckClients - Verifica se uma consulta é realizada com Sucesso, GET /clients
*   CheckClientById - Verifica Consulta Client por Id GET /clients
*   DontSeeClientFromAnotherIser - Assegura que um usuário não vê clientes de outro usuário 

## SalesCest ## 
*   CreateSale - Verifica se uma venda é cadastrada com sucesso, POST /sales
*   UpdateSale - Verifica se uma venda é atualizada com sucesso, POST /sales/{id}
*   CheckSaleById - Consulta venda por ID GET /sales/{id}
*   CheckSalesFilter - Verifica os filtros amount,sender,receiver,invoice GET /sales?filter[]=x,y
*   FilterByClientId - Filtra clientes por ID GET /sales
*   CheckFilterSort - Verifica se a ordenação está correta GET /sales?sort={variable}
*   CheckSalesLimit - Verifica limite de vendas GET /sales?limit
*   CheckFilterWithNoMatchingSales - Utiliza um filtro sem venda correspondente GET /sales?filter[]=x,y
*   ArchiveSale - Verifica arquivar venda GET /sales/{id}/archive
*   CancelSaleWithSucess - Verifica Cancelar a venda com sucesso POST /sales/{id}/cancel
*   MarkSaleAsPaid - Verifica se arquiva venda com sucesso POST /sales/{id}/make-paid
*   DontSeeSaleFromAnotherUser - Verifica se um usuário não vê vendas do outro 
*   DeleteAllSales - Deleta todas as vendas (troque para public para usar e rode no terminal)

# Como rodar? #

* git clone git@bitbucket.org:melhor-envio/minhas-vendas-tests.git 
Vai clonar o repositório para a pasta, troque para o branch develop
* composer install 
Vai instalar as dependencias do composer para o uso do codeception
* Crie dois tokens de acesso de api de dois usuários diferentes do Melhorenvio.com.br
* Para criar vá para Gerenciar/Tokens/Novo Token
* Coloque os dois tokens em Token from user A e token from User B em cada arquivo Cest

* Configuration
  Configure api.suite.yml para apontar o url(local/develop) onde está o minhas vendas a ser executado.

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

* -vv Deixam mais detalhadas as respostas
* -vvv Ainda mais detalhadas
* --steps Mostra o passo a passo dos testes
* --html Gera um report html em _output com nome de report.html

Mais informações sobre funcionamento na Documentação.  

https://codeception.com/docs/01-Introduction

#  Escrevendo testes #
*  ./vendor/bin/codecept generate:cest (acceptance/api/unit/functional) (nomedoarquivo)


# Com quem eu falo? #

* Criador
Eduardo Fischer
* Time
Samuel Desconsi, Philippe Bachilli