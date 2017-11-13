const root = document.documentElement;
const .site-title = document.querySelector('h1');

function getAngleFromOppositeAdjacent(top, left) {
	return Math.atan(top/left) * 180/Math.PI;
}

document.addEventListener('mousemove', (evt) => {
	let x = evt.clientX / innerWidth;
	let y = evt.clientY / innerHeight;
	
	// Center of the page
	const center = {
		top: innerHeight / 2,
		left: innerWidth / 2,
	};
	
	// distance from the center to the mouse cursor
	const actual = {
		left: evt.clientX - center.left,
		top: evt.clientY - center.top,
	};
	
	// get the angle from the opposite/adjacent. Trigonometry!
	let angle = getAngleFromOppositeAdjacent(actual.top, actual.left);
	
	angle += (actual.left >= 0) ? 90 : 270;
	
	root.style.setProperty('--bearing', angle);
	root.style.setProperty('--top', actual.top *= -1);
	root.style.setProperty('--left', actual.left *= -1);
	root.style.setProperty('--mouse-x', x);
	root.style.setProperty('--mouse-y', y);

});