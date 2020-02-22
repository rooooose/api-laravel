console.log("cc");

import $ from 'jquery';

$(document).ready(function($) {
	function country() {
		$(".country").click(function() {
			var name=$(this).attr("data-name");
			console.log(name);
		})

	}
country();
});