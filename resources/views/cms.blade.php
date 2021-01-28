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
                        <div class="row">
                            <!-- Background Settings -->
                            <div class="col">
                                <div class="mb-3">
                                    <label for="aspectRatio" class="form-label">Aspect ratio</label>
                                    <select class="custom-select" id="aspectRatio">
                                        <option data-width="1.91" data-height="1" selected>1.91:1</option>
                                        <option data-width="1" data-height="1">1:1</option>
                                        <option data-width="4" data-height="5">4:5</option>
                                        <option data-width="9" data-height="16">9:16</option>
                                    </select>
                                </div>
                                <button type="button" class="btn btn-primary">Apply settings to all Backgrounds</button>
                            </div>

                            <!-- Background Preview -->
                            <div class="col">
                                <div id="image-canvas-container">
                                    <canvas width="400" height="209" style="border: solid 1px black;" id="image-canvas"></canvas>
                                </div>
                            </div>
                        </div>

                        <p>Upload your images below:</p>
                        <div class="d-flex flex-wrap">
                            <div class="p-3">
                                <p class="text-right">Delete Image</p>
                                <img width="200" height="auto" src="/img/background-1.jpg">
                            </div>
                            <div class="p-3">
                                <p class="text-right">Delete Image</p>
                                <img width="200" height="auto" src="/img/background-2.jpg">
                            </div>
                            <div class="p-3">
                                <p class="text-right">Delete Image</p>
                                <img width="200" height="auto" src="/img/background-3.jpg">
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
                                <img width="50" height="auto" src="/img/object-1.png">
                            </div>
                            <div class="p-3">
                                <p class="text-right">Delete Image</p>
                                <img width="50" height="auto"  src="/img/object-2.png">
                            </div>
                            <div class="p-3">
                                <p class="text-right">Delete Image</p>
                                <img width="50" height="auto"  src="/img/object-3.png">
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
                                <!-- Default Text -->
                                <div class="mb-3">
                                    <label for="defaultText" class="form-label">Default text</label>
                                    <textarea class="form-control" id="defaultText" rows="3">This is a really important message!&#13;&#10;&#13;&#10;Jack</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="fontFamily" class="form-label">Font Family</label>
                                    <select class="custom-select" id="fontFamily">
                                        <option value="1">Arial</option>
                                        <option value="2">Times New Roman</option>
                                        <option value="3">Lato</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="fontSize" class="form-label">Font Size</label>
                                    <input value="22" type="number" class="form-control" id="fontSize">
                                </div>

                                <div class="mb-3">
                                    <label for="fontColour" class="form-label">Font Colour</label>
                                    <select class="custom-select" id="fontColour">
                                        <option value="black" selected>Black</option>
                                        <option value="red">Red</option>
                                        <option value="yellow">Yellow</option>
                                    </select>
                                </div>

                                <div class="mb-5">
                                    <button type="button" class="btn btn-primary">Apply settings to all images</button>
                                </div>


                            </div>
                            <!-- Text Image Preview -->
                            <div class="col">
                                <div id="text-canvas-container">
                                    <canvas width="400" height="300" style="border: solid 1px black;" id="text-canvas"></canvas>
                                </div>
{{--                                <img width="400" height="300" src="https://placekitten.com/400/300">--}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Select your image below:</p>
                                <div class="d-flex flex-wrap">
                                    <div class="p-3">
                                        <img width="200" height="150" src="/img/background-1.jpg">
                                    </div>
                                    <div class="p-3">
                                        <img width="200" height="150" src="/img/background-2.jpg">
                                    </div>
                                    <div class="p-3">
                                        <img width="200" height="150" src="/img/background-3.jpg">
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

<!-- Text tab -->
<script>

    const defaultTextElement = document.querySelector('#defaultText');
    const fontSizeElement = document.querySelector('#fontSize');
    const fontColourElement = document.querySelector('#fontColour');


    // Init Canvas
    var canvas = new fabric.Canvas('text-canvas', {
        allowTouchScrolling: true,
        enableRetinaScaling: false,
        // selection: false,
        controlsAboveOverlay: true
    });

    // Background Image
    var center = canvas.getCenter();
    fabric.Image.fromURL('/img/background-3.jpg', function(img){
        canvas.setBackgroundColor('black');
        img.scaleToWidth(canvas.width);
        //img.scaleToHeight(canvas.height);
        canvas.setBackgroundImage(img, canvas.renderAll.bind(canvas), {
            top: center.top,
            left: center.left,
            originX: 'center',
            originY: 'center'
        });
        canvas.requestRenderAll();
    });

    var text = new fabric.Textbox(defaultTextElement.value, {
        left: 120,
        top: 90,
        fontSize: fontSizeElement.value,
        width: 250,
        fill: fontColourElement.value,
        editable: false
    });
    //
    text.setControlsVisibility({
        mt: false, // middle top disable
        mb: false, // midle bottom
        tl: false,
        tr: false,
        bl: false,
        br: false,
        // ml: false, // middle left
        // mr: false, // I think you get it
    });
    canvas.add(text);

    defaultTextElement.addEventListener('input', (event) => {
        text.set('text', event.target.value);
        canvas.renderAll();
    });

    fontSizeElement.addEventListener('input', (event) => {
        text.set('fontSize', event.target.value);
        canvas.renderAll();
    });

    fontColourElement.addEventListener('input', (event) => {
        text.set('fill', event.target.value);
        canvas.renderAll();
    });



    // IMAGE CANVAS
    const aspectRatioElement = document.querySelector('#aspectRatio');

    var imageCanvas = new fabric.Canvas('image-canvas', {
        allowTouchScrolling: true,
        enableRetinaScaling: false,
        // selection: false,
        controlsAboveOverlay: true
    });

    // Background Image
    applyBackgroundImage();

    function applyBackgroundImage() {
        var imageCenter = imageCanvas.getCenter();
        fabric.Image.fromURL('/img/background-3.jpg', function(img){
            imageCanvas.setBackgroundColor('black');
            console.log('imageCanvas.width = '+imageCanvas.width);
            console.log('imageCanvas.height = '+imageCanvas.height);
            console.log();
            if(imageCanvas.width > imageCanvas.height) {
                console.log('landscape: scaleToHeight');
                img.scaleToHeight(imageCanvas.height);
            } else {
                console.log('portrait: scaleToWidth');
                img.scaleToWidth(imageCanvas.width);
            }
            imageCanvas.setBackgroundImage(img, imageCanvas.renderAll.bind(imageCanvas), {
                top: imageCenter.top,
                left: imageCenter.left,
                originX: 'center',
                originY: 'center'
            });
            imageCanvas.requestRenderAll();
        });
    }

    aspectRatioElement.addEventListener('input', (event) => {
        var option = event.target.options[event.target.selectedIndex];
        var height = option.getAttribute('data-height') / option.getAttribute('data-width');

        // var imageCanvasWidth = document.getElementById("image-canvas-container").offsetWidth;
        imageCanvas.setWidth(400);
        imageCanvas.setHeight(400* height);
        applyBackgroundImage();

    });
</script>
</body>
</html>
