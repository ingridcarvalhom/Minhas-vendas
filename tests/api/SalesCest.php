<?php 

class SalesCest
{

    protected $sales_request;

    protected $cadastrar_endpoint;
    protected $atualizar_endpoint;
    protected $consultar_endpoint;
    protected $todas_permissoes4;
    protected $past_id;
    protected $aux_id;

    protected $TodasPermissoes;

    public function _before(){

        $this->BearerToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjkwMTQ0YTM1ZjAwNjFlYmJmNDllZDJlYTIzNmUyNDc4ZDIxNWI4OGJhZmY4YmQ3NDAyZjA4MTVmNWMyMjk1M2I1ODI2YmE1MTIyYjgyMmVjIn0.eyJhdWQiOiIxIiwianRpIjoiOTAxNDRhMzVmMDA2MWViYmY0OWVkMmVhMjM2ZTI0NzhkMjE1Yjg4YmFmZjhiZDc0MDJmMDgxNWY1YzIyOTUzYjU4MjZiYTUxMjJiODIyZWMiLCJpYXQiOjE1NjQxNjk0ODIsIm5iZiI6MTU2NDE2OTQ4MiwiZXhwIjoxNTk1NzkxODgyLCJzdWIiOiJhNDJkMWIwYy01MjA1LTQyMWMtODRlZi01NWZiNjZiNjg0NGYiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLXdyaXRlIiwicHVyY2hhc2VzLXJlYWQiLCJzaGlwcGluZy1jYWxjdWxhdGUiLCJzaGlwcGluZy1jYW5jZWwiLCJzaGlwcGluZy1jaGVja291dCIsInNoaXBwaW5nLWNvbXBhbmllcyIsInNoaXBwaW5nLWdlbmVyYXRlIiwic2hpcHBpbmctcHJldmlldyIsInNoaXBwaW5nLXByaW50Iiwic2hpcHBpbmctc2hhcmUiLCJzaGlwcGluZy10cmFja2luZyIsImVjb21tZXJjZS1zaGlwcGluZyIsInRyYW5zYWN0aW9ucy1yZWFkIiwidXNlcnMtcmVhZCIsInVzZXJzLXdyaXRlIiwid2ViaG9va3MtcmVhZCIsIndlYmhvb2tzLXdyaXRlIiwibWluaGFzdmVuZGFzOjpjbGllbnRzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OmNsaWVudHM6d3JpdGUiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOndyaXRlIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczpyZWFkIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6c2hpcHBpbmdzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNoaXBwaW5nczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6Y29uY2lsaWF0aW9uczpyZWFkIiwibWluaGFzdmVuZGFzOjpjb25jaWxpYXRpb25zOndyaXRlIl19.3jovoMjzOqp7CgrJFKqkfA5BUzj5EBrBG0PNH6RmrUhA1H5sBuY4GC9NCRml21ScfRsKkRGDA2jHhbeuW4XBZ9qVE-2p0lPHw-ykygmU2csmBKNYBO70Utfqyd9PRRPC3xi_jm20CLBf8B7o1fsmCEEVWLBhQZz6SkKqbzbpAgsd0qEj5LWaIIS3dONu0KXo1pdU6liw27WYfrwZA7MIpILCkfSN9-4m40UotGVefU5dwiALYD_QUoAPfMZe9AvD0v9KorDQnsKrzJBvOIUy1zwEPV7tvLfpyRDhQU_OKslaahr45kX65ZMUZYOK3U50NA7nAr_wyyegNBGj3j2CoVwl-CXTWQSQkqjzltTF8YX3-kcr4vjP29fwN22QkxVVh_izREQJjF409MbiWVEBkYf-6N6DyL4h3vvOfJcZE2V4G0EVLAgUI7H1kKUkr37QKYhaJVkoLKrc8g_5nqedHQOt8LD5G5RSgiYnFfuosdLrFcE0FFgTToKfNHyfiNq61utwx2Pi7md5aY0XRRxzqdqPT4gqWpPSfG0_XyqE2htamWoXfwLIHBIyQufp8TAcpTolxpH8ANEyjE5jHNwb3sv0vpmhk5ks4AOGkftZlk7YYnupmPLDYhMWTp1Gr7Vq6AQ7JqrFJvMmMeE43mN00pPw1QH3sLEnHi5oVjweQ4s';
        
        $this->cadastrar_endpoint = '/sales';
        $this->atualizar_endpoint = '/sales/';
        $this->consultar_endpoint = '/sales/';
        $this->consultar_filtro_endpoint = '/sales?';
        $this->consultar_all_endpoint = '/sales';
        $this->deletar_endpoint = '/sales/';

     
        $this->sales_request = [[
            "own_id"=> "IDENTIFICADOR-DA-VENDA-NO-INTEGRADOR",
            "own_url"=> "URL-DA-VENDA",
            "status"=> "created",
            "client_id"=> 1,
            "customer"=> [
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
                      "length"=> 12,
                      "diameter"=> null
                    ]
                ]
            ],
            "options"=> [
                "service"=> 6,
                "receipt"=> false,
                "own_hand"=> true,
                "collect"=> true,
                "reverse"=> false,
                "reminder"=> "at", // lembrete etiqueta
                "platform"=> "King-Schroeder"
            ]
        ]];

        $this->update_request = [
            "user_id"=>"bcef61f7-21b2-3334-8d92-aa76af0fc7ee",
            "own_id"=>"b8099c5d-8aa3-39c6-86ea-ad2ec25e24fa",
            "own_url"=>"http://shanahann.net/",
            "status"=>"created",
            "client"=>[
                "app_id"=>"1",
                "order_id"=>null,
                "own_id"=>"3ead98e4-f28a-40e2-b699-4d6cd1fa9ffd",
                "name"=>"Nome Fake",
                "url"=>"http://www.fakename.com.br",
                "account_id"=>null,
                "user_id"=>"243332d7-719f-4333-a269-7e08a933333a"
            ],
            "customer"=>[
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

    // public function _after(ApiTester $I){

    //     $I->haveHttpHeader('Content-Type', 'application/json');
    //     $I->haveHttpHeader('Accept', 'application/json');
    //     $I->amBearerAuthenticated($this->BearerToken);

    //     $I->sendGET($this->consultar_all_endpoint);
    //     $I->seeResponseCodeIsSuccessful();

    //     $response = json_decode($I->grabResponse(),true);
    //     $array_response = $response['data'];
    //     foreach ($array_response as $value){

    //         $I->sendDELETE($this->deletar_endpoint.$value['id']);
    //     }
    // }

    protected function DeletarVenda(ApiTester $I){
        
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);

        $I->sendDELETE($this->deletar_endpoint.$this->aux_id);
        $I->seeResponseCodeIsSuccessful();
    }



    public function CadastrarVenda(ApiTester $I){
        
        $I->wantTo("Cadastrar Venda");

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);
       
        $this->sales_request[0]['client_id'] = 1;
        $this->sales_request[0]['own_id'] = strval(rand(0,10000));

        $I->sendPOST($this->cadastrar_endpoint,$this->sales_request);
        
        $I->seeResponseMatchesJsonType([
            'data'=>[
                [
                    'own_id' => 'string',
                    'own_url' => 'string',
                    'status' => 'string',
                    'client_id' => 'integer',
                    'customer' => 'array',
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

        $I->seeResponseContainsJson(array('own_id'=>$this->sales_request[0]['own_id']));
        $I->seeResponseContainsJson(array('own_url'=>$this->sales_request[0]['own_url']));
        $I->seeResponseContainsJson(array('status'=>$this->sales_request[0]['status']));
        $I->seeResponseContainsJson(array('client_id'=>$this->sales_request[0]['client_id']));
        $I->seeResponseContainsJson(array('customer' =>$this->sales_request[0]['customer']));
        $I->seeResponseContainsJson(array('receiver' =>$this->sales_request[0]['receiver']));
        $I->seeResponseContainsJson(array('amount' =>$this->sales_request[0]['amount']));
        $I->seeResponseContainsJson(array('invoice' =>$this->sales_request[0]['invoice']));
        $I->seeResponseContainsJson(array('products' =>$this->sales_request[0]['products']));
        $I->seeResponseContainsJson(array('options' =>$this->sales_request[0]['options']));

        $response = json_decode($I->grabResponse(),true);
     
        $this->aux_id = $response['data'][0]['id'];
    }



    /**
    * @before CadastrarVenda
    * @after DeletarVenda
    */
    public function AtualizarVenda(ApiTester $I){

        $I->wantTo("Atualizar venda ".$this->aux_id);

        $faker = Faker\Factory::create();

        $this->update_request['own_url'] = $faker->url;

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);
        
        //Atualizar endpoint
        $endpoint = $this->atualizar_endpoint.$this->aux_id;

        $I->sendPATCH($endpoint,$this->update_request);
        $I->seeResponseCodeIsSuccessful();

        //Consultar Endpoint
        $this->consultar_endpoint = '/sales/';

        $endpoint = $this->consultar_endpoint.$this->aux_id;
        $I->sendGET($endpoint);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseMatchesJsonType([
            'data'=>'array'
        ]);
        
        $response = json_decode($I->grabResponse(),true);
        $I->assertEquals($response['data']['own_url'],$this->update_request['own_url']);  
    }


    /**
     * @before CadastrarVenda
    */
    public function ConsultarVenda(ApiTester $I){

        $I->wantTo("Consultar Venda ".$this->aux_id);

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);

        $endpoint = $this->consultar_endpoint.$this->aux_id;

        $I->sendGET($endpoint);
        $I->seeResponseCodeIsSuccessful();

        $I->seeResponseMatchesJsonType([
            'data'=>[
                'id'=>'integer',
                'own_id'=>'string',
                'user_id'=>'string',
                'own_url'=>'string',
                'status'=>'string',
                'disabled'=>'integer',
                'client_id'=>'integer',
                'customer'=>[
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
                'canceled_at' => 'null',
                'deleted_at' => 'null',
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
                        'dimensions' => [
                            'width' => 'integer',
                            'height' => 'integer',
                            'length' => 'integer',
                        ],
                        'jadlog_agency' => 'integer',
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

    // public function PreparaListaVendas(ApiTester $I,){

    //     $I->haveHttpHeader('Content-Type', 'application/json');
    //     $I->haveHttpHeader('Accept', 'application/json');
    //     $I->amBearerAuthenticated($this->BearerToken);


    // }

    /**
    * @dataprovider SucessListaVendasProvider
    */
    public function SucessListaVendas(ApiTester $I, \Codeception\Example $example){
 
        $I->wantTo("Verifica o filtros");

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);

        $endpoint = $this->consultar_filtro_endpoint;
        
        if(isset($example['filtro'])){

            if(isset($example['field']) && isset($example['value'])){
                $endpoint = $endpoint.'filter['.$example['filtro'].']='.$example['field'].','.$example['value'];
            } 
            if(isset($example['value']) && !isset($example['field'])){
                $endpoint = $endpoint.'filter['.$example['filtro'].']='.$example['value'];
            }   
            if (isset($example['old']) && isset($example['new'])){
                $endpoint = $endpoint.'filter['.$example['filtro'].']='.$example['old'].','.$example['new'];
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

        $response = json_decode($I->grabResponse(),true);
      
        $I->seeResponseContainsJson(array($example['field']=>$example['value']));
        $I->seeResponseMatchesJsonType([
           'data'=> 'array',
           'links'=>'array',
           'meta'=>'array'
        ]);
    }

    protected function SucessListaVendasProvider(){
        return [
            ['filtro'=>'amount','field'=>'total','value'=>'100'],
            ['filtro'=>'amount','field'=>'currency','value'=>'BRL'],
            ['filtro'=>'amount','field'=>'shipping','value'=>'22'],
            ['filtro'=>'amount','field'=>'subtotal','value'=>'78'],

            ['filtro'=>'customer','field'=>'name','value'=>'NOME DO REMETENTE'],
            ['filtro'=>'customer','field'=>'email','value'=>'email@remetente.com'],
            ['filtro'=>'customer','field'=>'phone','value'=>'5555555555555'],
            ['filtro'=>'customer','field'=>'document','value'=>'05392258000'],
            ['filtro'=>'customer','field'=>'state_register','value'=>'496017223297'],
            ['filtro'=>'customer','field'=>'company_document','value'=>'52065016000186'],
            

            ['filtro'=>'receiver','field'=>'name','value'=>'NOME DO RECEBEDOR'],
            ['filtro'=>'receiver','field'=>'email','value'=>'email@recebedor.com'],
            ['filtro'=>'receiver','field'=>'phone','value'=>'555555555555'],
            ['filtro'=>'receiver','field'=>'document','value'=>'11569765022'],
            ['filtro'=>'receiver','field'=>'company_document','value'=>'01051781000106'],
            ['filtro'=>'receiver','field'=>'state_register','value'=>'921464459226'],


            ['filtro'=>'invoice','field'=>'key','value'=>'47537041097716550376222662273547431779550849'],
            ['filtro'=>'invoice','field'=>'serie','value'=>'395'],
            ['filtro'=>'invoice','field'=>'value','value'=>'1573'],
            ['filtro'=>'invoice','field'=>'number','value'=>'424'],
            ['filtro'=>'invoice','field'=>'issued_at','value'=>'1987-08-07'],

            // // ['filtro'=>'tracking','field'=>'{field}','value'=>'{value}'],
            // // ['filtro'=>'shipping','field'=>'{field}','value'=>'{value}'],
            // // ['filtro'=>'historics','value'=>'true'],
            // ['filtro'=>'created-between','old'=>'2019-07-29 20:06:05','new'=>'2019-07-31 23:06:05'],
            // ['filtro'=>'updated-between','old'=>'2018-07-29 20:06:05','new'=>'2025-07-30 23:06:05'],
            // // // ['filtro'=>'has-shipping','value'=>'true'], // falso
            // ['filtro'=>'account','value'=>'7999e5fe-a6bf-4757-9feb-9ad513e2a0ea'],
            // ['filtro'=>'client','value'=>'2'],
            
            // ['filtro'=>'status','value'=>'created'],
            // ['filtro'=>'status','value'=>'archived'],
            // ['filtro'=>'status','value'=>'canceled'],
            // ['filtro'=>'status','value'=>'deleted'],
            // ['sort'=>'id'],
            // ['sort'=>'created_at'],
            // ['sort'=>'updated_at'],
            // ['sort'=>'deleted_at'],

            // ['limit'=>'{1}']
        ];
    }


    /**
    * @dataprovider FailListaVendasProvider
    */
    public function FailListaVendas(ApiTester $I, \Codeception\Example $example){
 
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);

        $endpoint = $this->consultar_filtro_endpoint;
        
        if(isset($example['filtro'])){

            if(isset($example['field']) && isset($example['value'])){
                $endpoint = $endpoint.'filter['.$example['filtro'].']='.$example['field'].','.$example['value'];
            } 
            if(isset($example['value']) && !isset($example['field'])){
                $endpoint = $endpoint.'filter['.$example['filtro'].']='.$example['value'];
            }   
            if (isset($example['old']) && isset($example['new'])){
                $endpoint = $endpoint.'filter['.$example['filtro'].']='.$example['old'].','.$example['new'];
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

    protected function FailListaVendasProvider(){
        return [
            ['filtro'=>'amount','field'=>'total','value'=>'99'],
            ['filtro'=>'amount','field'=>'currency','value'=>'USD'],
            ['filtro'=>'amount','field'=>'shipping','value'=>'222'],
            ['filtro'=>'amount','field'=>'subtotal','value'=>'780'],

            ['filtro'=>'customer','field'=>'name','value'=>'NOME DO REMETENTEa'],
            ['filtro'=>'customer','field'=>'email','value'=>'eemail@remetente.com'],
            ['filtro'=>'customer','field'=>'phone','value'=>'5555555155555'],
            ['filtro'=>'customer','field'=>'document','value'=>'25574405979'],
            ['filtro'=>'customer','field'=>'company_document','value'=>'275211510780883'],
            ['filtro'=>'customer','field'=>'state_register','value'=>'496117223297'],
            

            ['filtro'=>'receiver','field'=>'name','value'=>'NOME DO RECEBEDORa'],
            ['filtro'=>'receiver','field'=>'email','value'=>'eemail@recebedor.com'],
            ['filtro'=>'receiver','field'=>'phone','value'=>'525555555555'],
            ['filtro'=>'receiver','field'=>'document','value'=>'11569765021'],
            ['filtro'=>'receiver','field'=>'state_register','value'=>'01086411415'],
            ['filtro'=>'receiver','field'=>'company_document','value'=>'921264459226'],


            ['filtro'=>'invoice','field'=>'key','value'=>'17537041097716550376222662273547431779550849'],
            ['filtro'=>'invoice','field'=>'serie','value'=>'394'],
            ['filtro'=>'invoice','field'=>'value','value'=>'1572'],
            ['filtro'=>'invoice','field'=>'number','value'=>'423'],
            ['filtro'=>'invoice','field'=>'issued_at','value'=>'1987-08-06'],

            // // ['filtro'=>'tracking','field'=>'{field}','value'=>'{value}'],
            // // ['filtro'=>'shipping','field'=>'{field}','value'=>'{value}'],
            // // ['filtro'=>'historics','value'=>'true'],
            ['filtro'=>'created-between','old'=>'2039-07-31 20:06:05','new'=>'2020-07-30 23:06:05'],
            ['filtro'=>'updated-between','old'=>'2001-07-29 20:06:05','new'=>'2019-07-28 23:06:05'],
            // // ['filtro'=>'has-shipping','value'=>'true'], // falso
            ['filtro'=>'account','value'=>'6999e5fe-a6bf-4757-9feb-9ad513e2a0ea'],
            ['filtro'=>'client','value'=>'222'],
            // // ['filtro'=>'status','value'=>'{created,available,unavailable,canceled,deleted}'],
            // ['sort'=>'_at'],
            // ['limit'=>'{1}']
        ];
    }



    public function DeleteAllSales(ApiTester $I){

              $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);

        $I->sendGET($this->consultar_all_endpoint);
        $I->seeResponseCodeIsSuccessful();

        $response = json_decode($I->grabResponse(),true);
        $array_response = $response['data'];
        foreach ($array_response as $value){

            $I->sendDELETE($this->deletar_endpoint.$value['id']);
        }
    }


}
