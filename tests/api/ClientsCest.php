<?php 

use Codeception\Util\Fixtures;
use \Codeception\Util\HttpCode;

class ClientsCest
{
    protected $tokenFromUserA;
    protected $tokenFromUserB;
    public function _before(ApiTester $I){

        //Todo dia deve ser atualizado os tokens, criar um token em /painel gerenciar->tokens no ME,  

        $this->tokenFromUserA = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM5MzY5YTJlYTNiMmI2MGMwMzA4OWVlYmE4YjUxMThhYzk4OTM3ODE3ZWZhYjBkYzFlY2E1OWNhMmFiOGE0NjRmYTMwMTBlZDBiYWZiMzNlIn0.eyJhdWQiOiIxIiwianRpIjoiYzkzNjlhMmVhM2IyYjYwYzAzMDg5ZWViYThiNTExOGFjOTg5Mzc4MTdlZmFiMGRjMWVjYTU5Y2EyYWI4YTQ2NGZhMzAxMGVkMGJhZmIzM2UiLCJpYXQiOjE1NjgzMDMwMTYsIm5iZiI6MTU2ODMwMzAxNiwiZXhwIjoxNTk5OTI1NDE2LCJzdWIiOiJmMDg4MDExZi1lNzZjLTQzOWQtYjYzNC01OWQ1MGNlYjBiNWUiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLXdyaXRlIiwicHVyY2hhc2VzLXJlYWQiLCJzaGlwcGluZy1jYWxjdWxhdGUiLCJzaGlwcGluZy1jYW5jZWwiLCJzaGlwcGluZy1jaGVja291dCIsInNoaXBwaW5nLWNvbXBhbmllcyIsInNoaXBwaW5nLWdlbmVyYXRlIiwic2hpcHBpbmctcHJldmlldyIsInNoaXBwaW5nLXByaW50Iiwic2hpcHBpbmctc2hhcmUiLCJzaGlwcGluZy10cmFja2luZyIsImVjb21tZXJjZS1zaGlwcGluZyIsInRyYW5zYWN0aW9ucy1yZWFkIiwidXNlcnMtcmVhZCIsInVzZXJzLXdyaXRlIiwid2ViaG9va3MtcmVhZCIsIndlYmhvb2tzLXdyaXRlIiwibWluaGFzdmVuZGFzOjpjbGllbnRzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OmNsaWVudHM6d3JpdGUiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOndyaXRlIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczpyZWFkIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6c2hpcHBpbmdzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNoaXBwaW5nczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6Y29uY2lsaWF0aW9uczpyZWFkIiwibWluaGFzdmVuZGFzOjpjb25jaWxpYXRpb25zOndyaXRlIl19.DbTjFyZRZBSRhv_WKugNqLjhJpl5ZwTe1xLOHKpR_xBaPkqgunLOoKsCvV_5z5BCm-gHprd_RFc7Vtl-20RWOi_pzZRKmgIaYzV05O9GCl6_MbdG8kUJbkOI6sup97h4JZ1JR6IWE7MHrzNyrda8MFAHDW2ptS5x_SUstg4WXShu0RfBxWsEdITKE-LKBwR0H85P6DtERXZQ5FbWCLjo202apjpv33nf3U-W1GojS4zYU-MahMBiuud1okUJHsge6drD2YhER59HQ8MdseDFxojltJHDRmnoEVowHjZ4lG4rJ--wgfZ_Rmjhm7LL2dkT2BUqEOaWy76-SsUQ4FEUTQU3Qh7Xf7SGkyaTGHVvkwa2WubQ_vwNXVtZipCEQ9pKo-q-zfJaxo3Lk9LDf4uNm4zaC4rHOjipTVKcd4tJl_u2ESTpYcOyrP85-5CAQl4whV54jWbqh-k3hEOE6psvSVOCGSif_wY3rTtItXzL6JfOEkemDZFRyYak4pPm_leMpodk0OB1_G9dMl3FtlVpsL8OP9X8jaTOzEQ42F4dzT0_RCMmemM0ndIHkZuExUKcOVogJ9Y1CXz3S7J3MtRU4jZbX8vxzPI0UjAOEd60Cxg0LnMus1Gn9u-LD-6gLO2C2S4F0ETFPgZwAJsDFFS_A92KlTqk6CvquMM_Y8kM4uQ';
        $this->tokenFromUserB = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjZjNDMzYzgxNmRkZTcwMTUyNzI4NGI5ODAwOGY4NTJhYWY3OWNiZGMxYmRhYTgyYmNiMTZkMGQwYWY3N2E5OTMxYmUwY2JiNjQwOWE1M2NjIn0.eyJhdWQiOiIxIiwianRpIjoiNmM0MzNjODE2ZGRlNzAxNTI3Mjg0Yjk4MDA4Zjg1MmFhZjc5Y2JkYzFiZGFhODJiY2IxNmQwZDBhZjc3YTk5MzFiZTBjYmI2NDA5YTUzY2MiLCJpYXQiOjE1NjgzMDMwNTUsIm5iZiI6MTU2ODMwMzA1NSwiZXhwIjoxNTk5OTI1NDU1LCJzdWIiOiIyMDM5Zjk1My0wNjNjLTQ3MjctYTQ4ZC0xMjQzNTI4M2UyOGUiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLXdyaXRlIiwicHVyY2hhc2VzLXJlYWQiLCJzaGlwcGluZy1jYWxjdWxhdGUiLCJzaGlwcGluZy1jYW5jZWwiLCJzaGlwcGluZy1jaGVja291dCIsInNoaXBwaW5nLWNvbXBhbmllcyIsInNoaXBwaW5nLWdlbmVyYXRlIiwic2hpcHBpbmctcHJldmlldyIsInNoaXBwaW5nLXByaW50Iiwic2hpcHBpbmctc2hhcmUiLCJzaGlwcGluZy10cmFja2luZyIsImVjb21tZXJjZS1zaGlwcGluZyIsInRyYW5zYWN0aW9ucy1yZWFkIiwidXNlcnMtcmVhZCIsInVzZXJzLXdyaXRlIiwid2ViaG9va3MtcmVhZCIsIndlYmhvb2tzLXdyaXRlIiwibWluaGFzdmVuZGFzOjpjbGllbnRzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OmNsaWVudHM6d3JpdGUiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOndyaXRlIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczpyZWFkIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6c2hpcHBpbmdzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNoaXBwaW5nczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6Y29uY2lsaWF0aW9uczpyZWFkIiwibWluaGFzdmVuZGFzOjpjb25jaWxpYXRpb25zOndyaXRlIl19.Ow67QIAGyTDq_ZRBdlG8lzbRZd8SE-FREPpEgi6phbzl2LOgBArGuqTr9fTxa3wx95S79BXAz-XYHVHwk5Vh1SRvjy1d-VjEpA5FmPB2WONfbeYycMSsCNWWafbPV0o4m5EgDKijqK0elF94Jmaqp7cjE20d2qmW7aGmAeKxVx90NCY5i00XnD1H5qsjo4O8b3zI1o11S6jQW_-C__8gjmOoIbx4XwzGstbqZ-JiGUBTsFGScNrfswVMRyYvjYjAKtoGdd82Gc88FP9rgXlh79vQsXScvrGkHrj190za9vImwyHjzmxFzyL1dwEWhxh0c9DlfNZGSiig9tKtEn2JzCWG65PW1EsHkbIzuqEOhMGEo7P7OFziodBraOskb01vyQv2Ms6SgM_in6X71Yjll17sPBSvUw2A0Iq3CFwqaPMLDRtHqq32l3HiJtVP1MAv9mX3WX2d_EjkouHhTfyi8IudGyEAIRvOCOZ-VcKcL2ROrHd2m2tDoad1axGCroyhatTmUXJXk1yZqdnvWJCnO2Ri_8SMaPNRaYiyyi8KEnsJaG4VPvGR8zP4Nf4CZlsW26jD-INwmAYhlmG4laCm_R4--IA4ffkEE59AfC3nCjrXwuQRrkVUjEmAIxp8AP6zHVI5qyLUDeB10-KR2Lvx6PaOIv0IKiREussyLy7jba4';
        
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
