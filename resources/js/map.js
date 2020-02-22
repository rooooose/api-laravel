console.log("cc");

import $ from 'jquery';

$(document).ready(function() {

	function country() {
		$(".country").click(function() {

			var name=$(this).attr("data-name");
			console.log(name);

			updateUrl(name);
		})

	}
	country();

	function updateUrl(newPage) {

		if (history.pushState) {
		    var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + newPage;
		    window.history.pushState({path:newurl},'',newurl);
		}
	}
	


});