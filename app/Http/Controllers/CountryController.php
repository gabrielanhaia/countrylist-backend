<?php

namespace App\Http\Controllers;

use App\Country as CountryModel;
use Illuminate\Http\Request;

/**
 * Class CountryController
 * Controller de países expecífica da aplicação.
 *
 * @package App\Http\Controllers
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class CountryController extends Controller
{
    /**
     * Método reponsável por rendenizar a view de listagem de países.
     * @param CountryModel $countryModel Model de países.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(CountryModel $countryModel, Request $request)
    {
        $itensPerPage = $request->get('per_page') ?? 15;

        $countries = $countryModel
            ->orderBy('country_code')
            ->paginate($itensPerPage);


        return view('country.index')
            ->with('countries', $countries);
    }
}
