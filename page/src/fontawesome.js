// Vue font awesome
import { FontAwesomeIcon, FontAwesomeLayers } from '@fortawesome/vue-fontawesome'
import { library } from '@fortawesome/fontawesome-svg-core'

// Brands
import {
    faDiscord, faGithub, faPaypal
} from '@fortawesome/free-brands-svg-icons';
library.add(faDiscord, faPaypal, faGithub);

// Solid
import {
    faHouse, faEnvelope,
} from '@fortawesome/free-solid-svg-icons'
library.add(faHouse, faEnvelope);
// Export
export { FontAwesomeIcon, FontAwesomeLayers };