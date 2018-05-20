<?php 
	class FacebookAuth
	{
		protected $facebook;
		protected $facebookUrl = "https://www.array.com.co/?:=iniciar-sesion&fb";

		public function __construct(Facebook\Facebook $facebook)
		{
			$this->facebook  = $facebook;
		}

		public function getHelper()
		{
			return $this->facebook-> getRedirectLoginHelper();
		}
		public function getAuthUrl()
		{
			return $this->getHelper()->getloginUrl($this->facebookUrl, array ('email'));
		}
		public function isLogin()
		{
			return isset($_SESSION['id_facebook']);
		}

		public function login()
		{
			try{
				$response = $this->facebook->get('/me?fields=id,first_name,last_name,email',$this->getHelper()->getAccessToken());

				$usuario = $response->getGraphNode()->asArray();
				
				$user = $usuario["email"];
				
				return $user;
			 }catch (Exception $e){

			 }
			 //return false;
		}


	}
 ?>