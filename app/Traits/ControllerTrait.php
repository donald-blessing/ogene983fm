<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

trait ControllerTrait
{
    use FlashMessages;

    protected $data;

    public function setPageTitle($title, $subTitle = null)
    {
        view()->share(['pageTitle' => $title, 'subTitle' => $subTitle]);
    }

    /**
     * @param  $title
     * @param  $subTitle
     */
    public function setPageValue(array $value)
    {
        view()->share($value);
    }

    /**
     * @param  int  $errorCode
     * @return Response
     */
    public function showErrorPage($errorCode = 404, $message = null)
    {
        $data['message'] = $message;

        return response()->view('errors.'.$errorCode, $data, $errorCode);
    }

    /**
     * @param  bool  $error
     * @param  int  $responseCode
     * @param  array  $message
     * @return JsonResponse
     */
    public function responseJson($error = true, $responseCode = 200, $message = [], $data = null)
    {
        return response()->json([
            'error' => $error,
            'response_code' => $responseCode,
            'message' => $message,
            'data' => $data,
        ]);
    }

    /**
     * @param  string  $type
     * @param  bool  $error
     * @param  bool  $withOldInputWhenError
     * @return RedirectResponse
     */
    public function responseRedirect($route, $message, $type = 'info', $error = false, $withOldInputWhenError = false)
    {
        $this->setFlashMessage($message, $type);
        // $this->showFlashMessages();

        if ($error && $withOldInputWhenError) {
            return redirect()->back()->withInput();
        }

        return redirect()->route($route);
    }

    /**
     * @param  string  $type
     * @param  bool  $error
     * @param  bool  $withOldInputWhenError
     * @return RedirectResponse
     */
    public function responseRedirectBack($message, $type = 'info', $error = false, $withOldInputWhenError = false)
    {
        $this->setFlashMessage($message, $type);

        // $this->showFlashMessages();
        return redirect()->back();
    }
}
