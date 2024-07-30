<!-- resources/views/livewire/qr-generator.blade.php -->
<div>
    <style>
        input[type=radio] {
            width: 25%;
            height: 25px;
        }

        /* Styles for the phone container */
        .phone-container {
            width: 251px;
            height: 507px;
            background-image: url({{ asset('images/preview_bg.png') }});

            background-repeat: no-repeat;
            background-size: contain !important;
            position: relative;
            overflow: hidden;
            padding-top: 18px;
            padding-bottom: 25px;
        }

        /* Styles for the content inside the phone */
        .inner-content {
            width: 100%;
            height: 100%;
            overflow-y: auto;
            box-sizing: border-box;
        }

        .inner-content::-webkit-scrollbar {
            display: none;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                QR GENERATOR
            </a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Login/Register Buttons -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="d-flex flex-column pb-3 pt-3 pt-md-4">
            <h1 class="main-title mb-0 mb-lg-2 text-center text-md-left">The most advanced QR Code Generator with logo
                online</h1>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="card-header">
                    <div class="col-sm-12 col-md-12 mb-4">
                        <div><label class="first-step-label">STEP 1</label><span>Choose a template</span>&nbsp; &nbsp;
                        </div>
                    </div>
                </div>
            </div>
            <div class="row templates" id="step1">


                <div class="col-md-6">
                    <img src="{{ asset('images/profile-card-2.png') }}" alt="" id="profileimg">

                    <div class="mt-4"> <input type="radio" name="profile" value="profile-card-2"
                            wire:model="selectedTemplate"> Profile Card 2 </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/profile-card-3.png') }}" alt="" id="profileimg">
                    <div class="mt-4"><input type="radio" name="profile" value="profile-card-3"
                            wire:model="selectedTemplate"> Profile Card 3</div>
                </div>


            </div>
            <div class="row mt-4 templates" id="step2">
                <div class="col-sm-12 col-md-12  col-lg-9">
                    <div><label class="first-step-label">STEP 2</label><span>Complete the vCard data entry</span>&nbsp;
                        &nbsp; </div>
                </div></br>
                <div class="col-sm-12 col-md-12"></div>

                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="row p-3">
                            <div class="col-md-6 mb-3"><label for="Name">Your Name</label>
                                <input type="text" wire:model.live="name" class="err form-control"
                                    placeholder="Name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" wire:model.live="website" class="form-control mt-2"
                                    placeholder="Your Website (https://)">
                                @error('website')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3"><label for="Company">Company</label>
                                <input type="text" wire:model.live="company" class="form-control"
                                    placeholder="Company Name">
                                <input type="text" wire:model.live="position" class="form-control mt-2"
                                    placeholder="Position">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="w-100" for="PhoneWork">Contacts</label>
                                <div class="v-card-block">
                                    <input type="text" wire:model.live="mobilephone" class="form-control"
                                        placeholder="Phone (Mobile)">
                                    <input type="text" wire:model.live="workphone" class="form-control"
                                        placeholder="Phone (Work)">
                                </div>
                                <div class="v-card-block mt-2">
                                    <input type="text" wire:model.live="privatephone" class="form-control"
                                        placeholder="Phone (Private)">
                                    <input type="text" wire:model.live="fax" class="form-control" placeholder="Fax">
                                </div>
                                <div class="v-card-block mt-2">
                                    <input type="text" wire:model.live="email" class="form-control"
                                        placeholder="Your Email (username@email.com)">

                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="w-100" for="Street">Address</label>
                                <div class="v-card-block">
                                    <input type="text" wire:model.live="country" class="form-control"
                                        placeholder="Country">
                                    <input type="text" wire:model.live="state" class="form-control"
                                        placeholder="State">
                                </div>
                                <div class="v-card-block mt-2">
                                    <input type="text" wire:model.live="street" class="form-control"
                                        placeholder="Street">
                                </div>
                                <div class="v-card-block mt-2">
                                    <input type="text" wire:model.live="city" class="form-control"
                                        placeholder="City">
                                    <input type="text" wire:model.live="zipcode" class="form-control"
                                        placeholder="Zipcode">
                                </div>
                            </div>
                            <div class="col-12 vCard-container">
                                <div class="w-100"><label for="AdditionalInfo">Personal
                                        description</label>
                                    <textarea wire:model.live="additionalInfo" rows="5" class="form-control" type="text"
                                        placeholder="Give a brief description of yourself"></textarea>
                                </div>
                                <div>
                                    <label for="qrcodeVcardProfilePictureUrl">Primary Photo <span
                                            class="recommended-size">(320 x 320 px)</span></label>
                                    <div class="v-card-upload profile">
                                        <div class="image-preview">

                                            <img id="previewImage" class="hidden w-100 h-100"
                                                src="@if ($image) {{ $image->temporaryUrl() }} @else {{ '' }} @endif"
                                                alt="">
                                            <div class="placeholder"><i class="fa fa-images">image</i></div>
                                        </div>
                                        <div class="w-100">
                                            <div class="file-wrapper">
                                                <input type="file" id="fileInput" wire:model.live="image"
                                                    class="hidden" accept=".png,.jpg,.jpeg">
                                                <div id="uploadButton" class="btn-upload btn btn-primary">Upload</div>
                                            </div>

                                            <button id="clearButton" class="btn btn-default">Clear</button>
                                        </div>
                                    </div>
                                    @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div>
                                    <label for="qrcodeVcardProfilePictureUrl">Cover Photo <span
                                            class="recommended-size">(320 x 320 px)</span></label>
                                    <div class="v-card-upload profile">
                                        <div class="image-preview">

                                            <img id="previewImage" class="hidden w-100 h-100"
                                                src="@if ($cover_image) {{ $cover_image->temporaryUrl() }} @else {{ '' }} @endif"
                                                alt="">
                                            <div class="placeholder"><i class="fa fa-images">image</i></div>
                                        </div>
                                        <div class="w-100">
                                            <div class="file-wrapper">
                                                <input type="file" id="fileInput" wire:model.live="cover_image"
                                                    class="hidden" accept=".png,.jpg,.jpeg">
                                                <div id="uploadButton" class="btn-upload btn btn-primary">Upload</div>
                                            </div>
                                            <button id="clearButton" class="btn btn-default">Clear</button>
                                        </div>
                                    </div>
                                    @error('cover_image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="w-100">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="theme-preview h-100">
                            <div class="phone-container">
                                <div class="inner-content">


                                    <div class="col-md-12" id="profile-card-2"
                                        @if ($selectedTemplate != 'profile-card-2') style="display: none;" @endif>
                                        <div class="card profile-card-2">
                                            <div class="card-img-block">
                                                <h2 class="text-center mt-5">
                                                    @if ($name)
                                                        {{ $name }}
                                                    @else
                                                        Full Name
                                                    @endif
                                                </h2>
                                            </div>
                                            <div class="card-body pt-5">
                                                @if ($image)
                                                    <img src="{{ $image->temporaryUrl() }}" alt="profile-image"
                                                        class="profile imagesrc" />
                                                @else
                                                    <img src="https://randomuser.me/api/portraits/men/64.jpg"
                                                        alt="profile-image" class="profile" />
                                                @endif
                                                <h5 class="card-title">
                                                    @if ($position)
                                                        {{ $position }}-{{ $company }}
                                                    @else
                                                        Position - Company Name
                                                    @endif
                                                </h5>

                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <div class="icon-block text-center" id="icons">
                                                            <i class="fa fa-phone"></i>
                                                            <p>Phone </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="text-center" id="icons">
                                                            <i class="fa fa-envelope"></i>
                                                            <p> Email </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="text-center" id="icons">
                                                            <i class="fa fa-globe"></i>
                                                            <p> Website </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 addinfo">
                                                    @if ($additionalInfo)
                                                        {{ $additionalInfo }}
                                                    @else
                                                        Personal description
                                                    @endif
                                                </div>
                                                <div class="row details-info">

                                                    <a href="tel:undefined" class="d-flex"><i
                                                            class="fa fa-phone mr-3"
                                                            style="background-color: rgb(74, 135, 224);"></i>
                                                        <div><small> Phone (Work)</small>
                                                            <div>
                                                                @if ($workphone)
                                                                    {{ $workphone }}
                                                                @else
                                                                    Phone (Work)
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="row details-info">
                                                    <a href="tel:undefined" class="d-flex"><i
                                                            class="fa fa-phone mr-3"
                                                            style="background-color: rgb(74, 135, 224);"></i>
                                                        <div><small>Phone (Private)</small>
                                                            <div>
                                                                @if ($privatephone)
                                                                    {{ $privatephone }}
                                                                @else
                                                                    Phone (Private)
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="row details-info">
                                                    <a href="tel:undefined" class="d-flex"><i
                                                            class="fa fa-phone mr-3"
                                                            style="background-color: rgb(74, 135, 224);"></i>
                                                        <div><small>Phone (Mobile)</small>
                                                            <div>
                                                                @if ($mobilephone)
                                                                    {{ $mobilephone }}
                                                                @else
                                                                    Phone (Mobile)
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="row details-info">
                                                    <a class="d-flex" href="fax:undefined"><i
                                                            class="fa fa-print mr-3"
                                                            style="background-color: rgb(74, 135, 224);"></i>
                                                        <div><small>Fax</small>
                                                            <div>
                                                                @if ($fax)
                                                                    {{ $fax }}
                                                                @else
                                                                    Fax
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="row details-info">
                                                    <a href="tel:undefined" class="d-flex"><i
                                                            class="fa fa-envelope mr-3"
                                                            style="background-color: rgb(74, 135, 224);"></i>
                                                        <div><small>Email</small>
                                                            <div>
                                                                @if ($email)
                                                                    {{ $email }}
                                                                @else
                                                                    Email
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="row details-info">
                                                    <a href="tel:undefined" class="d-flex"><i
                                                            class="fa fa-suitcase mr-3"
                                                            style="background-color: rgb(74, 135, 224);"></i>
                                                        <div><small>Organization</small>
                                                            <div>
                                                                @if ($company)
                                                                    {{ $company }}
                                                                @else
                                                                    Organization
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="row details-info">
                                                    <a href="tel:undefined" class="d-flex"><i
                                                            class="fa fa-map-marker mr-3"
                                                            style="background-color: rgb(74, 135, 224);"></i>
                                                        <div><small>Address</small>
                                                            <div>
                                                                @if ($country || $state || $street || $city || $zipcode)
                                                                    {{ $street }},{{ $city }}-{{ $zipcode }},{{ $state }},{{ $country }}
                                                                @else
                                                                    Address
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="row details-info">
                                                    <a class="d-flex" href="fax:undefined"><i
                                                            class="fa fa-globe mr-3"
                                                            style="background-color: rgb(74, 135, 224);"></i>
                                                        <div><small>Website</small>
                                                            <div>
                                                                @if ($website)
                                                                    {{ $website }}
                                                                @else
                                                                    Website
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="row mt-3 mx-3">
                                                    <small class="text-center mx-5" style="color: #94959d;">Link in
                                                        Bio</small>
                                                </div>


                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12" id="profile-card-3"
                                        @if ($selectedTemplate != 'profile-card-3') style="display: none;" @endif>
                                        <div class="card profile-card-3">
                                            <div class="background-block"> </div>
                                            <div class="profile-thumb-block">
                                                @if ($image)
                                                    <img src="{{ $image->temporaryUrl() }}" alt="profile-image"
                                                        class="profile imagesrc" />
                                                @else
                                                    <img src="https://randomuser.me/api/portraits/men/41.jpg"
                                                        alt="profile-image" class="profile imagesrc" />
                                                @endif
                                                <h2>
                                                    @if ($name)
                                                        {{ $name }}
                                                    @else
                                                        Full Name
                                                    @endif
                                                    <small>
                                                        @if ($position)
                                                            {{ $position }}-{{ $company }}
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
                                                            @if ($additionalInfo)
                                                                {{ $additionalInfo }}
                                                            @else
                                                                Personal description
                                                            @endif
                                                        </h5>
                                                    </div>
                                                    <div class="details-row w-100"> <a href="tel:undefined"
                                                            class="d-flex"><i class="fa fa-phone mr-3"
                                                                style="background-color: rgb(74, 135, 224);"></i>
                                                            <div><small>Phone (Work)</small>
                                                                <div>
                                                                    @if ($workphone)
                                                                        {{ $workphone }}
                                                                    @else
                                                                        Phone (Work)
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="details-row w-100"><a href="tel:undefined"
                                                            class="d-flex"><i class="fa fa-phone mr-3"
                                                                style="background-color: rgb(74, 135, 224);"></i>
                                                            <div><small>Phone (Private)</small>
                                                                <div>
                                                                    @if ($privatephone)
                                                                        {{ $privatephone }}
                                                                    @else
                                                                        Phone (Private)
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </a></div>
                                                    <div class="details-row w-100">
                                                        <a href="tel:undefined" class="d-flex">
                                                            <i class="fa fa-phone mr-3"
                                                                style="background-color: rgb(74, 135, 224);"></i>
                                                            <div><small>Phone (Mobile)</small>
                                                                <div>
                                                                    @if ($mobilephone)
                                                                        {{ $mobilephone }}
                                                                    @else
                                                                        Phone (Mobile)
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="details-row w-100"><a class="d-flex"
                                                            href="fax:undefined"><i class="fa fa-print mr-3"
                                                                style="background-color: rgb(74, 135, 224);"></i>
                                                            <div><small>Fax</small>
                                                                <div>
                                                                    @if ($fax)
                                                                        {{ $fax }}
                                                                    @else
                                                                        Fax
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </a></div>
                                                    <div class="details-row w-100"> <a href="tel:undefined"
                                                            class="d-flex"><i class="fa fa-envelope mr-3"
                                                                style="background-color: rgb(74, 135, 224);"></i>
                                                            <div><small>Email</small>
                                                                <div>
                                                                    @if ($email)
                                                                        {{ $email }}
                                                                    @else
                                                                        Email
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </a></div>
                                                    <div class="details-row w-100"> <a href="tel:undefined"
                                                            class="d-flex"><i class="fa fa-suitcase mr-3"
                                                                style="background-color: rgb(74, 135, 224);"></i>
                                                            <div><small>Organization</small>
                                                                <div>
                                                                    @if ($company)
                                                                        {{ $company }}
                                                                    @else
                                                                        Organization
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </a></div>
                                                    <div class="details-row w-100"> <a href="tel:undefined"
                                                            class="d-flex"><i class="fa fa-map-marker mr-3"
                                                                style="background-color: rgb(74, 135, 224);"></i>
                                                            <div><small>Address</small>
                                                                <div>
                                                                    @if ($country || $state || $street || $city || $zipcode)
                                                                        {{ $street }},{{ $city }}-{{ $zipcode }},{{ $state }},{{ $country }}
                                                                    @else
                                                                        Address
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </a></div>
                                                    <div class="details-row w-100"><a class="d-flex"
                                                            href="fax:undefined"><i class="fa fa-globe mr-3"
                                                                style="background-color: rgb(74, 135, 224);"></i>
                                                            <div><small>Website</small>
                                                                <div>
                                                                    @if ($website)
                                                                        {{ $website }}
                                                                    @else
                                                                        Website
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </a></div>
                                                    <div class="row mt-3 mx-3">
                                                        <small class="text-center mx-5" style="color: #94959d;">Link
                                                            in
                                                            Bio</small>
                                                        <div class="col-md-12">
                                                            <h4>Selected Social Media Links:</h4>
                                                            <ul>
                                                                @foreach ($selectedSocialMediaLinks as $socialMediaLink)
                                                                    <li>{{ $socialMediaLink['name'] }}:
                                                                        {{ $socialMediaLink['url'] }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="container">

                    <div class="row">
                        <label for="AdditionalInfo" class="col-12">Add Social Media Links</label>
                        <div class="col-md-8 ml-3" id="sociallinks">
                            <div class="social-media-icons">

                                @foreach ($socialMediaLinks as $link)
                                    <div class="m-2">
                                        <img src="{{ asset('storage/social_images/' . $link->image) }}"
                                            alt="{{ $link->name }}" class="mr-2" style="width: 35px;"
                                            wire:click="toggleUrlInput({{ $link->id }})">
                                        @if ($showUrl[$link->id])
                                            <input type="text" wire:model="inputUrls.{{ $link->id }}"
                                                class="form-control mt-2" placeholder="Enter URL">
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row ">
                        <input type="hidden" name="selectedTemplate" wire:model="selectedTemplate">

                        <button wire:click="generateQR" id="generateQRButton"
                            class="d-flex justify-content-center align-items-center btn btn-qr2 col-sm-12 col-md-4 col-lg-3">Generate
                            dynamic QR code</button>
                    </div>

                </div>


            </div>
        </div>
        <div class="mt-5"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            document.getElementById('uploadButton').addEventListener('click', function() {
                document.getElementById('fileInput').click();
            });
            $('#imageInput').change(function() {
                // Get the selected file
                var file = this.files[0];
                if (file) {
                    // Create a file reader object
                    var reader = new FileReader();
                    // Set up the file reader to load the selected file as a data URL
                    reader.readAsDataURL(file);
                    // When the file reader has loaded the data URL, set it as the source of the preview image
                    reader.onload = function(e) {
                        $('#previewImage').attr('src', e.target.result);
                    };
                }
            });
            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip();
                // Listen for change event on radio buttons
                $('#step2 #profile-card-2').show();

                $('input[type=radio][name=profile]').change(function() {
                    // Hide all profile templates in Step 2
                    $('#step2 .col-md-12').hide();

                    // Show the selected profile template based on the radio button value
                    $('#' + $(this).val()).show();
                });

                $('#fileInput').change(function() {
                    var file = this.files[0];
                    if (file) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#previewImage').attr('src', e.target.result).removeClass('hidden');
                            $('.placeholder').addClass('hidden');
                        };
                        reader.readAsDataURL(file);
                    }
                });

                $('#clearButton').click(function() {
                    $('#previewImage').attr('src', '').addClass('hidden');
                    $('.placeholder').removeClass('hidden');
                    $('#fileInput').val(''); // Clear the file input
                });
            });
        </script>
    </div>
