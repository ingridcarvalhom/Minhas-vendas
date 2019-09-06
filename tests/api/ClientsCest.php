<?php 

use Codeception\Util\Fixtures;

class ClientsCest
{
    protected $tokenFromUserA;
    protected $tokenFromUserB;
    public function _before(ApiTester $I){

        //Todo dia deve ser atualizado os tokens, criar um token em /painel gerenciar->tokens no ME,  

        $this->tokenFromUserA = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjllYThiYzViNTUxMzFhODY5NDE1OTk5ZTc0M2Q3MzA0ZGM5MDYwYzY4ZTU5ZTY2YzNkNjkwODIzNTQ5MGNlOGMxNjk1YTRkZDIxMzNkMGI2In0.eyJhdWQiOiIxIiwianRpIjoiOWVhOGJjNWI1NTEzMWE4Njk0MTU5OTllNzQzZDczMDRkYzkwNjBjNjhlNTllNjZjM2Q2OTA4MjM1NDkwY2U4YzE2OTVhNGRkMjEzM2QwYjYiLCJpYXQiOjE1Njc2OTI3ODMsIm5iZiI6MTU2NzY5Mjc4MywiZXhwIjoxNTk5MzE1MTgzLCJzdWIiOiJmMDg4MDExZi1lNzZjLTQzOWQtYjYzNC01OWQ1MGNlYjBiNWUiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLXdyaXRlIiwicHVyY2hhc2VzLXJlYWQiLCJzaGlwcGluZy1jYWxjdWxhdGUiLCJzaGlwcGluZy1jYW5jZWwiLCJzaGlwcGluZy1jaGVja291dCIsInNoaXBwaW5nLWNvbXBhbmllcyIsInNoaXBwaW5nLWdlbmVyYXRlIiwic2hpcHBpbmctcHJldmlldyIsInNoaXBwaW5nLXByaW50Iiwic2hpcHBpbmctc2hhcmUiLCJzaGlwcGluZy10cmFja2luZyIsImVjb21tZXJjZS1zaGlwcGluZyIsInRyYW5zYWN0aW9ucy1yZWFkIiwidXNlcnMtcmVhZCIsInVzZXJzLXdyaXRlIiwid2ViaG9va3MtcmVhZCIsIndlYmhvb2tzLXdyaXRlIiwibWluaGFzdmVuZGFzOjpjbGllbnRzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OmNsaWVudHM6d3JpdGUiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOndyaXRlIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczpyZWFkIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6c2hpcHBpbmdzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNoaXBwaW5nczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6Y29uY2lsaWF0aW9uczpyZWFkIiwibWluaGFzdmVuZGFzOjpjb25jaWxpYXRpb25zOndyaXRlIl19.YfsdDGswyxmNM3bUDoEA7B1zxYoi4oKXb_rKuLM1EUX2AwVeZSDpMw_YLtCccORgO4z4C2jZYoz2BUxFo-weilzGnU2jtWo2nKC_UpytBRBnSVOE1Y2KYiIE78FtZQ53IOnaxnajmNDa57B1xKPZ3mzNnQwr3cGXylGk7jlu_qNxzpPA5jO7vJIJeRgwXf04_Vs-WgaNLrmRbdX2ebp27xZMt2T-p8L9VIWETGwwp_btZ6ICwdBLysaWk4NLCPgFtNxENFRotHAELL4x1FSpF59E1E7y8qCkBHKswREl7g2IMpl8Z9c8Aru3YZIoYL-PukjRy539qBetMloOq98zBLO49Jc8r4ZfG65V3h3np4kgRzW-vjWVbUciN7sgEbijCw_622zgsf0p5FoTzc7rH8JUQHKwsTotThjEfPNWJmPXiGhwYcx_fHOx3MYh7G_nmGOjA6MU3OyEfmGsWotHSf4ipc-e0N-t_o_gSZttSRKPuX3S-_4OFyKSBbBwBFjjd1OySxQhhhCySvx2JOHfrKPmHfVSm2AYNQvp1OKa7AaMzT3_ofV9OhTpJaev0o1iQuA_ofEsFlzBPVECHDKn4AtmmgdvD7ZOhOuy8rvXWIgWCpQY0dyzGxG4-6ATNqLQsvhkwefOLgldqPGEOpSxwza3yxUU5CO10XB2DUEHwjE';
        $this->tokenFromUserB = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImQzYTJhYzQ4N2E5ZWFlYWNmZmFkNzkxZmU0ZjhmY2ViOGE4ZWFiOTEzODc0ZjMyYjZmYmM1MDQ0NThmZDBkZTk0MWYxZTIwMWFmMWY4YWVkIn0.eyJhdWQiOiIxIiwianRpIjoiZDNhMmFjNDg3YTllYWVhY2ZmYWQ3OTFmZTRmOGZjZWI4YThlYWI5MTM4NzRmMzJiNmZiYzUwNDQ1OGZkMGRlOTQxZjFlMjAxYWYxZjhhZWQiLCJpYXQiOjE1Njc3MDUxOTgsIm5iZiI6MTU2NzcwNTE5OCwiZXhwIjoxNTk5MzI3NTk4LCJzdWIiOiIyMDM5Zjk1My0wNjNjLTQ3MjctYTQ4ZC0xMjQzNTI4M2UyOGUiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLXdyaXRlIiwicHVyY2hhc2VzLXJlYWQiLCJzaGlwcGluZy1jYWxjdWxhdGUiLCJzaGlwcGluZy1jYW5jZWwiLCJzaGlwcGluZy1jaGVja291dCIsInNoaXBwaW5nLWNvbXBhbmllcyIsInNoaXBwaW5nLWdlbmVyYXRlIiwic2hpcHBpbmctcHJldmlldyIsInNoaXBwaW5nLXByaW50Iiwic2hpcHBpbmctc2hhcmUiLCJzaGlwcGluZy10cmFja2luZyIsImVjb21tZXJjZS1zaGlwcGluZyIsInRyYW5zYWN0aW9ucy1yZWFkIiwidXNlcnMtcmVhZCIsInVzZXJzLXdyaXRlIiwid2ViaG9va3MtcmVhZCIsIndlYmhvb2tzLXdyaXRlIiwibWluaGFzdmVuZGFzOjpjbGllbnRzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OmNsaWVudHM6d3JpdGUiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOndyaXRlIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczpyZWFkIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6c2hpcHBpbmdzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNoaXBwaW5nczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6Y29uY2lsaWF0aW9uczpyZWFkIiwibWluaGFzdmVuZGFzOjpjb25jaWxpYXRpb25zOndyaXRlIl19.Uhi3uNyBvxx0QAmPsJLJ7NzUFtYasag8UuzwcKFnmcAVlulUWgqV5QCL2TbYHgTi9OcD49Gri8TE-RpvFS1pYnu-6j6gLd8qarnkm9mL58_LFZ7f5cMq_cOEJFQbEgwykTIMMd6z-4iebxFbJ4kM_v8qqKaZugSpb74au6g6IKot46KFEPOvfZ3PgUTC-jIDkyal-m8v_QorXpb1zUUYkEidt_8fwHTbSwW78W_b8brkJILipRqGdNYQe-yA1d7ERBRLh6Po2jtr0tA6VwZN2xXkG9AX957wpy50eO4qGYRCoEtUFoeGSyfVmrC1THy_PbspI8Rt77F_wcPLiIAJnac2h7Um-h1VOHPvD3YLAziMJkYtVJ34c8kziT6Tw2RZrscWq2WoKqIuyZlSkF8qhcslu3t3OXRIiwOvpAV_6--HVVEXUIF_yzOua9RGDiguuXCwuxxk9fhmltKUq7sQ0I2_ehp90RWiQs6gUIA_iQwFtfkp_7_eenrXVdE_8ArLD1EhqP8ZlVZ1GjjN8dbrObFHNpPsCrokivXXyUJN6VWkFrdt2AaD03dz_kH3gYDTgiXtfjU-YRGH8IXYHmCuFsuU7qAsO5samx9Q_ieRKJDIeDw7sc2pqTraqHj5bJgOtdDwesGw-EZ219-pwaz1EBtFxxm9fij8DOxwpgMvrgc';

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
        $I->seeResponseCodeIs(422); //Unprocessable Entity
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
    * @depends CreateClientContract
    */
    public function UpdateClient(ApiTester $I, \Codeception\Example $example){

        $I->wantTo("Atualizar Clientes");

        $this->createClientRequest['own_id'] = Fixtures::get('Client')['data']['own_id'];
        $this->createClientRequest['name']   = $example['name'];
        $this->createClientRequest['url']    = $example['url'];

        $I->sendPATCH($this->clientsEndpoint.'/'.Fixtures::get('Client')['data']['id'],$this->createClientRequest);
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

        $I->seeResponseContainsJson( array('name' => $example['name']) );
        $I->seeResponseContainsJson( array('url' => $example['url']) );
    }

    protected function UpdateClientProvider(){
        return [
            ['id' => '1','name' => 'segunda','url' => 'https://sitedicaloja.com.br'],
            ['id' => '1','name' => 'terca','url' => 'https://sitediloja.com.br'],
        ];
    }


    public function CheckClients(ApiTester $I){

        $I->wantTo("Consultar Clientes");

        $I->sendGET($this->clientsEndpoint);
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
    * @depends CreateClientContract
    */
    public function CheckClientById(ApiTester $I){

        $I->wantTo("Verifica Consulta Client por Id");

        $createdTestClient = Fixtures::get('Client');

        $I->sendGET($this->clientsEndpoint.'/'.$createdTestClient['data']['id']);
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

        $I->seeResponseContainsJson(array('id'=>$createdTestClient['data']['id']));
    }

    /** 
    * @before CreateClientContract
   
    */
    public function DontSeeClientFromAnotherUser(ApiTester $I){

        $I->wantTo(" Assegura que um usuário não vê clientes de outro usuário");

        $createdTestClient = Fixtures::get('Client');
        $I->deleteHeader('Authorization');
        $I->amBearerAuthenticated($this->tokenFromUserB);

        $I->sendGET($this->clientsEndpoint);
        $I->dontSeeResponseContainsJson(array('id'=>$createdTestClient['data']['id']));

        $I->sendGET($this->clientsEndpoint.'/'.$createdTestClient['data']['id']);
        $I->seeResponseCodeIsClientError();

        $I->sendPATCH($this->clientsEndpoint.'/'.$createdTestClient['data']['id'],$this->createClientRequest);
        $I->seeResponseCodeIsClientError();

        $this->createClientRequest['url'] = 'https://falhouTeste.com.br';
        $I->sendPOST($this->clientsEndpoint,$this->createClientRequest);
        $I->seeResponseCodeIsClientError();


    }

}
