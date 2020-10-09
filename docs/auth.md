# Ithium 

# Authentication [/auth]

## Get a JWT via given credentials. [POST /auth/login]

 + Request (application/json)
    + Body
        {
            "email": "email@example.com",
            "password": "foo-bar"
        }

 + Response 200 (application/json)
    + Body
        {
            "access_token": "your_generated_token",
            "token_type": "bearer",
            "expires_in": 3600
        }

 + Response 401 (application/json)
    + Body 
        {
            "message": "Unauthorized",
            "status_code": 401
        }

## Log the user out (Invalidate the token). [POST /auth/logout]

 + Request (application/json)
    + Headers
        Authorization: Bearer your_token_here

    + Response 200 (application/json)
        {
            "message": "Successfully logged out"
        } 

## Refresh a token. [POST /auth/refresh]

 + Request (application/json)
    + Headers
        Authorization: Bearer your_token_here

 + Response 200 (application/json)
    + Body
        {
            "access_token": "your_generated_token",
            "token_type": "bearer",
            "expires_in": 3600
        }

+ Response 401 (application/json)
    + Body
        {
            "message": "The token has been blacklisted",
            "status_code": 401
        }

## Get the logged user. [GET /auth/me]

 + Request (application/json)
    + Headers
        Authorization: Bearer your_token_here

 + Response 200 (application/json)
    + Body
        {
            "data": {
                "id": "somerandomid",
                "name": "foo",
                "email": "email@example.com"
            }
        }

 + Response 401 (application/json)
    + Body
        {
            "message": "The token has been blacklisted",
            "status_code": 401
        }
