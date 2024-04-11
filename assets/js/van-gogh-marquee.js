class Marquee {

	constructor( marquee, options ) {

		var marqueeInstance = this;

		const defaultOptions = {
			speed: .5,
		};

		this.options = {
			...defaultOptions,
			...options
		};

		this.marquee      = marquee;
		this.marqueeHTML  = this.marquee.innerHTML;

		// Construct the HTML used for the marquee.
		this.build();

		// Animate the marquee.
		this.animate();

		// On screen resize, do it again.
		window.addEventListener( 'resize', function() {
			marqueeInstance.build();
			marqueeInstance.animate();
		} );

	}

	// Construct the HTML used for the marquee.
	build() {

		const screenWidth = window.innerWidth;

		// Add an inner div that will wrap the clones and will be animated across the screen.
		this.marquee.innerHTML = '<div class="slider">' + this.marqueeHTML + ' </div>';
		var slider = this.marquee.children[0];

		// Build the HTML.
		let newInnerHTML = '<div>' + this.marqueeHTML + '&nbsp;</div>';
		slider.innerHTML = newInnerHTML;

		// Clone the content until it's wide enough to cover the screen width.
		let sliderWidth = 0;
		while ( sliderWidth < screenWidth ) {
			sliderWidth = slider.getBoundingClientRect().width;
			slider.innerHTML += newInnerHTML;
		}

	}

	// Animate the marquee.
	animate() {

		// Animate the section.
		var slider = this.marquee.children[0];
		var children = slider.children;
		let i = 0;

		var speed = this.options.speed;

		setInterval( function() {
			for ( var child = 0; child < children.length; child++ ) {
				slider.style.transform = `translateX( -${i}px )`;
			}
			if ( i > children[0].getBoundingClientRect().width ) {
				i = 0;
			}
			slider.style.transform = `translateX( -${i}px )`;
			i = i + speed;
		}, 0 );
		
	}

}

window.addEventListener( 'load', function() {
	newMarquee = new Marquee( document.querySelector( '.is-style-van-gogh-marquee' ) );
} );