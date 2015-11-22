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
    protected $dontReport = [
        HttpException::class,
        ModelNotFoundException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        \Log::error($e);
        
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        if ($e instanceof ModelNotFoundException) {
            $e = new NotFoundHttpException($e->getMessage(), $e);
            
        }
        if ($e instanceof NotFoundHttpException) {
            return redirect()->route('welcome')->with('error' ,'404 السجل الذي تبحث عنه غير موجود');
        }

        if ($e instanceof \Bican\Roles\Exceptions\PermissionDeniedException) {
            session()->flash('error','ليست لديك صلاحية للقيام بهاته العملية');
        // you can for example flash message, redirect...
            return redirect()->back();
        }

        return parent::render($request, $e)->with('error','ليست لديك صلاحية للقيام بهاته العملية');
    }
}
