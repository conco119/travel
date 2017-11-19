 <?php
  require("../includes/VSCPDO.php");
  $vsc = new vsc_pdo("localhost,root,,travel");
    $error=array();
    $data =array();


if(!empty($_POST["name"]))
  $data["contact_name"] = $_POST["name"];

  else
 $error["name"] = "Tên không hợp lệ";

if(!empty($_POST["email"]))
  $data["contact_email"] = $_POST["email"];
else
  $error["email"] ="Email không hợp lệ";

if(!empty($_POST["phone"])){
  $data["contact_phone"] = $_POST["phone"];
}
else{
  $error["phone"] ="Số điện thoại không hợp lệ";
}
if(!empty($_POST["nation"])){
  $data["nationality_id"] = $_POST["nation"];
}
else{
  $error["nation"] ="Quốc tịch không hợp lệ";
}
if(!empty($_POST["content"])){
  $data["contact_info"] = $_POST["content"];
}
else{
  $error["content"] ="Nội dung không hợp lệ";
}

  if(empty($error)){
    $vsc->insert("contact",$data);
    header("location: ../contact.php?s=1");
  }
  else{
    $dt=http_build_query($error,'flags_');
    header("location: ../contact.php?$dt");
  }



 ?>
