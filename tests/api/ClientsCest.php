<?php 

use Codeception\Util\Fixtures;
use \Codeception\Util\HttpCode;

class ClientsCest
{
    protected $tokenFromUserA;
    protected $tokenFromUserB;
    public function _before(ApiTester $I){

        //Todo dia deve ser atualizado os tokens, criar um token em /painel gerenciar->tokens no ME,  
        $config = \Codeception\Configuration::config();
        $apiSettings = \Codeception\Configuration::suiteSettings('api', $config);

        $this->tokenFromUserA = $apiSettings["tokens"]["bearerUserA"];
        $this->tokenFromUserB = $apiSettings["tokens"]["bearerUserB"];

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
        // $I->assertEquals($this->createClientRequest['own_id'],$response['data']['own_id']);
        // $I->assertEquals($this->createClientRequest['name'],$response['data']['name']);
        // $I->assertEquals($this->createClientRequest['url'],$response['data']['url']);
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

        Fixtures::add('Client',$response);
    }


    /**
    * @dataprovider CreateClientWithMissingFieldProvider
    */
    public function CreateClientWithMissingField(APITester $I, \Codeception\Example $example){

        $I->wantTo("Cadastra Clientes Faltando Campos");

        $this->RemoveField($example);
        
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

    protected function RemoveField( \Codeception\Example $example ){

        if(isset($example['field'])){
            $this->createClientRequest[$example['missing']][$example['field']] = null;
        }else{
            $this->createClientRequest[$example['missing']] = null;
        }   
    }


    /**
    * @dataprovider UpdateClientProvider
    * @before CreateClientContract
    */
    public function UpdateClientContent(ApiTester $I, \Codeception\Example $example){

        $I->wantTo("Verifica o conteúdo do endpoint PATCH /clients");

        $this->UpdateClientBuildRequest($example);

        $I->sendPATCH($this->clientsEndpoint.'/'.Fixtures::get('Client')['data']['id'],$this->createClientRequest);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseContainsJson( array('name' => $this->createClientRequest['name']) );
        $I->seeResponseContainsJson( array('url' => $this->createClientRequest['url']) );
        $I->seeResponseContainsJson( array('own_id' => $this->createClientRequest['own_id']) );

    }

    protected function UpdateClientBuildRequest( \Codeception\Example $example ){

        $this->createClientRequest['own_id'] = Fixtures::get('Client')['data']['own_id'];
        $this->createClientRequest['name']   = $example['name'];
        $this->createClientRequest['url']    = $example['url'];
    }

    protected function UpdateClientProvider(){
        return [
            ['id' => '1','name' => 'segunda','url' => 'https://sitedicaloja.com.br'],
        ];
    }


    /**
    * @dataprovider UpdateClientProvider
    * @before CreateClientContract
    */
    public function UpdateClientContract(ApiTester $I, \Codeception\Example $example){

        $I->wantTo("Verifica o contrato do endpoint PATCH /clients");

        $this->UpdateClientBuildRequest($example);

        $I->sendPATCH($this->clientsEndpoint.'/'.Fixtures::get('Client')['data']['id'],$this->createClientRequest);

        $I->seeResponseCodeIs(HttpCode::OK);
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


    public function CheckClientContract(ApiTester $I){

        $I->wantTo("Verifica o contrato do endpoint GET /clients");

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
    public function GetClientByIdContent(ApiTester $I){
        $I->wantTo("Verifica conteúdo de GET /clients/{id}");

        $I->sendGET($this->clientsEndpoint.'/'.Fixtures::get('Client')['data']['id']);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseContainsJson(array('id'=>Fixtures::get('Client')['data']['id']));
    }


    /** 
    * @before CreateClientContract
    */
    public function GetClientByIdContract(ApiTester $I){
        $I->wantTo("Verifica contrato de GET /clients{id}");

        $I->sendGET($this->clientsEndpoint.'/'.Fixtures::get('Client')['data']['id']);

        $I->seeResponseCodeIs(HttpCode::OK);
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
