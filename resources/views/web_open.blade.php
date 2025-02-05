<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Selfie Anywhere</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<meta name='user_id' data-id="{{$user_id}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='{{ url("webcam/style/selfie-anywhere.css")}}'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.2"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/body-pix@2.0"></script>
    <script src='{{ url("webcam/js/html2canvas.min.js")}} '></script>
    <script type="text/javascript" src="https://unpkg.com/webcam-easy/dist/webcam-easy.min.js"></script>
    <script src='{{ url("webcam/js/webcam-ui-lib.js")}}'></script>
</head>
<body>
    <main id="selfie-anywhere-app">
        <div class="form-control webcam-start" id="webcam-control">
                <label class="form-switch">
                <input type="checkbox" id="webcam-switch">
                <i></i> 
                <span id="webcam-caption">Click to Start Camera</span>
                </label>                        
        </div>
        <div id="errorMsg" class="col-12 alert-danger d-none">
            Fail to start camera <br/>
            Please allow permision to access camera <br/>
            If you are browsing through social media built in browsers, <br/>
            you would need to open the page in Sarafi (iPhone)/ Chrome (Android)
        </div>
        <div class="row m-0 selfie-container">
            <div class="col-8 offset-2 col-sm-5 offset-sm-4 col-lg-3 offset-lg-5">
                <img src="{{ url('webcam/images/selfie-outline.png')}}" alt="selfie">
            </div>
        </div>
        <div class="md-modal md-effect-12">
            <div id="app-panel" class="app-panel md-content">            
                <div id="webcam-container" class="webcam-container d-none">
                    <video id="webcam" autoplay playsinline width="640" height="480"></video>
                    <div id="selfie-container">
                        <div id="background-container">
                            <div class="spinner-border d-none" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        <canvas id="canvasPerson" width="640" height="480"></canvas>
                    </div>
                    <div class="flash"></div>
                </div>
                <img id="arrowLeft" src="{{ url('webcam/images/arrow-left.png')}}">
                <img id="arrowRight" src="{{ url('webcam/images/arrow-right.png')}}">
                <div id="cameraControls" class="cameraControls">
                    <a href="#" id="exit-app" title="Exit App" class="d-none"><i class="material-icons">exit_to_app</i></a>
                    <a href="#" id="take-photo" title="Take Photo"><i class="material-icons">camera_alt</i></a>
                    <a href="#" id="download-photo" download="selfie.png" target="_blank" title="Save Photo" class="d-none"><i class="material-icons">file_download</i></a>  
                    <a href="#" id="resume-camera"  title="Resume Camera" class="d-none"><i class="material-icons">camera_front</i></a>
                </div>
            </div>        
        </div>
        <div class="md-overlay"></div>
    </main>
    <script src='{{ url("webcam/js/selfie-anywhere.js") }}'></script>
</body>
</html>