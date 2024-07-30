<?php

namespace App\Http\Controllers\Client;

use App\Helper\CommonHelper;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateJobInquiryRequest;

use App\Models\JobInquiry;
use App\Notifications\JobInquiryNotification;
use Illuminate\Support\Facades\Notification;

class JobInquiryController extends Controller
{
    public function __construct()
    {
    }

    public function careerInquiry(CreateJobInquiryRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();

        if ($request->file('resume')) {
            $data['resume'] = CommonHelper::uploadFile($request->file('resume'), 'resume');
        }
        $career = JobInquiry::query()->create($data);

        Notification::route('mail', [
            config('mail.from.address') => config('mail.from.name'),
        ])->notify(new JobInquiryNotification($career));

        return redirect()->route('client.contact')->with('message', 'Thank you, We have received your request!');;
    }
}
