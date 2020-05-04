<?php
	class HeosIO extends IPSModule {

		public function Create()
		{
			//Never delete this line!
			parent::Create();
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
		}

		public function ForwardData($JSONString)
		{
			$data = json_decode($JSONString);
			IPS_LogMessage("IO FRWD", utf8_decode($data->Buffer));
		}

		public function Send(string $Text)
		{
			$this->SendDataToChildren(json_encode(Array("DataID" => "{A816291E-1CF3-AFDC-0D10-9A262671D4C0}", "Buffer" => $Text)));
		}

	}