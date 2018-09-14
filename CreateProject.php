<?php
$projectname=$_REQUEST['projectname'];
$xml;
if (!file_exists("projects\\".$projectname)) {
mkdir("projects\\".$projectname, 0700,true);
 //fopen(getcwd()."\\".$projectname."\\".$projectname.".xml", "w");
 
 $file="projects\\".$projectname."\\".$projectname.".xml";
 
// create XML DOM Document
 $xml=new DOMDocument("1.0","UTF-8");

// " projectContainer " ---->>> Root
	$projectContainer=$xml->createElement("projectContainer");
	$xml->appendChild($projectContainer);
	
	// " project " -->First Child of " projectContainer "
	$project=$xml->createElement("project");
		$filename=$xml->createAttribute("fileName");
		$filename->value=$projectname.".xml";
	
		$version=$xml->createAttribute("version");
		$version->value="5";
	
		$project->appendChild($filename);
		$project->appendChild($version);
	$projectContainer->appendChild($project);
	
		//project --> DBConnectInfos 
		$DBConnectInfos=$xml->createElement("DBConnectInfos");
		$project->appendChild($DBConnectInfos);
		
		//project --> ExecutionTemplates
		$ExecutionTemplates=$xml->createElement("ExecutionTemplates");
		$project->appendChild($ExecutionTemplates);
		
		//project
	  
			//project --> GUIObjectRoot
			$GUIObjectRoot=$xml->createElement("GUIObjectRoot");
			$ID=$xml->createAttribute("ID");
			$ID->value="0";
			$project->appendChild($GUIObjectRoot);
			$GUIObjectRoot->appendChild($ID);
				
				$space11=$xml->createElement("space",$projectname.".xml");
				$GUIObjectRoot->appendChild($space11);
				
				//GUIObjectRoot --> description
				$description=$xml->createElement("description","root");
				$GUIObjectRoot->appendChild($description);
			
				//GUIObjectRoot --> properties
				$properties=$xml->createElement("properties");
				$GUIObjectRoot->appendChild($properties);
			
				
				
				//GUIObjectRoot --> Children
				$Children1=$xml->createElement("Children");
				$GUIObjectRoot->appendChild($Children1);
					
					//GUIObject -> " <GUIObject xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:type="GUIObject" ID="3">
							$GUIObject=$xml->createElement("GUIObject");
							$Children1->appendChild($GUIObject);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="GUIObject";
							
							$ID=$xml->createAttribute("ID");
							$ID->value="1";
							
							$GUIObject->appendChild($xmlns);
							$GUIObject->appendChild($xsi);
							$GUIObject->appendChild($ID);
							
					
							$space0=$xml->createElement("space",$projectname.".xml");
							$GUIObject->appendChild($space0);
									//space (<space> Projectname.xml</space>
									
									
									//description
									$description=$xml->CreateElement("description","");
									$GUIObject->appendChild($description);
									
									//GUIObjectTypeKey --> <GUIObjectTypeKey>GUIObjectTypeKey.Application</GUIObjectTypeKey>
									$GUIObjectTypeKey=$xml->createElement("GUIObjectTypeKey","GUIObjectType.APPLICATION");
									$GUIObject->appendChild($GUIObjectTypeKey);
									
									//properties
									$properties=$xml->createElement("properties","");
									$GUIObject->appendChild($properties);
									
									//parent -- > <parent>0</parent>
									$parent=$xml->createElement("parent","0");
									$GUIObject->appendChild($parent);
									
										//GUIObjectRoot --> updateCount
									$updateCount=$xml->createElement("updateCount","0");
									$GUIObject->appendChild($updateCount);
			
									//GUIObjectRoot --> waitTime
									$waitTime=$xml->createElement("waitTime","0");
									$GUIObject->appendChild($waitTime);
									//Children
									$Children=$xml->createElement("Children");
									$GUIObject->appendChild($Children);
									
										//Application --> Window Object
										$GUIObject=$xml->createElement("GUIObject");
										$Children->appendChild($GUIObject);
											//Add attributes to GUIObject
											$xsi=$xml->createAttribute("xsi:type");
											$xsi->value="GUIObject";
											$GUIObject->appendChild($xsi);
											$ID=$xml->createAttribute("ID");
											$ID->value="2";
											$GUIObject->appendChild($ID);
											//<space> </space>
											$space01=$xml->createElement("space",$projectname.".xml");
										$GUIObject->appendChild($space01);
										//<description/>
										$description=$xml->createElement("description","");
											$GUIObject->appendChild($description);
										//<GUIObjectTypeKey>GUIObjectType.WINDOW</GUIObjectTypeKey>
										$GUIObjectTypeKey=$xml->createElement("GUIObjectTypeKey","GUIObjectType.WINDOW");
											$GUIObject->appendChild($GUIObjectTypeKey);
										//<properties>;;null</properties>
										$properties=$xml->createElement("properties",";;null");
											$GUIObject->appendChild($properties);
										//<parent>1</parent>
										$parent=$xml->createElement("parent","1");
											$GUIObject->appendChild($parent);
										//<Children/>
										$Children1=$xml->createElement("Children");
											$GUIObject->appendChild($Children1);
										//updateCount
										$updateCount=$xml->createElement("updateCount","0");
											$GUIObject->appendChild($updateCount);
			
										//GUIObjectRoot --> waitTime
										$waitTime=$xml->createElement("waitTime","0");
										$GUIObject->appendChild($waitTime);
										
										//Application --> Button Object
										$GUIObject=$xml->createElement("GUIObject");
										$Children->appendChild($GUIObject);
											//Add attributes to GUIObject
											$xsi=$xml->createAttribute("xsi:type");
											$xsi->value="GUIObject";
											$GUIObject->appendChild($xsi);
											$ID=$xml->createAttribute("ID");
											$ID->value="3";
											$GUIObject->appendChild($ID);
											//<space> </space>
											$space1=$xml->createElement("space",$projectname.".xml");
										$GUIObject->appendChild($space1);
										//<description/>
										$description=$xml->createElement("description","");
											$GUIObject->appendChild($description);
										//<GUIObjectTypeKey>GUIObjectType.WINDOW</GUIObjectTypeKey>
										$GUIObjectTypeKey=$xml->createElement("GUIObjectTypeKey","GUIObjectType.BUTTON");
											$GUIObject->appendChild($GUIObjectTypeKey);
										//<properties>;;null</properties>
										$properties=$xml->createElement("properties",";;");
											$GUIObject->appendChild($properties);
										//<parent>1</parent>
										$parent=$xml->createElement("parent","1");
											$GUIObject->appendChild($parent);
										//<Children/>
										$Children1=$xml->createElement("Children");
											$GUIObject->appendChild($Children1);
										//updateCount
										$updateCount=$xml->createElement("updateCount","0");
											$GUIObject->appendChild($updateCount);
			
										//GUIObjectRoot --> waitTime
										$waitTime=$xml->createElement("waitTime","0");
										$GUIObject->appendChild($waitTime);
										
										
										//Application --> TextBox Object
										$GUIObject=$xml->createElement("GUIObject");
										$Children->appendChild($GUIObject);
											//Add attributes to GUIObject
											$xsi=$xml->createAttribute("xsi:type");
											$xsi->value="GUIObject";
											$GUIObject->appendChild($xsi);
											$ID=$xml->createAttribute("ID");
											$ID->value="4";
											$GUIObject->appendChild($ID);
											//<space> </space>
											$space1=$xml->createElement("space",$projectname.".xml");
										$GUIObject->appendChild($space1);
										//<description/>
										$description=$xml->createElement("description","");
											$GUIObject->appendChild($description);
										//<GUIObjectTypeKey>GUIObjectType.WINDOW</GUIObjectTypeKey>
										$GUIObjectTypeKey=$xml->createElement("GUIObjectTypeKey","GUIObjectType.TEXTBOX");
											$GUIObject->appendChild($GUIObjectTypeKey);
										//<properties>;;null</properties>
										$properties=$xml->createElement("properties",";;");
											$GUIObject->appendChild($properties);
										//<parent>1</parent>
										$parent=$xml->createElement("parent","1");
											$GUIObject->appendChild($parent);
										//<Children/>
										$Children1=$xml->createElement("Children");
											$GUIObject->appendChild($Children1);
										//updateCount
										$updateCount=$xml->createElement("updateCount","0");
											$GUIObject->appendChild($updateCount);
			
										//GUIObjectRoot --> waitTime
										$waitTime=$xml->createElement("waitTime","0");
										$GUIObject->appendChild($waitTime);
				
				
				
										//Application --> List Object
										$GUIObject=$xml->createElement("GUIObject");
										$Children->appendChild($GUIObject);
											//Add attributes to GUIObject
											$xsi=$xml->createAttribute("xsi:type");
											$xsi->value="GUIObject";
											$GUIObject->appendChild($xsi);
											$ID=$xml->createAttribute("ID");
											$ID->value="5";
											$GUIObject->appendChild($ID);
											//<space> </space>
											$space1=$xml->createElement("space",$projectname.".xml");
										$GUIObject->appendChild($space1);
										//<description/>
										$description=$xml->createElement("description","");
											$GUIObject->appendChild($description);
										//<GUIObjectTypeKey>GUIObjectType.WINDOW</GUIObjectTypeKey>
										$GUIObjectTypeKey=$xml->createElement("GUIObjectTypeKey","GUIObjectType.LIST");
											$GUIObject->appendChild($GUIObjectTypeKey);
										//<properties>;;null</properties>
										$properties=$xml->createElement("properties",";;");
											$GUIObject->appendChild($properties);
										//<parent>1</parent>
										$parent=$xml->createElement("parent","1");
											$GUIObject->appendChild($parent);
										//<Children/>
										$Children1=$xml->createElement("Children");
											$GUIObject->appendChild($Children1);
										//updateCount
										$updateCount=$xml->createElement("updateCount","0");
											$GUIObject->appendChild($updateCount);
			
										//GUIObjectRoot --> waitTime
										$waitTime=$xml->createElement("waitTime","0");
										$GUIObject->appendChild($waitTime);
										
										
										//Application --> RadioButton Object
										$GUIObject=$xml->createElement("GUIObject");
										$Children->appendChild($GUIObject);
											//Add attributes to GUIObject
											$xsi=$xml->createAttribute("xsi:type");
											$xsi->value="GUIObject";
											$GUIObject->appendChild($xsi);
											$ID=$xml->createAttribute("ID");
											$ID->value="5";
											$GUIObject->appendChild($ID);
											//<space> </space>
											$space1=$xml->createElement("space",$projectname.".xml");
										$GUIObject->appendChild($space1);
										//<description/>
										$description=$xml->createElement("description","");
											$GUIObject->appendChild($description);
										//<GUIObjectTypeKey>GUIObjectType.WINDOW</GUIObjectTypeKey>
										$GUIObjectTypeKey=$xml->createElement("GUIObjectTypeKey","GUIObjectType.RADIOBUTTON");
											$GUIObject->appendChild($GUIObjectTypeKey);
										//<properties>;;null</properties>
										$properties=$xml->createElement("properties",";;");
											$GUIObject->appendChild($properties);
										//<parent>1</parent>
										$parent=$xml->createElement("parent","1");
											$GUIObject->appendChild($parent);
										//<Children/>
										$Children1=$xml->createElement("Children");
											$GUIObject->appendChild($Children1);
										//updateCount
										$updateCount=$xml->createElement("updateCount","0");
											$GUIObject->appendChild($updateCount);
			
										//GUIObjectRoot --> waitTime
										$waitTime=$xml->createElement("waitTime","0");
										$GUIObject->appendChild($waitTime);
										
										
										//Application --> CHECKBOX  Object
										$GUIObject=$xml->createElement("GUIObject");
										$Children->appendChild($GUIObject);
											//Add attributes to GUIObject
											$xsi=$xml->createAttribute("xsi:type");
											$xsi->value="GUIObject";
											$GUIObject->appendChild($xsi);
											$ID=$xml->createAttribute("ID");
											$ID->value="6";
											$GUIObject->appendChild($ID);
											//<space> </space>
											$space1=$xml->createElement("space",$projectname.".xml");
										$GUIObject->appendChild($space1);
										//<description/>
										$description=$xml->createElement("description","");
											$GUIObject->appendChild($description);
										//<GUIObjectTypeKey>GUIObjectType.WINDOW</GUIObjectTypeKey>
										$GUIObjectTypeKey=$xml->createElement("GUIObjectTypeKey","GUIObjectType.CHECKBOX");
											$GUIObject->appendChild($GUIObjectTypeKey);
										//<properties>;;null</properties>
										$properties=$xml->createElement("properties",";;");
											$GUIObject->appendChild($properties);
										//<parent>1</parent>
										$parent=$xml->createElement("parent","1");
											$GUIObject->appendChild($parent);
										//<Children/>
										$Children1=$xml->createElement("Children");
											$GUIObject->appendChild($Children1);
										//updateCount
										$updateCount=$xml->createElement("updateCount","0");
											$GUIObject->appendChild($updateCount);
			
										//GUIObjectRoot --> waitTime
										$waitTime=$xml->createElement("waitTime","0");
										$GUIObject->appendChild($waitTime);
										
										
										//Application --> TREE Object
										$GUIObject=$xml->createElement("GUIObject");
										$Children->appendChild($GUIObject);
											//Add attributes to GUIObject
											$xsi=$xml->createAttribute("xsi:type");
											$xsi->value="GUIObject";
											$GUIObject->appendChild($xsi);
											$ID=$xml->createAttribute("ID");
											$ID->value="7";
											$GUIObject->appendChild($ID);
											//<space> </space>
											$space1=$xml->createElement("space",$projectname.".xml");
										$GUIObject->appendChild($space1);
										//<description/>
										$description=$xml->createElement("description","");
											$GUIObject->appendChild($description);
										//<GUIObjectTypeKey>GUIObjectType.WINDOW</GUIObjectTypeKey>
										$GUIObjectTypeKey=$xml->createElement("GUIObjectTypeKey","GUIObjectType.TREE");
											$GUIObject->appendChild($GUIObjectTypeKey);
										//<properties>;;null</properties>
										$properties=$xml->createElement("properties",";;");
											$GUIObject->appendChild($properties);
										//<parent>1</parent>
										$parent=$xml->createElement("parent","1");
											$GUIObject->appendChild($parent);
										//<Children/>
										$Children1=$xml->createElement("Children");
											$GUIObject->appendChild($Children1);
										//updateCount
										$updateCount=$xml->createElement("updateCount","0");
											$GUIObject->appendChild($updateCount);
			
										//GUIObjectRoot --> waitTime
										$waitTime=$xml->createElement("waitTime","0");
										$GUIObject->appendChild($waitTime);
										
						
										
						//GUIObjectRoot --> updateCount
				$updateCount=$xml->createElement("updateCount","0");
				$GUIObjectRoot->appendChild($updateCount);
			
				//GUIObjectRoot --> waitTime
				$waitTime=$xml->createElement("waitTime","0");
				$GUIObjectRoot->appendChild($waitTime);
					//GUIObject (GUIObjectRoot --> GUIObject)
					
					
						
									
										
										
								
								
								
					
					
					
			
			
			
			
			//project --> GlobalVariables
			
				$GlobalVariables=$xml->createElement("GlobalVariables");
				$project->appendChild($GlobalVariables);
				
					//Exists Variable
					$GlobalVariable=$xml->createElement("GlobalVariable");
					$GlobalVariables->appendChild($GlobalVariable);
						$ID=$xml->createAttribute("ID");
						$ID->value="1";
						$GlobalVariable->appendChild($ID);
						
						//<descript> </description>
						$description=$xml->createElement("description","To check whether an Object Exists and Store Either True/False or 0/1");
						$GlobalVariable->appendChild($description);
						
						//<defaultValueEncryptInd> </defaultValueEncriptionInd>
						$defaultValueEncryptInd=$xml->createElement("defaultValueEncryptInd","false");
						$GlobalVariable->appendChild($defaultValueEncryptInd);
						
						//<InternalUse> </InternalUse>
						$internalUse=$xml->createElement("internalUse","false");
						$GlobalVariable->appendChild($internalUse);
						
						//<name></name>
						$name=$xml->createElement("name","Exists");
						$GlobalVariable->appendChild($name);
						
						//<space>
						$space04=$xml->createElement("space",$projectname.".xml");
						$GlobalVariable->appendChild($space04);
						
						//<updateCount>2
						$updateCount=$xml->createElement("updateCount","2");
						$GlobalVariable->appendChild($updateCount);
			
					//Enabled Variable
					$GlobalVariable=$xml->createElement("GlobalVariable");
					$GlobalVariables->appendChild($GlobalVariable);
						$ID=$xml->createAttribute("ID");
						$ID->value="2";
						$GlobalVariable->appendChild($ID);
						
						//<descript> </description>
						$description=$xml->createElement("description","To check whether an Object is Enabled and Store Either True/False or 0/1");
						$GlobalVariable->appendChild($description);
						
						//<defaultValueEncryptInd> </defaultValueEncriptionInd>
						$defaultValueEncryptInd=$xml->createElement("defaultValueEncryptInd","false");
						$GlobalVariable->appendChild($defaultValueEncryptInd);
						
						//<InternalUse> </InternalUse>
						$internalUse=$xml->createElement("internalUse","false");
						$GlobalVariable->appendChild($internalUse);
						
						//<name></name>
						$name=$xml->createElement("name","Enabled");
						$GlobalVariable->appendChild($name);
						
						//<space>
						$space04=$xml->createElement("space",$projectname.".xml");
						$GlobalVariable->appendChild($space04);
						
						//<updateCount>2
						$updateCount=$xml->createElement("updateCount","2");
						$GlobalVariable->appendChild($updateCount);
						
						
						//ItemValue Variable
					$GlobalVariable=$xml->createElement("GlobalVariable");
					$GlobalVariables->appendChild($GlobalVariable);
						$ID=$xml->createAttribute("ID");
						$ID->value="3";
						$GlobalVariable->appendChild($ID);
						
						//<descript> </description>
						$description=$xml->createElement("description","Specify the Value for an Item");
						$GlobalVariable->appendChild($description);
						
						//<defaultValueEncryptInd> </defaultValueEncriptionInd>
						$defaultValueEncryptInd=$xml->createElement("defaultValueEncryptInd","false");
						$GlobalVariable->appendChild($defaultValueEncryptInd);
						
						//<InternalUse> </InternalUse>
						$internalUse=$xml->createElement("internalUse","false");
						$GlobalVariable->appendChild($internalUse);
						
						//<name></name>
						$name=$xml->createElement("name","ItemValue");
						$GlobalVariable->appendChild($name);
						
						//<space>
						$space04=$xml->createElement("space",$projectname.".xml");
						$GlobalVariable->appendChild($space04);
						
						//<updateCount>2
						$updateCount=$xml->createElement("updateCount","2");
						$GlobalVariable->appendChild($updateCount);
						
						
						//vValue Variable
					$GlobalVariable=$xml->createElement("GlobalVariable");
					$GlobalVariables->appendChild($GlobalVariable);
						$ID=$xml->createAttribute("ID");
						$ID->value="4";
						$GlobalVariable->appendChild($ID);
						
						//<descript> </description>
						$description=$xml->createElement("description","Store the Retrieved Value from Objects such as Textbox, List, Grid etc..,");
						$GlobalVariable->appendChild($description);
						
						//<defaultValueEncryptInd> </defaultValueEncriptionInd>
						$defaultValueEncryptInd=$xml->createElement("defaultValueEncryptInd","false");
						$GlobalVariable->appendChild($defaultValueEncryptInd);
						
						//<InternalUse> </InternalUse>
						$internalUse=$xml->createElement("internalUse","false");
						$GlobalVariable->appendChild($internalUse);
						
						//<name></name>
						$name=$xml->createElement("name","vValue");
						$GlobalVariable->appendChild($name);
						
						//<space>
						$space04=$xml->createElement("space",$projectname.".xml");
						$GlobalVariable->appendChild($space04);
						
						//<updateCount>2
						$updateCount=$xml->createElement("updateCount","2");
						$GlobalVariable->appendChild($updateCount);
						
						
						//CheckBox Variable
					$GlobalVariable=$xml->createElement("GlobalVariable");
					$GlobalVariables->appendChild($GlobalVariable);
						$ID=$xml->createAttribute("ID");
						$ID->value="5";
						$GlobalVariable->appendChild($ID);
						
						//<descript> </description>
						$description=$xml->createElement("description","Specify the CheckBox Value as Checked/UnChecked");
						$GlobalVariable->appendChild($description);
						
						//<defaultValueEncryptInd> </defaultValueEncriptionInd>
						$defaultValueEncryptInd=$xml->createElement("defaultValueEncryptInd","false");
						$GlobalVariable->appendChild($defaultValueEncryptInd);
						
						//<InternalUse> </InternalUse>
						$internalUse=$xml->createElement("internalUse","false");
						$GlobalVariable->appendChild($internalUse);
						
						//<name></name>
						$name=$xml->createElement("name","CheckBox");
						$GlobalVariable->appendChild($name);
						
						//<space>
						$space04=$xml->createElement("space",$projectname.".xml");
						$GlobalVariable->appendChild($space04);
						
						//<updateCount>2
						$updateCount=$xml->createElement("updateCount","2");
						$GlobalVariable->appendChild($updateCount);
						
						
						//GridSyntax Variable
					$GlobalVariable=$xml->createElement("GlobalVariable");
					$GlobalVariables->appendChild($GlobalVariable);
						$ID=$xml->createAttribute("ID");
						$ID->value="6";
						$GlobalVariable->appendChild($ID);
						
						//<descript> </description>
						$description=$xml->createElement("description","Specify the Grid Syntax as Cell=;ColumnName=; or RowIndex=;ColumnName=;");
						$GlobalVariable->appendChild($description);
						
						//<defaultValueEncryptInd> </defaultValueEncriptionInd>
						$defaultValueEncryptInd=$xml->createElement("defaultValueEncryptInd","false");
						$GlobalVariable->appendChild($defaultValueEncryptInd);
						
						//<InternalUse> </InternalUse>
						$internalUse=$xml->createElement("internalUse","false");
						$GlobalVariable->appendChild($internalUse);
						
						//<name></name>
						$name=$xml->createElement("name","GridSyntax");
						$GlobalVariable->appendChild($name);
						
						//<space>
						$space04=$xml->createElement("space",$projectname.".xml");
						$GlobalVariable->appendChild($space04);
						
						//<updateCount>2
						$updateCount=$xml->createElement("updateCount","2");
						$GlobalVariable->appendChild($updateCount);
						
						
			//project --> nextValue
			
				$nextValue=$xml->createElement("nextValue","7");
				$project->appendChild($nextValue);
			
			
			//project --> ModuleRoot
			
				$ModuleRoot=$xml->createElement("ModuleRoot");
				
				$ID=$xml->createAttribute("ID");
				$ID->value="1";
				$ModuleRoot->appendChild($ID);
				$project->appendChild($ModuleRoot);
				
				//ModuleRoot
				
					//skip
					$skip=$xml->createElement("skip","false");
					$ModuleRoot->appendChild($skip);
				
					//space
					$space=$xml->createElement("space",$projectname.".xml");
					$ModuleRoot->appendChild($space);
					
					//typeFlag
					$typeFlag=$xml->createElement("typeFlag","1");
					$ModuleRoot->appendChild($typeFlag);
					
					//updateCount
					$updateCount=$xml->createElement("updateCount","1");
					$ModuleRoot->appendChild($updateCount);
					
					//Children
					$Children=$xml->createElement("Children");
					$ModuleRoot->appendChild($Children);
						
						$increment=10;
		
					//name
					$name=$xml->createElement("name","root");
					$ModuleRoot->appendChild($name);
					
					//executionCount
					$executionCount=$xml->createElement("executionCount","1");
					$ModuleRoot->appendChild($executionCount);	
				
			
		
	// " projectInfo " --> Second Child of " projectInfo "
	$projectInfo=$xml->createElement("projectInfo");
	$projectInfo=$projectContainer->appendChild($projectInfo);
	
	//projectInfo
	
		//pathDisplay
		$pathDisplay=$xml->createElement("pathDisplay","");
		$projectInfo->appendChild($pathDisplay);		
		
		//projectId
		$projectId=$xml->createElement("projectId","0");
		$projectInfo->appendChild($projectId);
		
		//projectName
		$projectName=$xml->createElement("projectName",$projectname);
		$projectInfo->appendChild($projectName);
		
		//referenceURL
		$referenceURL=$xml->createElement("referenceURL","");
		$projectInfo->appendChild($referenceURL);
		
		//revision
		$revision=$xml->createElement("revision","0");
		$projectInfo->appendChild($revision);

		//
	
 if($xml->save($file)){
	 
	
	 echo "Project Created Successfully ";
 }

}else{
	echo "Directory already exists";
}


?>