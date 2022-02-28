<?php

namespace TallSaas\Plaid\Models;

use Illuminate\Database\Eloquent\Model;

class PlaidConnector extends Model {
  public $fillable = ['access_token'];
}