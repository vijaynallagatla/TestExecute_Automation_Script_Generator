<?php
	$projectname=$_POST['projectname'];
	$FolderToZip="projects/".$projectname;
	$pathdir=$FolderToZip."/";
	$nameArchive=$FolderToZip.".Zip";
	$zip=new ZipArchive;
	
	if($zip->open($nameArchive,ZipArchive::CREATE) === TRUE)
	{
		$dir=opendir($pathdir);
		
		while($file=readdir($dir))
		{
			if(is_file($pathdir.$file))
			{
			$zip->addFile($pathdir.$file,$file);
			echo "Project Download Successfull !!!";
		}
	}
	
	$zip->close();
	}
	else
	{
		echo "failure";
	}
?>