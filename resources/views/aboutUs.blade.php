@extends('layouts.app')

@section('content')
    <div class="container main-table">
        <div class="box">
            <div class="title">
                About Us
            </div>

            <div class="text-body  ">
                For this prototype I have decided to make this page in order to explain how the website works.
            </div>

            <br>

            <div class="sub-title h4">
                Car Social
            </div>

            <div class="text-body ">
                <p>
                    Website scenario: Car social media.
                <p/>
                <p>
                    The website is about cars. It is a social media about cars. Users can post the details of their
                    cars, and others can like and dislike these details.
                </p>

                <br>

                <div class="sub-title h4">
                    Functionality
                </div>
                <br>
                <div class="sub-title h5">
                    Registration
                </div>
                <p>
                    A new user MUST register before they will be given access to view any pages or post.
                </p>
                <br>
                <div class="sub-title h5">
                    Car Details
                </div>
                <p>
                    The user can view 'CAR DETAILS' where all the car posts exists. Also being able to like & dislike other's posts.
                    The user can view current posts to see detailed specification.
                </p>
                <br>
                <div class="sub-title h5">
                    My Uploads
                </div>
                <p>
                    The user can see all the posts that they have created in 'MY UPLOADS' page.
                    The user also has a search bar within 'MY UPLOADS' to search for previous posts by 'Brand' name.
                    The user has the ability to create a post, and delete posts which the user has created in the past.
                </p>
                <br>
                <div class="sub-title h5">
                    Upload
                </div>
                <p>
                    The user has the ability to create a post, and delete posts which the user has created in the past.
                </p>
                <br>
                </p>
                <div class="sub-title h5">
                    Contact Us
                </div>
                <p>
                    The user can contact the admin of car social via the 'CONTACT US' page. Sending their name, email, and a message.
                </p>
            </div>
        </div>
    </div>

@endsection
