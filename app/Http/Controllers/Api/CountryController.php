<?php

namespace App\Http\Controllers\Api;

use App\Country as CountryModel;
use App\Http\Controllers\Controller;
use App\Http\Resources\CountryCollection;
use Illuminate\Http\Request;

/**
 * Class CountryController
 * Controller de países exclusiva da API.
 * @package App\Http\Controllers
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class CountryController extends Controller
{
    /**
     * Método responsável pelo recurso da API de listagem de países.
     * @param CountryModel $countryModel Model de paises (Recebida na controller via DI)
     * @param Request $request
     * @return CountryCollection
     */
    public function index(CountryModel $countryModel, Request $request)
    {
        $orderDescending = ((bool) $request->order_descending) ? 'desc' : 'asc';

        $contries = $countryModel
            ->orderBy('country_code', $orderDescending)
            ->get(['country_code', 'country_description']);

        return new CountryCollection($contries);
    }
}