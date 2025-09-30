import './bootstrap';

// Import Bootstrap CSS
import '../sass/bootstrap.scss';

// Import FontAwesome CSS
import '@fortawesome/fontawesome-free/css/all.css';

// Import AOS styles and script
import 'aos/dist/aos.css';
import AOS from 'aos';

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap';

document.addEventListener('DOMContentLoaded', () => {
	AOS.init({
		duration: 900,
		easing: 'ease-out-quart',
		once: true,
		offset: 120,
	});
});
