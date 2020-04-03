import $ from 'jquery';

//let pop = $('span.pop').attr("data-pop");

export default class Map_countries {

	constructor(){
		this.initEls();
		this.initEvents();
	}

	initEls () {

		let id = $('h2.name').attr("data-id");

		this.$els = {
			country: $("path[data-id='"+id+"']"),
			pop: $('span.pop'),
		};

	}

	initEvents() {

		this.$els.country.addClass('active');
		this.makeCircle();

	}

	makeCircle(){

		let pop_num = this.$els.pop.attr("data-pop");

	    this.$els.pop.css("width", Math.log(pop_num)*10 + "px");
	    this.$els.pop.css("height", Math.log(pop_num)*10 + "px");

	}

}