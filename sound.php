<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Handler</title>
    <script src="./js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="./css/style1.css">
</head>
<body>
    <div style="padding-top: 20px; padding-bottom: 120px;">
        <h2 style="padding-bottom: 15px;">Letakan Kursor Ke Masing-Masing Gambar</h2>
        <div id="div1">
            <audio src="./audio/suara_bebek.mp3" id="audio1"></audio>
            Hewan Bebek
        </div>
        <div id="div2">
            <audio src="./audio/suara_kucing.mp3" id="audio2"></audio>
            Hewan Kucing
        </div>
        <div id="div3">
            <audio src="./audio/suara_ayam.mp3" id="audio3"></audio>
            Hewan Ayam
        </div>
    </div>
    
    <script>
        //tugas hari ini
        //ketika mousenya diatas gambar atau kotak maka hewannya bisa bersuara
        $(document).ready(function(){
            $("#div1").mouseover(function(){
                let id = $(this).find("#audio1").attr("id");
                let audio = document.getElementById(id);
                audio.load();
                audio.play();

                $(this).css({
                    background: "url(https://pbs.twimg.com/profile_images/1541819303468879872/9Iwc9n8O_400x400.jpg)",
                    "background-size": "cover"
                });
            });

            $("div").mouseout(function(){
                let id = $(this).find("audio").attr("id");
                let audio = document.getElementById(id);
                audio.pause();

                $(this).css({
                    background: "snow"
                });
            });

            $("#div2").mouseover(function(){
                let id = $(this).find("#audio2").attr("id");
                let audio = document.getElementById(id);
                audio.load();
                audio.play();

                $(this).css({
                    background: "url(https://cdn.idntimes.com/content-images/community/2019/11/kucing-selfie-ae25b79e466b23dd3b288be4fd4a948b.jpg)",
                    "background-size": "cover"
                });
            });

            $("#div3").mouseover(function(){
                let id = $(this).find("#audio3").attr("id");
                let audio = document.getElementById(id);
                audio.load();
                audio.play();

                $(this).css({
                    background: "url(https://wl-sisi-terang.cf.tsp.li/resize/728x/jpg/39a/da8/afda895f1288e48bcbc1fe0449.jpg)",
                    "background-size": "cover"
                });
            });
        });
    </script>
</body>
</html>