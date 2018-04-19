<?php

namespace App\Http\Controllers;

use App\Country as CountryModel;
use App\Http\Resources\Country as CountryResource;
use App\Http\Resources\CountryCollection;
use Illuminate\Http\Request;

/**
 * Class CountryController
 * @package App\Http\Controllers
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class CountryController extends Controller
{
    /**
     * M�todo respons�vel pelo recurso da API de listagem de pa�ses.
     * @param CountryModel $countryModel Model de paises (Recebida na controller via DI)
     * @param Request $request
     * @return CountryResource
     */
    public function index(CountryModel $countryModel, Request $request)
    {
        $orderDescending = (bool) $request->order_descending;

        $contries = $countryModel
            ->all()
            ->sortBy('country_code', SORT_REGULAR, $orderDescending);

        return new CountryCollection($contries);
    }
}