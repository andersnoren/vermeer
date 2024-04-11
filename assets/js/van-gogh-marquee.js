function Marquee( selector, speed ) {

	const parentSelector = document.querySelector( selector );
	const parentHTML     = parentSelector.innerHTML;
	const screenWidth    = window.innerWidth;

	// Add an inner div that will wrap the clones and will be animated across the screen.
	parentSelector.innerHTML = '<div class="slider">' + parentHTML + ' </div>';
	var parentSlider = parentSelector.children[0];

	// Build the HTML.
	let newInnerHTML = '<div>' + parentHTML + '&nbsp;</div>';
	parentSlider.innerHTML = newInnerHTML;

	// Clone the content until it's wide enough to cover the screen width.
	let sliderWidth = 0;
	while ( sliderWidth < screenWidth ) {
		sliderWidth = parentSlider.getBoundingClientRect().width;
		parentSlider.innerHTML += newInnerHTML;
	}

	// Animate the section.
	var children = parentSlider.children;
	let i = 0;

	setInterval( function() {
		for ( var child = 0; child < children.length; child++ ) {
			parentSlider.style.transform = `translateX( -${i}px )`;
		}
		if ( i > children[0].getBoundingClientRect().width ) {
			i = 0;
		}
		parentSlider.style.transform = `translateX( -${i}px )`;
		i += speed;
	}, 0 );
}

window.addEventListener( 'load', Marquee( '.is-style-van-gogh-marquee', .5 ) );