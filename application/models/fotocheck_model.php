<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Fotocheck_model extends CI_MODEL {

	function only_query($query) {
		$result = $this->db->query($query);
		return $result;
	}

}

?>