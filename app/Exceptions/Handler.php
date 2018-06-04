<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

use Illuminate\Http\Request;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */

    public function render($request, Exception $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            return response()->json([
                'errors' =>
                [
                    'status' => $exception->getStatusCode(),
                    'source' => [
                        'pointer' => $request->url()
                    ],
                    'detail' => 'path not found'
                ]
            ]);
        }
         
        if ($exception instanceof ModelNotFoundException) {
            return response()->json([
                'errors' =>
                [
                    'status' =>  404,
                    'source' => [
                        'pointer' => $request->url()
                    ],
                    'detail' => $exception->getMessage()
                ]
            ]);
        }

        if ($exception instanceof MethodNotAllowedHttpException) {
            return response()->json([
                'errors' =>
                [
                    'status' => $exception->getStatusCode(),
                    'source' => [
                        'pointer' => $request->url()
                    ],
                    'detail' => 'method not allowed'
                ]
            ]);
        }

        return parent::render($request, $exception);
    }
}
