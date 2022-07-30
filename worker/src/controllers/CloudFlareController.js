import {
    json,
    error,
    missing,
} from 'itty-router-extras'

/**
 * Export needed methods
 */
export default {
    async getMCCAnalytics() {
        let now = new Date().toISOString();
        let past = new Date(Date.now() - (86400 * 1000)).toISOString();

        const query = { query: `
          {
            viewer {
              zones(filter: {zoneTag: "${CF_ZONE}"}) {
                httpRequests1hGroups(orderBy: [datetime_ASC], limit: 1000, filter: {datetime_lt: "${now}", datetime_gt: "${past}"}) {
                  date: dimensions {
                    datetime
                  }
                  sum {
                    cachedRequests
                    requests,
                    cachedBytes,
                    bytes
                  }
                }
              }
            }
          }
        `,
        variables: {} }

        const response = await fetch(CF_URL, {
            method: 'POST',
            headers: {
                'X-AUTH-EMAIL': CF_EMAIL,
                'Authorization': `Bearer ${CF_TOKEN}`
            },
            body: JSON.stringify(query)
        })

        return response.ok ? json(await response.json()) : error(500, "Something went wrong")
    }
}