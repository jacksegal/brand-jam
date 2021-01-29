@extends('layouts.app')

@section('content')
    <style>
        .heading{}
        .main-text{}
        .options {
            margin-bottom: 25px;
            display: flex;
            flex-wrap: wrap;
        }
        .option {
            flex: 0 0 30.8%;
            margin: 10px 1.8% 1.8%;
        }
        .options .option:nth-child(1), .options .option:nth-child(4) {
            margin-left: 0;
        }

        .options .option:nth-child(3), .options .option:nth-child(6) {
            margin-right: 0;
        }
    </style>


    <div x-data="brandJam()" x-init="init()" style="margin-bottom: 100px;">

        {{-- Background --}}
        <div x-show="step === 'background'">
            <h1 class="heading">CHOOSE A BACKGROUND IMAGE</h1>
            <p class="main-text" >I'm baby hashtag viral distillery enamel pin cold-pressed yuccie lomo cronut edison bulb vinyl leggings post-ironic literally gentrify shaman.</p>

            <div class="options">
                <div class="option">
                    <a x-on:click="setBackground('/img/background-1.jpg')">
                        <img class="img-fluid" src="/img/background-1.jpg">
                    </a>
                </div>
                <div class="option">
                    <a x-on:click="setBackground('/img/background-2.jpg')">
                        <img class="img-fluid" src="/img/background-2.jpg">
                    </a>
                </div>
                <div class="option">
                    <a x-on:click="setBackground('/img/background-3.jpg')">
                        <img class="img-fluid" src="/img/background-3.jpg">
                    </a>
                </div>
            </div>
        </div>

        {{-- Objects --}}
        <div x-show="step === 'objects'" x-cloak>
            <h1 class="heading">ADD YOUR OBJECTS</h1>
            <p class="main-text">Chambray 90's coloring book pok pok helvetica chicharrones mlkshk skateboard offal roof party tumblr bespoke viral direct trade.</p>

            <div class="row" style="max-width: 600px; margin-bottom: 25px;">
                <div class="col-sm">
                    <a x-on:click="addObject('/img/object-1.png')">
                        <img class="img-fluid" src="/img/object-1.png">
                    </a>
                </div>
                <div class="col-sm">
                    <a x-on:click="addObject('/img/object-2.png')">
                        <img class="img-fluid" src="/img/object-2.png">
                    </a>
                </div>
                <div class="col-sm">
                    <a x-on:click="addObject('/img/object-3.png')">
                        <img class="img-fluid" src="/img/object-3.png">
                    </a>
                </div>
            </div>
        </div>

        {{-- Text --}}
        <div x-show="step === 'text'" x-cloak>
            <h1 class="heading">ADD YOUR TEXT</h1>
            <p class="main-text">Portland keytar mustache, leggings asymmetrical normcore gluten-free synth single-origin coffee tofu tacos jianbing.</p>
            <textarea class="mb-2 form-control" id="defaultText" rows="3">This is a really important message!</textarea>
        </div>

        {{-- Download --}}
        <div x-show="step === 'download'" x-cloak>
            <h1 class="heading">DOWNLOAD YOUR IMAGE</h1>
            <p class="main-text">Shabby chic echo park shoreditch wolf iceland glossier jean shorts offal plaid pork belly XOXO polaroid typewriter flannel quinoa.</p>
        </div>

        {{-- Post --}}
        <div x-show="step === 'post'" x-cloak>
            <h1 class="heading">POST YOUR IMAGE ON SOCIAL MEDIA</h1>
            <p class="main-text">Pitchfork unicorn PBR&B marfa mustache YOLO. Shabby chic vexillologist chambray, woke mlkshk fingerstache roof party pinterest.</p>
        </div>


        {{-- Share --}}
        <div x-show="step === 'share'" x-cloak>
            <h1 class="heading">SHARE THIS TOOL:</h1>
            <ul>
                <li>Facebook</li>
                <li>Twitter</li>
                <li>WhatsApp</li>
                <li>Email</li>
            </ul>
        </div>

        {{-- Canvas --}}
        <div x-show="step !== 'post' && step !== 'share' && step !== 'download'">
            <div class="row" style="margin-bottom: 25px;">
                <div class="col-sm">
                    <div id="brand-canvas-container">
                        <canvas width="500" height="500" style="border: solid 1px black;" id="c"></canvas>
                    </div>
                </div>
            </div>

            <form x-ref="form" x-on:submit.prevent="download()" id="download-form" method="POST" action="/download">
                @csrf
                <input x-ref="strDataURI" type="hidden" name="image" value="">
            </form>
        </div>

        {{-- Img --}}
        <div x-show="step === 'post' || step === 'download' ">
            <div class="row" style="margin-bottom: 25px;">
                <div class="col-sm">
                    <img x-ref="finishedImg" src="" class="img-fluid">
                </div>
            </div>
        </div>

        {{-- Background --}}
        <div x-show="step === 'background'">
            <button class="btn btn-primary btn-lg btn-block" x-on:click="moveToObjects()">Add Objects</button>
        </div>

        {{-- Objects --}}
        <div x-show="step === 'objects'" x-cloak>
            <button class="btn btn-primary btn-lg btn-block" x-on:click="moveToText()">Add Text</button>
        </div>

        {{-- Text --}}
        <div x-show="step === 'text'" x-cloak>
            <button class="btn btn-primary btn-lg btn-block" x-on:click="moveToDownload()">Generate Image</button>
        </div>

        {{-- Download --}}
        <div x-show="step === 'download'" x-cloak>
            <button class="btn btn-primary btn-lg btn-block" x-on:click="moveToPost()">Download Image</button>
        </div>

        {{-- Post --}}
        <div x-show="step === 'post'" x-cloak>
            <button class="btn btn-primary btn-lg btn-block" x-on:click="moveToShare()">Post Image on Twitter</button>
            <button class="btn btn-primary btn-lg btn-block" x-on:click="moveToShare()">Post Image on Facebook</button>
            <button class="btn btn-primary btn-lg btn-block" x-on:click="moveToShare()">Post Image on Instagram</button>
        </div>



    </div>

@endsection

@section('scripts')
    <script>
        const defaultTextElement = document.querySelector('#defaultText');

        defaultTextElement.addEventListener('input', (event) => {
            text.set('text', event.target.value);
            canvas.renderAll();
        });

        // Init Canvas
        var canvas = new fabric.Canvas('c', {
            allowTouchScrolling: true,
            enableRetinaScaling: false,
            // selection: false,
            controlsAboveOverlay: true
        });

        // Background Image
        var center = canvas.getCenter();
        fabric.Image.fromURL('/img/background-1.jpg', function(img){
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
    </script>

    <script>
        function brandJam() {
            return {
                init() {
                    self = this;
                    window.addEventListener("resize", () => {
                        self.setCanvasDimensions();
                    });
                    window.onpopstate = function(event) {
                        if (event.state) {
                            self.step = event.state.page;
                        } else {
                            self.step = 'background';
                        }
                    };
                    this.setCanvasDimensions();

                },
                step: 'background',
                textAdded: false,
                setBackground(link) {
                    fabric.Image.fromURL(link, function(img){
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
                },
                addObject(link) {
                    fabric.Image.fromURL(link, function(oImg) {
                        oImg.scaleToWidth(200);
                        oImg.scaleToHeight(200);
                        canvas.add(oImg);
                    });
                },
                moveToObjects() {
                    this.step = 'objects';
                    this.pushState('objects');
                },
                moveToText() {
                    this.step = 'text';
                    this.pushState('text');
                    if(!this.textAdded) {
                        // Add Text
                         text = new fabric.Textbox(defaultTextElement.value, {
                            left: 120,
                            top: 200,
                            fontSize: 20,
                            width: 250,
                            editable: false,
                        });

                        text.setControlsVisibility({
                            mt: false, // middle top disable
                            mb: false, // midle bottom
                            // tl: false,
                            // tr: false,
                            // bl: false,
                            // br: false,

                        });
                        canvas.add(text);
                        this.textAdded = true;
                    }

                },
                moveToDownload() {
                    var strDataURI = canvas.toDataURL();
                    var self = this;
                    $.post("/api/image/create",{
                        image: strDataURI
                    }, function(data){
                        console.log(data);
                        self.step = 'download';
                        self.$refs.finishedImg.src = data;
                        self.pushState('download');
                    });

                },
                moveToPost() {
                    this.step = 'post';
                    this.pushState('post');

                    // Submit form for Download
                    var strDataURI = canvas.toDataURL();
                    this.$refs.strDataURI.value = strDataURI;
                    this.$refs.form.submit();
                },
                moveToShare() {
                    this.step = 'share';
                    this.pushState('share');
                },
                pushState(name) {
                    var state = {
                        page: name
                    };
                    var url = '#'+name;
                    history.pushState(state, '', url);
                },
                setCanvasDimensions() {
                    var canvasWidth = document.getElementById("brand-canvas-container").offsetWidth;
                    canvas.setDimensions(
                        { width: canvasWidth + "px", height: canvasWidth + "px" },
                        { cssOnly: true }
                    );
                }
            }
        }

    </script>
@endsection
