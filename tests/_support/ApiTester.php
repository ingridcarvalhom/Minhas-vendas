<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
*/
class ApiTester extends \Codeception\Actor
{
    use _generated\ApiTesterActions;

   /**
    * Define custom actions here
    */


    public function CriaVendaComStatus(ApiTester $I,$request,$status,$endpoint){
    
        $BearerToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjkwMTQ0YTM1ZjAwNjFlYmJmNDllZDJlYTIzNmUyNDc4ZDIxNWI4OGJhZmY4YmQ3NDAyZjA4MTVmNWMyMjk1M2I1ODI2YmE1MTIyYjgyMmVjIn0.eyJhdWQiOiIxIiwianRpIjoiOTAxNDRhMzVmMDA2MWViYmY0OWVkMmVhMjM2ZTI0NzhkMjE1Yjg4YmFmZjhiZDc0MDJmMDgxNWY1YzIyOTUzYjU4MjZiYTUxMjJiODIyZWMiLCJpYXQiOjE1NjQxNjk0ODIsIm5iZiI6MTU2NDE2OTQ4MiwiZXhwIjoxNTk1NzkxODgyLCJzdWIiOiJhNDJkMWIwYy01MjA1LTQyMWMtODRlZi01NWZiNjZiNjg0NGYiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLXdyaXRlIiwicHVyY2hhc2VzLXJlYWQiLCJzaGlwcGluZy1jYWxjdWxhdGUiLCJzaGlwcGluZy1jYW5jZWwiLCJzaGlwcGluZy1jaGVja291dCIsInNoaXBwaW5nLWNvbXBhbmllcyIsInNoaXBwaW5nLWdlbmVyYXRlIiwic2hpcHBpbmctcHJldmlldyIsInNoaXBwaW5nLXByaW50Iiwic2hpcHBpbmctc2hhcmUiLCJzaGlwcGluZy10cmFja2luZyIsImVjb21tZXJjZS1zaGlwcGluZyIsInRyYW5zYWN0aW9ucy1yZWFkIiwidXNlcnMtcmVhZCIsInVzZXJzLXdyaXRlIiwid2ViaG9va3MtcmVhZCIsIndlYmhvb2tzLXdyaXRlIiwibWluaGFzdmVuZGFzOjpjbGllbnRzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OmNsaWVudHM6d3JpdGUiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOndyaXRlIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczpyZWFkIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6c2hpcHBpbmdzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNoaXBwaW5nczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6Y29uY2lsaWF0aW9uczpyZWFkIiwibWluaGFzdmVuZGFzOjpjb25jaWxpYXRpb25zOndyaXRlIl19.3jovoMjzOqp7CgrJFKqkfA5BUzj5EBrBG0PNH6RmrUhA1H5sBuY4GC9NCRml21ScfRsKkRGDA2jHhbeuW4XBZ9qVE-2p0lPHw-ykygmU2csmBKNYBO70Utfqyd9PRRPC3xi_jm20CLBf8B7o1fsmCEEVWLBhQZz6SkKqbzbpAgsd0qEj5LWaIIS3dONu0KXo1pdU6liw27WYfrwZA7MIpILCkfSN9-4m40UotGVefU5dwiALYD_QUoAPfMZe9AvD0v9KorDQnsKrzJBvOIUy1zwEPV7tvLfpyRDhQU_OKslaahr45kX65ZMUZYOK3U50NA7nAr_wyyegNBGj3j2CoVwl-CXTWQSQkqjzltTF8YX3-kcr4vjP29fwN22QkxVVh_izREQJjF409MbiWVEBkYf-6N6DyL4h3vvOfJcZE2V4G0EVLAgUI7H1kKUkr37QKYhaJVkoLKrc8g_5nqedHQOt8LD5G5RSgiYnFfuosdLrFcE0FFgTToKfNHyfiNq61utwx2Pi7md5aY0XRRxzqdqPT4gqWpPSfG0_XyqE2htamWoXfwLIHBIyQufp8TAcpTolxpH8ANEyjE5jHNwb3sv0vpmhk5ks4AOGkftZlk7YYnupmPLDYhMWTp1Gr7Vq6AQ7JqrFJvMmMeE43mN00pPw1QH3sLEnHi5oVjweQ4s';
        
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($BearerToken);

        $request[0]['client_id'] = 1;
        $request[0]['own_id'] = strval(rand(0,10000));
        $request[0]['status'] = $status;

        $I->sendPOST($endpoint,$request);
        $I->seeResponseCodeIsSuccessful();
    }

    public function CriarVenda(ApiTester $I,$request,$endpoint){

        $BearerToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjkwMTQ0YTM1ZjAwNjFlYmJmNDllZDJlYTIzNmUyNDc4ZDIxNWI4OGJhZmY4YmQ3NDAyZjA4MTVmNWMyMjk1M2I1ODI2YmE1MTIyYjgyMmVjIn0.eyJhdWQiOiIxIiwianRpIjoiOTAxNDRhMzVmMDA2MWViYmY0OWVkMmVhMjM2ZTI0NzhkMjE1Yjg4YmFmZjhiZDc0MDJmMDgxNWY1YzIyOTUzYjU4MjZiYTUxMjJiODIyZWMiLCJpYXQiOjE1NjQxNjk0ODIsIm5iZiI6MTU2NDE2OTQ4MiwiZXhwIjoxNTk1NzkxODgyLCJzdWIiOiJhNDJkMWIwYy01MjA1LTQyMWMtODRlZi01NWZiNjZiNjg0NGYiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLXdyaXRlIiwicHVyY2hhc2VzLXJlYWQiLCJzaGlwcGluZy1jYWxjdWxhdGUiLCJzaGlwcGluZy1jYW5jZWwiLCJzaGlwcGluZy1jaGVja291dCIsInNoaXBwaW5nLWNvbXBhbmllcyIsInNoaXBwaW5nLWdlbmVyYXRlIiwic2hpcHBpbmctcHJldmlldyIsInNoaXBwaW5nLXByaW50Iiwic2hpcHBpbmctc2hhcmUiLCJzaGlwcGluZy10cmFja2luZyIsImVjb21tZXJjZS1zaGlwcGluZyIsInRyYW5zYWN0aW9ucy1yZWFkIiwidXNlcnMtcmVhZCIsInVzZXJzLXdyaXRlIiwid2ViaG9va3MtcmVhZCIsIndlYmhvb2tzLXdyaXRlIiwibWluaGFzdmVuZGFzOjpjbGllbnRzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OmNsaWVudHM6d3JpdGUiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNhbGVzOndyaXRlIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczpyZWFkIiwibWluaGFzdmVuZGFzOjp3ZWJob29rczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6c2hpcHBpbmdzOnJlYWQiLCJtaW5oYXN2ZW5kYXM6OnNoaXBwaW5nczp3cml0ZSIsIm1pbmhhc3ZlbmRhczo6Y29uY2lsaWF0aW9uczpyZWFkIiwibWluaGFzdmVuZGFzOjpjb25jaWxpYXRpb25zOndyaXRlIl19.3jovoMjzOqp7CgrJFKqkfA5BUzj5EBrBG0PNH6RmrUhA1H5sBuY4GC9NCRml21ScfRsKkRGDA2jHhbeuW4XBZ9qVE-2p0lPHw-ykygmU2csmBKNYBO70Utfqyd9PRRPC3xi_jm20CLBf8B7o1fsmCEEVWLBhQZz6SkKqbzbpAgsd0qEj5LWaIIS3dONu0KXo1pdU6liw27WYfrwZA7MIpILCkfSN9-4m40UotGVefU5dwiALYD_QUoAPfMZe9AvD0v9KorDQnsKrzJBvOIUy1zwEPV7tvLfpyRDhQU_OKslaahr45kX65ZMUZYOK3U50NA7nAr_wyyegNBGj3j2CoVwl-CXTWQSQkqjzltTF8YX3-kcr4vjP29fwN22QkxVVh_izREQJjF409MbiWVEBkYf-6N6DyL4h3vvOfJcZE2V4G0EVLAgUI7H1kKUkr37QKYhaJVkoLKrc8g_5nqedHQOt8LD5G5RSgiYnFfuosdLrFcE0FFgTToKfNHyfiNq61utwx2Pi7md5aY0XRRxzqdqPT4gqWpPSfG0_XyqE2htamWoXfwLIHBIyQufp8TAcpTolxpH8ANEyjE5jHNwb3sv0vpmhk5ks4AOGkftZlk7YYnupmPLDYhMWTp1Gr7Vq6AQ7JqrFJvMmMeE43mN00pPw1QH3sLEnHi5oVjweQ4s';
        
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->haveHttpHeader('Accept', 'application/json');
        $I->amBearerAuthenticated($BearerToken);

        $request[0]['client_id'] = 1;
        $request[0]['own_id'] = strval(rand(0,10000));

        $I->sendPOST($endpoint,$request);
        $I->seeResponseCodeIsSuccessful();
    }
    
}
