<!doctype html>
<html lang="en">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blog_dashboard.css') }}">

</head>

<body>
    <header class="main_header">
        <div class="d-flex justify-content-center align-items-center flex-column py-5">
            <h1 class="text-uppercase main_heading">CM WEB SOLUTION</h1>
            <p class="main_heading__para">Welcome to Our <span class="text-capitalize bg-dark text-white py-2 px-3">
                    world of blog</span> </p>
        </div>
        <!-- //the main image -->
        <div class="main_header__div d-flex align-items-start
        justify-content-center  flex-column shadow pl-5">
            <p>We Try to Provide Best Solution For You.</p>
        </div>
    </header>
    <!-- header ends -->
    <!-- two sided blog part starts -->
    <div class="container-fluid ">
        <div class="row ">
            <!-- to get the space form left and right -->
            <div class="col-xl-10  col-lg-10 col-md-12 col-11 mx-auto my-5">
                <div class="row gx-5 mx-sm-auto">
                    <!-- left side of the blog  -->
                    <div class="col-lg-8 col-md-11 col-11 mx-auto">
                        <div class="row gy-5 ">
                            @foreach ($blogs as $blog)
                                <div class="col-12 card p-4 shadow blog_left__div">
                                    <div
                                        class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
                                        <h1 class="text-uppercase">{{ $blog->title }}</h1>
                                        <p class="blog_title"> <span class="font-weight-bold"> Created at, </span>
                                            {{ $blog->created_at->format('M d, Y') }} </p>
                                    </div>
                                    @if ($blog->title_image)
                                    <figure class="right_side_img mb-5">
                                        <img src="{{ asset('storage/title_images/' . $blog->title_image) }}" class="img-fluid shadow">
                                    </figure>
                                    @endif
                                    <p>{{ $blog->summary }}</p>
                                    <a class="more-link" href="{{ route('blog.detail', $blog->id) }}">Read more
                                        →</a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <!--  *******************************************************
            **********************************************************.
            right side of the div
            *******************************************************
            **********************************************************
            -->
                    <div class="col-lg-3 col-md-7 col-11  justify-content-end m-lg-0 m-auto ">
                        <div class="row gy-5 left_div__blog">

                            <!-- popular post -->
                            <div class=" popular_post ">
                                <div class="right_div__title py-4 pl-2 ">
                                    <h2>Popular Blogs</h2>
                                </div>
                                <div class="right_sub__div shadow">
                                    <div class="row ">
                                        <div class="col-3  popular_post__img1 py-2 pl-2">
                                        </div>
                                        <div class="col-9">
                                            <h3>Bill Gates</h3>
                                            <p class="text-capitalize">CEO Microsoft</p>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-3  popular_post__img2 py-2 pl-2">
                                        </div>
                                        <div class="col-9">
                                            <h3>Mark Zuckerberg </h3>
                                            <p class="text-capitalize">Programmer</p>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-3  popular_post__img3 py-2 pl-2">
                                        </div>
                                        <div class="col-9">
                                            <h3>Jeff Bezos</h3>
                                            <p class="text-capitalize">Amazon</p>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-3  popular_post__img4 py-2 pl-2">
                                        </div>
                                        <div class="col-9">
                                            <h3>Steve Jobs</h3>
                                            <p class="text-capitalize">Apple</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- tags -->
                            <div class=" right_div_post">
                                <div class="right_div__title py-4 pl-2 ">
                                    <h2>Tags</h2>
                                </div>
                                <div class="tags_main right_sub__div">
                                    <a href="https://youtu.be/5p8e2ZkbOFU" target="_thapa"
                                        class="badge shadow text-capitalize"> html </a>
                                    <a href="#" class="badge shadow text-capitalize"> css </a>
                                    <a href="#" class="badge shadow text-capitalize"> js </a>
                                    <a href="#" class="badge shadow text-capitalize"> react </a>
                                    <a href="#" class="badge shadow text-capitalize"> vue </a>
                                    <a href="#" class="badge shadow text-capitalize"> php </a>
                                    <a href="#" class="badge shadow text-capitalize"> Laravel </a>
                                    <a href="#" class="badge shadow text-capitalize"> python </a>
                                    <a href="#" class="badge shadow text-capitalize"> kotlin </a>
                                    <a href="#" class="badge shadow text-capitalize"> c++ </a>
                                    <a href="#" class="badge shadow text-capitalize"> java </a>
                                </div>
                            </div>

                            <!-- Follow Me -->
                            <div class=" right_div_post">
                                <div class="right_div__title py-4 pl-2 ">
                                    <h2>Follow Me</h2>
                                </div>
                                <div class="right_sub__div d-flex justify-content-around">
                                    <a href="#"> <i class="fab fa-facebook-square fa-3x"></i></a>
                                    <a href="https://www.instagram.com/vinodthapa55/" target="_thapa"> <i
                                            class="fab fa-3x fa-instagram"></i></a>
                                    <a href="#"> <i class="fab fa-3x fa-github-square"></i> </a>
                                    <a href="#"> <i class="fab fa-3x fa-twitter-square"></i></a>
                                    <a href="#"> <i class="fab fa-3x fa-youtube-square"></i> </a>
                                    <a href="#"> <i class="fab fa-3x fa-linkedin"></i></a>
                                </div>
                            </div>
                            <!-- Subscribe -->
                            <div class=" right_div_post">
                                <div class="right_div__title py-4 pl-2 ">
                                    <h2>Subscribe</h2>
                                </div>
                                <div class="right_sub__div">
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Enter your e-mail
                                                below and get notified on the latest blog posts.</label>
                                            <input type="email" class="form-control mt-2"
                                                id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="col-12">
                                            <button class="subs_btn d-block" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p class="text-center py-5 bg-light">design with love By ©By CM Websolution</p>
    </footer>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script type="text/javascript"></script>
</body>

</html>
