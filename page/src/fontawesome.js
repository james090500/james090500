// Vue font awesome
import { FontAwesomeIcon, FontAwesomeLayers } from '@fortawesome/vue-fontawesome'
import { library } from '@fortawesome/fontawesome-svg-core'

// Brands
import {
    faDiscord, faPaypal
} from '@fortawesome/free-brands-svg-icons';
library.add(faDiscord, faPaypal);

// Solid
import {
    faHouse
} from '@fortawesome/free-solid-svg-icons'
library.add(
    faHouse
);
// Export
export { FontAwesomeIcon, FontAwesomeLayers };