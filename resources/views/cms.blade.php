<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Brand Jam</title>

    <style>
        [x-cloak] { display: none; }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row vh-100">
        <div class="col-md-3 bg-dark text-white pt-5">
            <ul>
                <li>General</li>
                <li>Design</li>
                <li>Campaign Text</li>
                <li>Brand Jam</li>
                <li>Thank you page</li>
            </ul>
        </div>

        <div class="col-md-9 border pt-5">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="background-tab" data-toggle="tab" href="#background" role="tab" aria-controls="background" aria-selected="true">Background</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="objects-tab" data-toggle="tab" href="#objects" role="tab" aria-controls="objects" aria-selected="false">Objects</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="text-tab" data-toggle="tab" href="#text" role="tab" aria-controls="text" aria-selected="false">Text</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="text-tab" data-toggle="tab" href="#final" role="tab" aria-controls="final" aria-selected="false">Final Step</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">

                <!-- BACKGROUND -->
                <div class="tab-pane fade show active" id="background" role="tabpanel" aria-labelledby="home-tab">
                    <div style="margin-top: 25px;">
                        <h1>Background</h1>
                        <p>Single or Multiple?</p>
                        <p>Upload your images below:</p>
                        <div class="d-flex flex-wrap">
                            <div class="p-3">
                                <p class="text-right">Delete Image</p>
                                <img width="200" height="150" src="https://placekitten.com/400/300">
                            </div>
                            <div class="p-3">
                                <p class="text-right">Delete Image</p>
                                <img width="200" height="150" src="https://placekitten.com/400/300">
                            </div>
                            <div class="p-3">
                                <p class="text-right">Delete Image</p>
                                <img width="200" height="150" src="https://placekitten.com/400/300">
                            </div>
                        </div>
                        <p>Default content:</p>
                        <ul>
                            <li>Page Heading</li>
                            <li>Page Text</li>
                            <li>Button</li>
                        </ul>
                    </div>
                </div>

                <!-- OBJECTS -->
                <div class="tab-pane fade" id="objects" role="tabpanel" aria-labelledby="profile-tab">
                    <div style="margin-top: 25px;">
                        <h1>Objects</h1>
                        <p>Enabled?</p>
                        <p>Upload your images below:</p>
                        <div class="d-flex">
                            <div class="p-3">
                                <p class="text-right">Delete Image</p>
                                <img src="https://placekitten.com/100/300">
                            </div>
                            <div class="p-3">
                                <p class="text-right">Delete Image</p>
                                <img src="https://placekitten.com/100/300">
                            </div>
                            <div class="p-3">
                                <p class="text-right">Delete Image</p>
                                <img src="https://placekitten.com/100/300">
                            </div>
                        </div>
                        <p>Default content:</p>
                        <ul>
                            <li>Page Heading</li>
                            <li>Page Text</li>
                            <li>Button</li>
                        </ul>
                    </div>
                </div>

                <!-- TEXT -->
                <div class="tab-pane fade" id="text" role="tabpanel" aria-labelledby="text-tab">
                    <div style="margin-top: 25px;">
                        <h1>Text</h1>
                        <p>Enabled?</p>
                        <div class="row">
                            <!-- Text Settings -->
                            <div class="col">
                                <p>Text settings:</p>
                                <ul>
                                    <li>Default text</li>
                                    <li>Font family</li>
                                    <li>Font size</li>
                                    <li>Font colour</li>
                                </ul>
                            </div>
                            <!-- Text Image Preview -->
                            <div class="col">
                                <img width="400" height="300" src="https://placekitten.com/400/300">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Select your image below:</p>
                                <div class="d-flex flex-wrap">
                                    <div class="p-3">
                                        <img width="200" height="150" src="https://placekitten.com/400/300">
                                    </div>
                                    <div class="p-3">
                                        <img width="200" height="150" src="https://placekitten.com/400/300">
                                    </div>
                                    <div class="p-3">
                                        <img width="200" height="150" src="https://placekitten.com/400/300">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FINAL STEP -->
                <div class="tab-pane fade" id="final" role="tabpanel" aria-labelledby="final-tab">
                    <div style="margin-top: 25px;">
                        <h1>Final Step</h1>
                        <p>Download Instructions:</p>
                        <ul>
                            <li>Title:</li>
                            <li>Text:</li>
                            <li>Button:</li>
                        </ul>
                        <p>Posting Instructions:</p>
                        <ul>
                            <li>Title:</li>
                            <li>Text:</li>
                            <li>Post social media options: (facebook, twitter, instagram, linkedin)</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->


<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.2.0/fabric.min.js" integrity="sha512-Pdu3zoEng2TLwwjnDne3O7zaeWZfEJHU5B63T+zLtME/wg1zfeSH/1wrtOzOC37u2Y1Ki8pTCdKsnbueOlFlMg==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</body>
</html>
