<?php

   /*
   *  PHP Class that helps on creating logs using Markdown pattern.
   *
   *  version 0.0.1
   */

   class mdLog {

      protected $path; //Absolute path where the file will be written.

      /*
		*	Constructor
		*
		*/
		public function __construct($path) {

         $this->path = $path;

		}//__construct


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

		/*
		*
		*   Write the log on the file.
      *
      *  @msg_sent: String - The String with the message
		*
      *  @since: 0.0.1
      *
		*/
		public function log($msg_sent) {
         $today = date("Y_m_d");
   		$time = date("H:i:s T");
   		$file = fopen( $this->path . "/$today.md", "ab");

         $msg  = "# $today | $time #\r\n";
      	$msg .= $msg_sent;
         $msg .= "\n- - -\n";

   		fwrite($file, $msg);
   		fclose($file);
      }//log

      /*
      *  Gets an array, convert it to a "var_dump" format and then return it as a formated markdown json.
      *
      *  @array: Array - The array to convert
		*
      *  @since: 0.0.1
      *
      */
      public function vardumpToJson($array){
         ob_start();
         var_dump($array);
         $r_array = ob_get_clean();
         ob_clean();
         return "\n\n~~~ json\n" . $r_array . "\n~~~\n\n";
      }//vardumpToJson

   }//class mdLog
