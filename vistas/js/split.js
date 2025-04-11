// Autor: Jesús Miguel Campos Correia
document.addEventListener("DOMContentLoaded", function () {
	var text = $(".split");
	gsap.registerPlugin(SplitText);
	var text = document.querySelector(".split");
	var split = new SplitText(text, { type: "chars" });
	function random(min, max) {
		return (Math.random() * (max - min)) + min;
	}

	$(split.chars).each(function (i) {
		TweenMax.from($(this), 5, {
			opacity: 0,
			x: random(-500, 500),
			y: random(-500, 500),
			z: random(-500, 500),
			scale: .1,
			delay: i * .00,
			yoyo: true,
			repeat: -1,
			repeatDelay: 3000
		});
	});
});
