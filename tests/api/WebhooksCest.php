<?php 

class WebhooksCest
{
    protected $todas_permissoes;

    protected $listar_endpoint;

    protected $cadastrar_request;
    protected $cadastrar_endpoint;
    protected $apagar_endpoint;

    
    public function _before(ApiTester $I)
    {
        $this->BearerToken = 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImIyMjJhZWMyNWJjN2ZhZTRiODFlNWJlNGIyZmU3YmQ0YmFiNWNmYTE1NGM3ZmYzZDNkYTE0NWI2NzliZDQxOWNkNDU0NjRhNWIyMmMxZTU2In0.eyJhdWQiOiIxIiwianRpIjoiYjIyMmFlYzI1YmM3ZmFlNGI4MWU1YmU0YjJmZTdiZDRiYWI1Y2ZhMTU0YzdmZjNkM2RhMTQ1YjY3OWJkNDE5Y2Q0NTQ2NGE1YjIyYzFlNTYiLCJpYXQiOjE1NjQ0MjEyMTAsIm5iZiI6MTU2NDQyMTIxMCwiZXhwIjoxNTk2MDQzNjEwLCJzdWIiOiIyMDM5Zjk1My0wNjNjLTQ3MjctYTQ4ZC0xMjQzNTI4M2UyOGUiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLXdyaXRlIiwicHVyY2hhc2VzLXJlYWQiLCJzaGlwcGluZy1jYWxjdWxhdGUiLCJzaGlwcGluZy1jYW5jZWwiLCJzaGlwcGluZy1jaGVja291dCIsInNoaXBwaW5nLWNvbXBhbmllcyIsInNoaXBwaW5nLWdlbmVyYXRlIiwic2hpcHBpbmctcHJldmlldyIsInNoaXBwaW5nLXByaW50Iiwic2hpcHBpbmctc2hhcmUiLCJzaGlwcGluZy10cmFja2luZyIsImVjb21tZXJjZS1zaGlwcGluZyIsInRyYW5zYWN0aW9ucy1yZWFkIiwidXNlcnMtcmVhZCIsInVzZXJzLXdyaXRlIiwid2ViaG9va3MtcmVhZCIsIndlYmhvb2tzLXdyaXRlIiwibWluaGFzdmVuZGFzOjpjbGllbnRzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OmNsaWVudHM6d3JpdGUiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOndyaXRlIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczpyZWFkIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6c2hpcHBpbmdzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNoaXBwaW5nczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6Y29uY2lsaWF0aW9uczpyZWFkIiwibWluaGFzdmVuZGFzOjpjb25jaWxpYXRpb25zOndyaXRlIl19.axyUD4P5YTJjc_VixEOaspno8s4gZQZHWD2AbqB1p7sc4qyNGeu4aIQoGTRbL04Dg3F6Yu79UJv_ZZYqkzyzV4d2JTZxjn9TPlm07tPq8Y6RX2TAI_jpLkFmSipy-WBRoCthRn--MkdAc9M0fXI6Wsibowlg8hulCUI6s3NrCU6ItccDxaa54JKng41r_QNHu6cdsecz11wV2QD32Twbl-O8Jgs4v1rIoRLeuJSLrlgAmw4GqpBf3udT0rIshQkshfWgiv94aHbr7lRxvszbTdDUsi--Gbk1zWLwsYqAn-morlnnxQ0U6KWWIjlxzU7QjfBjpwDNHj45DahS_rvk5-VH0aYQC0PFzPaEmot37hHfVt8NlUIO0Xd60oU9nTCwQkUQkD-Davo2ZCZV-opiZJGmaOb3SIU4_v9wXaQKuavuGXkTfK-cOOmTtd2V27-7_Uoe2UKi5Ne26idLos4iwQTmXBUz1NMMbqYksa8DHZB0bALKGkG-UTpmx9b2BevJ2qeS4h618TX0lg5IKPc3KCTLiNpFQx3A8kcLo6OVPdb9vzuRjc2fem2SXwJdC7REXvUPkAD5rzHAiH2Ivj33pk1Lx1Zdq7yMhs9QoW8uTNPS2qI0YBxnpGsYk9OizxuUjsWWOZNGrBd9P63Ymk2RcH8PmWyjURfFU1ulCVx88Bk';
        
    }


    protected function PreparaContractListar(ApiTester $I){

        $this->listar_endpoint = '/apps/webhooks/models';
        
    }

    /**
    * @before PreparaContractListar
    */
    public function ListarContractWebhooks(ApiTester $I){
        
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);

        $I->sendGET($this->listar_endpoint);
        $I->seeResponseCodeIsSuccessful();
    }

    protected function PreparaContractCadastrar(ApiTester $I){

        $this->cadastrar_endpoint = '/apps/webhooks';
        $this->cadastrar_request = [
            'webhook_id' => '1337',
            'target_url' => "https://www.sua-url-de-notificacao.com.br",
           
        ];
    }

    /**
    * @before PreparaContractCadastrar
    */
    public function CadastrarContractWebhooks(ApiTester $I){

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);


        $I->sendPOST($this->cadastrar_endpoint,$this->cadastrar_request);
        $I->seeResponseCodeIsSuccessful();
    }


    protected function PreparaContractApagar(ApiTester $I){

        $this->apagar_endpoint = '/apps/webhooks/';
    }

    /**
    * @before PreparaApagar
    */
    public function ApagarContractWebhook(ApiTester $I){

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);

        $endpoint = $this->apagar_endpoint.$example['id'];
        $I->sendDELETE($this->apagar_endpoint);
        $I->seeResponseCodeIsSuccessful();
    }

    protected function ApagarWebhookProvider(ApiTester $I){

        return [
            ['id'=>'1'],
        ];
    }
}
