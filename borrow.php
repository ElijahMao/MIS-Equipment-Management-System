<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="APPTON HTML5 Template is a simple Smooth Personal App Landing Template" />
    <meta name="keywords" content="App, Landing, Business, Onepage, Html, Business" />

    <!--====== TITLE TAG ======-->
    <title>借出設備</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="assest/img/favicon.jpg" />

    <!--====== STYLESHEETS ======-->
    <link href="assest/css/plugins.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="style.css" rel="stylesheet">
</head>

<body background="/assest/img/slider/slide_2.jpg">
	<table align="center">
		<tr>
			<td height="200px" align="center">
				<div class="contact-title wow fadeIn">
                       <h3 class="font28 mb50 xs-mb30 xs-font22 xs-mt20">借出設備</h3>
                </div>
			</td>
		<tr>
			<td align="center">
				<div class="contact-form wow fadeIn">
                    <form action="borrow_msg.php" method="post">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-input">
                                        <input type="text" class="form-control" name="emp_no" value="<?php echo substr($_POST['emp_no'],3,10) ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-input">
                                        <input type="text" class="form-control" name="assets_no" placeholder="設備編號.."autofocus>
                                    </div>
                                </div>
                            </div>
							<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="form-group mb0">
                                    <button type="submit">確定</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
			</td>
		</tr>
	</table>
</body>
</html>