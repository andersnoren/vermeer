function Marquee( selector, speed ) {
	const parentSelector = document.querySelector(selector);
	const parentHTML     = parentSelector.innerHTML;

	// Build html
	parentSelector.innerHTML = '<div>' + parentHTML + '&nbsp;</div>' + '<div>' + parentHTML + '&nbsp;</div>' + '<div>' + parentHTML + '&nbsp;</div>';

	const children = parentSelector.children;
	
	let i = 0;

	setInterval( function() {
		for ( var child = 0; child < children.length; child++ ) {
			children[child].style.transform = `translateX( -${i}px )`;
		}
		if ( i > children[0].clientWidth ) {
			i = 0;
		}
		i = i + speed;
	}, 0 );
}

window.addEventListener( 'load', Marquee( '.is-style-van-gogh-marquee', .25 ) );
