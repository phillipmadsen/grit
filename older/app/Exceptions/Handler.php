<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */

    private $sentryID;


     protected $dontReport = [
        HttpException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    //    public function report(Exception $e)
    // {
    //     return parent::report($e);
    // }

    public function report(Exception $e)
    {
//        if ($this->shouldReport($e)) {
//            // bind the event ID for Feedback
//            $this->sentryID = app('sentry')->captureException($e);
//        }
//        parent::report($e);

        if ($this->shouldReport($e)) {
            app('sentry')->captureException($e);
        }
        parent::report($e);

    }


    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e) {
         if (config('app.debug') && ! $request->ajax()) {
             $whoops = new \Whoops\Run;
             $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);

             return $whoops->handleException($e);

         }
         if ($e instanceof ModelNotFoundException)
        {
            // Custom logic for model not found...
        }



//        return response()->view('errors.500', [
//            'sentryID' => $this->sentryID,
//        ], 500);

        return parent::render($request, $e);
    }


}
