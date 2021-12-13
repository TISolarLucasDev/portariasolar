<?php


class Sankhya {

    private $lastAuth;
	public 	$sessionId;
	public 	$protocol 			= 'http://';
	public 	$host 				= '10.10.100.28';
	public 	$port 				= '8280';
	public 	$userName 			= 'SUP';
	public 	$password 			= '1qaz@WSX';
	public 	$debug 				= false;
	public 	$debugResponse 		= false;
	private $urlAuth 			= '/mge/service.sbr?serviceName=MobileLoginSP.login&outputType=json';
	private $urlDeAuth 			= '/mge/service.sbr?serviceName=MobileLoginSP.logout&outputType=json';



    function __construct($url = '', $port = '', $userName = '', $password = ''){}

    function getUrl($method = ''){
		return $this->protocol.$this->host.':'.$this->port.$method;
	}



    function autenthicate($userName = '', $password = ''){
        $user = empty($userName) ? $this->userName : $userName;
        $pass = empty($password) ? $this->password : $password;
    
        $data 	=  "{    \"serviceName\": \"MobileLoginSP.login\",      
            \"requestBody\": 
                { \"NOMUSU\":  { \"$\": \"$user\" },
                 \"INTERNO\": { \"$\":\"$pass\"        },          
                  \"KEEPCONNECTED\": { \"$\": \"S\" }}  }";
    

        $url = $this->getUrl($this->urlAuth);
        $result = json_decode($this->curlExecuteJson("POST",$url, $data),true); 

           
        $this->sessionId = $result['responseBody']['jsessionid']['$'];
       


		return $result;
    
    }    


   function deAutenthicate(){
        if (isset($this->sessionId) && ($this->sessionId != '') ){
        
            $data = "  {
                \"serviceName\":\"MobileLoginSP.logout\",
                \"status\":\"1\",
                \"pendingPrinting\":\"false\"
                }";-

            $url 	= $this->getUrl($this->urlDeAuth);
            $result = json_decode($this->curlExecuteJson("POST",$url, $data),true); 

            $this->sessionId = null;	

        }
    }



   private function curlExecuteJson($method,$url,$data){
        $curl = curl_init();

        $cookie = isset($this->sessionId) ? 'Cookie: JSESSIONID='.$this->sessionId : '';

        curl_setopt_array($curl, [
            CURLOPT_PORT => $this->port,
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array("Content-Type: application/json; charset=utf-8",$cookie),
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }	


    function consultaQueryJson($sql){
            
        $data = "{
            \"serviceName\" : \"DbExplorerSP.executeQuery\",
            \"requestBody\" : {
                \"sql\" : \"$sql\"
            }
        }";

        $url = $this->getUrl('/mge/service.sbr?serviceName=DbExplorerSP.executeQuery&outputType=json');
        
        $result = json_decode($this->curlExecuteJson("POST",$url, $data),true); 
        
        if(!empty($result['responseBody']['rows'])){
            return $result['responseBody']['rows'];
        }else{
            throw new Exception('Erro ao executar consulta  : '.$result['statusMessage']);
        } 

    }

    function insertQueryJson($IDVEICULO, $DH_ENT, $CODUSUENT){
        $data = "{
            \"serviceName\" : \"CRUDServiceProvider.saveRecord\",
            \"requestBody\" : {
                \"dataSet\" : {
                    \"rootEntity\": \"AD_VEICULOSFUNCGARAGEM\",
                    \"includePresentationFields\": \"S\",
                    \"dataRow\": {
                        \"localFields\": {
                            \"IDVEICULO\": {
                                \"$\": \"$IDVEICULO\"
                            }
                            \"DH_ENT\": {
                                \"$\": \"$DH_ENT\"
                            }
                            \"CODUSUENT\": {
                                \"$\": \"$CODUSUENT\"
                            }
                        }
                    }, \"entity\":{
                        \"fieldset\": {
                            \"list\": \"IDVEICULO,DH_ENT,CODUSUENT\"
                        }
                    }  
                }
            }
        }";

        $url = $this->getUrl('/mge/service.sbr?serviceName=CRUDServiceProvider.saveRecord&outputType=json');
        $result = json_decode($this->curlExecuteJson("POST",$url, $data),true); 

        if(!empty($result['responseBody']['entities'])){
            return $result['responseBody']['entities'];
        }else{
            throw new Exception('Erro ao executar o insert  : '.$result['statusMessage']);
        } 
    }

}
