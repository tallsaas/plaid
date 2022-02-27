<?php

namespace TallSaas\Plaid;

use Illuminate\Support\Facades\Http;

class Plaid {
  
  private $sandbox;
  private $access_token;
  private $redirect_uri;

  public function __construct(string $access_token = null, array $options = [])
  {
    $this->access_token = $access_token;
    $this->sandbox = $options['sandbox'] ?? false;
    $this->redirect_uri = $options['redirect_uri'] ?? route('');
  }

  private function api(string $endpoint, string $method = 'GET', array $args = [])
  {
    $api_host = $this->sandbox ? 'https://sandbox.plaid.com' : 'https://api.plaid.com';
    
    $request = Http::withHeaders(['Content-Type' => 'application/json']);

    switch ($method) :

      case 'GET' :
        $response = $request->get("{$api_host}/{$endpoint}", $args);
        break;
      
      case 'POST' :
        $response = $request->post("{$api_host}/{$endpoint}", $args);
        break;

    endswitch;

    return $response;
  }

  // https://plaid.com/docs/api/tokens/#linktokencreate
  public function tokensCreate()
  {
    /*
    curl -X POST https://sandbox.plaid.com/link/token/create \
    -H 'Content-Type: application/json' \
    -d '{
      "client_id": "CLIENT_ID",
      "secret": "SECRET",
      "client_name": "Plaid Test App",
      "user": { "client_user_id": "user-id" },
      "products": ["auth"],
      "country_codes": ["US"],
      "language": "en",
      "webhook": "https://webhook.example.com",
      "redirect_uri": "https://domainname.com/oauth-page.html",
    }'
    */
  }

  // https://plaid.com/docs/api/institutions/#institutionsget_by_id
  public function institution(string $institution_id)
  {
    /*
    curl -X POST https://sandbox.plaid.com/institutions/get_by_id \
    -H 'Content-Type: application/json' \
    -d '{
      "institution_id": "ins_109512",
      "client_id": String,
      "secret": String,
      "country_codes": Array
    }'
    */
  }

  // https://plaid.com/docs/api/institutions/#institutionssearch
  public function institutionsSearch(string $search)
  {
    /*
    curl -X POST https://sandbox.plaid.com/institutions/search \
    -H 'Content-Type: application/json' \
    -d '{
      "query": "Gingham",
      "products": ["transactions"],
      "client_id": String,
      "secret": String,
      "country_codes": ["US"]
    }' 
    */
  }
}