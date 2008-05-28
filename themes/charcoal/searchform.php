<form method="get" id="search-form" action="<?php URL::out('display_search'); ?>">
	<input type="text" name="criteria" id="search-box" value="<?php if ( isset( $criteria ) ) { echo htmlentities($criteria, ENT_COMPAT, 'UTF-8');} else { printf( _t("Search %s"), Options::get("title") );}  ?>" onfocus="if (this.value == '<?php printf( _t("Search %s"), Options::get("title") ); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php printf( _t("Search %s"), Options::get("title") ); ?>';}" >
	<input type="submit" id="search-btn" value="" title="<?php _e( "Go" ); ?>">
</form>
