# README #

Este pacote contém todos os testes de api envolvendo o projeto do minhas-vendas  

Para mais informações sobre o minhas vendas procure a documentação dele no bitbucket.  

### Objetivo deste repositório? ###

* Testes de clientes, vendas, webhooks do minhas vendas
* 1.0

# Como rodar? #

1. Clone o repositório
   > git clone git@bitbucket.org:melhor-envio/minhas-vendas-tests.git 
2. Instale as dependências
   > composer install

3. Crie dois tokens de acesso de api de dois usuários diferentes do Melhorenvio.com.br  
Para criar vá para Gerenciar/Tokens/Novo Token  
Coloque os dois tokens no api.suite.yml  
4. Configure api.suite.yml para apontar o url(local/develop) onde está o minhas vendas a ser executado.


## Executando testes de API  ##

* Como executar
  > ./vendor/bin/codecept run (suite):(test) 
* Args
  > suite: (api,acceptance,unit) .Optional   
   test: (suite):(test) .Optional, Requires suite,

  | Options | Descrição | 
  |------|-------|
  |-vv|Deixam mais detalhadas as respostas
  |-vvv|Ainda mais detalhadas as respostas
  |--steps|Mostra o passo a passo dos testes
  |-html|Gera um html com resultados report.html
  |-g (grupo)| Executa os testes de grupo(fast,slow,webservice)
  |--env (env)| Altera o env de local para outro(develop,prod)


Mais options e informações sobre funcionamento do framework na documentação [Codeception](https://codeception.com/docs/01-Introduction)

#  Escrevendo testes #
* Como criar testes
  > ./vendor/bin/codecept generate:cest (suite) (name) 
* Args
  > suite: (api,acceptance,unit) .Required   
   name: (nomedoTeste) .Required


# Com quem eu falo? #

Time: Eduardo Fischer,Philippe Bachilli, Luan Einhardt 

# Testes existentes #

## ClientsCest ##
| Nome | Descrição |Rota| 
|------|-------|---|
|CreateClientContract  | Verifica se um cadastro é realizado com Sucesso| POST /clients |  
|CreateClientContract |Verifica se um cadastro é realizado com Sucesso| POST /clients
|CreateClientMissingField | Cadastra Clientes faltando Campos| POST /clients
|UpdateClient | Verifica se um cadastro é realizado com Sucesso| PATCH /clients/{id}
|CheckClients | Verifica se uma consulta é realizada com Sucesso| GET /clients
|CheckClientById | Verifica Consulta Client por Id| GET /clients
|DontSeeClientFromAnotherUser | Assegura que um usuário não vê clientes de outro usuário| varias rotas| 

## SalesCest  
| Nome | Descrição |Rota| 
|------|-------|---|
|CreateSale | Verifica se uma venda é cadastrada com sucesso| POST /sales
|UpdateSale | Verifica se uma venda é atualizada com sucesso| POST /sales/{id}
|CheckSaleById | Consulta venda por ID| GET /sales/{id}
|CheckSalesFilter | Verifica os filtros amount,sender,receiver,invoice| GET /sales?filter[]=x,y
|FilterByClientId | Filtra clientes por ID| GET /sales
|CheckFilterSort | Verifica se a ordenação está correta| GET /sales?sort={variable}
|CheckSalesLimit | Verifica limite de vendas| GET /sales?limit
|CheckFilterWithNoMatchingSales | Utiliza um filtro sem venda correspondente|GET /sales?filter[]=x,y
|ArchiveSale | Verifica arquivar venda| GET /sales/{id}/archive
|CancelSaleWithSucess | Verifica Cancelar a venda com sucesso| POST /sales/{id}/cancel
|MarkSaleAsPaid | Verifica se arquiva venda com sucesso| POST /sales/{id}/make-paid
|DontSeeSaleFromAnotherUser | Verifica se um usuário não vê vendas do outro|varias rotas| 
|DeleteAllSales | Deleta todas as vendas (troque para public para usar e rode no terminal)|DELETE /sales/{id}|

