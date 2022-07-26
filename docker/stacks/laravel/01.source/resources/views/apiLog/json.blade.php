
{
  "info": {
    "name": "Laravel API",
    "schema": "https://schema.getpostman.com/json/collection/v2.0.0/collection.json"
  },
  "item": [
    @php($first_category = true)
    @foreach($apiLogs as $category=>$methods)
        @if($first_category)
            @php($first_category = false)
        @else
            ,
        @endif
        {
            "name":"{{$category}}",
            "item":[
                @php($first_request = true)
                @foreach($methods as $method=>$requests)
                    @foreach($requests as $request)
                        @if($first_request)
                            @php($first_request = false)
                        @else
                            ,
                        @endif
                        {
                            "name":"{{$request->path}}",
                            "request":{
                                "auth": {
                                    "type": "digest",
                                    "digest": {
                                        "algorithm": "MD5",
                                        "username": "FD_DEV",
                                        "realm": "EDUCAT_api",
                                        "password": "2018",
                                        "nonceCount": "",
                                        "qop": "auth",
                                        "disableRetryRequest": false
                                    }
                                },
                                "method":"{{$method}}",
                                "header":[],
                                "url":"dev-educat.clouddb.myriade.be/{{$request->path}}"
                            },
                            "response":[]
                        }
                    @endforeach
                @endforeach
            ],
            "protocolProfileBehavior": {}
        }
    @endforeach
    ],
    "protocolProfileBehavior": {}
}