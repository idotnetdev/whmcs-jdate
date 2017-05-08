<?php

	function smarty_modifier_digi_jdate($whmcs_date, $format="Y/m/d") {
		$folder_level = '';

		if (!function_exists( 'jdate' )) {
			include_once( $folder_level . 'modules/addons/digi_date/includes/jdf.php' );
		}
        
        $digi_formate = $format; //'Y/m/d';

        if ($whmcs_date !== '-') {
            if (strpos( $whmcs_date, ':' ) !== false) {
                $digi_formate = $digi_formate . ' - H:i';
            }

            $shmasi = jdate( $digi_formate, strtotime( $whmcs_date ), '' );
        }


        if (false) {
            echo '(' . $whmcs_date . ') ';
        }

        return $shmasi;
	}

?>
