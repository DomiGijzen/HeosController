<?php
	class HeosSplitter extends IPSModule {

		public function Create()
		{
			//Never delete this line!
			parent::Create();

			$this->RequireParent("{6179ED6A-FC31-413C-BB8E-1204150CF376}");
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
			IPS_LogMessage("Splitter FRWD", utf8_decode($data->Buffer));

			$this->SendDataToParent(json_encode(Array("DataID" => "{79827379-F36E-4ADA-8A95-5F8D1DC92FA9}", $data->Buffer)));

			return "String data for device instance!";
		}

		public function ReceiveData($JSONString)
		{
			$data = json_decode($JSONString);
			IPS_LogMessage("Splitter RECV", utf8_decode($data->Buffer));

			$this->SendDataToChildren(json_encode(Array("DataID" => "{B9701821-C6B0-0C22-3D35-A6DA252F9BE5},{B9701821-C6B0-0C22-3D35-A6DA252F9BE5}", $data->Buffer)));
		}

	}