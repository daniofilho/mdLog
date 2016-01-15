# mdLog
PHP Class that helps on creating logs using Markdown pattern.

Work is still in progress.

### basic usage

~~~ PHP
   include('mdLog.php');

   $path = PATH; //Absolute path to save the log
   $log = new mdLog($path);

   // your code...

   /*
      Note: I recommend using a variable to save the log message and do the log on the end of your code, but it`s up to you.
   */

   $msg = "Begin of the log.";

   //The recommended way to store arrays on the Log.
   $array = array(
      "foo" => "bar",
      "bar" => "foo",
   );
   $msg .= $log->vardumpToJson($array);

   // your code...

   $msg .= "End of the log.";

   //Save the Log
   $log->log($msg);

~~~

**Developers:**
[Dânio Filho](https://github.com/daniofilho)
[Filipe Perina](https://github.com/FilipePerina)
