<?php
if (!function_exists("cmsms")) exit;

if (!$this->AccessAllowed() && !$this->AdvancedAccessAllowed()) exit;

if (isset($params["fmmessage"]) && $params["fmmessage"]!="") {
  // gotta get rid of this stuff.
  $count="";
  if (isset($params["fmmessagecount"]) && $params["fmmessagecount"]!="") {
    $count=$params["fmmessagecount"];
  }

  echo $this->ShowMessage($this->Lang($params["fmmessage"],$count));
}

if (isset($params["fmerror"]) && $params["fmerror"]!="") {
  // gotta get rid of this stuff
  $count="";
  if (isset($params["fmerrorcount"]) && $params["fmerrorcount"]!="") {
    $count=$params["fmerrorcount"];
  }
  echo $this->ShowErrors($this->Lang($params["fmerror"],$count));
}

$advancedmode=$this->GetPreference("advancedmode",0);
if (!$this->AdvancedAccessAllowed()) $advancedmode=0;
$showhiddenfiles=$this->GetPreference("showhiddenfiles",0);
$showthumbnails=$this->GetPreference("showthumbnails",1);
$iconsize=$this->GetPreference("iconsize",0);
$permissionstyle=$this->GetPreference("permissionstyle","xxx");

$tab="";
if (isset($params["tab"])) $tab=$params["tab"];
if (isset($params["newsort"])) $this->SetPreference("sortby",$params["newsort"]);

echo $this->StartTabHeaders();
	$filestitle="";
	if ($this->CheckPermission('Modify Files')) {
		echo $this->SetTabHeader("files",$this->Lang("fileview"),($tab=="files"));
	}
	if($this->CheckPermission('Modify Site Preferences')) {
		echo $this->SetTabHeader("settings",$this->Lang("settings"),($tab=="settings"));
	}
echo $this->EndTabHeaders();

echo $this->StartTabContent();
	if ($this->CheckPermission('Modify Files')) {
		echo $this->StartTab("files");
			include(dirname(__FILE__)."/uploadview.php");
			include(dirname(__FILE__)."/action.admin_fileview.php"); // this is also an action.
		echo $this->EndTab();
	}
	if($this->CheckPermission('Modify Site Preferences')) {
		echo $this->StartTab("settings");
			include(dirname(__FILE__)."/settings.php");
		echo $this->EndTab();
	}
echo $this->EndTabContent();

?>