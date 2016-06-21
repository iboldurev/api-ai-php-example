Api.ai php demo
===============

This is an interactive demo using the [iboldurev/api-ai-php][1] sdk.

- You should create a [api.ai][2] account before run the demo.
- Make sure to install dependencies with composer before running the demo.

All these demos are built with the [symfony/console][3] component and should be used with a CLI.

Query demo
----------

```bash
$ php demo.php api:query <access_token>
>>> Hello
+ Response body :
{
    "id": "9cd3a070-65ee-42f5-b6fe-4113e49ea3e3",
    "timestamp": "2016-06-21T11:45:59.257Z",
    "result": {
        "source": "agent",
        "resolvedQuery": "Hello",
        "contexts": [],
        "metadata": [],
        "fulfillment": {
            "speech": ""
        },
        "score": 0
    },
    "status": {
        "code": 200,
        "errorType": "success"
    },
    "sessionId": "00000000-0000-0000-0000-000000000000"
}
>>> 
```

[1]: https://github.com/iboldurev/api-ai-php
[2]: https://api.ai/
[3]: http://symfony.com/doc/current/components/console/introduction.html
