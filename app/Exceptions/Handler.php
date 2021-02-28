<?php

namespace App\Exceptions;


use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use App\Http\Controllers\Controller as Controller;

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
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if($exception instanceof ValidatiionException){
            return response()->json(['message'=>'invalid request'], 403);
        }
        
        if ($exception instanceof NotFoundHttpException) {
            
            return response()->json(['message'=>'request not found'], 403);
        }
        
        if ($exception instanceof ModelNotFoundException) {
            return response()->json(['message'=>$exception->getMessage()], 403);
        }
        if($exception instanceof MethodNotAllowedHttpException){
            return response()->json(['message'=>$exception->getMessage()], 405);
        }
        return parent::render($request, $exception);
    }
}
