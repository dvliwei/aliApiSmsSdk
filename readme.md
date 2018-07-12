##使用

### 部署文档
```text
   /**
     * @return DefaultAcsClient
     */
    public static function getAcsClient() {
        // product name， please remain unchanged
        $product = "Dysmsapi";

        // product domain, please remain unchanged
        $domain = "dysmsapi.ap-southeast-1.aliyuncs.com";

        // AccessKey and AccessKeySecret , you can login sms console and find it in API Management
        $accessKeyId = env('ALI_ACCESSKEYID');
        $accessKeySecret = env('ALI_ACCESSKEYSECRET');

        $region = "ap-southeast-1";
        $endPointName = "ap-southeast-1";


        if(static::$acsClient == null) {

            $profile = DefaultProfile::getProfile($region, $accessKeyId, $accessKeySecret);

            DefaultProfile::addEndpoint($endPointName, $region, $product, $domain);

            static::$acsClient = new DefaultAcsClient();
        }
        return static::$acsClient;
    }
    
    
     /**
        *
        * sms短信
        * sns 推送消息
        * @param $phone_number
        */
       public function sendSms($phone,$code='12345'){
   
           $request =  new SendSmsRequest();
   
           $request->setPhoneNumbers($phone);
   
           $request->setContentCode(env('ALI_CONTENTCODE'));
   
           $request->setContentParam( json_encode(["code"=>$code],JSON_UNESCAPED_UNICODE)
           );
           $acsResponse = static::getAcsClient()->getAcsResponse($request);
           if(!empty($acsResponse) && (string)$acsResponse->ResultCode=='OK'){
               $publishData = ["code"=>$code];
               Log::info("Awssms publishData",['postData'=>$publishData,'resultData'=>serialize($acsResponse)]);
               return (object)self::SUCCESS;
           }else{
               Log::error('exception message'.$acsResponse->ResultMessage);
               return (object)self::RESPONSE_CODE_SMS_SEND_FAIL;
           }
   
       }

