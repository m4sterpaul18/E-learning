        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://kit.fontawesome.com/7d27947462.js" crossorigin="anonymous"></script>
        <!-- quiz js -->
        <script src="/e-learning/public/assets/quizlib/quizlib.1.0.1.js"></script>

        <?php
            $uri = new \CodeIgniter\HTTP\URI();
            $uri = current_url(true);

            if($uri->getSegment(3)=='quiz1'){
                echo '<script src="/e-learning/public/assets/js/chapter-1-quiz.js"></script>';
            }
            if($uri->getSegment(3)=='quiz2'){
                echo '<script src="/e-learning/public/assets/js/chapter-2-quiz.js"></script>';
            }
            if($uri->getSegment(3)=='quiz3'){
                echo '<script src="/e-learning/public/assets/js/chapter-3-quiz.js"></script>';
            }
            if($uri->getSegment(3)=='quiz4'){
                echo '<script src="/e-learning/public/assets/js/chapter-4-quiz.js"></script>';
            }
            if($uri->getSegment(3)=='quiz5'){
                echo '<script src="/e-learning/public/assets/js/chapter-5-quiz.js"></script>';
            }
            if($uri->getSegment(3)=='quiz6'){
                echo '<script src="/e-learning/public/assets/js/chapter-6-quiz.js"></script>';
            }
           
        ?>
        <!-- <script src="/e-learning/public/assets/js/chapter-7-quiz.js"></script> -->
        <!-- <script src="/e-learning/public/assets/js/chapter-8-quiz.js"></script> -->
        <!-- <script src="/e-learning/public/assets/js/chapter-9-quiz.js"></script> -->
    
    <script>

    //   loader js 
    $(window).on("load",function(){
        $('.loader-wrapper').fadeOut("slow")
     })
    

    /* Get the documentElement (<html>) to display the page in fullscreen */
    var elem = document.documentElement;

    /* View in fullscreen */
    function openFullscreen() {
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.webkitRequestFullscreen) { /* Safari */
            elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) { /* IE11 */
            elem.msRequestFullscreen();
        }
    }

    /* Close fullscreen */
    function closeFullscreen() {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.webkitExitFullscreen) { /* Safari */
            document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) { /* IE11 */
            document.msExitFullscreen();
        }
    }

    $('#switch').click(function(){
        $('body').toggleClass('darkmode')
    })

    
    </script>
</body>
</html>