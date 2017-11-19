  <?php 
	//start session
	session_start();
	
	//start output buffering
	ob_start();
?>
<!doctype html>
<html lang="vi">
<head>
	<title>admin</title>
	<meta http-equiv="content-type" content="text/html , charset=utf-8">
	<meta name="viewport" content="width=width-device,initial-scale=1">

	<!-- font-awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	<!-- jquery --> 
	<script src="../bootstrap/js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	
	<!-- style.css -->
	<link type="text/css" rel="stylesheet" href="css/style.css">
	
    <script type="text/javascript" src="../public/ckeditor/ckeditor.js" lang="javascript"></script>
    <script type="text/javascript" src="../public/ckfinder/ckfinder.js" lang="javascript"></script>
	<!-- owl-carousel -->
			<!-- Important Owl stylesheet -->
			<link rel="stylesheet" href="../owl-carousel/owl.carousel.css">
			 <!-- Default Theme -->
			<link rel="stylesheet" href="../owl-carousel/owl.theme.css">
			<!-- Include js plugin -->
			<script src="../owl-carousel/owl.carousel.js"></script>

			 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  			<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  			<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  			<script>
					  $(function() {
					    $( "#datepicker" ).datepicker();
					  });
					  </script>
			<script language="javascript">
            function show_confirm(){ // de thong bao có nên xóa dữ liệu hay ko // phần này lien kết với file list_user
                if(confirm("Bạn có muốn xóa dòng dữ liệu này không!"))
                {
                    return true;
                }
                else
                {
                    return false; 
                }
            }

        </script>
				
</head>
<body>
	<header>
			 `<div class="example">
			            <div id="header">
			                
			            <nav class='navbar navbar-inverse navbar-fixed-top'>
			                   <div class='navbar-header'>

			                        <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#menu'>
			                            <span class='sr-only'>Toggle navigation</span>
			                            <span class='icon-bar'></span>
			                            <span class='icon-bar'></span>
			                            <span class='icon-bar'></span>
			                        </button>
			                        <a href='../index.php' class='navbar-brand' target='_blank'>WELCOME TO ADMIN</a>
			                        <a href='' class='navbar-brand'>||</a>
			                    </div>
			                    <div class='navbar-collapse collapse' id='menu'>                    
			                        <ul class='nav navbar-nav navbar-right'>
			                            <li class='dropdown'>
			                                <a data-toggle='dropdown' href=''>Tài khoản<span class='caret'></span></a>
			                                <ul class='dropdown-menu'>
			                                    <li><a href='info_admin.php?id=$_SESSION[user_id]'>Thông tin</a></li>
			                                    <li><a href='edit_mk_admin.php?id=$_SESSION[user_id]'>Đổi mật khẩu</a></li>
			                                    <li class='divider'></li>
			                                    <li><a href='../logout.php'>Thoát</a></li>
			                                </ul>
			                            </li>
			                        </ul>
			 
			                   </div>
			                </nav>
			           
			            </div>
			  </div>
  	</header>