<?php 

use \Codeception\Util\HttpCode;
use Codeception\Util\Fixtures;

class WebhooksCest
{
    protected $createRequest;
    protected $cadastrarEndpoint;
    
    //Comece trocando esse token de usuário
    public function _before(ApiTester $I)
    {
        // $this->platformToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjkwMTQ0YTM1ZjAwNjFlYmJmNDllZDJlYTIzNmUyNDc4ZDIxNWI4OGJhZmY4YmQ3NDAyZjA4MTVmNWMyMjk1M2I1ODI2YmE1MTIyYjgyMmVjIn0.eyJhdWQiOiIxIiwianRpIjoiOTAxNDRhMzVmMDA2MWViYmY0OWVkMmVhMjM2ZTI0NzhkMjE1Yjg4YmFmZjhiZDc0MDJmMDgxNWY1YzIyOTUzYjU4MjZiYTUxMjJiODIyZWMiLCJpYXQiOjE1NjQxNjk0ODIsIm5iZiI6MTU2NDE2OTQ4MiwiZXhwIjoxNTk1NzkxODgyLCJzdWIiOiJhNDJkMWIwYy01MjA1LTQyMWMtODRlZi01NWZiNjZiNjg0NGYiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLXdyaXRlIiwicHVyY2hhc2VzLXJlYWQiLCJzaGlwcGluZy1jYWxjdWxhdGUiLCJzaGlwcGluZy1jYW5jZWwiLCJzaGlwcGluZy1jaGVja291dCIsInNoaXBwaW5nLWNvbXBhbmllcyIsInNoaXBwaW5nLWdlbmVyYXRlIiwic2hpcHBpbmctcHJldmlldyIsInNoaXBwaW5nLXByaW50Iiwic2hpcHBpbmctc2hhcmUiLCJzaGlwcGluZy10cmFja2luZyIsImVjb21tZXJjZS1zaGlwcGluZyIsInRyYW5zYWN0aW9ucy1yZWFkIiwidXNlcnMtcmVhZCIsInVzZXJzLXdyaXRlIiwid2ViaG9va3MtcmVhZCIsIndlYmhvb2tzLXdyaXRlIiwibWluaGFzdmVuZGFzOjpjbGllbnRzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OmNsaWVudHM6d3JpdGUiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOndyaXRlIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczpyZWFkIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6c2hpcHBpbmdzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNoaXBwaW5nczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6Y29uY2lsaWF0aW9uczpyZWFkIiwibWluaGFzdmVuZGFzOjpjb25jaWxpYXRpb25zOndyaXRlIl19.3jovoMjzOqp7CgrJFKqkfA5BUzj5EBrBG0PNH6RmrUhA1H5sBuY4GC9NCRml21ScfRsKkRGDA2jHhbeuW4XBZ9qVE-2p0lPHw-ykygmU2csmBKNYBO70Utfqyd9PRRPC3xi_jm20CLBf8B7o1fsmCEEVWLBhQZz6SkKqbzbpAgsd0qEj5LWaIIS3dONu0KXo1pdU6liw27WYfrwZA7MIpILCkfSN9-4m40UotGVefU5dwiALYD_QUoAPfMZe9AvD0v9KorDQnsKrzJBvOIUy1zwEPV7tvLfpyRDhQU_OKslaahr45kX65ZMUZYOK3U50NA7nAr_wyyegNBGj3j2CoVwl-CXTWQSQkqjzltTF8YX3-kcr4vjP29fwN22QkxVVh_izREQJjF409MbiWVEBkYf-6N6DyL4h3vvOfJcZE2V4G0EVLAgUI7H1kKUkr37QKYhaJVkoLKrc8g_5nqedHQOt8LD5G5RSgiYnFfuosdLrFcE0FFgTToKfNHyfiNq61utwx2Pi7md5aY0XRRxzqdqPT4gqWpPSfG0_XyqE2htamWoXfwLIHBIyQufp8TAcpTolxpH8ANEyjE5jHNwb3sv0vpmhk5ks4AOGkftZlk7YYnupmPLDYhMWTp1Gr7Vq6AQ7JqrFJvMmMeE43mN00pPw1QH3sLEnHi5oVjweQ4s';
        $this->userToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjM5YTc4MzJjZWU0ZWM0ZTdlNWZlNGQ0ZDg2NTQ4ZTczZmQxODllY2JiMTI0Yzc3MDRiOTU0MmZkNzI5ODQwOWNjNmM3YWU5Y2Y3NzYwODY3In0.eyJhdWQiOiI1OTAiLCJqdGkiOiIzOWE3ODMyY2VlNGVjNGU3ZTVmZTRkNGQ4NjU0OGU3M2ZkMTg5ZWNiYjEyNGM3NzA0Yjk1NDJmZDcyOTg0MDljYzZjN2FlOWNmNzc2MDg2NyIsImlhdCI6MTU2ODEzNTAyMiwibmJmIjoxNTY4MTM1MDIyLCJleHAiOjE1NzA3MjcwMjIsInN1YiI6IiIsInNjb3BlcyI6WyJtaW5oYXN2ZW5kYXM6OndlYmhvb2tzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OndlYmhvb2tzOndyaXRlIiwibWluaGFzdmVuZGFzOjpjbGllbnRzOnJlYWQiXX0.S8ZYPG_cT1DUV-6m1YBWkF68mRvmH7Tf9kuVkuTuT5EjDZUed1tOtHxsFBIzXzWNS3xBMMd50p4zCVCC4I7v6loX-pfL34meqsRJsyZl3I-HnMG0Mv5h4S_kW9Zb3SXoDyAqDo0frfFuS3DvKeIKa2PMeganzCf1jTADZHreNeYMklq75wsr3OX4ym8-3GqsSjE_BmjdwFvBodwEsm9q2diJXSFlBP22HEoIvnnvOhrjW0siF1ztUUEOZkpGnGuLK-mjadweWsDsIzif_fG2QhhaMXaY2AxluBzgWh5-X0d9aC8Rvdf5gvvrNmblA27iIYHQifEVONO__h5Fm1t8MVmDyhIpCb0THBJCvk9Y0Xz_-sRoaxNjYES2VvOC8pPUWVrhb-r6rrTcNe_xktt_JOq1v_AdlGJ1S0m8rq2wdvO4wti15FowfFFzG3qOK_cwsijIy8zrVM1V5ne7rRNBwc-KhVjxIes7waeminLFkU_OxTHeaSjhbFUa78BlqLyjmmp4CLtHHfZD0W1QJZsDG0NYO_677VF7x_DGZud7OZQOK1phta-SKKhnt64gf58GcSqFsj2oiK0s8GzQMyCiRKkDGZV835isXyPV-ngd2QChXovMH-xAZqqiCLL2sCgSVqRs5SrIziwAmknxEL61w8T98_glAX-QanBwfQEnsHs';
        $this->invalidToken = 'eymamamaco';
        $this->webhooksEndpoint = '/apps/webhooks';

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->userToken);
        
        //Sempre será necessário criar um link do ngrok e atualizar o url
        $this->updateRequest = [
            'target_url' => 'https://4df61701.ngrok.io'
        ];

        $this->createRequest = [
            'webhook_id' => '1',
            'target_url' => "http://4df61701.ngrok.io",
        ];
    }

    public function VerifyInvalidUserToken(ApiTester $I){

        $I->wantTo("Verifica se token de usuário é negado");

        $I->amBearerAuthenticated($this->invalidToken);
        $I->sendGET($this->webhooksEndpoint);

        $I->seeResponseCodeIs(HttpCode::UNAUTHORIZED);
    }


    public function CheckWebhooks(ApiTester $I){

        $I->wantTo("Consulta Webhooks ativos");

        $I->sendGET($this->webhooksEndpoint);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseMatchesJsonType([
            "data"=>'array',
            "links"=> [
                'first'=>'string',
                'last'=>'string',
                'prev'=>'string|null',
                'next'=>'string|null',
            ],
            "meta"=> [
                'current_page'=>'integer',
                'from'=>'null|integer',
                'last_page'=>'integer',
                'path'=>'string',
                'per_page'=>'integer',
                'to'=>'null|integer',
                'total'=>'integer'
            ]
        ]);
    }


    public function ListWebhooks(ApiTester $I){
        
        $I->wantTo("Listar tipos de Webhooks");

        $I->sendGET($this->webhooksEndpoint.'/models');

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseContainsJson(array('id'=>1,'model'=>'sale','method'=>'all','id'=>2,'model'=>'sale','method'=>'created'));
        $I->seeResponseContainsJson(array('id'=>2,'model'=>'sale','method'=>'created'));
        $I->seeResponseContainsJson(array('id'=>3,'model'=>'sale','method'=>'updated'));
        $I->seeResponseContainsJson(array('id'=>4,'model'=>'sale','method'=>'deleted'));
        $I->seeResponseContainsJson(array('id'=>5,'model'=>'shipping','method'=>'all'));
        $I->seeResponseContainsJson(array('id'=>6,'model'=>'shipping','method'=>'created'));
        $I->seeResponseContainsJson(array('id'=>7,'model'=>'shipping','method'=>'updated'));
        $I->seeResponseContainsJson(array('id'=>8,'model'=>'shipping','method'=>'deleted'));
        $I->seeResponseContainsJson(array('id'=>9,'model'=>'conciliation','method'=>'all'));
        $I->seeResponseContainsJson(array('id'=>10,'model'=>'conciliation','method'=>'created'));
        $I->seeResponseContainsJson(array('id'=>11,'model'=>'conciliation','method'=>'updated'));
        $I->seeResponseContainsJson(array('id'=>12,'model'=>'conciliation','method'=>'deleted'));
    }


    public function CreateWebhook(ApiTester $I){

        $I->wantTo("Cadastrar Webhook");

        $I->sendPOST($this->webhooksEndpoint,$this->createRequest);

        $I->seeResponseCodeIs(HttpCode::CREATED);        
        $I->seeResponseMatchesJsonType([
            "data"=>[
                'app_id'=>'string',
                'webhook_id'=>'string',
                'target_url'=>'string',
                'token'=>'string',
                'updated_at'=>'string',
                'created_at'=>'string',
                'id'=>'integer'
            ]
        ]);

        $response = json_decode($I->grabResponse(),true);

        Fixtures::add('webhook',$response);
    }

    
    /** 
    * @before CreateWebhook
    */
    public function DeleteWebhook(ApiTester $I){

        $I->wantTo("Apagar Webhook");

        $I->sendDELETE($this->webhooksEndpoint.'/'.Fixtures::get('webhook')['data']['id']);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseContainsJson(array('message'=>'Webhook apagado!'));
    }


    /** 
    *@before CreateWebhook
    */
    public function UpdateWebhook(ApiTester $I){

        $I->wantTo("Atualizar Webhook");

        $I->sendPUT($this->webhooksEndpoint.'/'.Fixtures::get('webhook')['data']['id'],$this->updateRequest);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseMatchesJsonType([
            "data"=>[
                'id'=>'integer',
                'app_id'=>'integer',
                'webhook_id'=>'integer',
                'target_url'=>'string',
                'token'=>'string',
                'updated_at'=>'string',
                'created_at'=>'string',
                'deleted_at'=>'null'
            ]
        ]);
    }
}
