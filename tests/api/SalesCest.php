<?php 

use \Codeception\Util\HttpCode;
use Codeception\Util\Fixtures;

class SalesCest
{
    protected $salesRequest;
    protected $salesEndpoint;
    protected $TodasPermissoes;

    public function _before(ApiTester $I){
        //Cuidado com client_id pode ser que vc tenha que modifica-lo, e token, pode ser que tenha que criar um novo

        $config = \Codeception\Configuration::config();
        $apiSettings = \Codeception\Configuration::suiteSettings('api', $config);

        $this->tokenFromUserA = $apiSettings["tokens"]["bearerUserA"];
        $this->tokenFromUserB = $apiSettings["tokens"]["bearerUserB"];

        $this->salesEndpoint = '/sales';

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->tokenFromUserA);

        Fixtures::add('Client',$this->createClient($I));

        $this->salesRequest = [[
            "own_id"=> Fixtures::get('Client')['data']['own_id'],
            "own_url"=> "URL-DA-VENDA",
            "client_id"=> Fixtures::get('Client')['data']['id'],
            "sender"=> [
                "name"=> "NOME DO REMETENTE",
                "phone"=> "5555555555555",
                "email"=> "email@remetente.com",
                "document"=> "05392258000",
                "company_document"=> "52065016000186",
                "state_register"=> "496017223297",
                "address"=> [
                    "postal_code"=> "96020111",
                    "name"=> "Endereço do comprador",
                    "number"=> "999",
                    "complement"=> "Complemento CASA X",
                    "district"=> "Bairro",
                    "city"=> "Cidade",
                    "state"=> "Espírito Santo",
                    "state_abbr"=> "ES",
                    "country"=> "Brasil",
                    "notes"=> "Referencia/notas"
                ]
            ],
            "receiver"=> [
                "name"=> "NOME DO RECEBEDOR",
                "phone"=> "555555555555",
                "email"=> "email@recebedor.com",
                "document"=> "11569765022",
                "company_document"=> "01051781000106",
                "state_register"=> "921464459226",
                "address"=> [
                    "postal_code"=> "99999999",
                    "name"=> "Endereço xxxx",
                    "number"=> "999",
                    "complement"=> "Complemento",
                    "district"=> "Bairro",
                    "city"=> "Cidade",
                    "state"=> "Espírito Santo",
                    "state_abbr"=> "ES",
                    "country"=> "Brasil",
                    "notes"=> "Notas/Referencia"
                ]
            ],
            "amount"=> [
                "subtotal"=> 78.75,
                "total"=> 101.50,
                "shipping"=> 22.75,
                "currency"=> "BRL"
            ],
            "invoice"=> [
                "key"=> "47537041097716550376222662273547431779550849",
                "value"=> 1573,
                "serie"=> "395",
                "number"=> "424",
                "issued_at"=> "1987-08-07"
            ],
            "products"=> [
                [
                    "name"=> "ipsum",
                    "price"=> 2854,
                    "quantity"=> 2,
                    "volumes"=> [
                      "insurance"=> 122.22,
                      "weight"=> 9.7,
                      "height"=> 12,
                      "width"=> 12,
                      "length"=> 12
                    ]
                ]
            ],
            "options"=> [
                "service"=> 6,
                "receipt"=> false,
                "own_hand"=> true,
                "collect"=> true,
                "reverse"=> false,
                #"reminder"=> "at", // lembrete etiqueta
                "platform"=> "King-Schroeder"
            ]
        ]];

        $this->updateRequest = [
            "user_id"=>"bcef61f7-21b2-3334-8d92-aa76af0fc7ee",
            "own_id"=> Fixtures::get('Client')['data']['own_id'],
            "own_url"=>"http://shanahann.net/",
            "client"=>[
                "app_id"=>"1",
                "order_id"=>null,
                "own_id"=>"3ead98e4-f28a-40e2-b699-4d6cd1fa9ffd",
                "name"=>"Nome Fake",
                "url"=>"http://www.fakename.com.br",
                "account_id"=>null,
                "user_id"=>"243332d7-719f-4333-a269-7e08a933333a"
            ],
            "sender"=>[
                "name"=>"Elizabeth Kuvulis",
                "phone"=>"1-694-697-2572",
                "email"=>"phirthe@huels.com",
                "document"=>"71517988063",
                "company_document"=>"41136769000119",
                "state_register"=>"622985830503",
                "address"=>[
                "postal_code"=>"55360-4527",
                "name"=>"369 Heidenreich Mountains Apt. 452",
                "number"=>"205",
                "complement"=>"burgh",
                "district"=>"non",
                "city"=>"Port Margot",
                "state"=>"Minnesota",
                "state_abbr"=>"CA",
                "country"=>"Japan",
                "notes"=>"Saepe corporis culpa odio."
                ]
            ],
            "receiver"=>[
                "name"=>"Conrad Mueller",
                "phone"=>"(350) 453-5034 x202",
                "email"=>"ernestina.dare@hotmail.com",
                "document"=>"83818419094",
                "company_document"=>"66245526000140",
                "state_register"=>"357146080532",
                "address"=>[
                    "postal_code"=>"97367-5471",
                    "name"=>"68589 Glover Landing",
                    "number"=>"214",
                    "complement"=>"side",
                    "district"=>"qui",
                    "city"=>"Lemketown",
                    "state"=>"New Mexico",
                    "state_abbr"=>"NC",
                    "country"=>"Myanmar",
                    "notes"=>"Qui quam eos voluptas provident explicabo aut optio nobis."
                ]
            ],
            "amount"=>[
                "total"=>22,
                "shipping"=>584,
                "currency"=>"BRL"
            ],
            "invoice"=>[
                "decimal"=>65371716,
                "key"=>"47537041097716550376222662273547431779550849",
                "value"=>1573,
                "serie"=>"395",
                "number"=>"424",
                "issued_at"=>"1987-08-07"
            ],
            "products"=>[
                [
                    "name"=>"ipsum",
                    "price"=>2854,
                    "quantity"=>781,
                    "volumes"=>2
                ]
            ],
            "options"=>[
                "service"=>6,
                "receipt"=>false,
                "own_hand"=>true,
                "collect"=>true,
                "reverse"=>false,
                "reminder"=>"at",
                "platform"=>"King-Schroeder"
            ]
        ];
    }

    protected function createClient(ApiTester $I){
        $clientsEndpoint = '/clients';
        $createClientRequest = [
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
        $createClientRequest['own_id'] = strval(rand(0,1000000));
        
        $I->sendPOST($clientsEndpoint,$createClientRequest);
        $I->seeResponseCodeIsSuccessful();

        $response = json_decode($I->grabResponse(),true);

        return $response;
    }


    public function CreateSale(ApiTester $I){
        
        $this->salesRequest[0]['client_id'] = 1;
        $this->salesRequest[0]['own_id'] = strval(rand(0,10000));

        $I->sendPOST($this->salesEndpoint,$this->salesRequest);
        
        $I->seeResponseMatchesJsonType([
            'data'=>[
                [
                    'own_id' => 'string',
                    'own_url' => 'string',
                    'client_id' => 'integer',
                    'sender' => 'array',
                    'receiver' => 'array',
                    'amount' => 'array',
                    'invoice' => 'array',
                    'products' => 'array',
                    'options' => 'array',
                    'user_id' => 'string',
                    'updated_at' => 'string',
                    'created_at' => 'string',
                    'id' => 'integer',
                    'client' => 'array',
                ]
            ]
        ]);

        $I->seeResponseContainsJson(array('own_id'   =>$this->salesRequest[0]['own_id']));
        $I->seeResponseContainsJson(array('own_url'  =>$this->salesRequest[0]['own_url']));
        $I->seeResponseContainsJson(array('client_id'=>$this->salesRequest[0]['client_id']));
        $I->seeResponseContainsJson(array('sender'   =>$this->salesRequest[0]['sender']));
        $I->seeResponseContainsJson(array('receiver' =>$this->salesRequest[0]['receiver']));
        $I->seeResponseContainsJson(array('amount'   =>$this->salesRequest[0]['amount']));
        $I->seeResponseContainsJson(array('invoice'  =>$this->salesRequest[0]['invoice']));
        $I->seeResponseContainsJson(array('products' =>$this->salesRequest[0]['products']));
        $I->seeResponseContainsJson(array('options'  =>$this->salesRequest[0]['options']));

        $saleCreated = json_decode($I->grabResponse(),true);
     
        Fixtures::add('Sale',$saleCreated);
    }


    /**
    * @before CreateSale
    * @after DeleteSale
    */
    public function UpdateSale(ApiTester $I){

        $I->wantTo("Atualizar venda ".Fixtures::get('Sale')['data'][0]['id']);

        $this->UpdateSaleBuildRequest($I);

        $I->sendPATCH($this->salesEndpoint.'/'.Fixtures::get('Sale')['data'][0]['id'],$this->updateRequest);
        $I->seeResponseCodeIsSuccessful();

        $I->sendGET($this->salesEndpoint.'/'.Fixtures::get('Sale')['data'][0]['id']);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeResponseMatchesJsonType([
            'data'=>'array'
        ]);
        
        $response = json_decode($I->grabResponse(),true);
        //TODO Trocar esse assert por um containsJson
        $I->assertEquals($response['data']['own_url'],$this->updateRequest['own_url']);  
    }

    protected function UpdateSaleBuildRequest(ApiTester $I){
        $faker = Faker\Factory::create();
        $this->updateRequest['own_url'] = $faker->url;
    }

    protected function DeleteSale(ApiTester $I){

        $I->sendDELETE($this->salesEndpoint.'/'.Fixtures::get('Sale')['data'][0]['id']);

        $I->seeResponseCodeIsSuccessful();
    }


    /**
    * @before CreateSale
    * @depends CreateSale
    */
    public function CheckSaleById(ApiTester $I){

        $I->wantTo("Consultar Venda por ID".Fixtures::get('Sale')['data'][0]['id']);

        $I->sendGET($this->salesEndpoint.'/'.Fixtures::get('Sale')['data'][0]['id']);
        
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseMatchesJsonType([
            'data'=>[
                'id'=>'integer',
                'own_id'=>'string',
                'user_id'=>'string',
                'own_url'=>'string',
                'disabled'=>'integer',
                'disabled'=> 'integer',
                'client_id'=>'integer',
                'receiver'=>[
                    'name'=>'string',
                    'email'=>'string:email',
                    'phone'=>'string',
                    'address'=>[
                        'city'=>'string',
                        'name'=>'string',
                        'notes'=>'string',
                        'state'=>'string',
                        'number'=>'string',
                        'country'=>'string',
                        'district'=>'string',
                        'complement'=>'string',
                        'state_abbr'=>'string',
                        'postal_code'=>'string'
                    ]
                ],
                'products'=>[
                    [
                        'name'=>'string',
                        'price'=>'float|integer',
                        'volumes'=>[
                            'width' =>'integer',
                            'height'=> 'integer',
                            'length' => 'integer',
                            'weight' => 'float|integer',
                            'insurance' => 'float|integer'
                        ],
                        'quantity' => 'integer'
                    ]
                ],
                'amount'=>[
                    'total' =>'integer|float',
                    'currency' => 'string',
                    'shipping' => 'integer|float'
                ],
                'invoice' => [
                    'key' => 'string',
                    'serie' => 'string',
                    'value' => 'integer',
                    'number' => 'string',
                    'issued_at' => 'string'
                ],
                'options' => [
                    'collect' => 'boolean',
                    'receipt' => 'boolean',
                    'reverse' => 'boolean',
                    'service' => 'integer',
                    'own_hand' => 'boolean',
                    'platform' => 'string',
                ],
                'volumes' => 'null',
                'created_at' => 'string',
                'updated_at' => 'string',
               
                'deleted_at' => 'null',


                'sender'=>[
                    'name'=>'string',
                    'email'=>'string:email',
                    'phone'=>'string',
                    'address'=>[
                        'city'=>'string',
                        'name'=>'string',
                        'notes'=>'string',
                        'state'=>'string',
                        'number'=>'string',
                        'country'=>'string',
                        'district'=>'string',
                        'complement'=>'string',
                        'state_abbr'=>'string',
                        'postal_code'=>'string',
                    ],
                    'document'=>'string',
                    'state_register'=>'string',
                    'company_document'=>'string'
                ],
                'archived_at' => 'null|string',
                'paid_at' => 'null|string',
                'canceled_at' => 'null|string',
                'client' => [
                    'id' => 'integer',
                    'app_id' => 'string',
                    'own_id' => 'string',
                    'name' => 'string',
                    'url' => 'string',
                    'settings' => [
                        'receipt' => 'boolean',
                        'own_hand' => 'boolean',
                        'services' => 'array',
                        'address_id' => 'integer',
                        'default_service' => 'string',
                        'insurance_value' => 'string'
                    ],
                    'account_id' => 'string',
                    'user_id' => 'string'
                ],
                'shippings' => 'array'
            ]
        ]);
    }


    /**
    * @dataprovider CheckSalesFilterProvider
    * @depends CreateSale
    */
    public function CheckSalesFilter(ApiTester $I, \Codeception\Example $example){
 
        $I->wantTo("Verifica os filters ".$example['message']);

        $endpoint = $this->salesEndpoint.'?';
        
        if(isset($example['filter'])){

            if(isset($example['field']) && isset($example['value'])){
                $endpoint = $endpoint.'filter['.$example['filter'].']='.$example['field'].','.$example['value'];
            } 

            if(isset($example['value']) && !isset($example['field'])){
                $endpoint = $endpoint.'filter['.$example['filter'].']='.$example['value'];
            }   
            if (isset($example['old']) && isset($example['new'])){
                $endpoint = $endpoint.'filter['.$example['filter'].']='.$example['old'].','.$example['new'];
            }
        }

        $I->sendGET($endpoint);

        $I->seeResponseCodeIsSuccessful();

        $response = json_decode($I->grabResponse(),true);
      
        $I->seeResponseContainsJson(array($example['field']=>$example['value']));

        $I->seeResponseMatchesJsonType([
           'data'=> 'array',
           'links'=>'array',
           'meta'=>'array'
        ]);
    }

    protected function CheckSalesFilterProvider(){
        return [
            ['message'=>'amount total','filter'=>'amount','field'=>'total','value'=>'101.5'],
            ['message'=>'amount shipping','filter'=>'amount','field'=>'shipping','value'=>'22.75'],
            ['message'=>'amount subtotal','filter'=>'amount','field'=>'subtotal','value'=>'78.75'],

            ['message'=>'sender name','filter'=>'sender','field'=>'name','value'=>'NOME DO REMETENTE'],
            ['message'=>'sender email','filter'=>'sender','field'=>'email','value'=>'email@remetente.com'],
            ['message'=>'sender document','filter'=>'sender','field'=>'document','value'=>'05392258000'],
            ['message'=>'sender state_register','filter'=>'sender','field'=>'state_register','value'=>'496017223297'],
            ['message'=>'sender company_document','filter'=>'sender','field'=>'company_document','value'=>'52065016000186'],
            

            ['message'=>'receiver name','filter'=>'receiver','field'=>'name','value'=>'NOME DO RECEBEDOR'],
            ['message'=>'receiver email','filter'=>'receiver','field'=>'email','value'=>'email@recebedor.com'],
            ['message'=>'receiver document','filter'=>'receiver','field'=>'document','value'=>'11569765022'],
            ['message'=>'receiver company_document','filter'=>'receiver','field'=>'company_document','value'=>'01051781000106'],
            ['message'=>'receiver state_register','filter'=>'receiver','field'=>'state_register','value'=>'921464459226'],


            ['message'=>'invoice key','filter'=>'invoice','field'=>'key','value'=>'47537041097716550376222662273547431779550849'],
            ['message'=>'invoice serie','filter'=>'invoice','field'=>'serie','value'=>'395'],
            ['message'=>'invoice value','filter'=>'invoice','field'=>'value','value'=>'1573'],
            ['message'=>'invoice number','filter'=>'invoice','field'=>'number','value'=>'424'],
            ['message'=>'invoice issued_at','filter'=>'invoice','field'=>'issued_at','value'=>'1987-08-07'],

            // ['filter'=>'tracking','field'=>'{field}','value'=>'{value}'], TODO
            
            // ['filter'=>'historics','value'=>'true'], // TODO
            // ['filter'=>'created-between','old'=>'2019-07-29 20:06:05','new'=>'2025-07-31 23:06:05'], //TESTAR MANUALMENTE
            // ['filter'=>'updated-between','old'=>'2018-07-29 20:06:05','new'=>'2025-07-30 23:06:05'], //TESTAR MANUALMENTE
            // // ['filter'=>'has-shipping','value'=>'true'], // TODO
            // ['filter'=>'account','value'=>'7999e5fe-a6bf-4757-9feb-9ad513e2a0ea'], //TODO
        ];
    }


    /**
    * @dataprovider FilterByClientIdProvider
    * @after DeleteAllSales
    */
    public function FilterByClientId(ApiTester $I,\Codeception\Example $example){

        $I->wantTo('Verifica filter Client '. $example['message']);

        $this->salesRequest[0]['client_id'] = '1';
        $I->sendPOST($this->salesEndpoint,$this->salesRequest);
        $I->seeResponseCodeIsSuccessful();

        $this->salesRequest[0]['client_id'] = '3';
        $I->sendPOST($this->salesEndpoint,$this->salesRequest);
        $I->seeResponseCodeIsSuccessful();

        $endpoint = $this->salesEndpoint.'?filter[client]='.$example['client'];

        $I->sendGET($endpoint);

        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(array('client_id'=>$example['client']));
        $I->dontSeeResponseContainsJson(array('client_id'=>$example['wrong_client']));
    }

    protected function FilterByClientIdProvider(){
        return [
            ['message'=>'client [1,3]','client'=>'1','wrong_client'=>'3'],
            ['message'=>'client [3,1]','client'=>'3','wrong_client'=>'1'],
        ];
    }


    /**
    * @before CreateSale
    * @before CreateSale
    * @before CreateSale
    * @dataprovider CheckFilterSortProvider
    * @depends CreateSale
    * @after DeleteAllSales
    */
    public function CheckFilterSort(ApiTester $I,\Codeception\Example $example){

        $I->wantTo("Verifica se a ordenação está correta");

        $endpoint = $this->salesEndpoint.'?sort='.$example['sort'];

        $I->sendGET($endpoint);
        $I->seeResponseCodeIsSuccessful();
       
        $sales = json_decode($I->grabResponse(),true);

        $I->assertGreaterThanOrEqual($sales['data'][1][$example['sort']],$sales['data'][2][$example['sort']]);
        $I->assertGreaterThanOrEqual($sales['data'][0][$example['sort']],$sales['data'][1][$example['sort']]);
    }

    protected function CheckFilterSortProvider(){
        return [
            ['sort'=>'id'],
            ['sort'=>'created_at'],
            ['sort'=>'updated_at'],
            ['sort'=>'deleted_at'],
        ];
    }


    /**
    * @before CreateSale
    * @before CreateSale
    * @depends CreateSale
    * @dataprovider CheckSalesLimitProvider
    */
    public function CheckSalesLimit(ApiTester $I,\Codeception\Example $example){

        $I->wantTo("Verifica limite de vendas");

        $I->sendGET($this->salesEndpoint.'?limit='.$example['limit']);
        $I->seeResponseCodeIsSuccessful();

        $response = json_decode($I->grabResponse(),true);
        $I->assertEquals($response['meta']['to'],$example['limit']);
        $I->assertLessThanOrEqual($response['meta']['total'],$example['limit']);
    }

    protected function CheckSalesLimitProvider(){
        return [
            ['limit'=>1],
            ['limit'=>2],
        ];
    }


    /**
    * @dataprovider CheckFilterWithNoMatchingSalesProvider
    */
    public function CheckFilterWithNoMatchingSales(ApiTester $I, \Codeception\Example $example){
 
        $endpoint = $this->salesEndpoint.'?';
        
        if(isset($example['filter'])){

            if(isset($example['field']) && isset($example['value'])){
                $endpoint = $endpoint.'filter['.$example['filter'].']='.$example['field'].','.$example['value'];
            } 
            if(isset($example['value']) && !isset($example['field'])){
                $endpoint = $endpoint.'filter['.$example['filter'].']='.$example['value'];
            }   
            if (isset($example['old']) && isset($example['new'])){
                $endpoint = $endpoint.'filter['.$example['filter'].']='.$example['old'].','.$example['new'];
            }
        }
    
        if(isset($example['sort'])){
            $endpoint = $endpoint.'sort='.$example['sort'];
        }
        if(isset($example['limit'])){
            $endpoint = $endpoint.'limit='.$example['limit'];
        }

        $I->sendGET($endpoint);
        $I->seeResponseCodeIsSuccessful();

        $I->dontSeeResponseMatchesJsonType([
           'data'=> 'array',
           'links'=>[
               'first'=>'string',
               'last'=>'string',
               'prev'=>'null',
               'next'=>'null'
           ],
           'meta'=>[
               'current_page'=>'integer',
               'from'=>'integer',
               'last_page'=>'integer',
               'path'=>'string',
               'per_page'=>'integer',
               'to'=>'integer',
               'total'=>'integer'
           ]
        ]);
    }

    protected function CheckFilterWithNoMatchingSalesProvider(){
        return [
            ['filter'=>'amount','field'=>'total','value'=>'99'],
            ['filter'=>'amount','field'=>'shipping','value'=>'222'],
            ['filter'=>'amount','field'=>'subtotal','value'=>'780'],

            ['filter'=>'sender','field'=>'name','value'=>'NOME DO REMETENTEa'],
            ['filter'=>'sender','field'=>'email','value'=>'eemail@remetente.com'],
            ['filter'=>'sender','field'=>'document','value'=>'25574405979'],
            ['filter'=>'sender','field'=>'company_document','value'=>'275211510780883'],
            ['filter'=>'sender','field'=>'state_register','value'=>'496117223297'],
            

            ['filter'=>'receiver','field'=>'name','value'=>'NOME DO RECEBEDORa'],
            ['filter'=>'receiver','field'=>'email','value'=>'eemail@recebedor.com'],
            ['filter'=>'receiver','field'=>'document','value'=>'11569765021'],
            ['filter'=>'receiver','field'=>'state_register','value'=>'01086411415'],
            ['filter'=>'receiver','field'=>'company_document','value'=>'921264459226'],


            ['filter'=>'invoice','field'=>'key','value'=>'17537041097716550376222662273547431779550849'],
            ['filter'=>'invoice','field'=>'serie','value'=>'394'],
            ['filter'=>'invoice','field'=>'value','value'=>'1572'],
            ['filter'=>'invoice','field'=>'number','value'=>'423'],
            ['filter'=>'invoice','field'=>'issued_at','value'=>'1987-08-06'],

            //TODO testes fails dos filters
            // // ['filter'=>'tracking','field'=>'{field}','value'=>'{value}'],
            // // ['filter'=>'shipping','field'=>'{field}','value'=>'{value}'],
            // // ['filter'=>'historics','value'=>'true'],
            // ['filter'=>'created-between','old'=>'2039-07-31 20:06:05','new'=>'2020-07-30 23:06:05'],
            // ['filter'=>'updated-between','old'=>'2001-07-29 20:06:05','new'=>'2019-07-28 23:06:05'],
            // // // ['filter'=>'has-shipping','value'=>'true'], //
            // ['filter'=>'account','value'=>'6999e5fe-a6bf-4757-9feb-9ad513e2a0ea'],
            // ['filter'=>'client','value'=>'222'],
        ];
    }


    /** 
    *@before CreateSale
    * @depends CreateSale
    */
    public function ArchiveSale(ApiTester $I){

        $I->wantTo("Arquivar a venda");

        $I->sendPOST($this->salesEndpoint.'/'.Fixtures::get('Sale')['data'][0]['id'].'/archive');
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(array('message'=>'Venda arquivada.'));

        $I->sendGET($this->salesEndpoint.'/'.Fixtures::get('Sale')['data'][0]['id']);
        $I->seeResponseContains('archived_at');
        $I->dontSeeResponseContainsJson(array('archived_at'=>null));
    }


    /** 
    * @before CreateSale
    * @depends CreateSale
    */
    public function CancelSaleWithSucess(ApiTester $I){

        $I->wantTo("Cancelar a venda");

        $I->sendPOST($this->salesEndpoint.'/'.Fixtures::get('Sale')['data'][0]['id'].'/cancel');
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(array('message'=>'Venda cancelada.'));

        $I->sendGET($this->salesEndpoint.'/'.Fixtures::get('Sale')['data'][0]['id']);
        $I->dontSeeResponseContainsJson(array('canceled_at'=>null));
        $I->seeResponseContains('canceled_at');
    }
   

    /** 
    *@before CreateSale
    * @depends CreateSale
    */
    public function MarkSaleAsPaid(ApiTester $I){

        $I->wantTo("Marcar venda paga");

        $I->sendPOST($this->salesEndpoint.'/'.Fixtures::get('Sale')['data'][0]['id'].'/make-paid');
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(array('message'=>'Venda marcada como paga.'));

        $I->sendGET($this->salesEndpoint.'/'.Fixtures::get('Sale')['data'][0]['id']);
        $I->seeResponseContains('paid_at');
        $I->dontSeeResponseContainsJson(array('paid_at'=>null));
    }
    

    /**
    * @before CreateSale
    * @before changeToUserB
    */
    public function DontSeeSaleFromAnotherUser(ApiTester $I){
        //Esse teste engloba vários mas foi feito assim para economizar tempo da requisição do createSale.
        $I->wantTo('Verifica se um usuário não vê vendas do outro');
        
        $this->UnauthorizedGetSalesById($I);
        $this->UnauthorizedGetSales($I);
        $this->UnauthorizedPostSales($I);
        $this->UnauthorizedPatchSales($I);
        $this->UnauthorizedDeleteSales($I);
        $this->UnauthorizedPostSalesArchive($I);
        $this->UnauthorizedPostSales($I);
        $this->UnauthorizedPostSalesCancel($I);
        $this->UnauthorizedPostSalesMakePaid($I);
    }

    protected function changeToUserB(ApiTester $I){
        $I->deleteHeader('Authorization');
        $I->amBearerAuthenticated($this->tokenFromUserB);
    }

    protected function UnauthorizedGetSalesById(ApiTester $I){
        $I->sendGET($this->salesEndpoint.'/'.Fixtures::get('Sale')['data'][0]['id']); // GET /sales/{id} 
        $I->seeResponseCodeIs(HttpCode::FORBIDDEN);
    } 

    protected function UnauthorizedGetSales(ApiTester $I){
        $I->sendGET($this->salesEndpoint);    //  GET /sales 
        $I->dontSeeResponseContainsJson(array('id'=>Fixtures::get('Sale')['data'][0]['id']));
        $I->seeResponseCodeIs(HttpCode::OK);
    }

    protected function UnauthorizedPostSales(ApiTester $I){
        $I->sendPOST($this->salesEndpoint,$this->salesRequest); // POST /sales 
        $I->dontSeeResponseContainsJson(array('user_id'=>Fixtures::get('Sale')['data'][0]['user_id']));  
    }

    protected function UnauthorizedPatchSales(ApiTester $I){
        $I->sendPATCH($this->salesEndpoint.'/'.Fixtures::get('Sale')['data'][0]['id']); // PATCH /sales
        $I->seeResponseCodeIs(HttpCode::FORBIDDEN);
    }

    protected function UnauthorizedDeleteSales(ApiTester $I){
        $I->sendDELETE($this->salesEndpoint.'/'.Fixtures::get('Sale')['data'][0]['id']);    // DELETE /sales/{id} 
        $I->seeResponseCodeIs(HttpCode::FORBIDDEN);
    }

    protected function UnauthorizedPostSalesArchive(ApiTester $I){
        // POST /sales/{id}/archive COM PROBLEMA
        $I->sendPOST($this->salesEndpoint.'/'.Fixtures::get('Sale')['data'][0]['id'].'/archive');
        $I->seeResponseCodeIs(HttpCode::FORBIDDEN);
    }

    protected function UnauthorizedPostSalesCancel(ApiTester $I){
        // POST /sales/{id}/cancel COM PROBLEMA
        $I->sendPOST($this->salesEndpoint.'/'.Fixtures::get('Sale')['data'][0]['id'].'/cancel');
        $I->seeResponseCodeIs(HttpCode::FORBIDDEN);
    }

    protected function UnauthorizedPostSalesMakePaid(ApiTester $I){
        // POST /sales/{id}/make-paid  COM PROBLEMA
        $I->sendPOST($this->salesEndpoint.'/'.Fixtures::get('Sale')['data'][0]['id'].'/make-paid');
        $I->seeResponseCodeIs(HttpCode::FORBIDDEN);
    }


    public function DeleteAllSales(ApiTester $I){

        $I->amBearerAuthenticated($this->tokenFromUserA);
        $I->sendGET($this->salesEndpoint);
        $I->seeResponseCodeIsSuccessful();

        $allSales = json_decode($I->grabResponse(),true);

        foreach ($allSales['data'] as $sale){

            $I->sendDELETE($this->salesEndpoint.'/'.$sale['id']);
        }
    }
}
