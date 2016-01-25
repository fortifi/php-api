<?php
namespace Fortifi\Api\V1\Definitions;

use Fortifi\Api\Core\ApiDefinition\ApiDefinition;
use Fortifi\Api\Core\ApiDefinition\TagDefinition;
use Fortifi\Api\Core\ApiDefinition\SecurityDefinition;
use Fortifi\Api\Core\ApiDefinition\DocumentationDefinition;

class FortifiApiDefinition  extends ApiDefinition
{
  public function __construct()
  {
    $this->setTitle('Fortifi API');
    $this->setVersion('1.0');
    $this->setDescription(<<<DESCRIPTION
The second version of the Fortifi API is an exciting step forward towards
making it easier for businesses to have open access to their data. We created it
so that you can improve your business flows, and interact with your customers
and data in more innovative ways.


Build something great!


Once you've
[registered your service account](http://yourdomain.fortifi.it/developers/service-accounts/) it's easy
to start requesting and posting data to and from Fortifi.


All endpoints are only accessible via https and are located at
`api.fortifi.io`. For instance: you can grab a list of all your companies
by accessing the following URL with your Access Token
(replace ACCESS_TOKEN with your own):
```
  https://api.fortifi.io/v1/companies?access_token=ACCESS_TOKEN
```

## Limits
Be nice. If you're sending too many requests too quickly, we'll send back a
`503` error code (server unavailable).
You are limited to 5000 requests per hour per `access_token`.


## Request Methods
We do our best to have all URLs
[RESTful](http://en.wikipedia.org/wiki/Representational_state_transfer).
Every endpoint (URL) may support one of four different http verbs. GET
requests fetch information about an object, POST requests create objects,
PUT requests update objects, and finally DELETE requests will delete
objects.


## Structure


### The Envelope
Every response is contained by an envelope. That is, each response has a
predictable set of keys with which you can expect to interact:
```json
{
    "meta": {
        "code": 200
    },
    "data": {
        ...
    }
}
```


#### META
The meta key is used to communicate extra information about the response to
the developer. If all goes well, you'll only ever see a code key with
value 200.
However, sometimes things go wrong, and in that case you might see a
response like:
```json
{
    "meta": {
        "type": "OAuthException",
        "code": 400,
        "message": "..."
    }
}
```

#### DATA
The data key is the meat of the response. It may be a list or dictionary,
but either way this is where you'll find the data you requested.
#### JSONP
If you're writing an AJAX application, and you'd like to wrap our response
with a callback, all you have to do is specify a callback parameter with
any API call:
```
https://api.fortifi.io/v1/companies?access_token=ACCESS_TOKEN&callback=callbackFunction
```
Would respond with:
```js
callbackFunction({
    ...
});
```
DESCRIPTION
    );
    $this->setTermsOfService('http://fortifi.co/legal/terms/api');
    $this->setHost('api.fortifi.io');
    $this->setBasePath('/v1');
    $this->setSchemas(['https']);
    $this->setConsumes(['application/json']);
    $this->setProduces(['application/json']);

    $docs = new DocumentationDefinition();
    $docs->setDescription('Find out more about the Fortifi api');
    $docs->setUrl('http://developers.fortifi.io/');
    $this->setDocumentation($docs);

    $tag = new TagDefinition();
    $tag->setDescription('');
    $tag->setName('Marketing');
    $this->addTag($tag);

    $tag = new TagDefinition();
    $tag->setDescription('');
    $tag->setName('Customers');
    $this->addTag($tag);

    $tag = new TagDefinition();
    $tag->setDescription('');
    $tag->setName('Entities');
    $this->addTag($tag);

    $tag = new TagDefinition();
    $tag->setDescription('');
    $tag->setName('Orders');
    $this->addTag($tag);

    $tag = new TagDefinition();
    $tag->setDescription('');
    $tag->setName('Custom Properties');
    $this->addTag($tag);

    $tag = new TagDefinition();
    $tag->setDescription('');
    $tag->setName('Contacts');
    $this->addTag($tag);

    $tag = new TagDefinition();
    $tag->setDescription('');
    $tag->setName('Polymers');
    $this->addTag($tag);

    $tag = new TagDefinition();
    $tag->setDescription('');
    $tag->setName('Messenger');
    $this->addTag($tag);

    $tag = new TagDefinition();
    $tag->setDescription('');
    $tag->setName('Products');
    $this->addTag($tag);

    $secDef = new SecurityDefinition();
    $secDef->setDescription('');
    $secDef->setAuthorizationUrl('https://api.fortifi.io/oauth/authorize');
    $secDef->setFlow('accessCode');
    $secDef->setIn('');
    $secDef->setName('');
    $secDef->addScope('basic','Basic Read Access');
    $secDef->addScope('visitor','Read/Write On Visitors');
    $secDef->addScope('customer','Read/Write On Customers');
    $secDef->addScope('customer.readonly','Read Only on Customers');
    $secDef->addScope('entity.properties','Read/Write On Entity Properties');
    $secDef->addScope('orders','Read/Write On Orders');
    $secDef->addScope('orders.readonly','Read Only On Orders');
    $secDef->addScope('products','Read/Write On Products');
    $secDef->addScope('paymentMethods','Read/Write On Payment Methods');
    $secDef->addScope('contact','Read/Write On Contacts');
    $secDef->addScope('polymer.readonly','Read Polymers');
    $secDef->addScope('polymer','Read/Write On Polymers');
    $secDef->addScope('product.readonly','Read Product Information');
    $secDef->addScope('product','Read/Write On Products');
    $secDef->setType('oauth2');
    $secDef->setTokenUrl('https://api.fortifi.io/oauth/token');
    $this->addSecurityDefinition($secDef);

    $secDef = new SecurityDefinition();
    $secDef->setDescription('');
    $secDef->setAuthorizationUrl('');
    $secDef->setFlow('');
    $secDef->setIn('query');
    $secDef->setName('access_token');
    $secDef->setType('apiKey');
    $secDef->setTokenUrl('');
    $this->addSecurityDefinition($secDef);

  }
}
      
