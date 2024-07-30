<div>
    <style>
        .profile-card-2 .profile {
            height: 235px;
            /* width: 258px; */
            box-shadow: none;
            top: -126px;
            left: 50%;
            max-width: 241px;
        }

        .profile-card-2 .card-img-block {
            height: 197px;
        }

        .profile-card-2 h5 {
            margin: 5rem 2rem 2rem 2rem;
        }

        .addinfo {
            padding: 1rem;
            font-size: 21px;
            font-weight: 600;
        }

        .small,
        small {
            font-size: 100%;
            font-weight: 500;
        }

        @media (max-width: 1199px) {
            .card {
                height: 1546px !important;
                margin-bottom: 5rem;
            }

            .profile-card-2 .profile {
                height: 166px;
                width: 175px !important;
                box-shadow: none;
                top: -105px;
                left: 50%;
                max-width: 241px;
            }

            .profile-card-2 h5 {
                margin: 2rem 2rem 2rem 2rem;
            }
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="profile-card-2">
                <div class="card profile-card-2">
                    <div class="card-img-block">
                        <h2 class="text-center mt-3">
                            @if ($profile->name)
                                {{ $profile->name }}
                            @else
                                Full Name
                            @endif
                        </h2>
                    </div>

                    <div class="card-body pt-5">
                        @if ($profile->image)
                            <img src="{{ asset('storage/' . substr($profile->image, 7)) }}" alt="Profile Image"
                                class="profile">
                        @else
                            <img src="https://randomuser.me/api/portraits/men/64.jpg" alt="profile-image"
                                class="profile" />
                        @endif
                        <h5 class="card-title">
                            @if ($profile->position)
                                {{ $profile->position }}-{{ $profile->company }}
                            @else
                                Position - Company Name
                            @endif
                        </h5>

                        <div class="row">

                            <div class="col-md-4 mb-4">
                                <div class="icon-block text-center" id="icons">
                                    <i class="fa fa-phone"></i>
                                    <p>Phone </p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="text-center" id="icons">
                                    <i class="fa fa-envelope"></i>
                                    <p> Email </p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="text-center" id="icons">
                                    <i class="fa fa-globe"></i>
                                    <p> Website </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 addinfo">
                            @if ($profile->additionalInfo)
                                {{ $profile->additionalInfo }}
                            @else
                                Personal description
                            @endif
                        </div>
                        <div class="row details-info p-3">

                            <a href="tel:undefined" class="d-flex"><i class="fa fa-phone mr-3"
                                    style="background-color: rgb(74, 135, 224);"></i>
                                <div><small> Phone (Work)</small>
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
                        <div class="row details-info p-3">
                            <a href="tel:undefined" class="d-flex"><i class="fa fa-phone mr-3"
                                    style="background-color: rgb(74, 135, 224);"></i>
                                <div><small>Phone (Private)</small>
                                    <div>
                                        @if ($profile->privatephone)
                                            {{ $profile->privatephone }}
                                        @else
                                            Phone (Private)
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row details-info p-3">
                            <a href="tel:undefined" class="d-flex"><i class="fa fa-phone mr-3"
                                    style="background-color: rgb(74, 135, 224);"></i>
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
                        <div class="row details-info p-3">
                            <a class="d-flex" href="fax:undefined"><i class="fa fa-print mr-3"
                                    style="background-color: rgb(74, 135, 224);"></i>
                                <div><small>Fax</small>
                                    <div>
                                        @if ($profile->fax)
                                            {{ $profile->fax }}
                                        @else
                                            Fax
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row details-info p-3">
                            <a href="tel:undefined" class="d-flex"><i class="fa fa-envelope mr-3"
                                    style="background-color: rgb(74, 135, 224);"></i>
                                <div><small>Email</small>
                                    <div>
                                        @if ($profile->email)
                                            {{ $profile->email }}
                                        @else
                                            Email
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row details-info p-3">
                            <a href="tel:undefined" class="d-flex"><i class="fa fa-suitcase mr-3"
                                    style="background-color: rgb(74, 135, 224);"></i>
                                <div><small>Organization</small>
                                    <div>
                                        @if ($profile->company)
                                            {{ $profile->company }}
                                        @else
                                            Organization
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row details-info p-3">
                            <a href="tel:undefined" class="d-flex"><i class="fa fa-map-marker mr-3"
                                    style="background-color: rgb(74, 135, 224);"></i>
                                <div><small>Address</small>
                                    <div>
                                        @if ($profile->country || $profile->state || $profile->street || $profile->city || $profile->zipcode)
                                            {{ $profile->street }},{{ $profile->city }}-{{ $profile->zipcode }},{{ $profile->state }},{{ $profile->country }}
                                        @else
                                            Address
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row details-info p-3">
                            <a class="d-flex" href="fax:undefined"><i class="fa fa-globe mr-3"
                                    style="background-color: rgb(74, 135, 224);"></i>
                                <div><small>Website</small>
                                    <div>
                                        @if ($profile->website)
                                            {{ $profile->website }}
                                        @else
                                            Website
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="row details-info p-3">
                            @foreach ($socialMediaLinks as $link)
                                <div class="d-flex">
                                    <a class="d-flex" href="{{ $link->url }}"> <img
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
