<?php 

use Codeception\Util\Fixtures;
use \Codeception\Util\HttpCode;

class ClientsCest
{
    protected $tokenFromUserA;
    protected $tokenFromUserB;
    public function _before(ApiTester $I){

        //Todo dia deve ser atualizado os tokens, criar um token em /painel gerenciar->tokens no ME,  

        $this->tokenFromUserA = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjhjNDNjNDZmOGZiOTk2NWNmMDQ4MDBkYWI2ZWVjZjZjOTA5ZWQzMzcxMzgzM2FlN2UyNTI3N2MxZjZiNDhjZmQwNTdmYTVlYjQ5ZDE5NDRlIn0.eyJhdWQiOiIxIiwianRpIjoiOGM0M2M0NmY4ZmI5OTY1Y2YwNDgwMGRhYjZlZWNmNmM5MDllZDMzNzEzODMzYWU3ZTI1Mjc3YzFmNmI0OGNmZDA1N2ZhNWViNDlkMTk0NGUiLCJpYXQiOjE1NjgyMTYzOTUsIm5iZiI6MTU2ODIxNjM5NSwiZXhwIjoxNTk5ODM4Nzk1LCJzdWIiOiJmMDg4MDExZi1lNzZjLTQzOWQtYjYzNC01OWQ1MGNlYjBiNWUiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLXdyaXRlIiwicHVyY2hhc2VzLXJlYWQiLCJzaGlwcGluZy1jYWxjdWxhdGUiLCJzaGlwcGluZy1jYW5jZWwiLCJzaGlwcGluZy1jaGVja291dCIsInNoaXBwaW5nLWNvbXBhbmllcyIsInNoaXBwaW5nLWdlbmVyYXRlIiwic2hpcHBpbmctcHJldmlldyIsInNoaXBwaW5nLXByaW50Iiwic2hpcHBpbmctc2hhcmUiLCJzaGlwcGluZy10cmFja2luZyIsImVjb21tZXJjZS1zaGlwcGluZyIsInRyYW5zYWN0aW9ucy1yZWFkIiwidXNlcnMtcmVhZCIsInVzZXJzLXdyaXRlIiwid2ViaG9va3MtcmVhZCIsIndlYmhvb2tzLXdyaXRlIl19.LwD_NpKhnSfnqkoUGrTcqjMawTZXU_7kzgI-mwVdOPxMgamBSEHwKb2g4fO9_3_i26QvGZr0ouzU3ck-xMMz_A76unAHpnuiDQqIevMOMuoRXJI1sRdcQ--ICmFe0beUYB8jKh5KDBbJ_T5uu5KauGiNthRTTCnhiUh4zHliO7vf89s-EyY82ZtxLgL8CuasVnY3LYRB2TTInaT6BHRv_yVPkfXVBSSzYguCSnwRZEnKg8QpQj9LGiVDsUKM0MoGRO5JwDKDvmvknrMgPlS3oBNLhMMoyfvZss9BJFBeBsOPA18IrP8zH8jvN-V3X-PBSICg58delCTPjhvJnfmiLhesKkOzIVsaGeQf1JxUTN_7c1xs_H_6vo7VCo1OmntsH0A6cZaiNPxUtDt-mcfEIcOiKNwHz5Bqjzb4X5F9vgTB4YXlR47lHWLSHKZNpO5kwRolnisQxdWNZCV5z_wG3QIzghIwrZOmgECGD7X54FUxkGMgE_5oU5HU__qKcpo2t7PrAZC0hyO5FZrwNG2QzB3kNC_L1MQ8jyfaW0L94XW3LuSHHngt05Pg_18fQBApYk2JmJrzgIVcQs4d2E6P_s9pfCAezcOPBzvlFP8aLiaSHlTyKPaCR4YXdZ2ZsrPZHd_8P6tP8tRKVv6-z4nRFOhOsyXTLxw1EJowiQCsIw0';
        $this->tokenFromUserB = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjJhNzc1NTRhMDA1MzFmYjIwZjczNDYyZDc0ZGFiZTE3YjczZDlmZTEzNDkxMGViM2ZhMGY3YmFmNzEzZDY3NDRhYzJhMWQ4MDU3ZTA2NjhkIn0.eyJhdWQiOiIxIiwianRpIjoiMmE3NzU1NGEwMDUzMWZiMjBmNzM0NjJkNzRkYWJlMTdiNzNkOWZlMTM0OTEwZWIzZmEwZjdiYWY3MTNkNjc0NGFjMmExZDgwNTdlMDY2OGQiLCJpYXQiOjE1NjgyMTY0MzMsIm5iZiI6MTU2ODIxNjQzMywiZXhwIjoxNTk5ODM4ODMzLCJzdWIiOiIyMDM5Zjk1My0wNjNjLTQ3MjctYTQ4ZC0xMjQzNTI4M2UyOGUiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLXdyaXRlIiwicHVyY2hhc2VzLXJlYWQiLCJzaGlwcGluZy1jYWxjdWxhdGUiLCJzaGlwcGluZy1jYW5jZWwiLCJzaGlwcGluZy1jaGVja291dCIsInNoaXBwaW5nLWNvbXBhbmllcyIsInNoaXBwaW5nLWdlbmVyYXRlIiwic2hpcHBpbmctcHJldmlldyIsInNoaXBwaW5nLXByaW50Iiwic2hpcHBpbmctc2hhcmUiLCJzaGlwcGluZy10cmFja2luZyIsImVjb21tZXJjZS1zaGlwcGluZyIsInRyYW5zYWN0aW9ucy1yZWFkIiwidXNlcnMtcmVhZCIsInVzZXJzLXdyaXRlIiwid2ViaG9va3MtcmVhZCIsIndlYmhvb2tzLXdyaXRlIl19.yRImf798O3hSOKMqLIyUmjD2mzEg4xsd-qHC1Yt3JOIk-RuiUhIZp5GjC2YfMkaYGQUJHE-ypq72JHzQhROQjv0wdkTnx39I8qXaBh4PoO5WDbXvAgwVXLn_TNGYxXiHTyeeVBCBO09cB9G-uUS9eebkbObi8qZ2C2KqIbanuuyYZFPxLMpqYfIpCBoBkQwAaqIMQIV2KLn-fRfbtpEvOuhaVZvBbmDjU0JCdWPeENSxaMAkppMkp-pLaF7a20NWcny8lWuz4gY8dKQGZ-Vi-9VCplzvia_7QhzV2EAXMpHgfBMpprHLIEzynVsvH1qKTVvKY9vdO7FHo6bEcsyeSQ8ohLT9hxphzV5WxyEz-VH2y0PkpxdPA9aqV9qosm3ylTTxHKhddNid1mqBB-1RicrTfBj3SUhP6HdcT9OALQqaiJbEOXgce93N0o-PNMWBf_xE08NF9uk7j8Lh0DkuRtvv8_JEu9zEnAdNZWDk_c54ltfiD0DPSbDc7l8tzmC0MawHZNiQ0B570HhxyF2AmZfk1D4bIoGfNkiXeaSZL61nZtRmdtG_SSNjQnttye4c5bSwz5SFMp6454baGE8yGsEN8dOkQaLP3baKU9JeHjlZISLu2NM8S-4UNQFBEybh1xzo_Fdmv1BWy_QuJ5s0_v3SRJ98dqZgu8QL-PkdZHQ';

        $this->clientsEndpoint = '/clients';
        $this->createClientRequest = [
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
        $I->amBearerAuthenticated($this->tokenFromUserA);
    }


    public function CreateClientContract(ApiTester $I){

        $I->wantTo("Cadastrar Clientes");

        $this->createClientRequest['own_id'] = strval(rand(0,1000000));

        $I->sendPOST($this->clientsEndpoint,$this->createClientRequest);
        $response = json_decode($I->grabResponse(),true);

        $I->seeResponseCodeIs(HttpCode::CREATED);
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
        
        $I->assertEquals($this->createClientRequest['own_id'],$response['data']['own_id']);
        $I->assertEquals($this->createClientRequest['name'],$response['data']['name']);
        $I->assertEquals($this->createClientRequest['url'],$response['data']['url']);
  
        Fixtures::add('Client',$response);
    }

     /**
    * @dataprovider CreateClientWithMissingFieldProvider
    */
    public function CreateClientWithMissingField(APITester $I, \Codeception\Example $example){

        $I->wantTo("Cadastra Clientes Faltando Campos");
       
        if(isset($example['field'])){
            $this->createClientRequest[$example['missing']][$example['field']] = null;
        }else{
            $this->createClientRequest[$example['missing']] = null;
        }   
        
        $I->sendPOST($this->clientsEndpoint,$this->createClientRequest);

        $I->seeResponseCodeIs(HttpCode::UNPROCESSABLE_ENTITY); //Unprocessable Entity
        $I->seeResponseContains($example['missing']);
        $I->seeResponseMatchesJsonType([
            "message" => 'string',
            "errors" => 'array'
        ]);
    }

    protected function CreateClientWithMissingFieldProvider(){
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


    /**
    * @dataprovider UpdateClientProvider
    * @before CreateClientContract
    */
    public function UpdateClient(ApiTester $I, \Codeception\Example $example){

        $I->wantTo("Atualizar Clientes");

        $this->createClientRequest['own_id'] = Fixtures::get('Client')['data']['own_id'];
        $this->createClientRequest['name']   = $example['name'];
        $this->createClientRequest['url']    = $example['url'];

        $I->sendPATCH($this->clientsEndpoint.'/'.Fixtures::get('Client')['data']['id'],$this->createClientRequest);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseContainsJson( array('name' => $example['name']) );
        $I->seeResponseContainsJson( array('url' => $example['url']) );
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
    }

    protected function UpdateClientProvider(){
        return [
            ['id' => '1','name' => 'segunda','url' => 'https://sitedicaloja.com.br'],
            ['id' => '1','name' => 'terca','url' => 'https://sitediloja.com.br'],
        ];
    }


    public function CheckClient(ApiTester $I){

        $I->wantTo("Consultar Clientes");

        $I->sendGET($this->clientsEndpoint);

        $I->seeResponseCodeIs(HttpCode::OK);
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

        $createdTestClient = Fixtures::get('Client');

        $I->sendGET($this->clientsEndpoint.'/'.$createdTestClient['data']['id']);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseContainsJson(array('id'=>$createdTestClient['data']['id']));
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
    }

    /** 
    * @before CreateClientContract
    * @before changeUser
    */
    public function DontSeeClientFromAnotherUser(ApiTester $I){

        $I->wantTo(" Assegura que um usuário não vê clientes de outro usuário");

        $this->UnauthorizedGetClients($I);
        $this->UnauthorizedGetClientsById($I);
        $this->UnauthorizedPatchClients($I);
        $this->UnauthorizedPostClients($I);
    }

    protected function changeUser(ApiTester $I){
        $I->deleteHeader('Authorization');
        $I->amBearerAuthenticated($this->tokenFromUserB);
    }

    protected function UnauthorizedGetClients(ApiTester $I){
        $I->sendGET($this->clientsEndpoint);
        $I->dontSeeResponseContainsJson(array('id'=>Fixtures::get('Client')['data']['id']));
    }

    protected function UnauthorizedGetClientsById(ApiTester $I){
        $I->sendGET($this->clientsEndpoint.'/'.Fixtures::get('Client')['data']['id']);
        $I->seeResponseCodeIs(HttpCode::FORBIDDEN);
    }

    protected function UnauthorizedPatchClients(ApiTester $I){
        $I->sendPATCH($this->clientsEndpoint.'/'.Fixtures::get('Client')['data']['id'],$this->createClientRequest);
        $I->seeResponseCodeIs(HttpCode::FORBIDDEN);
    }

    protected function UnauthorizedPostClients(ApiTester $I){
        $this->createClientRequest['url'] = 'https://falhouTeste.com.br';
        $I->sendPOST($this->clientsEndpoint,$this->createClientRequest);
        $I->seeResponseCodeIs(HttpCode::PRECONDITION_FAILED);
    }

}
