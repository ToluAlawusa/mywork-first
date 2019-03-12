<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('email_manager');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function signIn()
    {
        if (session_status() == PHP_SESSION_NONE) {
          session_start();
        }

        // Initialize the OAuth client
        $oauthClient = new \League\OAuth2\Client\Provider\GenericProvider([
          'clientId'                => env('OAUTH_APP_ID'),
          'clientSecret'            => env('OAUTH_APP_PASSWORD'),
          'redirectUri'             => env('OAUTH_REDIRECT_URI'),
          'urlAuthorize'            => env('OAUTH_AUTHORITY').env('OAUTH_AUTHORIZE_ENDPOINT'),
          'urlAccessToken'          => env('OAUTH_AUTHORITY').env('OAUTH_TOKEN_ENDPOINT'),
          'urlResourceOwnerDetails' => '',
          'scopes'                  => env('OAUTH_SCOPES')
        ]);

        // Output the authorization endpoint
        echo 'Auth URL: '.$oauthClient->getAuthorizationUrl();
        exit();
      
    }

    // public function gettoken()
    // {
    //   if (session_status() == PHP_SESSION_NONE) {
    //     session_start();
    //   }

    //   // Authorization code should be in the "code" query param
    //   if (isset($_GET['code'])) {
    //     // Check that state matches
    //     if (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth_state'])) {
    //       exit('State provided in redirect does not match expected value.');
    //     }

    //     // Clear saved state
    //     unset($_SESSION['oauth_state']);

    //     // Initialize the OAuth client
    //     $oauthClient = new \League\OAuth2\Client\Provider\GenericProvider([
    //       'clientId'                => env('OAUTH_APP_ID'),
    //       'clientSecret'            => env('OAUTH_APP_PASSWORD'),
    //       'redirectUri'             => env('OAUTH_REDIRECT_URI'),
    //       'urlAuthorize'            => env('OAUTH_AUTHORITY').env('OAUTH_AUTHORIZE_ENDPOINT'),
    //       'urlAccessToken'          => env('OAUTH_AUTHORITY').env('OAUTH_TOKEN_ENDPOINT'),
    //       'urlResourceOwnerDetails' => '',
    //       'scopes'                  => env('OAUTH_SCOPES')
    //     ]);

    //     try {
    //       // Make the token request
    //       $accessToken = $oauthClient->getAccessToken('authorization_code', [
    //         'code' => $_GET['code']
    //       ]);

    //       echo 'Access token: '.$accessToken->getToken();
    //     }
    //     catch (League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
    //       exit('ERROR getting tokens: '.$e->getMessage());
    //     }
    //     exit();
    //   }
    //   elseif (isset($_GET['error'])) {
    //     exit('ERROR: '.$_GET['error'].' - '.$_GET['error_description']);
    //   }
    // }
}
