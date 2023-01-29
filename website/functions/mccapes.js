export async function onRequestGet(context) {
    let now = new Date().toISOString();
    let past = new Date(Date.now() - (86400 * 1000)).toISOString();

    const query = { query: `
      {
        viewer {
          zones(filter: {zoneTag: "${context.env.CF_ZONE}"}) {
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

    const response = await fetch(context.env.CF_URL, {
        method: 'POST',
        headers: {
            'X-AUTH-EMAIL': context.env.CF_EMAIL,
            'Authorization': `Bearer ${context.env.CF_TOKEN}`
        },
        body: JSON.stringify(query)
    })

    return response.ok ?  Response.json(await response.json()) : new Response("Something went wrong!", { status: 500 });
}