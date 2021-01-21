@extends('layouts.app')

@section('content')
    <div x-data="background()">
        <h1>CHOOSE A BACKGROUND IMAGE:</h1>
        <div class="row" style="max-width: 600px; margin-bottom: 25px;">
            <div class="col-sm">
                <a x-on:click="setBackground('http://brand-jam.test/img/background-1.jpg')">
                    <img class="img-fluid" src="/img/background-1.jpg">
                </a>
            </div>
            <div class="col-sm">
                <a x-on:click="setBackground('http://brand-jam.test/img/background-2.jpg')">
                    <img class="img-fluid" src="/img/background-2.jpg">
                </a>
            </div>
            <div class="col-sm">
                <a x-on:click="setBackground('http://brand-jam.test/img/background-3.jpg')">
                 <img class="img-fluid" src="/img/background-3.jpg">
                </a>
            </div>
        </div>
    </div>

    <div class="row" style="max-width: 600px;">
        <div class="col-sm">
            <canvas width="600" height="400" style="border: solid 1px black;" id="c"></canvas>
        </div>
    </div>

    <div class="row" style="max-width: 600px; margin-bottom: 25px;">
        <div class="col-sm">
            <a href="/objects">Add Objects</a>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        // Init Canvas
        var canvas = new fabric.Canvas('c');
    </script>

    <script>
        function background() {
            return {
                setBackground(link) {
                    fabric.Image.fromURL(link, function(img){
                        img.scaleToWidth(canvas.width);
                        img.scaleToHeight(canvas.height);
                        canvas.setBackgroundImage(img);
                        canvas.requestRenderAll();
                    });
                }
            }
        }
    </script>
@endsection
