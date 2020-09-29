<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller{

    /**
     * Get a JWT via given credentials.
     *
     * @Post("/login")
     * @Transaction({
     *     @Request({"phone": "11912345678", "password": "foo-bar"}),
     *     @Response(200, body={"access_token": "your_generated_token", "token_type": "bearer", "expires_in": 3600}),
     *     @Response(401, body={"message": "Unauthorized", "status_code": 401 })
     * })
     *
     * @param Request $request
     * @return \Dingo\Api\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'email'    => ['required', 'email'],
            'password' => 'required',
        ]);

        $credentials = $request->only(['email', 'password']);
        if (!$token = auth()->attempt($credentials)) {
            return $this->response->errorUnauthorized();
        }

        return $this->respondWithToken($token);
    }


    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return \Dingo\Api\Http\Response
     */
    protected function respondWithToken($token)
    {
        return $this->response->array([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory()->getTTL() * 60,
        ]);
    }
}

