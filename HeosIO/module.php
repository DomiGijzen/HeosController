<?php
	class HeosIO extends IPSModule {

		public function Create()
		{
			//Never delete this line!
			parent::Create();

			//Variables
			$this->RegisterPropertyBoolean("HeosIOOpen", 1);
			$this->RegisterPropertyString("HeosIOHost", "192.168.1.123");
			$this->RegisterPropertyInteger("HeosIOPort", 1255);
		}

		public function Destroy()
		{
			//Never delete this line!
			parent::Destroy();
		}

		public function ApplyChanges()
		{
			//Never delete this line!
			parent::ApplyChanges();

			// $this->IPS_SetConfiguration('{"Host":$HeosIOHost,
			// 	"Port":$HeosIOPort,
			// 	"Open",$HeosIOOpen}');
			// $this->IPS_ApplyChanges;
		}

		public function ForwardData($JSONString)
		{
			$data = json_decode($JSONString);
			IPS_LogMessage("IO FRWD", utf8_decode($data->Buffer));
		}

		public function Send(string $Text)
		{
			$this->SendDataToChildren(json_encode(Array("DataID" => "{8868F02A-B7A1-D72D-B860-AC61818658B0},{8868F02A-B7A1-D72D-B860-AC61818658B0}", "Buffer" => $Text)));
		}

	}