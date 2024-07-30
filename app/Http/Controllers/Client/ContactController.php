<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateInquiryRequest;

use App\Models\Contact;

use App\Notifications\InquiryNotification;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function __construct()
    {
    }

    public function contactInquiry(CreateInquiryRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();
        $contact = Contact::query()->create($data);

        Notification::route('mail', [
            config('mail.from.address') => config('mail.from.name'),
        ])->notify(new InquiryNotification($contact));

        return redirect()->route('client.contact')->with('message', 'Thank you, We have received your request!');;
    }
}
