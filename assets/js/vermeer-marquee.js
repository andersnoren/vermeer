class Marquee {

	constructor( marquee, options ) {

		if ( marquee == null ) return;

		let mInst = this;

		const defaultOptions = {
			direction: 'left',
			speed: .5,
		};

		mInst.options = {
			...defaultOptions,
			...options
		};

		mInst.marquee      = marquee;
		mInst.marqueeHTML  = mInst.marquee.innerHTML;

		// Construct the HTML used for the marquee.
		mInst.build();

		// If the visitor is set to reduce motion, disable animations.
		if ( window.matchMedia( '(prefers-reduced-motion)' ).matches ) return;

		// Animate the marquee.
		mInst.animate();

		// On screen width resize end, rebuild and restart the marquee.
		var resizeEndCounter;
		var prevWinWidth = window.innerWidth;
		window.addEventListener( 'resize', function() {

			// Check that the window width has changed.
			if ( prevWinWidth == window.innerWidth ) return;
			prevWinWidth = window.innerWidth;

			mInst.marquee.style.opacity = 0;

			clearTimeout( resizeEndCounter );
			
			resizeEndCounter = setTimeout( function() {
				
				// Set the new starting point of the slider to the current X position of the slider.
				mInst.startingX = mInst.newX;

				// Clear the current interval animating the slider.
				clearInterval( mInst.animateInterval );

				// Rebuild and reanimate.
				mInst.build();
				mInst.animate();

				mInst.startingX = null;
				mInst.marquee.style.opacity = 1;

			}, 500 );
		} );

	}

	// Construct the HTML used for the marquee.
	build() {

		let mInst = this;

		const marqueeWidth = mInst.marquee.getBoundingClientRect().width;

		// Wrap the clones in a div that the animation will be applied to.
		mInst.marquee.innerHTML = '<div class="slider">' + mInst.marqueeHTML + ' </div>';
		let slider             = mInst.marquee.children[0];

		// Build the HTML.
		let newInnerHTML = '<div>' + mInst.marqueeHTML + '&nbsp;</div>';
		slider.innerHTML = newInnerHTML;

		// Clone the content until it's wide enough to cover the marquee.
		let sliderWidth = 0;
		while ( sliderWidth < marqueeWidth ) {
			sliderWidth = slider.getBoundingClientRect().width;
			slider.innerHTML += newInnerHTML;
		}

		// Add a class indicating the marquee has been built.
		mInst.marquee.classList.add( 'marquee-initialized' );
		
	}

	// Animate the marquee.
	animate() {

		let mInst     = this;

		let dir       = mInst.options.direction;
		let speed     = dir == 'left' ? mInst.options.speed : ( -1 * mInst.options.speed );

		let slider    = mInst.marquee.querySelector( '.slider' );
		let children  = slider.children;

		// Check if there's a starting position set.
		mInst.newX    = mInst.startingX != null ? mInst.startingX : 0;

		mInst.animateInterval = setInterval( function() {

			let childWidth = children[0].getBoundingClientRect().width;

			// Calculate the new position and check if it's out of bounds, based on the direction.
			if ( dir == 'left' ) {
				mInst.newX = mInst.newX + speed;
				if ( mInst.newX > childWidth ) {
					mInst.newX = 0;
				}
			} else {
				mInst.newX = mInst.newX - speed;
				if ( mInst.newX > 0 ) {
					mInst.newX = ( -1 * childWidth );
				}
			}

			// Set the new position.
			let translateX         = ( dir == 'left' ) ? -1 * mInst.newX : mInst.newX;
			slider.style.transform = `translateX( ${translateX}px )`;

		}, 0 );
		
	}

}

// Initialize the marquees.
window.addEventListener( 'load', function() {

	let marquees = document.querySelectorAll( '[class*="is-style-vermeer-marquee"]' );

	if ( marquees.length ) {
		marquees.forEach( function( marquee ) {
			new Marquee( marquee, {
				direction: marquee.classList.contains( 'is-style-vermeer-marquee-left' ) ? 'left' : 'right',
			} );
		} );
	}

} );