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
     * Método responsável pelo recurso da API de listagem de países.
     * @param CountryModel $countryModel Model de paises (Recebida na controller via DI)
     */
    public function index(CountryModel $countryModel)
    {

    }
}
