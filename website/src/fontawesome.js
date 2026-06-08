// Vue font awesome
import {
    FontAwesomeIcon,
    FontAwesomeLayers,
} from '@fortawesome/vue-fontawesome'
import { library } from '@fortawesome/fontawesome-svg-core'

// Brands
import {
    faDiscord,
    faGithub,
    faLinkedin,
} from '@fortawesome/free-brands-svg-icons'
library.add(faDiscord, faGithub, faLinkedin)

// Solid
import { faHouse, faEnvelope } from '@fortawesome/free-solid-svg-icons'
library.add(faHouse, faEnvelope)
// Export
export { FontAwesomeIcon, FontAwesomeLayers }
