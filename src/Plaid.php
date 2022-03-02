<?php

namespace TallSaas\Plaid;

use TallSaas\Plaid\Exceptions\PlaidException;
use Illuminate\Support\Facades\Http;

class Plaid {
  
  private $sandbox;
  private $access_token;

  private $supported_endpoints = [
    'link.token.create' => 'link/token/create',
  ];

  public function __construct(string $access_token = null, bool $sandbox = false)
  {
    $this->access_token = $access_token;
    $this->sandbox = $sandbox;
  }

  private function api(string $endpoint, string $method = 'GET', array $args = [])
  {
    $endpoint_key = $endpoint;
    if (!($endpoint = $this->supported_endpoints[$endpoint_key] ?? false)) :
      throw new PlaidException("Unsupported API endpoint key \"{$endpoint_key}\"");
    endif;
    
    $api_host = $this->sandbox ? 'sandbox' : (\App::environment('production') ? 'production' : 'development');
    $api_host = "https://{$api_host}.plaid.com";
    
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
  public function linkTokenCreate(string $webhook_url = null, string $redirect_url = null)
  {
    $webhook_url  = $webhook_url  ?? route('tallsaas.budget.dashboard'); //route('tallsaas.plaid::webook');
    $redirect_url = $redirect_url ?? route('tallsaas.budget.dashboard'); //route('tallsaas.plaid::authenticate');

    $response = $this->api(
      endpoint: 'link.token.create',
      method: 'POST',
      args: [
        'client_id'     => env('PLAID_CLIENT_ID'),
        'secret'        => env('PLAID_SECRET_KEY'),
        'client_name'   => env('APP_NAME'),
        'products'      => ['auth'],
        'country_codes' => ['CA', 'US'],
        'language'      => 'en',
        'webhook'       => $webhook_url,
        'redirect_uri'  => $redirect_url,
        'user'          => ['client_user_id' => 'user-id'],
      ]
    );

    return $response['link_token'];
  }
}