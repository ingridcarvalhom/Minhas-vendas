<?php 

use Codeception\Util\Fixtures;

class ClientsCest
{
    protected $create_clients_request;
    protected $create_clients_endpoint;
    protected $update_client_endpoint;
    protected $past_response;

    public function _before(ApiTester $I){

        $this->BearerToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijk3YzliNDAwZTAxOWE0ZmJjOTkyYjJkMDBkNWE5ZGYwY2I1MDJkYWQ5OTlhNTNhMTZjMTVkNGJlMjg5ZTRhNmU3NGVkZmIxZDNkMjBmN2IyIn0.eyJhdWQiOiIxIiwianRpIjoiOTdjOWI0MDBlMDE5YTRmYmM5OTJiMmQwMGQ1YTlkZjBjYjUwMmRhZDk5OWE1M2ExNmMxNWQ0YmUyODllNGE2ZTc0ZWRmYjFkM2QyMGY3YjIiLCJpYXQiOjE1NjYzMTExODAsIm5iZiI6MTU2NjMxMTE4MCwiZXhwIjoxNTk3OTMzNTgwLCJzdWIiOiJmMDg4MDExZi1lNzZjLTQzOWQtYjYzNC01OWQ1MGNlYjBiNWUiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLXdyaXRlIiwicHVyY2hhc2VzLXJlYWQiLCJzaGlwcGluZy1jYWxjdWxhdGUiLCJzaGlwcGluZy1jYW5jZWwiLCJzaGlwcGluZy1jaGVja291dCIsInNoaXBwaW5nLWNvbXBhbmllcyIsInNoaXBwaW5nLWdlbmVyYXRlIiwic2hpcHBpbmctcHJldmlldyIsInNoaXBwaW5nLXByaW50Iiwic2hpcHBpbmctc2hhcmUiLCJzaGlwcGluZy10cmFja2luZyIsImVjb21tZXJjZS1zaGlwcGluZyIsInRyYW5zYWN0aW9ucy1yZWFkIiwidXNlcnMtcmVhZCIsInVzZXJzLXdyaXRlIiwid2ViaG9va3MtcmVhZCIsIndlYmhvb2tzLXdyaXRlIiwibWluaGFzdmVuZGFzOjpjbGllbnRzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OmNsaWVudHM6d3JpdGUiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOndyaXRlIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczpyZWFkIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6c2hpcHBpbmdzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNoaXBwaW5nczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6Y29uY2lsaWF0aW9uczpyZWFkIiwibWluaGFzdmVuZGFzOjpjb25jaWxpYXRpb25zOndyaXRlIl19.yphVmaWmIyIGgwItdsnpqx5xaQh7_LuR2GtC1BuW2G0XsieLSRp6oyA7FEKcU-oUFtagQgeDjRE_ozQfh9L8pvSXTGAwspWgTJW3CQyuxUveHYeF3zKtiXES7ZJerRTgBNob0VsRouz3t90Ve6kbSnPOndf3hhFKZ1JNdJFrehzoypdSjQ4WGDLa7SKnXOGqIvpqTirHDyaEwN7zqWOA_yR6XuzBRFG7inn52G_voxsTgFVWNsT1I0N0DHLwP1qyVrsVbKE-7tF1uj-QAx8g2JBxMVidlOagbJiq_FR41lACZOf4ryHayZwWIoRomlKkOp0tbsk65CB5vpIq2e9GHPdwsKbgXCYRdUqLckkosy6qqEkKfwWgKw-CcRpX3cpWLe27w2-zw1alwlUibEkXSKimsloFLmK9lf_muyjXNh0p9pBzEuifEFP5BniRjPOkS-nKS7MwMoH5zYNDkwEQ1cHCAXUz0MctjNMkYqPb8o8zIiNijRHDBuOkFfmlEdJGFVSAXO9j1OpZbRGznwVQcMUAx1Mhg3h0_kcy5yNMgsr9O5XdgoczilmCSPd5d_Tt7pCGutdW-HADWILGo3dJuhimz3Yltl1oB0oZvlP8LFimY1yIpIZ4UBFACEj2p5G8D8c00GAFM7YPEL1hZCHsYUqBE_BDnrvVK_gn4F9xf5U';
      
        $this->create_clients_request = [
            'own_id' => '999128',
            'name' => "Shopping Online",
            'url' => "https://www.loja.com",
            'email' => 'email@daloja.com',
            'document' => '87620890000112',
            'address' => [
                'postal_code'=> '96020150',
                'street' => 'Rua X',
                'number' => '123',
                'complement' => 'Sala X',
                'district' => 'Bairro',
                'city' => 'Pelotas',
                'state' => 'RS'
            ],
        ];

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);
    }


    /**
    * @dataprovider CreateClientMissingFieldProvider
    */
    public function CreateClientMissingField(APITester $I, \Codeception\Example $example){

        $I->wantTo("Cadastra Clientes Faltando Campos");

        $this->create_clients_endpoint = '/clients';
       
        if(isset($example['field'])){
            $this->create_clients_request[$example['missing']][$example['field']] = null;
        }else{
            $this->create_clients_request[$example['missing']] = null;
        }   
        
        $I->sendPOST($this->create_clients_endpoint,$this->create_clients_request);
        $I->seeResponseCodeIs(422); //Unprocessable Entity
        $I->seeResponseContains($example['missing']);
        $I->seeResponseMatchesJsonType([
            "message" => 'string',
            "errors" => 'array'
        ]);
    }

    protected function CreateClientMissingFieldProvider(){
        return [
            ['missing'=>'name'],
            ['missing'=>'own_id'],
            ['missing'=>'url'],
            ['missing'=>'email'],
            ['missing'=>'document'],
            ['missing'=>'address','field'=>'postal_code'],
            ['missing'=>'address','field'=>'street'],
            ['missing'=>'address','field'=>'number'],
            ['missing'=>'address','field'=>'district'],
            ['missing'=>'address','field'=>'city'],
            ['missing'=>'address','field'=>'state']
        ];
    }


    public function CreateClient(ApiTester $I){

        $I->wantTo("Cadastrar Clientes");

        $this->create_clients_endpoint = '/clients';

        $this->create_clients_request['own_id'] = strval(rand(0,1000000));

        $I->sendPOST($this->create_clients_endpoint,$this->create_clients_request);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseMatchesJsonType([
            "data" => [
                "app_id" => 'string',
                "own_id" => 'string',
                "name" => 'string',
                "url" => 'string',
                'settings' => [
                   'receipt' => 'boolean',
                   'own_hand' => 'boolean',
                   'default_service' => 'string',
                   'insurance_value' => 'string',
                   'services' => 'array'
                ],
                'account_id' => 'string',
                'user_id' => 'string',
                'id' => 'integer',           
            ]
        ]);
        
        $response = json_decode($I->grabResponse(),true);

        $I->assertEquals($this->create_clients_request['own_id'],$response['data']['own_id']);
        $I->assertEquals($this->create_clients_request['name'],$response['data']['name']);
        $I->assertEquals($this->create_clients_request['url'],$response['data']['url']);
  
        Fixtures::add('Client',$response);

        $this->past_response = $response;
    }


    /**
    * @dataprovider UpdateClientProvider
    */
    public function UpdateClient(ApiTester $I, \Codeception\Example $example){

        $I->wantTo("Atualizar Clientes");

        $this->update_client_endpoint = '/clients/';

        $this->create_clients_request['own_id'] = $example['own_id'];
        $this->create_clients_request['name']   = $example['name'];
        $this->create_clients_request['url']    = $example['url'];

        $endpoint = $this->update_client_endpoint.$example['id'];

        $I->sendPATCH($endpoint,$this->create_clients_request);
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

        $I->seeResponseContainsJson( array('own_id' => $example['own_id']) );
        $I->seeResponseContainsJson( array('name' => $example['name']) );
        $I->seeResponseContainsJson( array('url' => $example['url']) );
    }

    protected function UpdateClientProvider(){
        return [
            ['id' => '1','own_id' => '123','name' => 'segunda','url' => 'https://sitedicaloja.com.br'],
            ['id' => '1','own_id' => '125','name' => 'terca','url' => 'https://sitediloja.com.br'],
        ];
    }


    public function CheckClients(ApiTester $I){

        $I->wantTo("Consultar Clientes");

        $this->check_clients_endpoint = '/clients';

        $I->sendGET($this->check_clients_endpoint);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseMatchesJsonType([
            "data" => 'array',
            'links' => [
                'first'=>'string',
                'last'=>'string',
                'prev'=>'string|null',
                'next'=>'string|null',
            ],
            'meta' => [
                'current_page'=>'integer',
                'from'=>'integer|null',
                'last_page'=>'integer',
                'path'=>'string',
                'per_page'=>'integer',
                'to'=>'integer|null',
                'total'=>'integer'
            ]
        ]);
    }


    /**
    * @before CreateClient
    */
    public function CheckClientById(ApiTester $I){

        $I->wantTo("Verifica Consulta Client por Id");

        $this->check_clients_endpoint = '/clients';

        $ClienteCriado = Fixtures::get('Client');
        $endpoint = $this->check_clients_endpoint.'/'.$ClienteCriado['data']['id'];
        // $endpoint = $this->check_clients_endpoint.'/'.$this->past_response['data']['id'];

        $I->sendGET($endpoint);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseMatchesJsonType([
            "data" => [
                'id' => 'integer',   
                "app_id" => 'string',
                "own_id" => 'string',
                "name" => 'string',
                "url" => 'string',
                'settings' => [
                   'receipt' => 'boolean',
                   'own_hand' => 'boolean',
                   'default_service' => 'string',
                   'insurance_value' => 'string',
                   'services' => 'array'
                ],
                'account_id' => 'string',
                'user_id' => 'string',                       
            ]
        ]);

        $I->seeResponseContainsJson(array('id'=>$ClienteCriado['data']['id']));
    }

    public function TesteFixtures(ApiTester $I){

        Fixtures::add('user1',['name' => 'davert']);
        $user1 = Fixtures::get('user1');
        var_dump($user1);
        var_dump(Fixtures::exists('user1'));

    }
}
