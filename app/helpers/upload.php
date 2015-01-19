<?php
 
 class Upload 
{
	
	public function up($file = null ,$path = null)
	{

		if($file)
		{

			if (!File::exists($path))
			{
				File::makeDirectory(app_path().'/storage/'.$path, $mode = 0777, true, true);
			}

			//$date 	  		=  new DateTime();	
			//$filename 		=  $date->getTimestamp().".".$file->getClientOriginalExtension();

			$upload_success = $file->move(app_path().'/storage/'.$path , $filename);

			if( $upload_success ) {

				return $filename;
				//$novedad->imagen = $filename ;

			} else {

				return False;

			}	
		}

	}

	public function del($file = null, $path = null)
	{
		File::delete(app_path.'/storage/'.$path.$file);				
	}
}

 ?>