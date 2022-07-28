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
        const query = { query: `
        {
            viewer {
              zones(filter: {zoneTag: "${CF_ZONE}"}) {
                httpRequests1dGroups(orderBy: [date_ASC], limit: 1000, filter: {date_gt: "2022-06-28"}) {
                  date: dimensions {
                    date
                  }
                  sum {
                    cachedBytes
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