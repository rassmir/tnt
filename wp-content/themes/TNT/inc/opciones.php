<?php
    add_action('admin_menu', 'tnt_ajustes');

	function tnt_ajustes(){
		add_menu_page('TNT', 'TNT Ajustes', 'administrator', 'tnt_ajustes', 'tnt_opciones', '', 20);

		//llamar al registro de las opciones de nuestro tema

		add_action('admin_init', 'tnt_registrar_opciones');
	}

	function tnt_registrar_opciones() {
		//Registrar opciones, una por campo
		register_setting('animo_opciones_grupo', 'whatsapp');
		register_setting('animo_opciones_grupo', 'correo');
		register_setting('animo_opciones_grupo', 'facebook');
		register_setting('animo_opciones_grupo', 'twitter');
		register_setting('animo_opciones_grupo', 'instagram');
		register_setting('animo_opciones_grupo', 'youtube');
		register_setting('animo_opciones_grupo', 'linkedin');
		register_setting('animo_opciones_grupo', 'suscribes');
	}
	function tnt_opciones(){
		?>
			<div class="wrap">
				<form method = "post" action = "options.php">
					<?php settings_fields('animo_opciones_grupo'); ?>
					<?php do_settings_sections('animo_opciones_grupo'); ?>
					<br>
				 <h2>TNT Ajustes</h2>
					<table class="form-table">
                        <tr valign="top">
                            <th scope="row">Texto Subscribete</th>
                            <td><input style="width: 100%;" type="text" name="suscribes" value="<?php echo get_option('suscribes'); ?>"></td>
                        </tr>
						<tr valign="top">
							<th scope="row">Whatsapp</th>
							<td><input style="width: 100%;" type="text" name="whatsapp" value="<?php echo get_option('whatsapp'); ?>"></td>
						</tr>
						<tr valign="top">
							<th scope="row">Correo</th>
							<td><input style="width: 100%;" type="text" name="correo" value="<?php echo get_option('correo'); ?>"></td>
						</tr>
                        <tr valign="top">
                            <th scope="row">Link Facebook</th>
                            <td><input style="width: 100%;" type="text" name="facebook" value="<?php echo get_option('facebook'); ?>"></td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">Link Twitter</th>
                            <td><input style="width: 100%;" type="text" name="twitter" value="<?php echo get_option('twitter'); ?>"></td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">Link Instagram</th>
                            <td><input style="width: 100%;" type="text" name="instagram" value="<?php echo get_option('instagram'); ?>"></td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">Link Youtube</th>
                            <td><input style="width: 100%;" type="text" name="youtube" value="<?php echo get_option('youtube'); ?>"></td>
                        </tr>
                        <tr valign="top">
                            <th scope="row">Link Linkedin</th>
                            <td><input style="width: 100%;" type="text" name="linkedin" value="<?php echo get_option('linkedin'); ?>"></td>
                        </tr>
					</table>
					<br>
					<?php submit_button (); ?>
				</form>
			</div>
		<?php
	}
?>
