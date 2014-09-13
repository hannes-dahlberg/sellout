<nav id="navbar-example" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo $server_address;?>"><?php echo __('page_title')?></a>
		</div>
		<div style="height: 1px;" class="navbar-collapse bs-example-js-navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<?php
				foreach($main_menu as $index => $menu_item) {
					if(isset($menu_item['menu'])) {
						?>
						<li class="dropdown">
							<a id="main_menu_<?php echo $index;?>" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menu_item['title'];?></a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="main_menu_<?php echo $index;?>">
								<?php
								foreach($menu_item['menu'] as $submenu_item) {
									if (isset($submenu_item['divider'])) {
										?>
										<li role="presentation" class="divider"></li>
										<?php
									} else {
										?>
										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="<?php echo $server_address;?>?dispatch=<?php echo $submenu_item['name'];?>"><?php echo $submenu_item['title'];?></a>
										</li>
										<?php	
									}									
								}
								?>
							</ul>
						</li>
						<?php
					} else {
						?>
						<li>
							<a href="<?php echo $server_address;?>?dispatch=<?php echo $menu_item['name'];?>"><?php echo $menu_item['title'];?></a>
						</li>
						<?php
					}
				}
				?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a id="login_menu" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('account_menu_title');?></a>
					<div class="dropdown-menu" style="padding: 17px; width: 300px;">
						<form class="form" method="post" action="<?php echo $server_address;?>?dispatch=account.login">
							<div class="form-group">
								<input class="form-control" type="email" name="username" placeholder="Email" />
							</div>
							<div class="form-group">
								<input class="form-control" type="password" name="password" placeholder="Password" />
							</div>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
						<br />
						<a href="<?php echo $server_address;?>?dispatch=account.recover">Forgot password</a>
						|
						<a href="<?php echo $server_address;?>?dispatch=account.register">Register</a>
					</div>
				</li>
			</ul>
		</div><!-- /.nav-collapse -->
	</div><!-- /.container-fluid -->
</nav>