<?php 

use Codeception\Util\Fixtures;

class ClientsCest
{
    protected $create_clients_request;
    protected $create_clients_endpoint;
    protected $update_client_endpoint;
    protected $past_response;

    public function _before(ApiTester $I){

        $this->BearerToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjYzNmRlZDc3M2RkYmU1NWE1ZTRhZTEzYjhmZjdlNjk1NzNiZTJhNjNiZjVlNzk4ZDFiYzlhNWNjMzg2OTc2MmQ1YWJhYzE0OTcyYWVmYzg5In0.eyJhdWQiOiIxIiwianRpIjoiNjM2ZGVkNzczZGRiZTU1YTVlNGFlMTNiOGZmN2U2OTU3M2JlMmE2M2JmNWU3OThkMWJjOWE1Y2MzODY5NzYyZDVhYmFjMTQ5NzJhZWZjODkiLCJpYXQiOjE1NjY5MTI2MzAsIm5iZiI6MTU2NjkxMjYzMCwiZXhwIjoxNTk4NTM1MDMwLCJzdWIiOiJmMDg4MDExZi1lNzZjLTQzOWQtYjYzNC01OWQ1MGNlYjBiNWUiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLXdyaXRlIiwicHVyY2hhc2VzLXJlYWQiLCJzaGlwcGluZy1jYWxjdWxhdGUiLCJzaGlwcGluZy1jYW5jZWwiLCJzaGlwcGluZy1jaGVja291dCIsInNoaXBwaW5nLWNvbXBhbmllcyIsInNoaXBwaW5nLWdlbmVyYXRlIiwic2hpcHBpbmctcHJldmlldyIsInNoaXBwaW5nLXByaW50Iiwic2hpcHBpbmctc2hhcmUiLCJzaGlwcGluZy10cmFja2luZyIsImVjb21tZXJjZS1zaGlwcGluZyIsInRyYW5zYWN0aW9ucy1yZWFkIiwidXNlcnMtcmVhZCIsInVzZXJzLXdyaXRlIiwid2ViaG9va3MtcmVhZCIsIndlYmhvb2tzLXdyaXRlIiwibWluaGFzdmVuZGFzOjpjbGllbnRzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OmNsaWVudHM6d3JpdGUiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOndyaXRlIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczpyZWFkIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6c2hpcHBpbmdzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNoaXBwaW5nczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6Y29uY2lsaWF0aW9uczpyZWFkIiwibWluaGFzdmVuZGFzOjpjb25jaWxpYXRpb25zOndyaXRlIl19.BEVNDgfQNM83asZJKzRZPojh3sAKTfaXI6Y1xl8tC0JTJiopIvkAJEmUjHIgmqrDjGetO4dJKES4fbqM3rjLV9bHxG-OEqPJnVY3jOY0Yr0O1HCt9fQGXBzJLx33NIhVCSTokXPSU917ABEgZRt-hH2dgMeVAE2yhCpAKzlHDBozp512STKxNkghZufFVreB11QdZIv35t8iO8cey14KgWUblNSNTAJCiCoOrDs6-HRkQNM5dqJkSOX7FuNhET7OEs43t4eEu8pPcJmDu7ecWwKO46h1Ui6Uj2_i6NJArTBT5j2u5n3mzZ5IubNMN91rFF8PxSEbhQUHmN2l7nP3t15-FkUMi6fnEU_hJd3n1xL2OZkztnMawW3NqbaRU2rHsPHRwk5xPjLFsG_aDjz2ve3UdPjOmn1sScIlL4U9Mzdej4cQXTCyhI8Gd-3x2yCgg-JN607CU8I3RC7lrkVv1dVhxYamw1RkEmd5lQZ7qRPaMIA3R1g0FJduKyRWvyC9LYt3jljU2Ve2tBbPTOVix_zce7BTaSOontGimdh78uDh3v2VwpG7ACsy_wojJ7iG0s7CueHpaPE9YLPXPT89b-FGLqaj6Hz8bU8OB6GFPcbmWPXymT1AVeEhmeYEjiBD3cn2__dCIWSMiDUS6r0Vz6QG744GO7fLtS2ZJStW6gQ';
        
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


    public function CreateClientContract(ApiTester $I){

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
    * @before CreateClientContract
    */
    public function CheckClientById(ApiTester $I){

        $I->wantTo("Verifica Consulta Client por Id");

        $this->check_clients_endpoint = '/clients';

        $ClienteCriado = Fixtures::get('Client');


        $endpoint = $this->check_clients_endpoint.'/'.$ClienteCriado['data']['id'];

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

}
