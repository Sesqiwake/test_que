<!DOCTYPE html>
<head>
<?php include "head.html"; ?>
<title>Регистрация</title>
</head>
<body class="loader-active">
    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto">
                	<div class="login-page-content">
                		<div class="login-form">
                			<h3>Sign Up</h3>
							<form action="save_user.php" method="post" enctype="multipart/form-data">
								<div class="name">
									<div class="row">
										<div class="col-md-6">
											<input name="first_name" type="text" maxlength="15" placeholder="Имя">
										</div>
										<div class="col-md-6">
											<input name="last_name" type="text" maxlength="15" placeholder="Фамилия">
										</div>
									</div>
								</div>
								<div class="username">
									<input name="email" type="email" maxlength="30" placeholder="Email">
								</div>
                                <div class="telephone">
                                    <input name="tel" type="tel" maxlength="16" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
         placeholder="Телефон +7(___)___-__-__">
                                </div>
								<div class="username">
									<input name="login" type="text" maxlength="15" placeholder="Логин">
								</div>
								<div class="password">
									<input name="password" type="password" size="15" placeholder="Пароль">
								</div>
								<div class="log-btn">
									<button name="do_signup" type="submit"><i class="fa fa-check-square"></i> Зарегестрироваться</button>
								</div>
							</form>
                		</div>
                	</div>
                </div>
        	</div>
        </div>
    </section>
    
</body>
</html>