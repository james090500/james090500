import { Router } from 'itty-router'
import { withParams, missing } from 'itty-router-extras'

//Controllers
import CloudFlareController from './controllers/CloudFlareController'

// Load the router
const parentRouter = Router()
const v1Api = Router({ base: '/api/v1' })

// The routes
v1Api.get('/minecraftcapes-analytics', CloudFlareController.getMCCAnalytics)

// All other routers
// router.options('*', handleCors())
parentRouter
    .all('/api/v1/*', v1Api.handle)
    .all('*', () => missing('Not Found'))

//Export the router;
export default parentRouter;