<?php namespace App\Http\Controllers;

use Artisan;
use Response;
use Request;
use Redirect;
use Auth;
use View;
use Input;
use Session;
use App\Models\Account;
use App\Libraries\Utils;
use App\Ninja\Mailers\Mailer;
use Symfony\Component\Security\Core\Util\StringUtils;

class HomeController extends BaseController
{
    protected $mailer;

    public function __construct(Mailer $mailer)
    {
        parent::__construct();

        $this->mailer = $mailer;
    }

    public function showIndex()
    {
        Artisan::call('cache:clear',array());
       // Artisan::call('Cache:clear',array());
        Session::reflash();
        
        if (!Utils::isNinja() && (!Utils::isDatabaseSetup() || Account::count() == 0)) {
            return Redirect::to('/setup');
        } elseif (Auth::check()) {
            return Redirect::to('/dashboard');
        } else {
            return Redirect::to('/login');
        }
    }

    public function showTerms()
    {
        return View::make('public.terms', ['hideHeader' => true]);
    }
    
    public function invoiceNow()
    {
        if (Auth::check() && Input::get('new_company')) {
            Session::put(PREV_USER_ID, Auth::user()->id);
            Auth::user()->clearSession();
            Auth::logout();
        }

        if (Auth::check()) {
            $redirectTo = Input::get('redirect_to', 'invoices/create');
            return Redirect::to($redirectTo)->with('sign_up', Input::get('sign_up'));
        } else {
            return View::make('public.header', ['invoiceNow' => true]);
        }
    }

    public function newsFeed($userType, $version)
    {
        $response = Utils::getNewsFeedResponse($userType);

        return Response::json($response);
    }

    public function hideMessage()
    {
        if (Auth::check() && Session::has('news_feed_id')) {
            $newsFeedId = Session::get('news_feed_id');
            if ($newsFeedId != NEW_VERSION_AVAILABLE && $newsFeedId > Auth::user()->news_feed_id) {
                $user = Auth::user();
                $user->news_feed_id = $newsFeedId;
                $user->save();
            }
        }
        
        Session::forget('news_feed_message');

        return 'success';
    }

    public function logError()
    {
        return Utils::logError(Input::get('error'), 'JavaScript');
    }

    public function keepAlive()
    {
        return RESULT_SUCCESS;
    }
}
