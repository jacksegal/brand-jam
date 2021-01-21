@extends('layouts.app')

@section('content')
    <div x-data="objects()">
        <h1>ADD YOUR OBJECTS:</h1>
        <div class="row" style="max-width: 600px; margin-bottom: 25px;">
            <div class="col-sm">
                <a x-on:click="addObject('http://brand-jam.test/img/object-1.png')">
                    <img class="img-fluid" src="/img/object-1.png">
                </a>
            </div>
            <div class="col-sm">
                <a x-on:click="addObject('http://brand-jam.test/img/object-2.png')">
                    <img class="img-fluid" src="/img/object-2.png">
                </a>
            </div>
            <div class="col-sm">
                <a x-on:click="addObject('http://brand-jam.test/img/object-3.png')">
                    <img class="img-fluid" src="/img/object-3.png">
                </a>
            </div>
        </div>
    </div>

    <div class="row" style="max-width: 600px;">
        <div class="col-sm">
            {{--            <img class="img-fluid" src="/img/option-1.jpg">--}}
            <canvas width="600" height="400" style="border: solid 1px black;" id="c"></canvas>
        </div>
    </div>

    <div class="row" style="max-width: 600px; margin-bottom: 25px;">
        <div class="col-sm">
            <a href="/text">Add Text</a>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Init Canvas
        var canvas = new fabric.Canvas('c');

        // Background Image
        fabric.Image.fromURL('http://brand-jam.test/img/background-1.jpg', function(img){
            img.scaleToWidth(canvas.width);
            img.scaleToHeight(canvas.height);
            canvas.setBackgroundImage(img);
            canvas.requestRenderAll();
        });
    </script>

    <script>
        function objects() {
            return {
                addObject(link) {
                    fabric.Image.fromURL(link, function(oImg) {
                        oImg.scaleToWidth(200);
                        oImg.scaleToHeight(200);
                        canvas.add(oImg);
                    });
                }
            }
        }
    </script>
@endsection
