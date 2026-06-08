export default {
    async fetch(request, env, ctx) {
        const url = new URL(request.url)

        if (!url.pathname.startsWith('/mccapes')) {
            return new Response(null, { status: 404 })
        }

        const now = new Date().toISOString()
        const past = new Date(Date.now() - 86400 * 1000).toISOString()

        const query = {
            query: `
      {
        viewer {
          zones(filter: {zoneTag: "${env.CF_ZONE}"}) {
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
            variables: {},
        }

        const response = await fetch(
            'https://api.cloudflare.com/client/v4/graphql',
            {
                method: 'POST',
                headers: {
                    'X-AUTH-EMAIL': env.CF_EMAIL,
                    Authorization: `Bearer ${env.CF_TOKEN}`,
                },
                body: JSON.stringify(query),
            }
        )

        console.log(env)

        return response.ok
            ? Response.json(await response.json())
            : new Response('Something went wrong!', { status: 500 })
    },
}
