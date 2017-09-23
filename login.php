<?php

require_once __DIR__.'/vendor/autoload.php';
session_start();


// class for login api --GOOGLE-- AND --FACEBOOK--
class LoginApi 
{
  
  public $id, $name, $email, $profile_image_url, $profile_url;
  public $storeGoogleUrl;
  public $storeFacebookUrl;

  //------------------------------GOOGLE LOGIN function()---------------------

  public function GoogleLogin()
  {
    
        require_once __DIR__.'/vendor/autoload.php';
        define('CLIENT_ID', '249599959777-g84j52g3l8vm0bvn2j5f9b37ci62j9iq.apps.googleusercontent.com');
        define('CLIENT_SECRET', '0HnZSVf3Bazw1KQ7vnpG8IYy');
        define('REDIRECT_URI', 'http://localhost/genjour/survey.php');
                       
        $client = new Google_Client();
        $client->setClientId(CLIENT_ID);
        $client->setClientSecret(CLIENT_SECRET);
        $client->setRedirectUri(REDIRECT_URI);
        $client->setScopes('email');
        $plus = new Google_Service_Plus($client);
        
        if (isset($_REQUEST['logout'])) {
           session_unset();
        }

        if (isset($_GET['code'])) {
          $client->authenticate($_GET['code']);
          $_SESSION['access_token'] = $client->getAccessToken();
          $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
          header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
        }
       
         if (isset($_SESSION['access_token']) && $_SESSION['access_token']) 
        {
          $client->setAccessToken($_SESSION['access_token']);
          $me = $plus->people->get('me');
          // Get User data
        
            $this->id = $me['id'];
            $this->name =  $me['displayName'];
            $this->email =  $me['emails'][0]['value'];
            $this->profile_image_url = $me['image']['url'];
            
            $this->profile_url = $me['url'];
            

        
        }else{
           $authUrl = $client->createAuthUrl();
           $this->storeGoogleUrl=$authUrl;
           return $this->storeGoogleUrl;
            
        }

        

         
  }


//----------------------------- Facebook login -------------------------------------

  public function FacebookLogin()
  {
    
        require_once __DIR__ . '/src/Facebook/autoload.php';
        $fb = new Facebook\Facebook([
          'app_id' => '585527498502433',
          'app_secret' => '7ba3b1e34c41c2da675f3eecc2bc7aaa',
          'default_graph_version' => 'v2.4',
          ]);
        //$_SESSION['FBRLH_state']=$_GET['state'];
        $helper = $fb->getRedirectLoginHelper();

        $permissions = ['email']; // optional

        try {
          if (isset($_SESSION['facebook_access_token'])) {
            $accessToken = $_SESSION['facebook_access_token'];
          } else {
              $accessToken = $helper->getAccessToken();
          }
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
          // When Graph returns an error
          echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
          // When validation fails or other local issues
          echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
         }
        if (isset($accessToken)) {
          if (isset($_SESSION['facebook_access_token'])) {
            $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
          } else {
            // getting short-lived access token
            $_SESSION['facebook_access_token'] = (string) $accessToken;
              // OAuth 2.0 client handler
            $oAuth2Client = $fb->getOAuth2Client();
            // Exchanges a short-lived access token for a long-lived one
            $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
            $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
            // setting default access token to be used in script
            $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
          }
          // redirect the user back to the same page if it has "code" GET variable
          if (isset($_GET['code'])) {
            header('Location: ./');
          }
          // getting basic info about user
          try {
            $profile_request = $fb->get('/me?fields=name,first_name,last_name,email');
            $requestPicture = $fb->get('/me/picture?redirect=false&height=50'); 
            //getting user picture
          $requestProfile = $fb->get('/me'); // getting basic info
          $picture = $requestPicture->getGraphUser();
          $profile = $requestProfile->getGraphUser();
            $profile = $profile_request->getGraphNode()->asArray();
          } catch(Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            session_destroy();
            // redirecting user back to app login page
            header("Location: http://localhost/genjour/survey.php");
            exit;
          } catch(Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
          }
          
          // printing $profile array on the screen which holds the basic info about user
          
           $this->name = $profile['name'];
           $this->email = $profile['email'];
           $this->id = $profile['id'];
           $this->profile_image_url = $picture['url'];
           $this->profile_url = "www.facebook.com/".$profile['id'];
          } else{
              $loginUrl = $helper->getLoginUrl('http://localhost/genjour/survey.php', $permissions);
              $this->storeFacebookUrl = $loginUrl;
              //echo $this->storeFacebookUrl;
              return $this->storeFacebookUrl;
              //header('Location: ' . $loginUrl);

            }

            

  }

//--------------------------- Various function which returns user info from api ----------

  public function showImg(){
    return $this->profile_image_url;
  }

  public function showName(){
    return $this->name;
  }

  public function showProfileId(){
    return $this->id;
  }

  public function showEmail(){
    return $this->email;
  }

  public function showProfile(){
    return $this->profile_url;
  }


  public function checkStatus($status)
  {

    return $status;
     
  }
  public function checkProvider($providerName)
  {
    $provider =  " Provider Name : ". $providerName;
    return $provider;
  }

  public function getFacebookLoginUrl(){
    return  $this->storeFacebookUrl;
  }

  public function getGoogleLoginUrl(){
    return $this->storeGoogleUrl;
  }

  public function logout(){
   if (isset($_REQUEST['logout'])) {
  unset($_SESSION['access_token']); 

}
  }

}
//---------------------------------- Class ends here --------------------------


     $LoginApi = new LoginApi;
   // $LoginApi->checkStatus('NotLogged-In');


	//-----------Starting few process---------
        $LoginApi->GoogleLogin();
        $LoginApi->FacebookLogin();
        $LoginApi->getFacebookLoginUrl();
        $LoginApi->getGoogleLoginUrl();

	//----------- Initailisaing some variable--------- 
	 $profile_id=$LoginApi->showProfileId();
	 $name=$LoginApi->showName();
	 $email=$LoginApi->showEmail();
	 $profile_img_url=$LoginApi->showImg();
	 $profile_url=$LoginApi->showProfile();

/*
		if(isset($_POST['google']))
		{
			$LoginApi->GoogleLogin();
			$LoginApi->checkProvider('Google');
			//$LoginApi->showData();
			$LoginApi->checkStatus('Logged-In');
			//$currentStatus = $LoginApi->checkStatus();

		}elseif(isset($_POST['facebook']))
		{
			$LoginApi->FacebookLogin();
			$LoginApi->checkProvider('facebook');
			//$LoginApi->showData();
			$LoginApi->checkStatus('Logged-In');
			//echo $currentStatus = $LoginApi->checkStatus();
		}
		elseif (isset($_POST['logout'])) {
			$LoginApi->Logout();
			
			//$currentStatus = $LoginApi->checkStatus();
		}
*/

?>

 

