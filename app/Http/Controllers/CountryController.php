<?php

namespace App\Http\Controllers;

use App\Country as CountryModel;
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
     */
    public function index(CountryModel $countryModel)
    {

    }
}
