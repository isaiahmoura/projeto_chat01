<!DOCTYPE html>
<html>
	<head>
		<title>Projeto - Chat_01</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/message.png" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/template.css">
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/template_app.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
	</head>
	<body>

		<header class="header">
			<div class="header_user_info">
				<div class="header_user_info_center">
					<div class="header_user_img"><img src="assets/images/user_default.png" alt=""></div>
					<div class="header_user_name">
						<div class="header_user_tiny_texts"><?php echo $get_user_data['nome']; ?></div>
						<div class="header_user_tiny_texts">
							<div class="online_border"></div><?php echo $get_user_data['email']; ?>
						</div>
					</div>
				</div>
				<div class="user_button">
					<button
						onclick="modal_user()"
					>+</button>
				</div>
			</div>
			<div class="header_content">
				<div class="header_to">
					<div class="header_user_img">
						<img src="assets/images/user_default.png" alt="">
					</div>
					<div class="d">
						<div class="header_user_tiny_texts">Isaias Moura</div>
						<div class="header_user_tiny_texts">
							<div class="offline_border"></div>isaias@gmail.com
						</div>
					</div>
				</div>
				<div class="header_buttons">
					<button>Apagar Mensagens</button>
					<button>Fechar chat</button>
				</div>
			</div>
		</header>

		<div class="container">
			<?php $this->loadViewInTemplate($viewName,$viewData);?>
		</div>
		
	</body>
</html>