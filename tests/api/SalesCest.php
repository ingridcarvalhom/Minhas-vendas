<?php 

class SalesCest
{

    protected $sales_request;

    protected $cadastrar_endpoint;
    protected $atualizar_endpoint;
    protected $consultar_endpoint;
    protected $todas_permissoes4;

    protected $TodasPermissoes;

    public function _before(){

        $this->BearerToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjkwMTQ0YTM1ZjAwNjFlYmJmNDllZDJlYTIzNmUyNDc4ZDIxNWI4OGJhZmY4YmQ3NDAyZjA4MTVmNWMyMjk1M2I1ODI2YmE1MTIyYjgyMmVjIn0.eyJhdWQiOiIxIiwianRpIjoiOTAxNDRhMzVmMDA2MWViYmY0OWVkMmVhMjM2ZTI0NzhkMjE1Yjg4YmFmZjhiZDc0MDJmMDgxNWY1YzIyOTUzYjU4MjZiYTUxMjJiODIyZWMiLCJpYXQiOjE1NjQxNjk0ODIsIm5iZiI6MTU2NDE2OTQ4MiwiZXhwIjoxNTk1NzkxODgyLCJzdWIiOiJhNDJkMWIwYy01MjA1LTQyMWMtODRlZi01NWZiNjZiNjg0NGYiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLXdyaXRlIiwicHVyY2hhc2VzLXJlYWQiLCJzaGlwcGluZy1jYWxjdWxhdGUiLCJzaGlwcGluZy1jYW5jZWwiLCJzaGlwcGluZy1jaGVja291dCIsInNoaXBwaW5nLWNvbXBhbmllcyIsInNoaXBwaW5nLWdlbmVyYXRlIiwic2hpcHBpbmctcHJldmlldyIsInNoaXBwaW5nLXByaW50Iiwic2hpcHBpbmctc2hhcmUiLCJzaGlwcGluZy10cmFja2luZyIsImVjb21tZXJjZS1zaGlwcGluZyIsInRyYW5zYWN0aW9ucy1yZWFkIiwidXNlcnMtcmVhZCIsInVzZXJzLXdyaXRlIiwid2ViaG9va3MtcmVhZCIsIndlYmhvb2tzLXdyaXRlIiwibWluaGFzdmVuZGFzOjpjbGllbnRzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OmNsaWVudHM6d3JpdGUiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOndyaXRlIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczpyZWFkIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6c2hpcHBpbmdzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNoaXBwaW5nczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6Y29uY2lsaWF0aW9uczpyZWFkIiwibWluaGFzdmVuZGFzOjpjb25jaWxpYXRpb25zOndyaXRlIl19.3jovoMjzOqp7CgrJFKqkfA5BUzj5EBrBG0PNH6RmrUhA1H5sBuY4GC9NCRml21ScfRsKkRGDA2jHhbeuW4XBZ9qVE-2p0lPHw-ykygmU2csmBKNYBO70Utfqyd9PRRPC3xi_jm20CLBf8B7o1fsmCEEVWLBhQZz6SkKqbzbpAgsd0qEj5LWaIIS3dONu0KXo1pdU6liw27WYfrwZA7MIpILCkfSN9-4m40UotGVefU5dwiALYD_QUoAPfMZe9AvD0v9KorDQnsKrzJBvOIUy1zwEPV7tvLfpyRDhQU_OKslaahr45kX65ZMUZYOK3U50NA7nAr_wyyegNBGj3j2CoVwl-CXTWQSQkqjzltTF8YX3-kcr4vjP29fwN22QkxVVh_izREQJjF409MbiWVEBkYf-6N6DyL4h3vvOfJcZE2V4G0EVLAgUI7H1kKUkr37QKYhaJVkoLKrc8g_5nqedHQOt8LD5G5RSgiYnFfuosdLrFcE0FFgTToKfNHyfiNq61utwx2Pi7md5aY0XRRxzqdqPT4gqWpPSfG0_XyqE2htamWoXfwLIHBIyQufp8TAcpTolxpH8ANEyjE5jHNwb3sv0vpmhk5ks4AOGkftZlk7YYnupmPLDYhMWTp1Gr7Vq6AQ7JqrFJvMmMeE43mN00pPw1QH3sLEnHi5oVjweQ4s';
        
        $this->sales_request = [[
            "own_id"=> "IDENTIFICADOR-DA-VENDA-NO-INTEGRADOR",
            "own_url"=> "URL-DA-VENDA",
            "status"=> "created",
            "client_id"=> 1,
            "customer"=> [
                "name"=> "NOME DO REMETENTE",
                "phone"=> "5555555555555",
                "email"=> "email@remetente.com",
                "document"=> "25574805978",
                "company_document"=> "275291520780883",
                "state_register"=> "18545638259",
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
                "document"=> "46927946075",
                "company_document"=> "061168171094710",
                "state_register"=> "03086911415",
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
                "own_url"=>"http:\/\/www.botsford.com\/vero-qui-nesciunt-dolore-exercitationem",
                "status"=>"canceled",
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
                    "name"=>"Elizabeth Kuvalis",
                    "phone"=>"1-694-697-2572",
                    "email"=>"phirthe@huels.com",
                    "document"=>"25574805978",
                    "company_document"=>"275291520780883",
                    "state_register"=>"18545638259",
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
                    "document"=>"46927946075",
                    "company_document"=>"061168171094710",
                    "state_register"=>"03086911415",
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



    public function CadastrarVenda(ApiTester $I){
        
        $this->cadastrar_endpoint = '/sales';

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
        $response = json_decode($I->grabResponse(),true);

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

    }










    /**
    * @dataprovider AtualizarVendaProvider
    */
    public function AtualizarVenda(ApiTester $I, \Codeception\Example $example){

        $this->atualizar_endpoint = '/sales/';

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);

        $endpoint = $this->atualizar_endpoint.$example['id'];
        $I->sendPOST($endpoint,$this->sales_request);
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
    }

    protected function AtualizarVendaProvider(){
        return [
            ['id'=>'5']
        ];
    }





    /**
    * @dataprovider ConsultarVendaProvider
    */
    public function ConsultarVenda(ApiTester $I, \Codeception\Example $example){
        
        $this->consultar_endpoint = '/sales/';

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);

        $endpoint = $this->consultar_endpoint.$example['id'];

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
                    'email'=>'string',
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
                    'email'=>'string',
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
                        'price'=>'integer',
                        'volumes'=>[
                            'width' =>'integer',
                            'height'=> 'integer',
                            'length' => 'integer',
                            'weight' => 'float',
                            'insurance' => 'float'
                        ],
                        'quantity' => 'integer'
                    ]
                ],
                'amount'=>[
                    'total' =>'integer',
                    'currency' => 'string',
                    'shipping' => 'integer'
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

    protected function ConsultarVendaProvider(){
        return [
            ['id'=>'1'],
            ['id'=>'3'],
        ];
    }

    /**
    * @dataprovider SucessListaVendasProvider
    */
    public function SucessListaVendas(ApiTester $I, \Codeception\Example $example){
 
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($this->BearerToken);

        $this->consultar_endpoint = '/sales?';
        
        $endpoint = $this->consultar_endpoint;
        
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

        $I->seeResponseMatchesJsonType([
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

    protected function SucessListaVendasProvider(){
        return [
            ['filtro'=>'amount','field'=>'total','value'=>'100'],
            ['filtro'=>'amount','field'=>'currency','value'=>'BRL'],
            ['filtro'=>'amount','field'=>'shipping','value'=>'22'],
            ['filtro'=>'amount','field'=>'subtotal','value'=>'78'],

            ['filtro'=>'customer','field'=>'name','value'=>'NOME DO REMETENTE'],
            ['filtro'=>'customer','field'=>'email','value'=>'email@remetente.com'],
            ['filtro'=>'customer','field'=>'phone','value'=>'5555555555555'],
            ['filtro'=>'customer','field'=>'document','value'=>'25574805978'],
            ['filtro'=>'customer','field'=>'state_register','value'=>'18545638259'],
            ['filtro'=>'customer','field'=>'company_document','value'=>'275291520780883'],
            

            ['filtro'=>'receiver','field'=>'name','value'=>'NOME DO RECEBEDOR'],
            ['filtro'=>'receiver','field'=>'email','value'=>'email@recebedor.com'],
            ['filtro'=>'receiver','field'=>'phone','value'=>'555555555555'],
            ['filtro'=>'receiver','field'=>'document','value'=>'46927946075'],
            ['filtro'=>'receiver','field'=>'state_register','value'=>'03086911415'],
            ['filtro'=>'receiver','field'=>'company_document','value'=>'061168171094710'],


            ['filtro'=>'invoice','field'=>'key','value'=>'47537041097716550376222662273547431779550849'],
            ['filtro'=>'invoice','field'=>'serie','value'=>'395'],
            ['filtro'=>'invoice','field'=>'value','value'=>'1573'],
            ['filtro'=>'invoice','field'=>'number','value'=>'424'],
            ['filtro'=>'invoice','field'=>'issued_at','value'=>'1987-08-07'],

            // // ['filtro'=>'tracking','field'=>'{field}','value'=>'{value}'],
            // // ['filtro'=>'shipping','field'=>'{field}','value'=>'{value}'],
            // // ['filtro'=>'historics','value'=>'true'],
            ['filtro'=>'created-between','old'=>'2019-07-29 20:06:05','new'=>'2019-07-30 23:06:05'],
            ['filtro'=>'updated-between','old'=>'2019-07-29 20:06:05','new'=>'2019-07-30 23:06:05'],
            // // ['filtro'=>'has-shipping','value'=>'true'], // falso
            ['filtro'=>'account','value'=>'7999e5fe-a6bf-4757-9feb-9ad513e2a0ea'],
            ['filtro'=>'client','value'=>'2'],
            // // ['filtro'=>'status','value'=>'{created,available,unavailable,canceled,deleted}'],
            ['filtro'=>'status','value'=>'created'],
            ['sort'=>'id'],
            ['sort'=>'created_at'],
            ['sort'=>'updated_at'],
            ['sort'=>'deleted_at'],

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

        $this->consultar_endpoint = '/sales?';
        
        $endpoint = $this->consultar_endpoint;
        
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
            ['filtro'=>'customer','field'=>'phone','value'=>'5555555455555'],
            ['filtro'=>'customer','field'=>'document','value'=>'25574805979'],
            ['filtro'=>'customer','field'=>'state_register','value'=>'18545638219'],
            ['filtro'=>'customer','field'=>'company_document','value'=>'275291510780883'],
            

            ['filtro'=>'receiver','field'=>'name','value'=>'NOME DO RECEBEDORa'],
            ['filtro'=>'receiver','field'=>'email','value'=>'eemail@recebedor.com'],
            ['filtro'=>'receiver','field'=>'phone','value'=>'525555555555'],
            ['filtro'=>'receiver','field'=>'document','value'=>'16927946075'],
            ['filtro'=>'receiver','field'=>'state_register','value'=>'01086911415'],
            ['filtro'=>'receiver','field'=>'company_document','value'=>'011168171094710'],


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
            ['filtro'=>'status','value'=>'deleted'],
            ['filtro'=>'status','value'=>'deleted'],
            ['filtro'=>'status','value'=>'deleted'],
            // ['sort'=>'_at'],
            // ['limit'=>'{1}']
        ];
    }


}
