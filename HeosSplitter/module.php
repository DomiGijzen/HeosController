<?php
	class HeosSplitter extends IPSModule {

		public function Create()
		{
			//Never delete this line!
			parent::Create();

			$this->RequireParent("{A0EBA9B7-2CD3-47F2-2671-9DD3F9F8A00C}");
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

			$this->SendDataToParent(json_encode(Array("DataID" => "{F1F22094-CAD3-1F1A-48D8-D5E829045503}", $data->Buffer)));

			return "String data for device instance!";
		}

		public function ReceiveData($JSONString)
		{
			$data = json_decode($JSONString);
			IPS_LogMessage("Splitter RECV", utf8_decode($data->Buffer));

			$this->SendDataToChildren(json_encode(Array("DataID" => "{0ED57D5D-37DA-3E0F-3816-F1C7DBEFBC69},{0ED57D5D-37DA-3E0F-3816-F1C7DBEFBC69},{0ED57D5D-37DA-3E0F-3816-F1C7DBEFBC69}", $data->Buffer)));
		}

	}