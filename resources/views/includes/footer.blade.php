<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-7 footer-left">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <p class="foot">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                    piece </p>
            </div>
            <div class="col-md-5 submit">
                <form>
                    <input type="text" value="your email address" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'your email address';}">
                    <input type="submit" value="Subscribe">
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
        <p class="footer-class">Copyright &copy;{{date('Y')}} ALL RIGHTS RESERVED.</p>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            /*
            var defaults = {
                  containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
             };
            */

            $().UItoTop({easingType: 'easeOutQuart'});

        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
