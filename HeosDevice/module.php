<?php
	class HeosDevice extends IPSModule {

		public function Create()
		{
			//Never delete this line!
			parent::Create();

			$this->ConnectParent("{825330F6-0B85-184A-E5B3-A5934CB0D571}");
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

		public function Send()
		{
			$this->SendDataToParent(json_encode(Array("DataID" => "{8375C186-9D5C-FCBF-BE85-170900AA661B}")));
		}

		public function ReceiveData($JSONString)
		{
			$data = json_decode($JSONString);
			IPS_LogMessage("Device RECV", utf8_decode($data->Buffer));
		}

	}