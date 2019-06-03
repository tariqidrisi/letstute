<?php

namespace App\Http;

use App\Http\Category;

class helper {
	function categories() {
		$categories = Category::get();
		dd($categories);
	}
}

?>