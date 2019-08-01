<?php 

class ClientsCest
{
    protected $clients_request;

    protected $cadastro_endpoint;
    protected $atualizar_id;
    protected $atualizar_endpoint;

    protected $todas_permissoes;
    protected $past_response;

    public function _before(ApiTester $I){

        //Preciso de varions tokens aqui
        $this->BearerToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjkwMTQ0YTM1ZjAwNjFlYmJmNDllZDJlYTIzNmUyNDc4ZDIxNWI4OGJhZmY4YmQ3NDAyZjA4MTVmNWMyMjk1M2I1ODI2YmE1MTIyYjgyMmVjIn0.eyJhdWQiOiIxIiwianRpIjoiOTAxNDRhMzVmMDA2MWViYmY0OWVkMmVhMjM2ZTI0NzhkMjE1Yjg4YmFmZjhiZDc0MDJmMDgxNWY1YzIyOTUzYjU4MjZiYTUxMjJiODIyZWMiLCJpYXQiOjE1NjQxNjk0ODIsIm5iZiI6MTU2NDE2OTQ4MiwiZXhwIjoxNTk1NzkxODgyLCJzdWIiOiJhNDJkMWIwYy01MjA1LTQyMWMtODRlZi01NWZiNjZiNjg0NGYiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLXdyaXRlIiwicHVyY2hhc2VzLXJlYWQiLCJzaGlwcGluZy1jYWxjdWxhdGUiLCJzaGlwcGluZy1jYW5jZWwiLCJzaGlwcGluZy1jaGVja291dCIsInNoaXBwaW5nLWNvbXBhbmllcyIsInNoaXBwaW5nLWdlbmVyYXRlIiwic2hpcHBpbmctcHJldmlldyIsInNoaXBwaW5nLXByaW50Iiwic2hpcHBpbmctc2hhcmUiLCJzaGlwcGluZy10cmFja2luZyIsImVjb21tZXJjZS1zaGlwcGluZyIsInRyYW5zYWN0aW9ucy1yZWFkIiwidXNlcnMtcmVhZCIsInVzZXJzLXdyaXRlIiwid2ViaG9va3MtcmVhZCIsIndlYmhvb2tzLXdyaXRlIiwibWluaGFzdmVuZGFzOjpjbGllbnRzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OmNsaWVudHM6d3JpdGUiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOndyaXRlIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczpyZWFkIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6c2hpcHBpbmdzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNoaXBwaW5nczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6Y29uY2lsaWF0aW9uczpyZWFkIiwibWluaGFzdmVuZGFzOjpjb25jaWxpYXRpb25zOndyaXRlIl19.3jovoMjzOqp7CgrJFKqkfA5BUzj5EBrBG0PNH6RmrUhA1H5sBuY4GC9NCRml21ScfRsKkRGDA2jHhbeuW4XBZ9qVE-2p0lPHw-ykygmU2csmBKNYBO70Utfqyd9PRRPC3xi_jm20CLBf8B7o1fsmCEEVWLBhQZz6SkKqbzbpAgsd0qEj5LWaIIS3dONu0KXo1pdU6liw27WYfrwZA7MIpILCkfSN9-4m40UotGVefU5dwiALYD_QUoAPfMZe9AvD0v9KorDQnsKrzJBvOIUy1zwEPV7tvLfpyRDhQU_OKslaahr45kX65ZMUZYOK3U50NA7nAr_wyyegNBGj3j2CoVwl-CXTWQSQkqjzltTF8YX3-kcr4vjP29fwN22QkxVVh_izREQJjF409MbiWVEBkYf-6N6DyL4h3vvOfJcZE2V4G0EVLAgUI7H1kKUkr37QKYhaJVkoLKrc8g_5nqedHQOt8LD5G5RSgiYnFfuosdLrFcE0FFgTToKfNHyfiNq61utwx2Pi7md5aY0XRRxzqdqPT4gqWpPSfG0_XyqE2htamWoXfwLIHBIyQufp8TAcpTolxpH8ANEyjE5jHNwb3sv0vpmhk5ks4AOGkftZlk7YYnupmPLDYhMWTp1Gr7Vq6AQ7JqrFJvMmMeE43mN00pPw1QH3sLEnHi5oVjweQ4s';
        $this->clients_request = [
            'own_id' => '1',
            'account_id' => '7999e5fe-a6bf-4757-9feb-9ad513e2a0ea',
            'name' => "Nome da Loja",
            'url' => "https://develop.melhorenvio.com.br",
            'settings'=> [
                'address_id' => 33405,
                'receipt' => false,
                'own_hand' => false,
                'services' => [1,2,3,4],
                'dimensions' => [
                    'width' => 12,
                    'height' => 4,
                    'length' => 17
                ],
                'jadlog_agency' => 0,
                'default_service' => 'economic',
                'insurance_value' => 'all'
            ]
        ];
        
    }


    /**
    * @dataprovider CadastrarErrorProvider
    */
    public function CadastrarError(APITester $I, \Codeception\Example $example){

        $this->cadastro_endpoint = '/apps/clients';

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);

        $this->clients_request[$example['missing']] = null;
       
        $I->sendPOST($this->cadastro_endpoint,$this->clients_request);
        $I->seeResponseCodeIsClientError();
        $I->seeResponseContains($example['missing']);
        $I->seeResponseMatchesJsonType([
            "message" => 'string',
            "errors" => 'array'
        ]);
    }

    protected function CadastrarErrorProvider(){
        return [
            ['missing'=>'name'],
            ['missing'=>'own_id'],
            ['missing'=>'url'],
            ['missing'=>'account_id'],
            ['missing'=>'settings']
        ];
    }

    // /**
    // * @dataprovider CadastrarClientProvider
    // */
    public function CadastrarClient(ApiTester $I){

        $this->cadastro_endpoint = '/apps/clients';

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);

        $this->clients_request['own_id'] = strval(rand(0,1000000));
        // $this->clients_request['name'] = $example['name'];
        // $this->clients_request['url'] = $example['url'];
        $I->sendPOST($this->cadastro_endpoint,$this->clients_request);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseMatchesJsonType([
            "data" => [
                'id' => 'integer',
                "app_id" => 'string',
                "own_id" => 'string',
                "name" => 'string',
                "url" => 'string',
                'settings' => 'array',
                'account_id' => 'string',
                'user_id' => 'string',
               
            ]
        ]);
        
        $response = json_decode($I->grabResponse(),true);
        $I->assertEquals($this->clients_request['own_id'],$response['data']['own_id']);
        $I->assertEquals($this->clients_request['account_id'],$response['data']['account_id']);
        $I->assertEquals($this->clients_request['name'],$response['data']['name']);
        $I->assertEquals($this->clients_request['url'],$response['data']['url']);
        $I->assertEquals($this->clients_request['settings'],$response['data']['settings']);
        $this->past_response = $response;

    
    }

    // protected function CadastrarClientProvider(){
    //     return [
    //         //TODO: Instalar o faker generator
    //         ['name'=>'nome da loja','url'=>'https://loja.com'],
    //         ['name'=>'segundo nome da loja','url'=>'https://loja2.com.br']
    //     ];
    // }



    /**
    * @dataprovider AtualizarClientProvider
    */
    public function AtualizarClients(ApiTester $I, \Codeception\Example $example){

        $this->atualizar_endpoint = '/apps/clients/';

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);

        $endpoint = $this->atualizar_endpoint.$example['id'];

        $this->clients_request['own_id'] = $example['own_id'];
        $this->clients_request['name'] = $example['name'];
        $this->clients_request['url'] = $example['url'];

        $I->sendPATCH($endpoint,$this->clients_request);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseMatchesJsonType([
            "data" => [
                'id' => 'integer',
                "app_id" => 'string',
                "own_id" => 'string',
                "name" => 'string',
                "url" => 'string',
                'settings' => 'array',
                'account_id' => 'string',
                'user_id' => 'string',

            ]
        ]);


        $I->seeResponseContainsJson(array('own_id'=>$example['own_id']));
        $I->seeResponseContainsJson(array('name'=>$example['name']));
        $I->seeResponseContainsJson(array('url'=>$example['url']));



    }

    protected function AtualizarClientProvider(){
        return [
            ['id'=>'1','own_id'=>'123','name'=>'segunda','url'=>'https://sitedicaloja.com.br'],
            ['id'=>'1','own_id'=>'125','name'=>'terca','url'=>'https://sitediloja.com.br'],
        ];
    }



    /**
     * @before CadastrarClient
    */
    public function ConsultaClients(ApiTester $I){

        $this->consultar_endpoint = '/clients';

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);

        $I->sendGET($this->consultar_endpoint);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseMatchesJsonType([
            "data" => 'array',
            'links' => 'array',
            'meta' => 'array'
        ]);

        $I->seeResponseContainsJson($this->past_response);
    }

   



   
}
