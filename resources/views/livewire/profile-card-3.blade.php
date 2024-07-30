<div>
    <style>
        .profile-card-3 {
            height: 784px;
        }


        .profile-card-3 .background-block {
            height: 347px !important;
        }

        .profile-card-3 {
            height: 860px !important;
        }

        .details-row {
            padding: 11px 20px 4px 12px;
        }

        small {
            font-size: 126%;
            font-weight: 500;
        }

        .profile-card-3 .background-block {
            height: 217px;
        }

        .profile-card-3 .card-content {
            height: 99% !important;
        }

        @media (max-width: 1199px) {
            .card {
                height: 1069px !important;
            }

            .profile-card-3 .background-block {
                height: 255px !important;
                max-height: 255px !important;
            }
        }

        .details-row a {
            text-align: left !important;
        }

        .card {
            border-radius: 1.25rem;
            background: #ececec !important;
            height: 927px;
        }

        .profile-card-3 .background-block {
            float: left;
            width: 100%;
            max-height: 191px;
            overflow: hidden;
            background: #1993f4e8;
        }

        .profile-card-3 .profile {
            bottom: 86% !important;
        }

        .profile-card-3 h2 {
            bottom: 80%;
            left: 42%;
            color: white;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="profile-card-3">
                <div class="card profile-card-3">
                    <div class="background-block"> </div>
                    <div class="profile-thumb-block">

                        @if ($profile->image)
                            <img src="{{ asset('storage/' . substr($profile->image, 7)) }}" alt="Profile Image"
                                class="profile imagesrc">
                        @else
                            <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="profile-image"
                                class="profile imagesrc" />
                        @endif
                        <h2>
                            @if ($profile->name)
                                {{ $profile->name }}
                            @else
                                Full Name
                            @endif
                            <small>
                                @if ($profile->position)
                                    {{ $profile->position }}-{{ $profile->company }}
                                @else
                                    Position - Company Name
                                @endif
                            </small></h3>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <div class="col-md-4 p-1">
                                <div class="icon-block text-center" id="icons">
                                    <i class="fa fa-phone"></i>
                                    <p> Phone </p>
                                </div>
                            </div>
                            <div class="col-md-4 p-1">
                                <div class="text-center" id="icons">
                                    <i class="fa fa-envelope"></i>
                                    <p> Email </p>
                                </div>
                            </div>
                            <div class="col-md-4 p-1">
                                <div class="text-center" id="icons">
                                    <i class="fa fa-globe"></i>
                                    <p>Website</p>
                                </div>
                            </div>
                            <div class="details-row w-100 mt-3">
                                <h5 class="d-block text-center">
                                    @if ($profile->additionalInfo)
                                        {{ $profile->additionalInfo }}
                                    @else
                                        Personal description
                                    @endif
                                </h5>
                            </div>
                            <div class="details-row w-100"> <a href="tel:undefined" class="d-flex"><i
                                        class="fa fa-phone mr-3" style="background-color: rgb(74, 135, 224);"></i>
                                    <div><small>Phone (Work)</small>
                                        <div>
                                            @if ($profile->workphone)
                                                {{ $profile->workphone }}
                                            @else
                                                Phone (Work)
                                            @endif
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="details-row w-100"><a href="tel:undefined" class="d-flex"><i
                                        class="fa fa-phone mr-3" style="background-color: rgb(74, 135, 224);"></i>
                                    <div><small>Phone (Private)</small>
                                        <div>
                                            @if ($profile->privatephone)
                                                {{ $profile->privatephone }}
                                            @else
                                                Phone (Private)
                                            @endif
                                        </div>
                                    </div>
                                </a></div>
                            <div class="details-row w-100">
                                <a href="tel:undefined" class="d-flex">
                                    <i class="fa fa-phone mr-3" style="background-color: rgb(74, 135, 224);"></i>
                                    <div><small>Phone (Mobile)</small>
                                        <div>
                                            @if ($profile->mobilephone)
                                                {{ $profile->mobilephone }}
                                            @else
                                                Phone (Mobile)
                                            @endif
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="details-row w-100"><a class="d-flex" href="fax:undefined"><i
                                        class="fa fa-print mr-3" style="background-color: rgb(74, 135, 224);"></i>
                                    <div><small>Fax</small>
                                        <div>
                                            @if ($profile->fax)
                                                {{ $profile->fax }}
                                            @else
                                                Fax
                                            @endif
                                        </div>
                                    </div>
                                </a></div>
                            <div class="details-row w-100"> <a href="tel:undefined" class="d-flex"><i
                                        class="fa fa-envelope mr-3" style="background-color: rgb(74, 135, 224);"></i>
                                    <div><small>Email</small>
                                        <div>
                                            @if ($profile->email)
                                                {{ $profile->email }}
                                            @else
                                                Email
                                            @endif
                                        </div>
                                    </div>
                                </a></div>
                            <div class="details-row w-100"> <a href="tel:undefined" class="d-flex"><i
                                        class="fa fa-suitcase mr-3" style="background-color: rgb(74, 135, 224);"></i>
                                    <div><small>Organization</small>
                                        <div>
                                            @if ($profile->company)
                                                {{ $profile->company }}
                                            @else
                                                Organization
                                            @endif
                                        </div>
                                    </div>
                                </a></div>
                            <div class="details-row w-100"> <a href="tel:undefined" class="d-flex"><i
                                        class="fa fa-map-marker mr-3" style="background-color: rgb(74, 135, 224);"></i>
                                    <div><small>Address</small>
                                        <div>
                                            @if ($profile->country || $profile->state || $profile->street || $profile->city || $profile->zipcode)
                                                {{ $profile->street }},{{ $profile->city }}-{{ $profile->zipcode }},{{ $profile->state }},{{ $profile->country }}
                                            @else
                                                Address
                                            @endif
                                        </div>
                                    </div>
                                </a></div>
                            <div class="details-row w-100"><a class="d-flex" href="fax:undefined"><i
                                        class="fa fa-globe mr-3" style="background-color: rgb(74, 135, 224);"></i>
                                    <div><small>Website</small>
                                        <div>
                                            @if ($profile->website)
                                                {{ $profile->website }}
                                            @else
                                                Website
                                            @endif
                                        </div>
                                    </div>
                                </a></div>
                            <div class="details-row w-100 d-flex">
                                @foreach ($socialMediaLinks as $link)
                                    <div class="ml-3 mr-3">
                                        <a class="d-flex ml-2" href="{{ $link->url }}"> <img
                                                src="{{ asset('storage/social_images/' . $link->socialMediaLink->image) }}"
                                                alt="{{ $link->socialMediaLink->name }}" class="mr-3"
                                                style="width: 34px;height: 34px;"></a>

                                        <div>
                                            <small>{{ $link->socialMediaLink->name }}</small>
                                            <div>
                                                {{ $link->url }}</div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
