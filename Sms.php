<?php

namespace Zelenin;

use yii\base\Component;

class Sms extends Component
{
	private $sms;
	public $api_id;
	public $login;
	public $password;

	public function init()
	{
		if ( !empty( $this->login ) && !empty( $this->password ) ) {
			$this->sms = new smsru( $this->api_id, $this->login, $this->password );
		} else {
			$this->sms = new smsru( $this->api_id );
		}
		parent::init();
	}

	public function __call( $name, $parameters )
	{
		if ( method_exists( $this->sms, $name ) ) {
			return call_user_func_array( array( $this->sms, $name ), $parameters );
		} else {
			return call_user_func_array( array( $this, $name ), $parameters );
		}
	}
}