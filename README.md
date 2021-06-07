# eAPI
Ecommerce Restful API

# API routes
 GET|HEAD  | /                                       |                  | Closure                                                                    | web          |
|        | POST      | api/products                            | products.store   | App\Http\Controllers\ProductController@store                               | api,auth:api |
|        | GET|HEAD  | api/products                            | products.index   | App\Http\Controllers\ProductController@index                               | api          |
|        | GET|HEAD  | api/products/{product}                  | products.show    | App\Http\Controllers\ProductController@show                                | api          |
|        | DELETE    | api/products/{product}                  | products.destroy | App\Http\Controllers\ProductController@destroy                             | api,auth:api |
|        | PUT|PATCH | api/products/{product}                  | products.update  | App\Http\Controllers\ProductController@update                              | api,auth:api |
|        | POST      | api/products/{product}/reviews          | reviews.store    | App\Http\Controllers\ReviewController@store                                | api          |
|        | GET|HEAD  | api/products/{product}/reviews          | reviews.index    | App\Http\Controllers\ReviewController@index                                | api          |
|        | DELETE    | api/products/{product}/reviews/{review} | reviews.destroy  | App\Http\Controllers\ReviewController@destroy                              | api          |
|        | PUT|PATCH | api/products/{product}/reviews/{review} | reviews.update   | App\Http\Controllers\ReviewController@update                               | api          |
|        | GET|HEAD  | api/products/{product}/reviews/{review} | reviews.show     | App\Http\Controllers\ReviewController@show                                 | api          |
|        | GET|HEAD  | api/user                                |                  | Closure                                                                    | api,auth:api |
|        | GET|HEAD  | home                                    | home             | App\Http\Controllers\HomeController@index                                  | web,auth     |
|        | POST      | login                                   |                  | App\Http\Controllers\Auth\LoginController@login                            | web,guest    |
|        | GET|HEAD  | login                                   | login            | App\Http\Controllers\Auth\LoginController@showLoginForm                    | web,guest    |
|        | POST      | logout                                  | logout           | App\Http\Controllers\Auth\LoginController@logout                           | web          |
|        | GET|HEAD  | oauth/authorize                         |                  | \Laravel\Passport\Http\Controllers\AuthorizationController@authorize       | web,auth     |
|        | DELETE    | oauth/authorize                         |                  | \Laravel\Passport\Http\Controllers\DenyAuthorizationController@deny        | web,auth     |
|        | POST      | oauth/authorize                         |                  | \Laravel\Passport\Http\Controllers\ApproveAuthorizationController@approve  | web,auth     |
|        | POST      | oauth/clients                           |                  | \Laravel\Passport\Http\Controllers\ClientController@store                  | web,auth     |
|        | GET|HEAD  | oauth/clients                           |                  | \Laravel\Passport\Http\Controllers\ClientController@forUser                | web,auth     |
|        | DELETE    | oauth/clients/{client_id}               |                  | \Laravel\Passport\Http\Controllers\ClientController@destroy                | web,auth     |
|        | PUT       | oauth/clients/{client_id}               |                  | \Laravel\Passport\Http\Controllers\ClientController@update                 | web,auth     |
|        | POST      | oauth/personal-access-tokens            |                  | \Laravel\Passport\Http\Controllers\PersonalAccessTokenController@store     | web,auth     |
|        | GET|HEAD  | oauth/personal-access-tokens            |                  | \Laravel\Passport\Http\Controllers\PersonalAccessTokenController@forUser   | web,auth     |
|        | DELETE    | oauth/personal-access-tokens/{token_id} |                  | \Laravel\Passport\Http\Controllers\PersonalAccessTokenController@destroy   | web,auth     |
|        | GET|HEAD  | oauth/scopes                            |                  | \Laravel\Passport\Http\Controllers\ScopeController@all                     | web,auth     |
|        | POST      | oauth/token                             |                  | \Laravel\Passport\Http\Controllers\AccessTokenController@issueToken        | throttle     |
|        | POST      | oauth/token/refresh                     |                  | \Laravel\Passport\Http\Controllers\TransientTokenController@refresh        | web,auth     |
|        | GET|HEAD  | oauth/tokens                            |                  | \Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController@forUser | web,auth     |
|        | DELETE    | oauth/tokens/{token_id}                 |                  | \Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController@destroy | web,auth     |
|        | POST      | password/email                          | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail      | web,guest    |
|        | GET|HEAD  | password/reset                          | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm     | web,guest    |
|        | POST      | password/reset                          |                  | App\Http\Controllers\Auth\ResetPasswordController@reset                    | web,guest    |
|        | GET|HEAD  | password/reset/{token}                  | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm            | web,guest    |
|        | GET|HEAD  | register                                | register         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm          | web,guest    |
|        | POST      | register                                |                  | App\Http\Controllers\Auth\RegisterController@register
