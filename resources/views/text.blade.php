@extends('layouts.app')

@section('content')
    <div x-data="download()">
        <h1>ADD YOUR TEXT:</h1>
        <div class="row" style="max-width: 600px;">
            <div class="col-sm">
                <canvas width="600" height="400" style="border: solid 1px black;" id="c"></canvas>
            </div>
        </div>

        <div class="row" style="max-width: 600px; margin-bottom: 25px;">
            <div class="col-sm">
{{--                <a x-on:click="download()">Download Image</a>--}}
                <form x-ref="form" x-on:submit.prevent="download()" id="download-form" method="POST" action="/download">
                    @csrf
                    <input x-ref="strDataURI" type="hidden" name="image" value="">
                    <button type="submit" class="btn btn-primary btn-lg">Download</button>
                </form>
            </div>
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



        // Add Text
        var text = new fabric.Textbox("I'm baby normcore wayfarers poutine typewriter kickstarter", {
            left: 120,
            top: 90,
            fontSize: 20,
            width: 250
        });
        canvas.add(text);
    </script>

    <script>
        function download() {
            return {
                download() {

                    var strDataURI = canvas.toDataURL();
                    this.$refs.strDataURI.value = strDataURI;
                    this.$refs.form.submit();


                    // $.post("/api/image/create",{
                    //     image: strDataURI
                    // }, function(data){
                    //     //
                    // });
                }
            }
        }
    </script>
@endsection
