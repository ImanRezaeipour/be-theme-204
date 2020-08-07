<?php
if( ! defined( 'ABSPATH' ) ){
	exit; // Exit if accessed directly
}
?>

<div id="mfn-dashboard" class="wrap about-wrap">

	<?php include_once LIBS_DIR . '/admin/templates/parts/header.php'; ?>
	
	<div class="dashboard-tab register">
	
		<div class="col col-left">
			
			<?php if( mfn_is_registered() ): ?>
			
				<h3 class="primary"><?php esc_html_e( 'Theme is registered', 'mfn-opts' ); ?></h3>
			
				<form class="form-register form-deregister" method="post">
					
					<?php settings_fields( 'betheme_registration' ); ?>
					
					<p>
						<code><?php echo esc_html( mfn_get_purchase_code_hidden() ); ?></code>
					</p>
				
					
					
					<?php if( WHITE_LABEL ): ?>
						<p class="question"><?php _e( 'This feature is disabled in White Label mode.', 'mfn-opts' );?></p>
					<?php else: ?>
						<p class="question">
							<span><?php esc_html_e( 'Are you sure you want to deregister the theme?', 'mfn-opts' ); ?></span>
							<a class="mfn-button cancel" target="_blank" href="#"><?php esc_html_e( 'Cancel', 'mfn-opts' ); ?></a>
							<input type="submit" class="mfn-button mfn-button-primary" name="deregister" value="<?php echo esc_attr( __( 'Deregister', 'mfn-opts' ) ); ?>" />
						</p>
					<?php endif; ?>
				
				</form>
				
				<?php if( ! WHITE_LABEL ): ?>
				
					<h3><?php esc_html_e( 'Buy license', 'mfn-opts' ); ?></h3>	
							
					<p><?php esc_html_e( 'If you need another license for new website', 'mfn-opts' ); ?></p>
					
					<a class="mfn-button mfn-button-secondary" target="_blank" href="https://www.rtl-theme.com/%d9%82%d8%a7%d9%84%d8%a8-%d9%88%d8%b1%d8%af%d9%be%d8%b1%d8%b3-%d8%a8%db%8c-%d8%aa%d9%85-betheme/?aff=TopTheme"><?php esc_html_e( 'Purchase new license', 'mfn-opts' ); ?></a>
				
				<?php endif; ?>
				
			<?php else: ?>
			
				<h3 class="primary">Theme Registration</h3>
			
				<?php if( is_super_admin() ): ?>
				
					<form class="form-register" method="post">
					
						<?php settings_fields( 'betheme_registration' ); ?>
						
						<p>
							<input type="text" placeholder="Paste your purchase code here" id="betheme_purchase_code" class="of-input" name="betheme_purchase_code" value="" size="36">
						</p>
						
						<p>
							<input type="submit" class="mfn-button mfn-button-primary mfn-button-fw" name="register" value="<?php echo esc_attr( __( 'Register Theme', 'mfn-opts' ) ); ?>" />
						</p>

					</form>
					
					<p><strong>Where can I find my purchase code?</strong></p>
						
					<ol>
						<li>Please go to <a target="_blank" href="https://themeforest.net/downloads">ThemeForest.net/downloads</a></li>
						<li>Click the <strong>Download</strong> button in BeTheme row</li>
						<li>Select <strong>License Certificate & Purchase code</strong></li>
						<li>Copy <strong>Item Purchase Code</strong></li>
					</ol>	
						
					<h3>Buy license</h3>	
						
					<p>If you do not have license or need another one for new website</p>
					
					<a class="mfn-button mfn-button-secondary" target="_blank" href="https://themeforest.net/item/betheme-responsive-multipurpose-wordpress-theme/7758048?ref=muffingroup&license=regular&open_purchase_for_item_id=7758048">Purchase new license</a>
				
				<?php else: ?>
			
					<p>Plase login as administrator and register your theme.</p>
				
				<?php endif; ?>
			
			<?php endif; ?>	
			
			<p class="box">
				<strong>توجه</strong> یک لایسنس <a target="_blank" href="https://rtl-theme.com/">خریداری شده از راستچین</a> فقط برای <strong>یک وب سایت</strong> معتبر است. <br />
				اگر نیاز به انتقال وب سایت دارید به کمک لینکی که هنگام فعالسازی قالب به شما داده شده این قالب را غیر فعال و دوباره روی دامنه جدید اقدام به قعال سازی کنید.
			</p>	
			
		</div>
		
		<div class="col col-right">
			
			<h3><?php esc_html_e( 'System Status', 'mfn-opts' ); ?></h3>
			
			<?php include_once LIBS_DIR . '/admin/templates/parts/mini-status.php'; ?>

			<h3>لینک های مفید</h3>
			
			<ul class="links">
				<li><a href="https://www.rtl-theme.com/author/TopTheme?aff=TopTheme"><?php esc_html_e( 'Toptheme', 'mfn-opts' ); ?></a></li>
				<li><a href="admin.php?page=be-plugins"><?php esc_html_e( 'Install Plugins', 'mfn-opts' ); ?></a></li>
				<li><a href="admin.php?page=be-websites"><?php esc_html_e( 'Pre-built websites', 'mfn-opts' ); ?></a></li>		
				<li><a href="admin.php?page=be-options"><?php esc_html_e( 'Theme Options', 'mfn-opts' ); ?></a></li>
				<li><a href="https://www.rtl-theme.com/?aff=TopTheme"><?php esc_html_e( 'RTL-THEME', 'mfn-opts' ); ?></a></li>
				
			</ul>

		</div>

	</div>
	
</div>
