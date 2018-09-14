<?php
$objectType=$_POST['objectType'];
$objectName=$_POST['objectName'];
$increment=$_POST['counter'];
$projectname=$_POST['projectname'];
	
switch($objectType)
{
	case 'Textbox'	 : createTextbox();
						break;
	case 'Button'	 : createButton();
						break;
	case 'CheckBox'	 : createCheckBox();
						break;
	case 'ComboBox'	 : createComboBox();
						break;
	case 'List'		 : createList();
						break;
	case 'Grid'      : createGrid();
						break;
	case 'RadioButton': createRadioButton();
						break;
	default 		 : echo "Object Type Not defined ";
}

function createTextbox(){

	$projectname=$_POST['projectname'];
	$objectName=$_POST['objectName'];
	$objectType=$_POST['objectType'];
	$counter=$_POST['counter'];
	
	$xml=new DOMDocument("1.0","UTF-8");
	$xml->load("projects/".$projectname."/".$projectname.".xml");
	
	
	$ModuleRoot=$xml->getElementsByTagName("ModuleRoot")->item(0);
	$Children=$ModuleRoot->getElementsByTagName("Children")->item(0);
	
	
				//TextBox --> Exists
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Exists_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To check whether '".$objectName."' ".$objectType." Exists ");
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}						
		
				//TextBox --> Enabled
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Enabled_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To check whether '".$objectName."' ".$objectType." Enabled ");
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}
		
				
				//TextBox --> GetText
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","GetText_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To Get Text from '".$objectName."' ".$objectType);
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}
					
		//TextBox --> Type		
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Type_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To Type item Text/Value into '".$objectName."' ".$objectType);
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}
		
		
		//TextBox --> Single Click 
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Click_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To Single Click on '".$objectName."' ".$objectType);
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
								
								
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}
		
		$xml->save("projects/".$projectname."/".$projectname.".xml");
		echo "successfull";
}

function createButton(){
	$projectname=$_POST['projectname'];
	$objectName=$_POST['objectName'];
	$objectType=$_POST['objectType'];
	$counter=$_POST['counter'];
	
	$xml=new DOMDocument("1.0","UTF-8");
	$xml->load("projects/".$projectname."/".$projectname.".xml");
	
	
	$ModuleRoot=$xml->getElementsByTagName("ModuleRoot")->item(0);
	$Children=$ModuleRoot->getElementsByTagName("Children")->item(0);
	
	
				//Button --> Exists
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Exists_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To check whether '".$objectName."' ".$objectType." Exists ");
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}						
		
				//Button --> Enabled
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Enabled_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To check whether '".$objectName."' ".$objectType." Enabled ");
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}
		
				
				//Button --> Click
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Click_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To Single Click on '".$objectName."' ".$objectType);
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}
		$xml->save("projects/".$projectname."/".$projectname.".xml");
		echo "successfull";
}

function createCheckBox(){

	$projectname=$_POST['projectname'];
	$objectName=$_POST['objectName'];
	$objectType=$_POST['objectType'];
	$counter=$_POST['counter'];
	
	$xml=new DOMDocument("1.0","UTF-8");
	$xml->load("projects/".$projectname."/".$projectname.".xml");
	
	
	$ModuleRoot=$xml->getElementsByTagName("ModuleRoot")->item(0);
	$Children=$ModuleRoot->getElementsByTagName("Children")->item(0);

		//CheckBox --> Exists
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Exists_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To check whether '".$objectName."' ".$objectType." Exists ");
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}						
		
				//CheckBox --> Enabled
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Enabled_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To check whether '".$objectName."' ".$objectType." Enabled ");
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}
		
				
				//CheckBox --> CheckState
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","CheckState_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To Get State of '".$objectName."' ".$objectType);
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}
					
		//CheckBox --> Check		
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Check_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To Check/UnCheck '".$objectName."' ".$objectType);
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}


	$xml->save("projects/".$projectname."/".$projectname.".xml");
		echo "successfull";
}

function createComboBox(){
	$projectname=$_POST['projectname'];
	$objectName=$_POST['objectName'];
	$objectType=$_POST['objectType'];
	$counter=$_POST['counter'];
	
	$xml=new DOMDocument("1.0","UTF-8");
	$xml->load("projects/".$projectname."/".$projectname.".xml");
	
	
	$ModuleRoot=$xml->getElementsByTagName("ModuleRoot")->item(0);
	$Children=$ModuleRoot->getElementsByTagName("Children")->item(0);

		//ComboBox --> Exists
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Exists_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To check whether '".$objectName."' ".$objectType." Exists ");
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}						
		
				//ComboBox --> Enabled
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Enabled_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To check whether '".$objectName."' ".$objectType." Enabled ");
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}
		
				
				//ComboBox --> GetText
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","GetText_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To Get Text from '".$objectName."' ".$objectType);
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}
					
		//ComboBox --> Click		
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Click_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To Click on item in '".$objectName."' ".$objectType);
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}


	$xml->save("projects/".$projectname."/".$projectname.".xml");
		echo "successfull";
}

function createList(){
$projectname=$_POST['projectname'];
	$objectName=$_POST['objectName'];
	$objectType=$_POST['objectType'];
	$counter=$_POST['counter'];
	
	$xml=new DOMDocument("1.0","UTF-8");
	$xml->load("projects/".$projectname."/".$projectname.".xml");
	
	
	$ModuleRoot=$xml->getElementsByTagName("ModuleRoot")->item(0);
	$Children=$ModuleRoot->getElementsByTagName("Children")->item(0);

				//List --> Exists
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Exists_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To check whether '".$objectName."' ".$objectType." Exists ");
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}						
		
				//List --> Enabled
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Enabled_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To check whether '".$objectName."' ".$objectType." Enabled ");
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}
		
				
				//List --> GetText
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","GetText_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To Get Text from '".$objectName."' ".$objectType);
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}
					
				//List --> Click		
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Click_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To Click on item in '".$objectName."' ".$objectType);
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}


	$xml->save("projects/".$projectname."/".$projectname.".xml");
		echo "successfull";
}

function createRadioButton(){
	
	$projectname=$_POST['projectname'];
	$objectName=$_POST['objectName'];
	$objectType=$_POST['objectType'];
	$counter=$_POST['counter'];
	
	$xml=new DOMDocument("1.0","UTF-8");
	$xml->load("projects/".$projectname."/".$projectname.".xml");
	
	
	$ModuleRoot=$xml->getElementsByTagName("ModuleRoot")->item(0);
	$Children=$ModuleRoot->getElementsByTagName("Children")->item(0);

		//RadioButton --> Exists
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Exists_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To check whether '".$objectName."' ".$objectType." Exists ");
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}						
		
				//CheckBox --> Enabled
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Enabled_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To check whether '".$objectName."' ".$objectType." Enabled ");
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}
		
				
				//CheckBox --> CheckState
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","CheckState_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To Get State of '".$objectName."' ".$objectType);
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}
					
		//CheckBox --> Check		
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Click_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To Click on '".$objectName."' ".$objectType);
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}


	$xml->save("projects/".$projectname."/".$projectname.".xml");
		echo "successfull";
}
function createGrid(){
	
	$projectname=$_POST['projectname'];
	$objectName=$_POST['objectName'];
	$objectType=$_POST['objectType'];
	$counter=$_POST['counter'];
	
	$xml=new DOMDocument("1.0","UTF-8");
	$xml->load("projects/".$projectname."/".$projectname.".xml");
	
	
	$ModuleRoot=$xml->getElementsByTagName("ModuleRoot")->item(0);
	$Children=$ModuleRoot->getElementsByTagName("Children")->item(0);

				//Grid --> Exists
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Exists_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To check whether '".$objectName."' ".$objectType." Exists ");
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}						
		
				//Grid --> Enabled
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Enabled_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To check whether '".$objectName."' ".$objectType." Enabled ");
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}
		
				
				//Grid --> GetText
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","GetText_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To Get Text from '".$objectName."' ".$objectType." With Syntax");
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}
					
				//Grid --> Click		
					{
					$Child=$xml->createElement("Child");
	
							//Child <child xmlns="http://www.w3.org/2001/XMLSchema-instance" xsi:type="module" ID="$increment">
					$Children->appendChild($Child);
							$xmlns=$xml->createAttribute("xmlns:xsi");
							$xmlns->value="http://www.w3.org/2001/XMLSchema-instance";
							$Child->appendChild($xmlns);
							$xsi=$xml->createAttribute("xsi:type");
							$xsi->value="module";
							$Child->appendChild($xsi);
							$ID=$xml->createAttribute("ID");
							$ID->value=++$counter;
							$Child->appendChild($ID);
							
							//<parent>0<parent>
							$parent=$xml->createElement("parent","0");
							$Child->appendChild($parent);
							//skip
							$skip=$xml->createElement("skip","false");
							$Child->appendChild($skip);
							//<space>
							$space05=$xml->createElement("space",$projectname.".xml");
							$Child->appendChild($space05);
							
							//<typeFlag>
							$typeFlag=$xml->createElement("typeFlag","1");
							$Child->appendChild($typeFlag);
							
							//<updateCount>
							$updateCount=$xml->createElement("updateCount","1");
							$Child->appendChild($updateCount);
							
							//<Children> Interaction
							$children=$xml->createElement("Children");
							$Child->appendChild($children);
							
							//<name>ModuleName</name>
							
							$name=$xml->createElement("name","Click_".$objectName);
							$Child->appendChild($name);
							
							//<descriptionModule Desc</description>
							$description=$xml->createElement("description","To Click on item in '".$objectName."' ".$objectType." With Syntax");
							$Child->appendChild($description);
							
							//<executioncount>
							$executionCount=$xml->createElement("executionCount","1");
							$Child->appendChild($executionCount);
							
								/*
								//Interaction <Children>
								$Children1=$Child->getElementsByTagName("Children")->item(0);
									
									$Child1=$xml->createElement("Child");
									$Children1->appendChild($Child1);
										$xsi=$xml->createAttribute("xsi:type");
										$xsi->value="interaction";
										$Child1->appendChild($xsi);
										$ID=$xml->createAttribute("ID");
										$ID->value=$counter+1;
										$Child1->appendChild($ID);
								
								
										$parent=$xml->createElement("parent",$counter);
										$Child1->appendChild($parent);
										//skip
										$skip1=$xml->createElement("skip","false");
										$Child1->appendChild($skip);
										//<space>
										$space05=$xml->createElement("space",$projectname.".xml");
										$Child1->appendChild($space05);
							
										//<typeFlag>
										$typeFlag=$xml->createElement("typeFlag","2");
										$Child1->appendChild($typeFlag);
							
										//<updateCount>
										$updateCount=$xml->createElement("updateCount","0");
										$Child1->appendChild($updateCount);
								
										$actionKey=$xml->createElement("actionKey","Action.GET_PROPERTY");
										$Child1->appendChild($actionKey);
										
										$GUIObject=$xml->createElement("GUIObject","4");
										$Child1->appendChild($GUIObject);
										
										$outputVariable=$xml->createElement("outputVariable","1");
										$Child1->appendChild($outputVariable);
								
										$paramInd=$xml->createElement("paramInd","false");
										$Child1->appendChild($paramInd);
										
										$stopOnFailInd=$xml->createElement("stopOnFailInd","4");
										$Child1->appendChild($stopOnFailInd);
										
										$value=$xml->createElement("value");
										$Child1->appendChild($value);
											$encryptInd=$xml->createElement("encryptInd","false");
											$value->appendChild($encryptInd);
											$savedValue=$xml->createElement("savedValue","Exists");
											$value->appendChild($savedValue);
											
											
							*/
							$counter++;
					}


	$xml->save("projects/".$projectname."/".$projectname.".xml");
		echo "successfull";
}
?>